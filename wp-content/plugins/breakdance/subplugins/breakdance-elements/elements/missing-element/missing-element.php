<?php

namespace EssentialElements;

use function Breakdance\Elements\controlSection;
use function Breakdance\Elements\responsiveControl;

class MissingElement extends \Breakdance\Elements\Element
{

    static function tag()
    {
        return 'div';
    }

    static function name()
    {
        return 'Missing Element';
    }

    static function slug()
    {
        return get_class();
    }

    static function category()
    {
        return 'basic';
    }

    static function defaultCss()
    {
        return '';
    }

    static function template()
    {
        return 'This element is missing. Please open the page in Breakdance and check the browser console for details. TODO: add troubleshooting documentation page link.';
    }

    static function cssTemplate()
    {
        return '%%SELECTOR%% {
            padding: 20px;
            background-color: #ffeeee;
            color: #880000;
            font-size: 20px;
        }';
    }

    static function nestingRule()
    {
        return ['type' => 'final'];
    }

    static function addPanelRules()
    {
        return ['alwaysHide' => true];
    }   

}
