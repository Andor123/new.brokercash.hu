<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Entity representing a Cloud Identity account that may be
 * associated with a Channel Services API partner.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.CloudIdentityCustomerAccount</code>
 */
class CloudIdentityCustomerAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Returns true if a Cloud Identity account exists for a specific domain.
     *
     * Generated from protobuf field <code>bool existing = 1;</code>
     */
    protected $existing = false;
    /**
     * Returns true if the Cloud Identity account is associated with a customer
     * of the Channel Services partner.
     *
     * Generated from protobuf field <code>bool owned = 2;</code>
     */
    protected $owned = false;
    /**
     * If owned = true, the name of the customer that owns the Cloud Identity
     * account.
     * Customer_name uses the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer_name = 3;</code>
     */
    protected $customer_name = '';
    /**
     * If existing = true, the Cloud Identity ID of the customer.
     *
     * Generated from protobuf field <code>string customer_cloud_identity_id = 4;</code>
     */
    protected $customer_cloud_identity_id = '';
    /**
     * If existing = true, the type of the customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo.CustomerType customer_type = 5;</code>
     */
    protected $customer_type = 0;
    /**
     * If existing = true, and is 2-tier customer, the channel partner of the
     * customer.
     *
     * Generated from protobuf field <code>string channel_partner_cloud_identity_id = 6;</code>
     */
    protected $channel_partner_cloud_identity_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $existing
     *           Returns true if a Cloud Identity account exists for a specific domain.
     *     @type bool $owned
     *           Returns true if the Cloud Identity account is associated with a customer
     *           of the Channel Services partner.
     *     @type string $customer_name
     *           If owned = true, the name of the customer that owns the Cloud Identity
     *           account.
     *           Customer_name uses the format:
     *           accounts/{account_id}/customers/{customer_id}
     *     @type string $customer_cloud_identity_id
     *           If existing = true, the Cloud Identity ID of the customer.
     *     @type int $customer_type
     *           If existing = true, the type of the customer.
     *     @type string $channel_partner_cloud_identity_id
     *           If existing = true, and is 2-tier customer, the channel partner of the
     *           customer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Returns true if a Cloud Identity account exists for a specific domain.
     *
     * Generated from protobuf field <code>bool existing = 1;</code>
     * @return bool
     */
    public function getExisting()
    {
        return $this->existing;
    }

    /**
     * Returns true if a Cloud Identity account exists for a specific domain.
     *
     * Generated from protobuf field <code>bool existing = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExisting($var)
    {
        GPBUtil::checkBool($var);
        $this->existing = $var;

        return $this;
    }

    /**
     * Returns true if the Cloud Identity account is associated with a customer
     * of the Channel Services partner.
     *
     * Generated from protobuf field <code>bool owned = 2;</code>
     * @return bool
     */
    public function getOwned()
    {
        return $this->owned;
    }

    /**
     * Returns true if the Cloud Identity account is associated with a customer
     * of the Channel Services partner.
     *
     * Generated from protobuf field <code>bool owned = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setOwned($var)
    {
        GPBUtil::checkBool($var);
        $this->owned = $var;

        return $this;
    }

    /**
     * If owned = true, the name of the customer that owns the Cloud Identity
     * account.
     * Customer_name uses the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer_name = 3;</code>
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * If owned = true, the name of the customer that owns the Cloud Identity
     * account.
     * Customer_name uses the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_name = $var;

        return $this;
    }

    /**
     * If existing = true, the Cloud Identity ID of the customer.
     *
     * Generated from protobuf field <code>string customer_cloud_identity_id = 4;</code>
     * @return string
     */
    public function getCustomerCloudIdentityId()
    {
        return $this->customer_cloud_identity_id;
    }

    /**
     * If existing = true, the Cloud Identity ID of the customer.
     *
     * Generated from protobuf field <code>string customer_cloud_identity_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerCloudIdentityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_cloud_identity_id = $var;

        return $this;
    }

    /**
     * If existing = true, the type of the customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo.CustomerType customer_type = 5;</code>
     * @return int
     */
    public function getCustomerType()
    {
        return $this->customer_type;
    }

    /**
     * If existing = true, the type of the customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CloudIdentityInfo.CustomerType customer_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCustomerType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\CloudIdentityInfo\CustomerType::class);
        $this->customer_type = $var;

        return $this;
    }

    /**
     * If existing = true, and is 2-tier customer, the channel partner of the
     * customer.
     *
     * Generated from protobuf field <code>string channel_partner_cloud_identity_id = 6;</code>
     * @return string
     */
    public function getChannelPartnerCloudIdentityId()
    {
        return $this->channel_partner_cloud_identity_id;
    }

    /**
     * If existing = true, and is 2-tier customer, the channel partner of the
     * customer.
     *
     * Generated from protobuf field <code>string channel_partner_cloud_identity_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelPartnerCloudIdentityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_partner_cloud_identity_id = $var;

        return $this;
    }

}
