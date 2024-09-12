<?php

namespace Breakdance\DynamicData;

class AcfOembedField extends OembedField
{

    public array $field;

    public function __construct($field)
    {
        $this->field = $field;
    }

    /**
     * @inheritDoc
     */
    public function label()
    {
        return $this->field['label'];
    }

    /**
     * @inheritDoc
     */
    public function category()
    {
        return 'ACF';
    }

    /**
     * @inheritDoc
     */
    public function slug()
    {
        return 'acf_field_' . $this->field['key'];
    }


    /**
     * @param string $postType
     * @return bool
     */
    public function availableForPostType($postType)
    {
        return AcfField::isFieldAvailableForPostType($this->field, $postType);
    }

    public function handler($attributes): OembedData
    {
        $oembedValue = AcfField::getValue($this->field, false);
        if (empty($oembedValue)) {
            return OembedData::emptyOembed();
        }
        return OembedData::fromOembedUrl($oembedValue);
    }
}
