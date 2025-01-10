<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Subnetwork which the current user has compute.subnetworks.use permission on.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.UsableSubnetwork</code>
 */
class UsableSubnetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The external IPv6 address range that is assigned to this subnetwork.
     *
     * Generated from protobuf field <code>optional string external_ipv6_prefix = 139299190;</code>
     */
    private $external_ipv6_prefix = null;
    /**
     * [Output Only] The internal IPv6 address range that is assigned to this subnetwork.
     *
     * Generated from protobuf field <code>optional string internal_ipv6_prefix = 506270056;</code>
     */
    private $internal_ipv6_prefix = null;
    /**
     * The range of internal addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>optional string ip_cidr_range = 98117322;</code>
     */
    private $ip_cidr_range = null;
    /**
     * The access type of IPv6 address this subnet holds. It's immutable and can only be specified during creation or the first time the subnet is updated into IPV4_IPV6 dual stack.
     * Check the Ipv6AccessType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string ipv6_access_type = 504658653;</code>
     */
    private $ipv6_access_type = null;
    /**
     * Network URL.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     */
    private $network = null;
    /**
     * The purpose of the resource. This field can be either PRIVATE, GLOBAL_MANAGED_PROXY, REGIONAL_MANAGED_PROXY, PRIVATE_SERVICE_CONNECT, or PRIVATE is the default purpose for user-created subnets or subnets that are automatically created in auto mode networks. Subnets with purpose set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY are user-created subnetworks that are reserved for Envoy-based load balancers. A subnet with purpose set to PRIVATE_SERVICE_CONNECT is used to publish services using Private Service Connect. If unspecified, the subnet purpose defaults to PRIVATE. The enableFlowLogs field isn't supported if the subnet purpose field is set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY.
     * Check the Purpose enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string purpose = 316407070;</code>
     */
    private $purpose = null;
    /**
     * The role of subnetwork. Currently, this field is only used when purpose is set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY. The value can be set to ACTIVE or BACKUP. An ACTIVE subnetwork is one that is currently being used for Envoy-based load balancers in a region. A BACKUP subnetwork is one that is ready to be promoted to ACTIVE or is currently draining. This field can be updated with a patch request.
     * Check the Role enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string role = 3506294;</code>
     */
    private $role = null;
    /**
     * Secondary IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UsableSubnetworkSecondaryRange secondary_ip_ranges = 136658915;</code>
     */
    private $secondary_ip_ranges;
    /**
     * The stack type for the subnet. If set to IPV4_ONLY, new VMs in the subnet are assigned IPv4 addresses only. If set to IPV4_IPV6, new VMs in the subnet can be assigned both IPv4 and IPv6 addresses. If not specified, IPV4_ONLY is used. This field can be both set at resource creation time and updated using patch.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     */
    private $stack_type = null;
    /**
     * Subnetwork URL.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     */
    private $subnetwork = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $external_ipv6_prefix
     *           [Output Only] The external IPv6 address range that is assigned to this subnetwork.
     *     @type string $internal_ipv6_prefix
     *           [Output Only] The internal IPv6 address range that is assigned to this subnetwork.
     *     @type string $ip_cidr_range
     *           The range of internal addresses that are owned by this subnetwork.
     *     @type string $ipv6_access_type
     *           The access type of IPv6 address this subnet holds. It's immutable and can only be specified during creation or the first time the subnet is updated into IPV4_IPV6 dual stack.
     *           Check the Ipv6AccessType enum for the list of possible values.
     *     @type string $network
     *           Network URL.
     *     @type string $purpose
     *           The purpose of the resource. This field can be either PRIVATE, GLOBAL_MANAGED_PROXY, REGIONAL_MANAGED_PROXY, PRIVATE_SERVICE_CONNECT, or PRIVATE is the default purpose for user-created subnets or subnets that are automatically created in auto mode networks. Subnets with purpose set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY are user-created subnetworks that are reserved for Envoy-based load balancers. A subnet with purpose set to PRIVATE_SERVICE_CONNECT is used to publish services using Private Service Connect. If unspecified, the subnet purpose defaults to PRIVATE. The enableFlowLogs field isn't supported if the subnet purpose field is set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY.
     *           Check the Purpose enum for the list of possible values.
     *     @type string $role
     *           The role of subnetwork. Currently, this field is only used when purpose is set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY. The value can be set to ACTIVE or BACKUP. An ACTIVE subnetwork is one that is currently being used for Envoy-based load balancers in a region. A BACKUP subnetwork is one that is ready to be promoted to ACTIVE or is currently draining. This field can be updated with a patch request.
     *           Check the Role enum for the list of possible values.
     *     @type array<\Google\Cloud\Compute\V1\UsableSubnetworkSecondaryRange>|\Google\Protobuf\Internal\RepeatedField $secondary_ip_ranges
     *           Secondary IP ranges.
     *     @type string $stack_type
     *           The stack type for the subnet. If set to IPV4_ONLY, new VMs in the subnet are assigned IPv4 addresses only. If set to IPV4_IPV6, new VMs in the subnet can be assigned both IPv4 and IPv6 addresses. If not specified, IPV4_ONLY is used. This field can be both set at resource creation time and updated using patch.
     *           Check the StackType enum for the list of possible values.
     *     @type string $subnetwork
     *           Subnetwork URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The external IPv6 address range that is assigned to this subnetwork.
     *
     * Generated from protobuf field <code>optional string external_ipv6_prefix = 139299190;</code>
     * @return string
     */
    public function getExternalIpv6Prefix()
    {
        return isset($this->external_ipv6_prefix) ? $this->external_ipv6_prefix : '';
    }

    public function hasExternalIpv6Prefix()
    {
        return isset($this->external_ipv6_prefix);
    }

    public function clearExternalIpv6Prefix()
    {
        unset($this->external_ipv6_prefix);
    }

    /**
     * [Output Only] The external IPv6 address range that is assigned to this subnetwork.
     *
     * Generated from protobuf field <code>optional string external_ipv6_prefix = 139299190;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalIpv6Prefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_ipv6_prefix = $var;

        return $this;
    }

    /**
     * [Output Only] The internal IPv6 address range that is assigned to this subnetwork.
     *
     * Generated from protobuf field <code>optional string internal_ipv6_prefix = 506270056;</code>
     * @return string
     */
    public function getInternalIpv6Prefix()
    {
        return isset($this->internal_ipv6_prefix) ? $this->internal_ipv6_prefix : '';
    }

    public function hasInternalIpv6Prefix()
    {
        return isset($this->internal_ipv6_prefix);
    }

    public function clearInternalIpv6Prefix()
    {
        unset($this->internal_ipv6_prefix);
    }

    /**
     * [Output Only] The internal IPv6 address range that is assigned to this subnetwork.
     *
     * Generated from protobuf field <code>optional string internal_ipv6_prefix = 506270056;</code>
     * @param string $var
     * @return $this
     */
    public function setInternalIpv6Prefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->internal_ipv6_prefix = $var;

        return $this;
    }

    /**
     * The range of internal addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>optional string ip_cidr_range = 98117322;</code>
     * @return string
     */
    public function getIpCidrRange()
    {
        return isset($this->ip_cidr_range) ? $this->ip_cidr_range : '';
    }

    public function hasIpCidrRange()
    {
        return isset($this->ip_cidr_range);
    }

    public function clearIpCidrRange()
    {
        unset($this->ip_cidr_range);
    }

    /**
     * The range of internal addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>optional string ip_cidr_range = 98117322;</code>
     * @param string $var
     * @return $this
     */
    public function setIpCidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_cidr_range = $var;

        return $this;
    }

    /**
     * The access type of IPv6 address this subnet holds. It's immutable and can only be specified during creation or the first time the subnet is updated into IPV4_IPV6 dual stack.
     * Check the Ipv6AccessType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string ipv6_access_type = 504658653;</code>
     * @return string
     */
    public function getIpv6AccessType()
    {
        return isset($this->ipv6_access_type) ? $this->ipv6_access_type : '';
    }

    public function hasIpv6AccessType()
    {
        return isset($this->ipv6_access_type);
    }

    public function clearIpv6AccessType()
    {
        unset($this->ipv6_access_type);
    }

    /**
     * The access type of IPv6 address this subnet holds. It's immutable and can only be specified during creation or the first time the subnet is updated into IPV4_IPV6 dual stack.
     * Check the Ipv6AccessType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string ipv6_access_type = 504658653;</code>
     * @param string $var
     * @return $this
     */
    public function setIpv6AccessType($var)
    {
        GPBUtil::checkString($var, True);
        $this->ipv6_access_type = $var;

        return $this;
    }

    /**
     * Network URL.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return isset($this->network) ? $this->network : '';
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * Network URL.
     *
     * Generated from protobuf field <code>optional string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * The purpose of the resource. This field can be either PRIVATE, GLOBAL_MANAGED_PROXY, REGIONAL_MANAGED_PROXY, PRIVATE_SERVICE_CONNECT, or PRIVATE is the default purpose for user-created subnets or subnets that are automatically created in auto mode networks. Subnets with purpose set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY are user-created subnetworks that are reserved for Envoy-based load balancers. A subnet with purpose set to PRIVATE_SERVICE_CONNECT is used to publish services using Private Service Connect. If unspecified, the subnet purpose defaults to PRIVATE. The enableFlowLogs field isn't supported if the subnet purpose field is set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY.
     * Check the Purpose enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string purpose = 316407070;</code>
     * @return string
     */
    public function getPurpose()
    {
        return isset($this->purpose) ? $this->purpose : '';
    }

    public function hasPurpose()
    {
        return isset($this->purpose);
    }

    public function clearPurpose()
    {
        unset($this->purpose);
    }

    /**
     * The purpose of the resource. This field can be either PRIVATE, GLOBAL_MANAGED_PROXY, REGIONAL_MANAGED_PROXY, PRIVATE_SERVICE_CONNECT, or PRIVATE is the default purpose for user-created subnets or subnets that are automatically created in auto mode networks. Subnets with purpose set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY are user-created subnetworks that are reserved for Envoy-based load balancers. A subnet with purpose set to PRIVATE_SERVICE_CONNECT is used to publish services using Private Service Connect. If unspecified, the subnet purpose defaults to PRIVATE. The enableFlowLogs field isn't supported if the subnet purpose field is set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY.
     * Check the Purpose enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string purpose = 316407070;</code>
     * @param string $var
     * @return $this
     */
    public function setPurpose($var)
    {
        GPBUtil::checkString($var, True);
        $this->purpose = $var;

        return $this;
    }

    /**
     * The role of subnetwork. Currently, this field is only used when purpose is set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY. The value can be set to ACTIVE or BACKUP. An ACTIVE subnetwork is one that is currently being used for Envoy-based load balancers in a region. A BACKUP subnetwork is one that is ready to be promoted to ACTIVE or is currently draining. This field can be updated with a patch request.
     * Check the Role enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string role = 3506294;</code>
     * @return string
     */
    public function getRole()
    {
        return isset($this->role) ? $this->role : '';
    }

    public function hasRole()
    {
        return isset($this->role);
    }

    public function clearRole()
    {
        unset($this->role);
    }

    /**
     * The role of subnetwork. Currently, this field is only used when purpose is set to GLOBAL_MANAGED_PROXY or REGIONAL_MANAGED_PROXY. The value can be set to ACTIVE or BACKUP. An ACTIVE subnetwork is one that is currently being used for Envoy-based load balancers in a region. A BACKUP subnetwork is one that is ready to be promoted to ACTIVE or is currently draining. This field can be updated with a patch request.
     * Check the Role enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string role = 3506294;</code>
     * @param string $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->role = $var;

        return $this;
    }

    /**
     * Secondary IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UsableSubnetworkSecondaryRange secondary_ip_ranges = 136658915;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecondaryIpRanges()
    {
        return $this->secondary_ip_ranges;
    }

    /**
     * Secondary IP ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UsableSubnetworkSecondaryRange secondary_ip_ranges = 136658915;</code>
     * @param array<\Google\Cloud\Compute\V1\UsableSubnetworkSecondaryRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecondaryIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\UsableSubnetworkSecondaryRange::class);
        $this->secondary_ip_ranges = $arr;

        return $this;
    }

    /**
     * The stack type for the subnet. If set to IPV4_ONLY, new VMs in the subnet are assigned IPv4 addresses only. If set to IPV4_IPV6, new VMs in the subnet can be assigned both IPv4 and IPv6 addresses. If not specified, IPV4_ONLY is used. This field can be both set at resource creation time and updated using patch.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     * @return string
     */
    public function getStackType()
    {
        return isset($this->stack_type) ? $this->stack_type : '';
    }

    public function hasStackType()
    {
        return isset($this->stack_type);
    }

    public function clearStackType()
    {
        unset($this->stack_type);
    }

    /**
     * The stack type for the subnet. If set to IPV4_ONLY, new VMs in the subnet are assigned IPv4 addresses only. If set to IPV4_IPV6, new VMs in the subnet can be assigned both IPv4 and IPv6 addresses. If not specified, IPV4_ONLY is used. This field can be both set at resource creation time and updated using patch.
     * Check the StackType enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string stack_type = 425908881;</code>
     * @param string $var
     * @return $this
     */
    public function setStackType($var)
    {
        GPBUtil::checkString($var, True);
        $this->stack_type = $var;

        return $this;
    }

    /**
     * Subnetwork URL.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @return string
     */
    public function getSubnetwork()
    {
        return isset($this->subnetwork) ? $this->subnetwork : '';
    }

    public function hasSubnetwork()
    {
        return isset($this->subnetwork);
    }

    public function clearSubnetwork()
    {
        unset($this->subnetwork);
    }

    /**
     * Subnetwork URL.
     *
     * Generated from protobuf field <code>optional string subnetwork = 307827694;</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork = $var;

        return $this;
    }

}
