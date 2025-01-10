<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/traffic_target.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the observed state of a single `TrafficTarget` entry.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.TrafficTargetStatus</code>
 */
class TrafficTargetStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The allocation type for this traffic target.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.TrafficTargetAllocationType type = 1;</code>
     */
    protected $type = 0;
    /**
     * Revision to which this traffic is sent.
     *
     * Generated from protobuf field <code>string revision = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $revision = '';
    /**
     * Specifies percent of the traffic to this Revision.
     *
     * Generated from protobuf field <code>int32 percent = 3;</code>
     */
    protected $percent = 0;
    /**
     * Indicates the string used in the URI to exclusively reference this target.
     *
     * Generated from protobuf field <code>string tag = 4;</code>
     */
    protected $tag = '';
    /**
     * Displays the target URI.
     *
     * Generated from protobuf field <code>string uri = 5;</code>
     */
    protected $uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The allocation type for this traffic target.
     *     @type string $revision
     *           Revision to which this traffic is sent.
     *     @type int $percent
     *           Specifies percent of the traffic to this Revision.
     *     @type string $tag
     *           Indicates the string used in the URI to exclusively reference this target.
     *     @type string $uri
     *           Displays the target URI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\TrafficTarget::initOnce();
        parent::__construct($data);
    }

    /**
     * The allocation type for this traffic target.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.TrafficTargetAllocationType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The allocation type for this traffic target.
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.TrafficTargetAllocationType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Run\V2\TrafficTargetAllocationType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Revision to which this traffic is sent.
     *
     * Generated from protobuf field <code>string revision = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Revision to which this traffic is sent.
     *
     * Generated from protobuf field <code>string revision = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision = $var;

        return $this;
    }

    /**
     * Specifies percent of the traffic to this Revision.
     *
     * Generated from protobuf field <code>int32 percent = 3;</code>
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Specifies percent of the traffic to this Revision.
     *
     * Generated from protobuf field <code>int32 percent = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->percent = $var;

        return $this;
    }

    /**
     * Indicates the string used in the URI to exclusively reference this target.
     *
     * Generated from protobuf field <code>string tag = 4;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Indicates the string used in the URI to exclusively reference this target.
     *
     * Generated from protobuf field <code>string tag = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

    /**
     * Displays the target URI.
     *
     * Generated from protobuf field <code>string uri = 5;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Displays the target URI.
     *
     * Generated from protobuf field <code>string uri = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

}

