<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/upgrade.proto

namespace Grafeas\V1\WindowsUpdate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The category to which the update belongs.
 *
 * Generated from protobuf message <code>grafeas.v1.WindowsUpdate.Category</code>
 */
class Category extends \Google\Protobuf\Internal\Message
{
    /**
     * The identifier of the category.
     *
     * Generated from protobuf field <code>string category_id = 1;</code>
     */
    protected $category_id = '';
    /**
     * The localized name of the category.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $category_id
     *           The identifier of the category.
     *     @type string $name
     *           The localized name of the category.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Upgrade::initOnce();
        parent::__construct($data);
    }

    /**
     * The identifier of the category.
     *
     * Generated from protobuf field <code>string category_id = 1;</code>
     * @return string
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * The identifier of the category.
     *
     * Generated from protobuf field <code>string category_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCategoryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->category_id = $var;

        return $this;
    }

    /**
     * The localized name of the category.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The localized name of the category.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}


