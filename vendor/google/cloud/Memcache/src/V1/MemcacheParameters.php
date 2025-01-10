<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.memcache.v1.MemcacheParameters</code>
 */
class MemcacheParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The unique ID associated with this set of parameters. Users
     * can use this id to determine if the parameters associated with the instance
     * differ from the parameters associated with the nodes. A discrepancy between
     * parameter ids can inform users that they may need to take action to apply
     * parameters on nodes.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = '';
    /**
     * User defined set of parameters to use in the memcached process.
     *
     * Generated from protobuf field <code>map<string, string> params = 3;</code>
     */
    private $params;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Output only. The unique ID associated with this set of parameters. Users
     *           can use this id to determine if the parameters associated with the instance
     *           differ from the parameters associated with the nodes. A discrepancy between
     *           parameter ids can inform users that they may need to take action to apply
     *           parameters on nodes.
     *     @type array|\Google\Protobuf\Internal\MapField $params
     *           User defined set of parameters to use in the memcached process.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memcache\V1\CloudMemcache::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The unique ID associated with this set of parameters. Users
     * can use this id to determine if the parameters associated with the instance
     * differ from the parameters associated with the nodes. A discrepancy between
     * parameter ids can inform users that they may need to take action to apply
     * parameters on nodes.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. The unique ID associated with this set of parameters. Users
     * can use this id to determine if the parameters associated with the instance
     * differ from the parameters associated with the nodes. A discrepancy between
     * parameter ids can inform users that they may need to take action to apply
     * parameters on nodes.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * User defined set of parameters to use in the memcached process.
     *
     * Generated from protobuf field <code>map<string, string> params = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * User defined set of parameters to use in the memcached process.
     *
     * Generated from protobuf field <code>map<string, string> params = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParams($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->params = $arr;

        return $this;
    }

}
