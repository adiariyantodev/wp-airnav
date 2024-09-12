<?php

namespace Breakdance\DynamicData;

/**
 * @param mixed $atts
 * @return string | array
 * @throws \Exception
 */
function breakdanceShortcodeHandler($atts)
{
    if (!is_array($atts) || !array_key_exists('field', $atts)) {
        return "";
    }

    $field = DynamicDataController::getInstance()->getField((string) $atts['field']);

    if ($field) {
        ob_start();

        $fieldData = $field->handler($atts);

        /** @var string | array $output */
        $output = $fieldData->getValue($atts);

        $unexpectedOutput = ob_get_clean();

        if ($unexpectedOutput) {
            throw new \Exception('Unexpected Dynamic Data Output:' . $unexpectedOutput);
        }

        return $output;
    }

    return "";
}

/**
 * Parse a [breakdance_dynamic] shortcode and return its value
 * @param string $shortcode
 * @return string | array
 * @throws \Exception
 */
function breakdanceDoShortcode($shortcode = '')
{
    // Shortcodes should end with ' /]', otherwise shortcode_parse_atts doesn't work.
    $shortcode = preg_replace('/\/?]/', ' /]', $shortcode);
    $atts = shortcode_parse_atts($shortcode);
    return breakdanceShortcodeHandler($atts);
}
