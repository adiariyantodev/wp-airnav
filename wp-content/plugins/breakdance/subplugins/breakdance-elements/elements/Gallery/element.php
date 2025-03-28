<?php

namespace EssentialElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "EssentialElements\\Gallery",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class Gallery extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'ImageAndVideIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Gallery';
    }

    static function className()
    {
        return 'bde-gallery';
    }

    static function category()
    {
        return 'blocks';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return ['content' => ['content' => ['images' => ['0' => ['type' => 'image', 'caption' => 'Bridge over a green waterfall', 'image' => ['id' => 0, 'title' => 'bridge-over-a-green-waterfall', 'filename' => 'bridge-over-a-green-waterfall.jpeg', 'url' => 'https://source.unsplash.com/cssvEZacHvQ', 'link' => 'https://unsplash.com/photos/cssvEZacHvQ', 'alt' => '', 'author' => '1', 'description' => '', 'caption' => 'Bridge over a green waterfall', 'name' => 'bridge-over-a-green-waterfall', 'status' => 'inherit', 'uploadedTo' => 0, 'date' => '2021-09-16T00:00:00.000Z', 'modified' => '2021-09-16T00:00:00.000Z', 'menuOrder' => 0, 'mime' => 'image/jpeg', 'type' => 'image', 'subtype' => 'jpeg', 'icon' => '', 'dateFormatted' => 'September 16, 2021', 'nonces' => ['update' => 'abc', 'delete' => 'def', 'edit' => 'ghi'], 'editLink' => 'https://unsplash.com/photos/cssvEZacHvQ', 'meta' => false, 'authorName' => 'admin', 'authorLink' => 'https://unsplash.com/photos/cssvEZacHvQ', 'filesizeInBytes' => 0, 'filesizeHumanReadable' => '0 KB', 'context' => '', 'height' => 1620, 'width' => 1080, 'orientation' => 'portrait', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => 'https://source.unsplash.com/cssvEZacHvQ/150x150', 'orientation' => 'landscape'], 'medium' => ['height' => 300, 'width' => 240, 'url' => 'https://source.unsplash.com/cssvEZacHvQ/300', 'orientation' => 'portrait'], 'large' => ['height' => 1024, 'width' => 818, 'url' => 'https://source.unsplash.com/cssvEZacHvQ/1024', 'orientation' => 'portrait'], 'full' => ['height' => 1620, 'width' => 1080, 'url' => 'https://source.unsplash.com/cssvEZacHvQ', 'orientation' => 'portrait']], 'compat' => ['item' => '', 'meta' => '']]], '1' => ['type' => 'image', 'caption' => 'Whangarei Falls footbridge', 'image' => ['id' => 1, 'title' => 'whangarei-falls-footbridge', 'filename' => 'whangarei-falls-footbridge.jpeg', 'url' => 'https://source.unsplash.com/eOpewngf68w', 'link' => 'https://unsplash.com/photos/eOpewngf68w', 'alt' => '', 'author' => '1', 'description' => '', 'caption' => 'Whangarei Falls footbridge', 'name' => 'whangarei-falls-footbridge', 'status' => 'inherit', 'uploadedTo' => 0, 'date' => '2021-09-16T00:00:00.000Z', 'modified' => '2021-09-16T00:00:00.000Z', 'menuOrder' => 0, 'mime' => 'image/jpeg', 'type' => 'image', 'subtype' => 'jpeg', 'icon' => '', 'dateFormatted' => 'September 16, 2021', 'nonces' => ['update' => 'abc', 'delete' => 'def', 'edit' => 'ghi'], 'editLink' => 'https://unsplash.com/photos/eOpewngf68w', 'meta' => false, 'authorName' => 'admin', 'authorLink' => 'https://unsplash.com/photos/eOpewngf68w', 'filesizeInBytes' => 0, 'filesizeHumanReadable' => '0 KB', 'context' => '', 'height' => 720, 'width' => 1080, 'orientation' => 'portrait', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => 'https://source.unsplash.com/eOpewngf68w/150x150', 'orientation' => 'landscape'], 'medium' => ['height' => 300, 'width' => 240, 'url' => 'https://source.unsplash.com/eOpewngf68w/300', 'orientation' => 'portrait'], 'large' => ['height' => 1024, 'width' => 818, 'url' => 'https://source.unsplash.com/eOpewngf68w/1024', 'orientation' => 'portrait'], 'full' => ['height' => 720, 'width' => 1080, 'url' => 'https://source.unsplash.com/eOpewngf68w', 'orientation' => 'portrait']], 'compat' => ['item' => '', 'meta' => '']]], '2' => ['type' => 'image', 'caption' => 'Lake Louise landscape', 'image' => ['id' => 2, 'title' => 'lake-louise-landscape', 'filename' => 'lake-louise-landscape.jpeg', 'url' => 'https://source.unsplash.com/lpjb_UMOyx8', 'link' => 'https://unsplash.com/photos/lpjb_UMOyx8', 'alt' => '', 'author' => '1', 'description' => '', 'caption' => 'Lake Louise landscape', 'name' => 'lake-louise-landscape', 'status' => 'inherit', 'uploadedTo' => 0, 'date' => '2021-09-16T00:00:00.000Z', 'modified' => '2021-09-16T00:00:00.000Z', 'menuOrder' => 0, 'mime' => 'image/jpeg', 'type' => 'image', 'subtype' => 'jpeg', 'icon' => '', 'dateFormatted' => 'September 16, 2021', 'nonces' => ['update' => 'abc', 'delete' => 'def', 'edit' => 'ghi'], 'editLink' => 'https://unsplash.com/photos/lpjb_UMOyx8', 'meta' => false, 'authorName' => 'admin', 'authorLink' => 'https://unsplash.com/photos/lpjb_UMOyx8', 'filesizeInBytes' => 0, 'filesizeHumanReadable' => '0 KB', 'context' => '', 'height' => 1620, 'width' => 1080, 'orientation' => 'portrait', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => 'https://source.unsplash.com/lpjb_UMOyx8/150x150', 'orientation' => 'landscape'], 'medium' => ['height' => 300, 'width' => 240, 'url' => 'https://source.unsplash.com/lpjb_UMOyx8/300', 'orientation' => 'portrait'], 'large' => ['height' => 1024, 'width' => 818, 'url' => 'https://source.unsplash.com/lpjb_UMOyx8/1024', 'orientation' => 'portrait'], 'full' => ['height' => 1620, 'width' => 1080, 'url' => 'https://source.unsplash.com/lpjb_UMOyx8', 'orientation' => 'portrait']], 'compat' => ['item' => '', 'meta' => '']]], '3' => ['type' => 'image', 'caption' => '', 'image' => ['id' => 3, 'title' => 'image', 'filename' => 'image.jpeg', 'url' => 'https://source.unsplash.com/GwVVChhzxRI', 'link' => 'https://unsplash.com/photos/GwVVChhzxRI', 'alt' => '', 'author' => '1', 'description' => '', 'caption' => '', 'name' => 'image', 'status' => 'inherit', 'uploadedTo' => 0, 'date' => '2021-09-16T00:00:00.000Z', 'modified' => '2021-09-16T00:00:00.000Z', 'menuOrder' => 0, 'mime' => 'image/jpeg', 'type' => 'image', 'subtype' => 'jpeg', 'icon' => '', 'dateFormatted' => 'September 16, 2021', 'nonces' => ['update' => 'abc', 'delete' => 'def', 'edit' => 'ghi'], 'editLink' => 'https://unsplash.com/photos/GwVVChhzxRI', 'meta' => false, 'authorName' => 'admin', 'authorLink' => 'https://unsplash.com/photos/GwVVChhzxRI', 'filesizeInBytes' => 0, 'filesizeHumanReadable' => '0 KB', 'context' => '', 'height' => 608, 'width' => 1080, 'orientation' => 'portrait', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => 'https://source.unsplash.com/GwVVChhzxRI/150x150', 'orientation' => 'landscape'], 'medium' => ['height' => 300, 'width' => 240, 'url' => 'https://source.unsplash.com/GwVVChhzxRI/300', 'orientation' => 'portrait'], 'large' => ['height' => 1024, 'width' => 818, 'url' => 'https://source.unsplash.com/GwVVChhzxRI/1024', 'orientation' => 'portrait'], 'full' => ['height' => 608, 'width' => 1080, 'url' => 'https://source.unsplash.com/GwVVChhzxRI', 'orientation' => 'portrait']], 'compat' => ['item' => '', 'meta' => '']]], '4' => ['type' => 'image', 'caption' => '', 'image' => ['id' => 4, 'title' => 'image', 'filename' => 'image.jpeg', 'url' => 'https://source.unsplash.com/o0tHbSY-zEc', 'link' => 'https://unsplash.com/photos/o0tHbSY-zEc', 'alt' => '', 'author' => '1', 'description' => '', 'caption' => '', 'name' => 'image', 'status' => 'inherit', 'uploadedTo' => 0, 'date' => '2021-09-16T00:00:00.000Z', 'modified' => '2021-09-16T00:00:00.000Z', 'menuOrder' => 0, 'mime' => 'image/jpeg', 'type' => 'image', 'subtype' => 'jpeg', 'icon' => '', 'dateFormatted' => 'September 16, 2021', 'nonces' => ['update' => 'abc', 'delete' => 'def', 'edit' => 'ghi'], 'editLink' => 'https://unsplash.com/photos/o0tHbSY-zEc', 'meta' => false, 'authorName' => 'admin', 'authorLink' => 'https://unsplash.com/photos/o0tHbSY-zEc', 'filesizeInBytes' => 0, 'filesizeHumanReadable' => '0 KB', 'context' => '', 'height' => 1350, 'width' => 1080, 'orientation' => 'portrait', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => 'https://source.unsplash.com/o0tHbSY-zEc/150x150', 'orientation' => 'landscape'], 'medium' => ['height' => 300, 'width' => 240, 'url' => 'https://source.unsplash.com/o0tHbSY-zEc/300', 'orientation' => 'portrait'], 'large' => ['height' => 1024, 'width' => 818, 'url' => 'https://source.unsplash.com/o0tHbSY-zEc/1024', 'orientation' => 'portrait'], 'full' => ['height' => 1350, 'width' => 1080, 'url' => 'https://source.unsplash.com/o0tHbSY-zEc', 'orientation' => 'portrait']], 'compat' => ['item' => '', 'meta' => '']]], '5' => ['type' => 'image', 'caption' => 'Sunset over a beautiful, historic victorian town in the heart of England', 'image' => ['id' => 5, 'title' => 'sunset-over-a-beautiful-historic-victorian-town-in-the-heart-of-england', 'filename' => 'sunset-over-a-beautiful-historic-victorian-town-in-the-heart-of-england.jpeg', 'url' => 'https://source.unsplash.com/z3TPjzhL7Vs', 'link' => 'https://unsplash.com/photos/z3TPjzhL7Vs', 'alt' => '', 'author' => '1', 'description' => '', 'caption' => 'Sunset over a beautiful, historic victorian town in the heart of England', 'name' => 'sunset-over-a-beautiful-historic-victorian-town-in-the-heart-of-england', 'status' => 'inherit', 'uploadedTo' => 0, 'date' => '2021-09-16T00:00:00.000Z', 'modified' => '2021-09-16T00:00:00.000Z', 'menuOrder' => 0, 'mime' => 'image/jpeg', 'type' => 'image', 'subtype' => 'jpeg', 'icon' => '', 'dateFormatted' => 'September 16, 2021', 'nonces' => ['update' => 'abc', 'delete' => 'def', 'edit' => 'ghi'], 'editLink' => 'https://unsplash.com/photos/z3TPjzhL7Vs', 'meta' => false, 'authorName' => 'admin', 'authorLink' => 'https://unsplash.com/photos/z3TPjzhL7Vs', 'filesizeInBytes' => 0, 'filesizeHumanReadable' => '0 KB', 'context' => '', 'height' => 1620, 'width' => 1080, 'orientation' => 'portrait', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => 'https://source.unsplash.com/z3TPjzhL7Vs/150x150', 'orientation' => 'landscape'], 'medium' => ['height' => 300, 'width' => 240, 'url' => 'https://source.unsplash.com/z3TPjzhL7Vs/300', 'orientation' => 'portrait'], 'large' => ['height' => 1024, 'width' => 818, 'url' => 'https://source.unsplash.com/z3TPjzhL7Vs/1024', 'orientation' => 'portrait'], 'full' => ['height' => 1620, 'width' => 1080, 'url' => 'https://source.unsplash.com/z3TPjzhL7Vs', 'orientation' => 'portrait']], 'compat' => ['item' => '', 'meta' => '']]], '6' => ['type' => 'image', 'caption' => '', 'image' => ['id' => 6, 'title' => 'image', 'filename' => 'image.jpeg', 'url' => 'https://source.unsplash.com/r66SfmWx1Ew', 'link' => 'https://unsplash.com/photos/r66SfmWx1Ew', 'alt' => '', 'author' => '1', 'description' => '', 'caption' => '', 'name' => 'image', 'status' => 'inherit', 'uploadedTo' => 0, 'date' => '2021-09-16T00:00:00.000Z', 'modified' => '2021-09-16T00:00:00.000Z', 'menuOrder' => 0, 'mime' => 'image/jpeg', 'type' => 'image', 'subtype' => 'jpeg', 'icon' => '', 'dateFormatted' => 'September 16, 2021', 'nonces' => ['update' => 'abc', 'delete' => 'def', 'edit' => 'ghi'], 'editLink' => 'https://unsplash.com/photos/r66SfmWx1Ew', 'meta' => false, 'authorName' => 'admin', 'authorLink' => 'https://unsplash.com/photos/r66SfmWx1Ew', 'filesizeInBytes' => 0, 'filesizeHumanReadable' => '0 KB', 'context' => '', 'height' => 1620, 'width' => 1080, 'orientation' => 'portrait', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => 'https://source.unsplash.com/r66SfmWx1Ew/150x150', 'orientation' => 'landscape'], 'medium' => ['height' => 300, 'width' => 240, 'url' => 'https://source.unsplash.com/r66SfmWx1Ew/300', 'orientation' => 'portrait'], 'large' => ['height' => 1024, 'width' => 818, 'url' => 'https://source.unsplash.com/r66SfmWx1Ew/1024', 'orientation' => 'portrait'], 'full' => ['height' => 1620, 'width' => 1080, 'url' => 'https://source.unsplash.com/r66SfmWx1Ew', 'orientation' => 'portrait']], 'compat' => ['item' => '', 'meta' => '']]], '7' => ['type' => 'image', 'caption' => '', 'image' => ['id' => 7, 'title' => 'image', 'filename' => 'image.jpeg', 'url' => 'https://source.unsplash.com/7kX0FGGUkOA', 'link' => 'https://unsplash.com/photos/7kX0FGGUkOA', 'alt' => '', 'author' => '1', 'description' => '', 'caption' => '', 'name' => 'image', 'status' => 'inherit', 'uploadedTo' => 0, 'date' => '2021-09-16T00:00:00.000Z', 'modified' => '2021-09-16T00:00:00.000Z', 'menuOrder' => 0, 'mime' => 'image/jpeg', 'type' => 'image', 'subtype' => 'jpeg', 'icon' => '', 'dateFormatted' => 'September 16, 2021', 'nonces' => ['update' => 'abc', 'delete' => 'def', 'edit' => 'ghi'], 'editLink' => 'https://unsplash.com/photos/7kX0FGGUkOA', 'meta' => false, 'authorName' => 'admin', 'authorLink' => 'https://unsplash.com/photos/7kX0FGGUkOA', 'filesizeInBytes' => 0, 'filesizeHumanReadable' => '0 KB', 'context' => '', 'height' => 1620, 'width' => 1080, 'orientation' => 'portrait', 'sizes' => ['thumbnail' => ['height' => 150, 'width' => 150, 'url' => 'https://source.unsplash.com/7kX0FGGUkOA/150x150', 'orientation' => 'landscape'], 'medium' => ['height' => 300, 'width' => 240, 'url' => 'https://source.unsplash.com/7kX0FGGUkOA/300', 'orientation' => 'portrait'], 'large' => ['height' => 1024, 'width' => 818, 'url' => 'https://source.unsplash.com/7kX0FGGUkOA/1024', 'orientation' => 'portrait'], 'full' => ['height' => 1620, 'width' => 1080, 'url' => 'https://source.unsplash.com/7kX0FGGUkOA', 'orientation' => 'portrait']], 'compat' => ['item' => '', 'meta' => '']]]], 'image_size' => 'large', 'link' => 'lightbox']], 'design' => ['layout' => ['type' => 'grid', 'gap' => ['number' => 10, 'unit' => 'px', 'style' => '10px'], 'columns' => ['breakpoint_base' => 3, 'breakpoint_phone_portrait' => 1], 'aspect_ratio' => '100%', 'options' => ['settings' => ['advanced' => ['slides_per_view' => 3, 'one_per_view_at' => 'breakpoint_tablet_landscape']]], 'slider' => ['settings' => ['advanced' => ['slides_per_view' => 3]]]], 'images' => ['aspect_ratio' => '75%', 'background' => '#00000030'], 'captions' => ['show_captions' => 'always', 'background' => ['points' => ['0' => ['left' => 0, 'red' => 0, 'green' => 0, 'blue' => 0, 'alpha' => 0.7], '1' => ['left' => 61, 'red' => 0, 'green' => 0, 'blue' => 0, 'alpha' => 0.35], '2' => ['left' => 100, 'red' => 0, 'green' => 0, 'blue' => 0, 'alpha' => 0]], 'type' => 'linear', 'degree' => 0, 'svgValue' => '<linearGradient gradientTransform="matrix(1,0,0,1,0,0)" id="%%GRADIENTID%%"><stop stop-opacity="0.7" stop-color="#000000" offset="0"></stop><stop stop-opacity="0.35" stop-color="#000000" offset="0.609090909090909"></stop><stop stop-opacity="0" stop-color="#000000" offset="1"></stop></linearGradient>', 'value' => 'linear-gradient(0deg,rgba(0, 0, 0, 0.7) 0%,rgba(0, 0, 0, 0.35) 61%,rgba(0, 0, 0, 0) 100%)'], 'typography' => null, 'hide_below' => null], 'lightbox' => ['thumbnails' => true, 'animated_thumbnails' => false, 'zoom' => true, 'autoplay' => false, 'background' => '#000000', 'controls' => '#999999', 'thumbnail' => '#ffffff', 'thumbnail_active' => '#01d2e8f0', 'autoplay_videos' => false]]];
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "layout",
        "Layout",
        [c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['step' => 10, 'min' => 0, 'max' => 1120]],
        true,
        false,
        [],
      ), c(
        "type",
        "Type",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['text' => 'Grid', 'label' => 'Label', 'value' => 'grid'], '1' => ['text' => 'Masonry', 'value' => 'masonry'], '2' => ['text' => 'Justified', 'value' => 'justified'], '3' => ['text' => 'Slider', 'value' => 'slider']]],
        false,
        false,
        [],
      ), c(
        "row_height",
        "Row Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.layout.type', 'operand' => 'equals', 'value' => 'justified'], 'rangeOptions' => ['min' => 100, 'max' => 500, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "aspect_ratio",
        "Aspect Ratio",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['text' => '1:1', 'value' => '100%'], '1' => ['text' => '3:2', 'value' => '66.67%'], '2' => ['text' => '4:3', 'value' => '75%'], '3' => ['text' => '16:9', 'label' => 'Label', 'value' => '56.25%'], '4' => ['text' => '21:9', 'value' => '42.85%'], '5' => ['text' => 'Custom', 'value' => 'custom']], 'condition' => ['path' => 'design.layout.type', 'operand' => 'equals', 'value' => 'grid']],
        false,
        false,
        [],
      ), c(
        "custom_height",
        "Custom Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.layout.aspect_ratio', 'operand' => 'equals', 'value' => 'custom'], 'rangeOptions' => ['min' => 100, 'max' => 500, 'step' => 1]],
        false,
        false,
        [],
      ), c(
        "columns",
        "Columns",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['step' => 1, 'min' => 1, 'max' => 10], 'condition' => ['path' => 'design.layout.type', 'operand' => 'is one of', 'value' => ['0' => 'grid', '1' => 'masonry']]],
        true,
        false,
        [],
      ), c(
        "gap",
        "Gap",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1], 'unitOptions' => ['types' => [], 'defaultType' => 'px'], 'condition' => ['path' => 'design.layout.type', 'operand' => 'not equals', 'value' => 'slider']],
        true,
        false,
        [],
      ), c(
        "vertical_at",
        "Vertical At",
        [],
        ['type' => 'breakpoint_dropdown', 'layout' => 'inline', 'condition' => ['path' => 'design.layout.type', 'operand' => 'not equals', 'value' => 'slider']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1SwiperSettings",
      "Slider",
      "slider",
       ['condition' => ['path' => 'design.layout.type', 'operand' => 'equals', 'value' => 'slider'], 'type' => 'popout']
     ), c(
        "slider_images",
        "Slider Images",
        [c(
        "aspect_ratio",
        "Aspect Ratio",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['text' => '1:1', 'value' => '100%'], '1' => ['text' => '3:2', 'value' => '66.67%'], '2' => ['text' => '4:3', 'value' => '75%'], '3' => ['text' => '16:9', 'label' => 'Label', 'value' => '56.25%'], '4' => ['text' => '21:9', 'value' => '42.85%'], '5' => ['text' => 'Custom', 'value' => '0']]],
        false,
        false,
        [],
      ), c(
        "vertical_align",
        "Vertical Align",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'flex-start', 'text' => 'fTop', 'icon' => 'FlexAlignTopIcon'], '1' => ['text' => 'center', 'icon' => 'FlexAlignCenterVerticalIcon', 'value' => 'center'], '2' => ['text' => 'Bottom', 'icon' => 'FlexAlignBottomIcon', 'value' => 'flex-end']], 'condition' => ['path' => 'design.layout.slider_images.aspect_ratio', 'operand' => 'equals', 'value' => '0']],
        false,
        false,
        [],
      ), c(
        "width",
        "Width",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 1, 'max' => 100, 'step' => 1], 'unitOptions' => ['types' => ['0' => '%', '1' => 'px'], 'defaultType' => '%']],
        true,
        false,
        [],
      ), c(
        "height",
        "Height",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'rangeOptions' => ['min' => 10, 'max' => 800, 'step' => 1], 'unitOptions' => ['types' => ['0' => 'px', '1' => '%']], 'condition' => ['path' => 'design.layout.slider_images.aspect_ratio', 'operand' => 'equals', 'value' => '0']],
        true,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'inline', 'sectionOptions' => ['type' => 'popout'], 'condition' => ['path' => 'design.layout.type', 'operand' => 'equals', 'value' => 'slider']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "images",
        "Images",
        [c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        true,
        [],
      ), c(
        "opacity",
        "Opacity",
        [],
        ['type' => 'number', 'layout' => 'inline', 'rangeOptions' => ['min' => 0, 'max' => 1, 'step' => 0.1]],
        false,
        true,
        [],
      ), getPresetSection(
      "EssentialElements\\filter",
      "Filters",
      "filters",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\borders",
      "Borders",
      "borders",
       ['type' => 'popout']
     ), c(
        "shadow",
        "Shadow",
        [],
        ['type' => 'shadow', 'layout' => 'vertical', 'condition' => ['path' => 'design.layout.type', 'operand' => 'not equals', 'value' => 'slider']],
        false,
        true,
        [],
      ), c(
        "hover_animation",
        "Hover Animation",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['value' => 'zoom-in', 'text' => 'Zoom In'], '1' => ['text' => 'Zoom Out', 'value' => 'zoom-out'], '2' => ['value' => 'slide-up', 'text' => 'Slide Up'], '3' => ['value' => 'slide-bottom', 'text' => 'Slide Bottom'], '4' => ['text' => 'Slide Left', 'value' => 'slide-left'], '5' => ['text' => 'Slide Right', 'value' => 'slide-right']]],
        false,
        false,
        [],
      ), c(
        "duration",
        "Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['types' => ['0' => 'ms', '1' => 's'], 'defaultType' => 'ms']],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), c(
        "captions",
        "Captions",
        [c(
        "show_captions",
        "Show Captions",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'never', 'text' => 'Never'], '1' => ['text' => 'Always', 'value' => 'always'], '2' => ['text' => 'On Hover', 'value' => 'on_hover']]],
        false,
        false,
        [],
      ), c(
        "animation",
        "Animation",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'condition' => ['path' => 'design.captions.show_captions', 'operand' => 'equals', 'value' => 'on_hover'], 'items' => ['0' => ['value' => 'fade', 'text' => 'Fade'], '1' => ['text' => 'Zoom In', 'value' => 'zoom-in'], '2' => ['text' => 'Zoom Out', 'value' => 'zoom-out'], '3' => ['text' => 'Slide Up', 'value' => 'slide-up'], '4' => ['text' => 'Slide Down', 'value' => 'slide-down'], '5' => ['text' => 'Slide Left', 'value' => 'slide-left'], '6' => ['text' => 'Slide Right', 'value' => 'slide-right']]],
        false,
        false,
        [],
      ), c(
        "duration",
        "Duration",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'condition' => ['path' => 'design.captions.show_captions', 'operand' => 'equals', 'value' => 'on_hover'], 'unitOptions' => ['types' => ['0' => 'ms', '1' => 's']]],
        false,
        false,
        [],
      ), c(
        "position",
        "Position",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'top', 'text' => 'Top'], '1' => ['text' => 'Bottom', 'value' => 'bottom'], '2' => ['text' => 'Stretch', 'value' => 'stretch']]],
        false,
        false,
        [],
      ), c(
        "background",
        "Background",
        [],
        ['type' => 'color', 'layout' => 'inline', 'colorOptions' => ['type' => 'solidAndGradient']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\typography",
      "Typography",
      "typography",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\spacing_padding_all",
      "Padding",
      "padding",
       ['type' => 'popout']
     ), c(
        "hide_below",
        "Hide below",
        [],
        ['type' => 'breakpoint_dropdown', 'layout' => 'inline'],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\lightbox_design",
      "Lightbox",
      "lightbox",
       ['type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\tabs_design",
      "Filter Bar",
      "filter_bar",
       ['type' => 'popout']
     ), c(
        "spacing",
        "Spacing",
        [getPresetSection(
      "EssentialElements\\spacing_margin_y",
      "Container",
      "container",
       ['type' => 'popout']
     )],
        ['type' => 'section'],
        false,
        false,
        [],
      )];
    }

    static function contentControls()
    {
        return [c(
        "content",
        "Content",
        [c(
        "type",
        "Type",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'single', 'text' => 'Single'], '1' => ['text' => 'Multiple', 'value' => 'multiple']]],
        false,
        false,
        [],
      ), c(
        "images",
        "Images",
        [c(
        "type",
        "Type",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'image', 'text' => 'Image', 'icon' => 'ImageIcon'], '1' => ['text' => 'Video', 'value' => 'video', 'icon' => 'VideoIcon']], 'buttonBarOptions' => ['size' => 'small']],
        false,
        false,
        [],
      ), c(
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'condition' => ['path' => '%%CURRENTPATH%%.type', 'operand' => 'equals', 'value' => 'image'], 'mediaOptions' => ['acceptedFileTypes' => [], 'multiple' => false]],
        false,
        false,
        [],
      ), c(
        "video",
        "Video",
        [],
        ['type' => 'video', 'layout' => 'vertical', 'condition' => ['path' => '%%CURRENTPATH%%.type', 'operand' => 'equals', 'value' => 'video']],
        false,
        false,
        [],
      ), c(
        "caption",
        "Caption",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "custom_url",
        "Custom URL",
        [],
        ['type' => 'url', 'layout' => 'vertical', 'condition' => ['path' => 'content.content.link', 'operand' => 'equals', 'value' => 'custom_url']],
        false,
        false,
        [],
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '', 'defaultTitle' => 'Image / Video', 'buttonName' => 'Add media', 'galleryMode' => true, 'galleryMediaPath' => 'image', 'defaultNewValue' => ['type' => 'image']], 'condition' => ['path' => 'content.content.type', 'operand' => 'not equals', 'value' => 'multiple']],
        false,
        false,
        [],
      ), c(
        "galleries",
        "Galleries",
        [c(
        "title",
        "Title",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "images",
        "Images",
        [c(
        "type",
        "Type",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'image', 'text' => 'Image', 'icon' => 'ImageIcon'], '1' => ['text' => 'Video', 'value' => 'video', 'icon' => 'VideoIcon']], 'buttonBarOptions' => ['size' => 'small']],
        false,
        false,
        [],
      ), c(
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'condition' => ['path' => '%%CURRENTPATH%%.type', 'operand' => 'equals', 'value' => 'image']],
        false,
        false,
        [],
      ), c(
        "video",
        "Video",
        [],
        ['type' => 'video', 'layout' => 'vertical', 'condition' => ['path' => '%%CURRENTPATH%%.type', 'operand' => 'equals', 'value' => 'video']],
        false,
        false,
        [],
      ), c(
        "caption",
        "Caption",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "custom_url",
        "Custom URL",
        [],
        ['type' => 'url', 'layout' => 'vertical', 'condition' => ['path' => 'content.content.link', 'operand' => 'equals', 'value' => 'custom_url']],
        false,
        false,
        [],
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '', 'defaultTitle' => 'Image / Video', 'buttonName' => 'Add media', 'galleryMode' => true, 'galleryMediaPath' => 'image', 'defaultNewValue' => ['type' => 'image']]],
        false,
        false,
        [],
      ), c(
        "icon",
        "Icon",
        [],
        ['type' => 'icon', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '{title}', 'defaultTitle' => 'Gallery', 'buttonName' => 'Add Gallery', 'defaultNewValue' => ['title' => 'Untitled']], 'condition' => ['path' => 'content.content.type', 'operand' => 'equals', 'value' => 'multiple']],
        false,
        false,
        [],
      ), c(
        "filter_bar",
        "Filter Bar",
        [c(
        "all_filter",
        "All Filter",
        [],
        ['type' => 'toggle', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "all_label",
        "All Label",
        [],
        ['type' => 'text', 'layout' => 'inline', 'condition' => ['path' => 'content.content.filter_bar.all_filter', 'operand' => 'is set', 'value' => null]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical', 'sectionOptions' => ['type' => 'popout'], 'condition' => ['path' => 'content.content.type', 'operand' => 'equals', 'value' => 'multiple']],
        false,
        false,
        [],
      ), c(
        "link",
        "Link",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => ['0' => ['text' => 'None', 'label' => 'Label', 'value' => 'none'], '1' => ['text' => 'Lightbox', 'value' => 'lightbox'], '2' => ['text' => 'Custom URL', 'value' => 'custom_url'], '3' => ['text' => 'Media File', 'value' => 'media_file']]],
        false,
        false,
        [],
      ), c(
        "image_size",
        "Image Size",
        [],
        ['type' => 'media_size_dropdown', 'layout' => 'inline'],
        false,
        false,
        [],
      ), c(
        "lazy_load",
        "Lazy Load",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'items' => ['0' => ['text' => 'Eager: loads immediately', 'label' => 'Label', 'value' => 'eager'], '1' => ['text' => 'Lazy: loads on scroll', 'value' => 'lazy'], '2' => ['text' => 'Auto: browser decides what is best', 'value' => 'auto']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return ['0' =>  ['title' => 'Swiper','scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-swiper/breakdance-swiper.js'],'styles' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/swiper-bundle.min.css','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/swiper@8/breakdance-swiper-preset-defaults.css'],],'1' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/isotope-layout@3.0.6/isotope.pkgd.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/breakdance-gallery@1/gallery.js'],'title' => 'Isotope & Breakdance Gallery',],'2' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/isotope-layout@3.0.6/packery-mode.pkgd.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/justified-layout/justified-layout.js'],'title' => 'Justified','frontendCondition' => '{% if design.layout.type == \'justified\' %}
return true;
{% else%}
 return false;
{% endif %}
',],'3' =>  ['title' => 'Masonry','scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/imagesloaded@4/imagesloaded.pkgd.min.js'],'builderCondition' => '{% if design.layout.type == \'masonry\' %}
return true;
{% else%}
 return false;
{% endif %}

','frontendCondition' => '{% if design.layout.type == \'masonry\' %}
return true;
{% else%}
 return false;
{% endif %}
',],'4' =>  ['scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/lightgallery@2/lightgallery-bundle.min.js','%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/elements-reusable-code/lightbox.js'],'inlineScripts' => ['new BreakdanceLightbox(\'%%SELECTOR%%\', {
  itemSelector: \'.ee-gallery-item\',
  ...{{ design.lightbox|json_encode }}
});'],'styles' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/lightgallery@2/css/lightgallery-bundle.min.css'],'builderCondition' => 'return false;','frontendCondition' => '{% if content.content.link == \'lightbox\' %}
return true;
{% else %}
return false;
{% endif %}','title' => '"lightbox" for frontend',],'5' =>  ['styles' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/custom-tabs@1/tabs.css'],'title' => 'Tabs','builderCondition' => '{% if content.content.type == \'multiple\' %}
return true;
{% else%}
 return false;
{% endif %}

','frontendCondition' => '{% if content.content.type == \'multiple\' %}
return true;
{% else%}
 return false;
{% endif %}
','scripts' => ['%%BREAKDANCE_ELEMENTS_PLUGIN_URL%%dependencies-files/custom-tabs@1/tabs.js'],],'6' =>  ['inlineScripts' => ['new BreakdanceGallery(
  \'%%SELECTOR%%\',
  {{ design.layout|json_encode|striptags }}
);'],'builderCondition' => 'return false;','title' => 'BreakdanceGallery init for frontend',],];
    }

    static function settings()
    {
        return ['bypassPointerEvents' => false];
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return [

'onPropertyChange' => [['script' => 'if (window.breakdanceGalleryInstances && window.breakdanceGalleryInstances[%%ID%%]) {
  window.breakdanceGalleryInstances[%%ID%%].update({{ design.layout|json_encode|striptags }});
}',
],],

'onMountedElement' => [['script' => '// mounting?

if (!window.breakdanceGalleryInstances) window.breakdanceGalleryInstances = {};

if (window.breakdanceGalleryInstances && window.breakdanceGalleryInstances[%%ID%%]) {
  window.breakdanceGalleryInstances[%%ID%%].destroy();
}

window.breakdanceGalleryInstances[%%ID%%] = new BreakdanceGallery(
  \'%%SELECTOR%%\',
  {{ design.layout|json_encode|striptags }}
);



',
],],

'onMovedElement' => [['script' => 'if (window.breakdanceGalleryInstances && window.breakdanceGalleryInstances[%%ID%%]) {
  window.breakdanceGalleryInstances[%%ID%%].update();
}
',
],],

'onBeforeDeletingElement' => [['script' => 'if (window.breakdanceGalleryInstances && window.breakdanceGalleryInstances[%%ID%%]) {
  window.breakdanceGalleryInstances[%%ID%%].destroy();
  delete window.breakdanceGalleryInstances[%%ID%%];
}
',
],],];
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return ['0' => ['location' => 'outside-top', 'cssProperty' => 'margin-top', 'affectedPropertyPath' => 'design.spacing.margin_top.%%BREAKPOINT%%'], '1' => ['location' => 'outside-bottom', 'cssProperty' => 'margin-bottom', 'affectedPropertyPath' => 'design.spacing.margin_bottom.%%BREAKPOINT%%']];
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 750;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['accepts' => 'gallery', 'path' => 'content.content.images'], '1' => ['accepts' => 'gallery', 'path' => 'content.content.galleries[].images'], '2' => ['accepts' => 'video', 'path' => 'content.content.images[].video'], '3' => ['accepts' => 'string', 'path' => 'content.content.images[].caption'], '4' => ['accepts' => 'image_url', 'path' => 'content.content.images[].image'], '5' => ['accepts' => 'string', 'path' => 'content.content.images[].custom_url'], '6' => ['accepts' => 'string', 'path' => 'content.content.galleries[].title'], '7' => ['accepts' => 'string', 'path' => 'content.content.galleries[].images[].custom_url'], '8' => ['accepts' => 'string', 'path' => 'content.content.galleries[].images[].caption'], '9' => ['accepts' => 'video', 'path' => 'content.content.galleries[].images[].video'], '10' => ['accepts' => 'image_url', 'path' => 'content.content.galleries[].images[].image']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['design.layout.gap', 'design.layout.vertical_at', 'design.captions.hide_below', 'design.filter_bar.responsive.visible_at', 'design.filter_bar.horizontal_at'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
