<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/kms.proto

namespace Google\Cloud\NetApp\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KmsConfig is the customer managed encryption key(CMEK) configuration.
 *
 * Generated from protobuf message <code>google.cloud.netapp.v1.KmsConfig</code>
 */
class KmsConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Name of the KmsConfig.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Required. Customer managed crypto key resource full name. Format:
     * projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{key}.
     *
     * Generated from protobuf field <code>string crypto_key_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $crypto_key_name = '';
    /**
     * Output only. State of the KmsConfig.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.KmsConfig.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. State details of the KmsConfig.
     *
     * Generated from protobuf field <code>string state_details = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state_details = '';
    /**
     * Output only. Create time of the KmsConfig.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Description of the KmsConfig.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     */
    protected $description = '';
    /**
     * Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     */
    private $labels;
    /**
     * Output only. Instructions to provide the access to the customer provided
     * encryption key.
     *
     * Generated from protobuf field <code>string instructions = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $instructions = '';
    /**
     * Output only. The Service account which will have access to the customer
     * provided encryption key.
     *
     * Generated from protobuf field <code>string service_account = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $service_account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Name of the KmsConfig.
     *     @type string $crypto_key_name
     *           Required. Customer managed crypto key resource full name. Format:
     *           projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{key}.
     *     @type int $state
     *           Output only. State of the KmsConfig.
     *     @type string $state_details
     *           Output only. State details of the KmsConfig.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Create time of the KmsConfig.
     *     @type string $description
     *           Description of the KmsConfig.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels as key value pairs
     *     @type string $instructions
     *           Output only. Instructions to provide the access to the customer provided
     *           encryption key.
     *     @type string $service_account
     *           Output only. The Service account which will have access to the customer
     *           provided encryption key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Netapp\V1\Kms::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Name of the KmsConfig.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Name of the KmsConfig.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * Required. Customer managed crypto key resource full name. Format:
     * projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{key}.
     *
     * Generated from protobuf field <code>string crypto_key_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCryptoKeyName()
    {
        return $this->crypto_key_name;
    }

    /**
     * Required. Customer managed crypto key resource full name. Format:
     * projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{key}.
     *
     * Generated from protobuf field <code>string crypto_key_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCryptoKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->crypto_key_name = $var;

        return $this;
    }

    /**
     * Output only. State of the KmsConfig.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.KmsConfig.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the KmsConfig.
     *
     * Generated from protobuf field <code>.google.cloud.netapp.v1.KmsConfig.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetApp\V1\KmsConfig\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. State details of the KmsConfig.
     *
     * Generated from protobuf field <code>string state_details = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateDetails()
    {
        return $this->state_details;
    }

    /**
     * Output only. State details of the KmsConfig.
     *
     * Generated from protobuf field <code>string state_details = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_details = $var;

        return $this;
    }

    /**
     * Output only. Create time of the KmsConfig.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Create time of the KmsConfig.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Description of the KmsConfig.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the KmsConfig.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels as key value pairs
     *
     * Generated from protobuf field <code>map<string, string> labels = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. Instructions to provide the access to the customer provided
     * encryption key.
     *
     * Generated from protobuf field <code>string instructions = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Output only. Instructions to provide the access to the customer provided
     * encryption key.
     *
     * Generated from protobuf field <code>string instructions = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInstructions($var)
    {
        GPBUtil::checkString($var, True);
        $this->instructions = $var;

        return $this;
    }

    /**
     * Output only. The Service account which will have access to the customer
     * provided encryption key.
     *
     * Generated from protobuf field <code>string service_account = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Output only. The Service account which will have access to the customer
     * provided encryption key.
     *
     * Generated from protobuf field <code>string service_account = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

}

