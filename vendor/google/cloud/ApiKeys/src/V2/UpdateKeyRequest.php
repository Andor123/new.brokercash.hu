<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/apikeys/v2/apikeys.proto

namespace Google\Cloud\ApiKeys\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `UpdateKey` method.
 *
 * Generated from protobuf message <code>google.api.apikeys.v2.UpdateKeyRequest</code>
 */
class UpdateKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Set the `name` field to the resource name of the API key to be
     * updated. You can update only the `display_name`, `restrictions`, and
     * `annotations` fields.
     *
     * Generated from protobuf field <code>.google.api.apikeys.v2.Key key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $key = null;
    /**
     * The field mask specifies which fields to be updated as part of this
     * request. All other fields are ignored.
     * Mutable fields are: `display_name`, `restrictions`, and `annotations`.
     * If an update mask is not provided, the service treats it as an implied mask
     * equivalent to all allowed fields that are set on the wire. If the field
     * mask has a special value "*", the service treats it equivalent to replace
     * all allowed mutable fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\ApiKeys\V2\Key $key        Required. Set the `name` field to the resource name of the API key to be
     *                                                 updated. You can update only the `display_name`, `restrictions`, and
     *                                                 `annotations` fields.
     * @param \Google\Protobuf\FieldMask   $updateMask The field mask specifies which fields to be updated as part of this
     *                                                 request. All other fields are ignored.
     *                                                 Mutable fields are: `display_name`, `restrictions`, and `annotations`.
     *                                                 If an update mask is not provided, the service treats it as an implied mask
     *                                                 equivalent to all allowed fields that are set on the wire. If the field
     *                                                 mask has a special value "*", the service treats it equivalent to replace
     *                                                 all allowed mutable fields.
     *
     * @return \Google\Cloud\ApiKeys\V2\UpdateKeyRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ApiKeys\V2\Key $key, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setKey($key)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApiKeys\V2\Key $key
     *           Required. Set the `name` field to the resource name of the API key to be
     *           updated. You can update only the `display_name`, `restrictions`, and
     *           `annotations` fields.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The field mask specifies which fields to be updated as part of this
     *           request. All other fields are ignored.
     *           Mutable fields are: `display_name`, `restrictions`, and `annotations`.
     *           If an update mask is not provided, the service treats it as an implied mask
     *           equivalent to all allowed fields that are set on the wire. If the field
     *           mask has a special value "*", the service treats it equivalent to replace
     *           all allowed mutable fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Apikeys\V2\Apikeys::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Set the `name` field to the resource name of the API key to be
     * updated. You can update only the `display_name`, `restrictions`, and
     * `annotations` fields.
     *
     * Generated from protobuf field <code>.google.api.apikeys.v2.Key key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiKeys\V2\Key|null
     */
    public function getKey()
    {
        return $this->key;
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * Required. Set the `name` field to the resource name of the API key to be
     * updated. You can update only the `display_name`, `restrictions`, and
     * `annotations` fields.
     *
     * Generated from protobuf field <code>.google.api.apikeys.v2.Key key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiKeys\V2\Key $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiKeys\V2\Key::class);
        $this->key = $var;

        return $this;
    }

    /**
     * The field mask specifies which fields to be updated as part of this
     * request. All other fields are ignored.
     * Mutable fields are: `display_name`, `restrictions`, and `annotations`.
     * If an update mask is not provided, the service treats it as an implied mask
     * equivalent to all allowed fields that are set on the wire. If the field
     * mask has a special value "*", the service treats it equivalent to replace
     * all allowed mutable fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The field mask specifies which fields to be updated as part of this
     * request. All other fields are ignored.
     * Mutable fields are: `display_name`, `restrictions`, and `annotations`.
     * If an update mask is not provided, the service treats it as an implied mask
     * equivalent to all allowed fields that are set on the wire. If the field
     * mask has a special value "*", the service treats it equivalent to replace
     * all allowed mutable fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
