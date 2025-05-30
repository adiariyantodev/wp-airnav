<?php
/**
* This file is part of the League.csv library
*
* @license http://opensource.org/licenses/MIT
* @link https://github.com/thephpleague/csv/
* @version 8.2.3
* @package League.csv
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace League\Csv\Config;

use DomDocument;
use InvalidArgumentException;
use Iterator;
use League\Csv\AbstractCsv;
use League\Csv\Modifier\MapIterator;
use SplFileObject;

/**
 *  A trait to output CSV
 *
 * @package League.csv
 * @since  6.3.0
 *
 */
trait Output
{
    /**
     * Charset Encoding for the CSV
     *
     * @var string
     */
    protected $input_encoding = 'UTF-8';

    /**
     * The Input file BOM character
     * @var string
     */
    protected $input_bom;

    /**
     * The Output file BOM character
     * @var string
     */
    protected $output_bom = '';

    /**
     * Sets the CSV encoding charset
     *
     * @param string $str
     *
     * @return static
     */
    public function setInputEncoding($str)
    {
        $str = str_replace('_', '-', $str);
        $str = htmlspecialchars($str);
        if (empty($str)) {
            throw new InvalidArgumentException('you should use a valid charset');
        }
        $this->input_encoding = strtoupper($str);

        return $this;
    }

    /**
     * Sets the CSV encoding charset
     *
     * DEPRECATION WARNING! This method will be removed in the next major point release
     *
     * @deprecated deprecated since version 8.1
     *
     * @param string $str
     *
     * @return static
     */
    public function setEncodingFrom($str)
    {
        return $this->setInputEncoding($str);
    }

    /**
     * Gets the source CSV encoding charset
     *
     * @return string
     */
    public function getInputEncoding()
    {
        return $this->input_encoding;
    }

    /**
     * Gets the source CSV encoding charset
     *
     * DEPRECATION WARNING! This method will be removed in the next major point release
     *
     * @deprecated deprecated since version 8.1
     *
     * @return string
     */
    public function getEncodingFrom()
    {
        return $this->getInputEncoding();
    }

    /**
     * Sets the BOM sequence to prepend the CSV on output
     *
     * @param string $str The BOM sequence
     *
     * @return static
     */
    public function setOutputBOM($str)
    {
        if (empty($str)) {
            $this->output_bom = '';

            return $this;
        }

        $this->output_bom = (string) $str;

        return $this;
    }

    /**
     * Returns the BOM sequence in use on Output methods
     *
     * @return string
     */
    public function getOutputBOM()
    {
        return $this->output_bom;
    }

    /**
     * Returns the BOM sequence of the given CSV
     *
     * @return string
     */
    public function getInputBOM()
    {
        if (null === $this->input_bom) {
            $bom = [
                AbstractCsv::BOM_UTF32_BE, AbstractCsv::BOM_UTF32_LE,
                AbstractCsv::BOM_UTF16_BE, AbstractCsv::BOM_UTF16_LE, AbstractCsv::BOM_UTF8,
            ];
            $csv = $this->getIterator();
            $csv->setFlags(SplFileObject::READ_CSV);
            $csv->rewind();
            $line = $csv->fgets();
            $res  = array_filter($bom, function ($sequence) use ($line) {
                return strpos($line, $sequence) === 0;
            });

            $this->input_bom = (string) array_shift($res);
        }

        return $this->input_bom;
    }

    /**
     * @inheritdoc
     */
    abstract public function getIterator();

    /**
     * Outputs all data on the CSV file
     *
     * @param string $filename CSV downloaded name if present adds extra headers
     *
     * @return int Returns the number of characters read from the handle
     *             and passed through to the output.
     */
    public function output($filename = null)
    {
        if (null !== $filename) {
            $filename = htmlspecialchars($filename);
            header('Content-Type: text/csv');
            header('Content-Transfer-Encoding: binary');
            header("Content-Disposition: attachment; filename=\"$filename\"");
        }

        return $this->fpassthru();
    }

    /**
     * Outputs all data from the CSV
     *
     * @return int Returns the number of characters read from the handle
     *             and passed through to the output.
     */
    protected function fpassthru()
    {
        $bom = '';
        $input_bom = $this->getInputBOM();
        if ($this->output_bom && $input_bom != $this->output_bom) {
            $bom = $this->output_bom;
        }
        $csv = $this->getIterator();
        $csv->setFlags(SplFileObject::READ_CSV);
        $csv->rewind();
        if (!empty($bom)) {
            $csv->fseek(mb_strlen($input_bom));
        }
        esc_html_e($bom);
        $res = $csv->fpassthru();

        return $res + strlen($bom);
    }

    /**
     * Retrieves the CSV content
     *
     * @return string
     */
    public function __toString()
    {
        ob_start();
        $this->fpassthru();

        return ob_get_clean();
    }

    /**
     * @inheritdoc
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return iterator_to_array($this->convertToUtf8($this->getQueryIterator()), false);
    }

//    /**
//     * Returns the CSV Iterator
//     *
//     * @return Iterator
//     */
//    abstract protected function getQueryIterator();

    /**
     * Convert Csv file into UTF-8
     *
     * @param Iterator $iterator
     *
     * @return Iterator
     */
    protected function convertToUtf8(Iterator $iterator)
    {
        if (stripos($this->input_encoding, 'UTF-8') !== false) {
            return $iterator;
        }

        $convert_cell = function ($value) {
            return mb_convert_encoding($value, 'UTF-8', $this->input_encoding);
        };

        $convert_row = function (array $row) use ($convert_cell) {
            return array_map($convert_cell, $row);
        };

        return new MapIterator($iterator, $convert_row);
    }

    /**
     * Returns a HTML table representation of the CSV Table
     *
     * @param string $class_attr optional classname
     *
     * @return string
     */
    public function toHTML($class_attr = 'table-csv-data')
    {
        $doc = $this->toXML('table', 'tr', 'td');
        $doc->documentElement->setAttribute('class', $class_attr);

        return $doc->saveHTML($doc->documentElement);
    }

    /**
     * Transforms a CSV into a XML
     *
     * @param string $root_name XML root node name
     * @param string $row_name  XML row node name
     * @param string $cell_name XML cell node name
     *
     * @return DomDocument
     */
    public function toXML($root_name = 'csv', $row_name = 'row', $cell_name = 'cell')
    {
        $doc = new DomDocument('1.0', 'UTF-8');
        $root = $doc->createElement($root_name);
        foreach ($this->convertToUtf8($this->getQueryIterator()) as $row) {
            $rowElement = $doc->createElement($row_name);
            array_walk($row, function ($value) use (&$rowElement, $doc, $cell_name) {
                $content = $doc->createTextNode($value);
                $cell = $doc->createElement($cell_name);
                $cell->appendChild($content);
                $rowElement->appendChild($cell);
            });
            $root->appendChild($rowElement);
        }
        $doc->appendChild($root);

        return $doc;
    }
}
