<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_values.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for creating a TagValue.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.CreateTagValueRequest</code>
 */
class CreateTagValueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The TagValue to be created. Only fields `short_name`,
     * `description`, and `parent` are considered during the creation request.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.TagValue tag_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tag_value = null;
    /**
     * Optional. Set as true to perform the validations necessary for creating the
     * resource, but not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param \Google\Cloud\ResourceManager\V3\TagValue $tagValue Required. The TagValue to be created. Only fields `short_name`,
     *                                                            `description`, and `parent` are considered during the creation request.
     *
     * @return \Google\Cloud\ResourceManager\V3\CreateTagValueRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ResourceManager\V3\TagValue $tagValue): self
    {
        return (new self())
            ->setTagValue($tagValue);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ResourceManager\V3\TagValue $tag_value
     *           Required. The TagValue to be created. Only fields `short_name`,
     *           `description`, and `parent` are considered during the creation request.
     *     @type bool $validate_only
     *           Optional. Set as true to perform the validations necessary for creating the
     *           resource, but not actually perform the action.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagValues::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The TagValue to be created. Only fields `short_name`,
     * `description`, and `parent` are considered during the creation request.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.TagValue tag_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ResourceManager\V3\TagValue|null
     */
    public function getTagValue()
    {
        return $this->tag_value;
    }

    public function hasTagValue()
    {
        return isset($this->tag_value);
    }

    public function clearTagValue()
    {
        unset($this->tag_value);
    }

    /**
     * Required. The TagValue to be created. Only fields `short_name`,
     * `description`, and `parent` are considered during the creation request.
     *
     * Generated from protobuf field <code>.google.cloud.resourcemanager.v3.TagValue tag_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ResourceManager\V3\TagValue $var
     * @return $this
     */
    public function setTagValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ResourceManager\V3\TagValue::class);
        $this->tag_value = $var;

        return $this;
    }

    /**
     * Optional. Set as true to perform the validations necessary for creating the
     * resource, but not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Set as true to perform the validations necessary for creating the
     * resource, but not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

