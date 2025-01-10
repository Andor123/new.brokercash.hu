<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/finding.proto

namespace Google\Cloud\SecurityCenter\V1\Finding\MuteInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The record of a dynamic mute rule that matches the finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Finding.MuteInfo.DynamicMuteRecord</code>
 */
class DynamicMuteRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * The relative resource name of the mute rule, represented by a mute
     * config, that created this record, for example
     * `organizations/123/muteConfigs/mymuteconfig` or
     * `organizations/123/locations/global/muteConfigs/mymuteconfig`.
     *
     * Generated from protobuf field <code>string mute_config = 1;</code>
     */
    protected $mute_config = '';
    /**
     * When the dynamic mute rule first matched the finding.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp match_time = 2;</code>
     */
    protected $match_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mute_config
     *           The relative resource name of the mute rule, represented by a mute
     *           config, that created this record, for example
     *           `organizations/123/muteConfigs/mymuteconfig` or
     *           `organizations/123/locations/global/muteConfigs/mymuteconfig`.
     *     @type \Google\Protobuf\Timestamp $match_time
     *           When the dynamic mute rule first matched the finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Finding::initOnce();
        parent::__construct($data);
    }

    /**
     * The relative resource name of the mute rule, represented by a mute
     * config, that created this record, for example
     * `organizations/123/muteConfigs/mymuteconfig` or
     * `organizations/123/locations/global/muteConfigs/mymuteconfig`.
     *
     * Generated from protobuf field <code>string mute_config = 1;</code>
     * @return string
     */
    public function getMuteConfig()
    {
        return $this->mute_config;
    }

    /**
     * The relative resource name of the mute rule, represented by a mute
     * config, that created this record, for example
     * `organizations/123/muteConfigs/mymuteconfig` or
     * `organizations/123/locations/global/muteConfigs/mymuteconfig`.
     *
     * Generated from protobuf field <code>string mute_config = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMuteConfig($var)
    {
        GPBUtil::checkString($var, True);
        $this->mute_config = $var;

        return $this;
    }

    /**
     * When the dynamic mute rule first matched the finding.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp match_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getMatchTime()
    {
        return $this->match_time;
    }

    public function hasMatchTime()
    {
        return isset($this->match_time);
    }

    public function clearMatchTime()
    {
        unset($this->match_time);
    }

    /**
     * When the dynamic mute rule first matched the finding.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp match_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMatchTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->match_time = $var;

        return $this;
    }

}


