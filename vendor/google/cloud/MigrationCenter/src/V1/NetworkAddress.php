<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of network address.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.NetworkAddress</code>
 */
class NetworkAddress extends \Google\Protobuf\Internal\Message
{
    /**
     * Assigned or configured IP Address.
     *
     * Generated from protobuf field <code>string ip_address = 1;</code>
     */
    protected $ip_address = '';
    /**
     * Subnet mask.
     *
     * Generated from protobuf field <code>string subnet_mask = 2;</code>
     */
    protected $subnet_mask = '';
    /**
     * Broadcast address.
     *
     * Generated from protobuf field <code>string bcast = 3;</code>
     */
    protected $bcast = '';
    /**
     * Fully qualified domain name.
     *
     * Generated from protobuf field <code>string fqdn = 4;</code>
     */
    protected $fqdn = '';
    /**
     * Whether DHCP is used to assign addresses.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NetworkAddress.AddressAssignment assignment = 5;</code>
     */
    protected $assignment = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ip_address
     *           Assigned or configured IP Address.
     *     @type string $subnet_mask
     *           Subnet mask.
     *     @type string $bcast
     *           Broadcast address.
     *     @type string $fqdn
     *           Fully qualified domain name.
     *     @type int $assignment
     *           Whether DHCP is used to assign addresses.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Assigned or configured IP Address.
     *
     * Generated from protobuf field <code>string ip_address = 1;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Assigned or configured IP Address.
     *
     * Generated from protobuf field <code>string ip_address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * Subnet mask.
     *
     * Generated from protobuf field <code>string subnet_mask = 2;</code>
     * @return string
     */
    public function getSubnetMask()
    {
        return $this->subnet_mask;
    }

    /**
     * Subnet mask.
     *
     * Generated from protobuf field <code>string subnet_mask = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetMask($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnet_mask = $var;

        return $this;
    }

    /**
     * Broadcast address.
     *
     * Generated from protobuf field <code>string bcast = 3;</code>
     * @return string
     */
    public function getBcast()
    {
        return $this->bcast;
    }

    /**
     * Broadcast address.
     *
     * Generated from protobuf field <code>string bcast = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBcast($var)
    {
        GPBUtil::checkString($var, True);
        $this->bcast = $var;

        return $this;
    }

    /**
     * Fully qualified domain name.
     *
     * Generated from protobuf field <code>string fqdn = 4;</code>
     * @return string
     */
    public function getFqdn()
    {
        return $this->fqdn;
    }

    /**
     * Fully qualified domain name.
     *
     * Generated from protobuf field <code>string fqdn = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFqdn($var)
    {
        GPBUtil::checkString($var, True);
        $this->fqdn = $var;

        return $this;
    }

    /**
     * Whether DHCP is used to assign addresses.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NetworkAddress.AddressAssignment assignment = 5;</code>
     * @return int
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Whether DHCP is used to assign addresses.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.NetworkAddress.AddressAssignment assignment = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAssignment($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\MigrationCenter\V1\NetworkAddress\AddressAssignment::class);
        $this->assignment = $var;

        return $this;
    }

}
