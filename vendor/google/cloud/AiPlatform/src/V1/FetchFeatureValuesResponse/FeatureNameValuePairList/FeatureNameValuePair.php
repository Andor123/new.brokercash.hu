<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store_service.proto

namespace Google\Cloud\AIPlatform\V1\FetchFeatureValuesResponse\FeatureNameValuePairList;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Feature name & value pair.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FetchFeatureValuesResponse.FeatureNameValuePairList.FeatureNameValuePair</code>
 */
class FeatureNameValuePair extends \Google\Protobuf\Internal\Message
{
    /**
     * Feature short name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\FeatureValue $value
     *           Feature value.
     *     @type string $name
     *           Feature short name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureOnlineStoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue value = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureValue|null
     */
    public function getValue()
    {
        return $this->readOneof(2);
    }

    public function hasValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Feature value.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureValue value = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Feature short name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Feature short name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}

