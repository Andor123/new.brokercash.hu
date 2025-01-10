<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating a mute config.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.UpdateMuteConfigRequest</code>
 */
class UpdateMuteConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The mute config being updated.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.MuteConfig mute_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $mute_config = null;
    /**
     * The list of fields to be updated.
     * If empty all mutable fields will be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\SecurityCenter\V1\MuteConfig $muteConfig Required. The mute config being updated.
     * @param \Google\Protobuf\FieldMask                 $updateMask The list of fields to be updated.
     *                                                               If empty all mutable fields will be updated.
     *
     * @return \Google\Cloud\SecurityCenter\V1\UpdateMuteConfigRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\SecurityCenter\V1\MuteConfig $muteConfig, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setMuteConfig($muteConfig)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1\MuteConfig $mute_config
     *           Required. The mute config being updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to be updated.
     *           If empty all mutable fields will be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The mute config being updated.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.MuteConfig mute_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V1\MuteConfig|null
     */
    public function getMuteConfig()
    {
        return $this->mute_config;
    }

    public function hasMuteConfig()
    {
        return isset($this->mute_config);
    }

    public function clearMuteConfig()
    {
        unset($this->mute_config);
    }

    /**
     * Required. The mute config being updated.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.MuteConfig mute_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V1\MuteConfig $var
     * @return $this
     */
    public function setMuteConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\MuteConfig::class);
        $this->mute_config = $var;

        return $this;
    }

    /**
     * The list of fields to be updated.
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
     * The list of fields to be updated.
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

