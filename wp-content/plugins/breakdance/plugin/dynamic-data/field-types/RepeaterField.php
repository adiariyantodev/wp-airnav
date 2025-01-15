<?php

namespace Breakdance\DynamicData;

abstract class RepeaterField extends Field
{
    /**
     * @param int | false $postId
     * @return boolean
     */
    abstract public function hasSubFields($postId = null);

    /**
     * @param int $index
     * @return void
     */
    abstract public function setSubFieldIndex($index);

    /**
     * @return RepeaterField|false
     */
    abstract public function parentField();

    /**
     * @inheritDoc
     */
    public function category()
    {
        return 'Repeaters';
    }

    /**
     * @inheritDoc
     */
    public function returnTypes()
    {
        return ['repeater'];
    }

    /**
     * @inheritDoc
     */
    public function availableForPostType($postType)
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function handler($attributes): FieldData
    {
        // This handler should never get called, this
        // is only to satisfy the parent classes return type
        return StringData::emptyString();
    }

}
