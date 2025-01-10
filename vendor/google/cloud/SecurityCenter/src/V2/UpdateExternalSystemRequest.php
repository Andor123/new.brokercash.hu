<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a ExternalSystem resource.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.UpdateExternalSystemRequest</code>
 */
class UpdateExternalSystemRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The external system resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.ExternalSystem external_system = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $external_system = null;
    /**
     * The FieldMask to use when updating the external system resource.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\SecurityCenter\V2\ExternalSystem $externalSystem Required. The external system resource to update.
     * @param \Google\Protobuf\FieldMask                     $updateMask     The FieldMask to use when updating the external system resource.
     *
     *                                                                       If empty all mutable fields will be updated.
     *
     * @return \Google\Cloud\SecurityCenter\V2\UpdateExternalSystemRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\SecurityCenter\V2\ExternalSystem $externalSystem, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setExternalSystem($externalSystem)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V2\ExternalSystem $external_system
     *           Required. The external system resource to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The FieldMask to use when updating the external system resource.
     *           If empty all mutable fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The external system resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.ExternalSystem external_system = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V2\ExternalSystem|null
     */
    public function getExternalSystem()
    {
        return $this->external_system;
    }

    public function hasExternalSystem()
    {
        return isset($this->external_system);
    }

    public function clearExternalSystem()
    {
        unset($this->external_system);
    }

    /**
     * Required. The external system resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.ExternalSystem external_system = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V2\ExternalSystem $var
     * @return $this
     */
    public function setExternalSystem($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V2\ExternalSystem::class);
        $this->external_system = $var;

        return $this;
    }

    /**
     * The FieldMask to use when updating the external system resource.
     * If empty all mutable fields will be updated.
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
     * The FieldMask to use when updating the external system resource.
     * If empty all mutable fields will be updated.
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

