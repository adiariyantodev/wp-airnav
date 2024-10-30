<?php

namespace WPSocialReviewsPro\App\Services;

use WPSocialReviews\App\Models\Review;
use League\Csv\Writer;
use League\Csv\Reader;
use WPSocialReviews\App\Services\PermissionManager;

class ImportExportHandler
{

    public function includeAutoloadFile()
    {
        require_once WPSOCIALREVIEWS_PRO_DIR.'app/Services/Libs/CSV/autoload.php';
    }

    public function exportReviews()
    {
        $permission = PermissionManager::currentUserPermissions();
        if(!in_array('wpsn_full_access', $permission)){
           return false;
        }

        $this->includeAutoloadFile();
        $data = Review::select('platform_name', 'review_title', 'reviewer_name', 'reviewer_url', 'reviewer_img', 'reviewer_text', 'review_time', 'rating', 'created_at', 'updated_at')
                    ->where('platform_name', 'custom')
                    ->get()->toArray();

        foreach ($data as $datumKey => $datum) {
            foreach ($datum as $key => $value) {
                $data[$datumKey][$key] = Helper::sanitizeForCSV($value);
            }
        }

        $writer = Writer::createFromFileObject(new \SplTempFileObject());
        $writer->setDelimiter(",");
        $writer->setNewline("\r\n");
        $header = ['platform_name', 'review_title', 'reviewer_name', 'reviewer_url', 'reviewer_img', 'reviewer_text', 'review_time', 'rating', 'created_at', 'updated_at'];
        $fileName = 'wpsn-export-reviews-'.date('Y-m-d-H-i-s').'.csv';
        $writer->insertOne($header);
        $writer->insertAll($data);
        $writer->output($fileName);
        die();
    }

    public function importReviews()
    {
        $permission = PermissionManager::currentUserPermissions();
        if(!in_array('wpsn_full_access', $permission)){
            return false;
        }

        $this->includeAutoloadFile();
        $mimes = array(
            'text/csv',
            'application/csv',
        );

        if(!in_array(sanitize_text_field($_FILES['file']['type']), $mimes)){
            wp_send_json_error([
                'message' => __('Please upload a valid CSV file.', 'wp-social-reviews')
            ], 423);
        }
        $tmpName = sanitize_text_field($_FILES['file']['tmp_name']);
        $values = file_get_contents($tmpName);

        try {
            $reader = Reader::createFromString($values)->fetchAll();
        } catch (\Exception $exception) {
            wp_send_json_error(array(
                'errors' => $exception->getMessage(),
                'message' => __('Something is wrong when parsing the csv.', 'wp-social-reviews')
            ), 423);
        }

        $csvHeader = array_shift($reader);
        $csvHeader = array_map('esc_attr', $csvHeader);
        array_splice($csvHeader, 1, 0, "platform_name");
        $reader = array_map(function($el) {
            array_splice($el, 1, 0, "custom");
            return $el;
        }, $reader);

        $datas = [];
        $itemTemp = [];
        $headerCount = count($csvHeader);

        $tableHeaders = ['platform_name', 'review_title', 'reviewer_name', 'reviewer_url', 'reviewer_img', 'reviewer_text', 'review_time', 'rating', 'created_at', 'updated_at'];
        foreach ($csvHeader as $tableColumn) {
            if(!in_array($tableColumn, $tableHeaders)) {
                wp_send_json_error([
                    'message' => __('Unknown column ' . $tableColumn . '!. Maybe illegal characters or spaced or invalid characters in this column name!!',  'wp-social-reviews')
                ], 423);
            }
        }

        foreach ($reader as $index => $item) {
            if ($headerCount == count($item)) {
                $itemTemp = array_combine($csvHeader, $item);
            } else {
                // The item can have less/more entry than the header has.
                // We have to ensure that the header and values match.
                $itemTemp = array_combine(
                    $csvHeader,
                    // We'll get the appropriate values by merging Array1 & Array2
                    array_merge(
                        // Array1 = Only the entries that the header has.
                        array_intersect_key($item, array_fill_keys(array_values($csvHeader), null)),
                        // Array2 = The remaining header entries will be blank.
                        array_fill_keys(array_diff(array_values($csvHeader), array_keys($item)), null)
                    )
                );
            }

            $itemTemp['review_time'] = date('Y-m-d H:i:s', strtotime($itemTemp['review_time']));
            $itemTemp['created_at'] = date('Y-m-d H:i:s');
            $itemTemp['updated_at'] = date('Y-m-d H:i:s');
            $datas[] = $itemTemp;
        }

        foreach (array_chunk($datas, 3000) as $chunk) {
            $this->batchInsert($chunk);
        }
    }

    public function batchInsert($rows)
    {
        global $wpdb;

        // Extract column list from first row of data
        $columns = array_keys($rows[0]);

        $table  = $wpdb->prefix.'wpsr_reviews';

        asort($columns);
        $columnList = '`' . implode('`, `', $columns) . '`';
        // Start building SQL, initialise data and placeholder arrays
        $sql = "INSERT INTO `$table` ($columnList) VALUES\n";
        $placeholders = array();
        $data = array();

        // Build placeholders for each row, and add values to data array
        foreach ($rows as $row) {
            ksort($row);
            $rowPlaceholders = array();
            foreach ($row as $key => $value) {
                $data[] = json_decode(json_encode($value, JSON_UNESCAPED_UNICODE), true);

                if($key === 'source_id') {
                    $rowPlaceholders[] = '%s';
                } else {
                    $rowPlaceholders[] = is_numeric($value) ? '%d' : '%s';
                }
            }
            $placeholders[] = '(' . implode(', ', $rowPlaceholders) . ')';
        }

        // Stitch all rows together
        $sql .= implode(",\n", $placeholders);
        // Run the query.  Returns number of affected rows.

        $res = $wpdb->query($wpdb->prepare($sql, $data));
        if(!$res) {
            wp_send_json_error([
                'message' => __('Data is not uploaded!!',  'wp-social-reviews')
            ], 423);
        }

        $businessInfo = Review::getInternalBusinessInfo('custom');
        update_option('wpsr_reviews_custom_business_info', $businessInfo);

        wp_send_json_success([
            'message' => __('Successfully uploaded data.',  'wp-social-reviews')
        ], 200);
    }
}