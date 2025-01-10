<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/edgenetwork/v1/resources.proto

namespace Google\Cloud\EdgeNetwork\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Google Edge Cloud zone.
 *
 * Generated from protobuf message <code>google.cloud.edgenetwork.v1.Zone</code>
 */
class Zone extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the zone.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Output only. The time when the zone was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the zone was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Deprecated: not implemented.
     * Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [deprecated = true];</code>
     * @deprecated
     */
    private $labels;
    /**
     * Deprecated: not implemented.
     * The deployment layout type.
     *
     * Generated from protobuf field <code>string layout_name = 5 [deprecated = true];</code>
     * @deprecated
     */
    protected $layout_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the zone.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the zone was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the zone was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Deprecated: not implemented.
     *           Labels as key value pairs.
     *     @type string $layout_name
     *           Deprecated: not implemented.
     *           The deployment layout type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Edgenetwork\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the zone.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the zone.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time when the zone was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the zone was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the zone was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the zone was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Deprecated: not implemented.
     * Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\MapField
     * @deprecated
     */
    public function getLabels()
    {
        @trigger_error('labels is deprecated.', E_USER_DEPRECATED);
        return $this->labels;
    }

    /**
     * Deprecated: not implemented.
     * Labels as key value pairs.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [deprecated = true];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     * @deprecated
     */
    public function setLabels($var)
    {
        @trigger_error('labels is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Deprecated: not implemented.
     * The deployment layout type.
     *
     * Generated from protobuf field <code>string layout_name = 5 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getLayoutName()
    {
        @trigger_error('layout_name is deprecated.', E_USER_DEPRECATED);
        return $this->layout_name;
    }

    /**
     * Deprecated: not implemented.
     * The deployment layout type.
     *
     * Generated from protobuf field <code>string layout_name = 5 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setLayoutName($var)
    {
        @trigger_error('layout_name is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->layout_name = $var;

        return $this;
    }

}

