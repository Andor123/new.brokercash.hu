<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1\AbortInfo;

use UnexpectedValueException;

/**
 * Abort cause types:
 *
 * Protobuf type <code>google.cloud.networkmanagement.v1.AbortInfo.Cause</code>
 */
class Cause
{
    /**
     * Cause is unspecified.
     *
     * Generated from protobuf enum <code>CAUSE_UNSPECIFIED = 0;</code>
     */
    const CAUSE_UNSPECIFIED = 0;
    /**
     * Aborted due to unknown network. Deprecated, not used in the new tests.
     *
     * Generated from protobuf enum <code>UNKNOWN_NETWORK = 1 [deprecated = true];</code>
     */
    const UNKNOWN_NETWORK = 1;
    /**
     * Aborted because no project information can be derived from the test
     * input. Deprecated, not used in the new tests.
     *
     * Generated from protobuf enum <code>UNKNOWN_PROJECT = 3 [deprecated = true];</code>
     */
    const UNKNOWN_PROJECT = 3;
    /**
     * Aborted because traffic is sent from a public IP to an instance without
     * an external IP. Deprecated, not used in the new tests.
     *
     * Generated from protobuf enum <code>NO_EXTERNAL_IP = 7 [deprecated = true];</code>
     */
    const NO_EXTERNAL_IP = 7;
    /**
     * Aborted because none of the traces matches destination information
     * specified in the input test request. Deprecated, not used in the new
     * tests.
     *
     * Generated from protobuf enum <code>UNINTENDED_DESTINATION = 8 [deprecated = true];</code>
     */
    const UNINTENDED_DESTINATION = 8;
    /**
     * Aborted because the source endpoint could not be found. Deprecated, not
     * used in the new tests.
     *
     * Generated from protobuf enum <code>SOURCE_ENDPOINT_NOT_FOUND = 11 [deprecated = true];</code>
     */
    const SOURCE_ENDPOINT_NOT_FOUND = 11;
    /**
     * Aborted because the source network does not match the source endpoint.
     * Deprecated, not used in the new tests.
     *
     * Generated from protobuf enum <code>MISMATCHED_SOURCE_NETWORK = 12 [deprecated = true];</code>
     */
    const MISMATCHED_SOURCE_NETWORK = 12;
    /**
     * Aborted because the destination endpoint could not be found. Deprecated,
     * not used in the new tests.
     *
     * Generated from protobuf enum <code>DESTINATION_ENDPOINT_NOT_FOUND = 13 [deprecated = true];</code>
     */
    const DESTINATION_ENDPOINT_NOT_FOUND = 13;
    /**
     * Aborted because the destination network does not match the destination
     * endpoint. Deprecated, not used in the new tests.
     *
     * Generated from protobuf enum <code>MISMATCHED_DESTINATION_NETWORK = 14 [deprecated = true];</code>
     */
    const MISMATCHED_DESTINATION_NETWORK = 14;
    /**
     * Aborted because no endpoint with the packet's destination IP address is
     * found.
     *
     * Generated from protobuf enum <code>UNKNOWN_IP = 2;</code>
     */
    const UNKNOWN_IP = 2;
    /**
     * Aborted because the source IP address doesn't belong to any of the
     * subnets of the source VPC network.
     *
     * Generated from protobuf enum <code>SOURCE_IP_ADDRESS_NOT_IN_SOURCE_NETWORK = 23;</code>
     */
    const SOURCE_IP_ADDRESS_NOT_IN_SOURCE_NETWORK = 23;
    /**
     * Aborted because user lacks permission to access all or part of the
     * network configurations required to run the test.
     *
     * Generated from protobuf enum <code>PERMISSION_DENIED = 4;</code>
     */
    const PERMISSION_DENIED = 4;
    /**
     * Aborted because user lacks permission to access Cloud NAT configs
     * required to run the test.
     *
     * Generated from protobuf enum <code>PERMISSION_DENIED_NO_CLOUD_NAT_CONFIGS = 28;</code>
     */
    const PERMISSION_DENIED_NO_CLOUD_NAT_CONFIGS = 28;
    /**
     * Aborted because user lacks permission to access Network endpoint group
     * endpoint configs required to run the test.
     *
     * Generated from protobuf enum <code>PERMISSION_DENIED_NO_NEG_ENDPOINT_CONFIGS = 29;</code>
     */
    const PERMISSION_DENIED_NO_NEG_ENDPOINT_CONFIGS = 29;
    /**
     * Aborted because no valid source or destination endpoint is derived from
     * the input test request.
     *
     * Generated from protobuf enum <code>NO_SOURCE_LOCATION = 5;</code>
     */
    const NO_SOURCE_LOCATION = 5;
    /**
     * Aborted because the source or destination endpoint specified in
     * the request is invalid. Some examples:
     * - The request might contain malformed resource URI, project ID, or IP
     * address.
     * - The request might contain inconsistent information (for example, the
     * request might include both the instance and the network, but the instance
     * might not have a NIC in that network).
     *
     * Generated from protobuf enum <code>INVALID_ARGUMENT = 6;</code>
     */
    const INVALID_ARGUMENT = 6;
    /**
     * Aborted because the number of steps in the trace exceeds a certain
     * limit. It might be caused by a routing loop.
     *
     * Generated from protobuf enum <code>TRACE_TOO_LONG = 9;</code>
     */
    const TRACE_TOO_LONG = 9;
    /**
     * Aborted due to internal server error.
     *
     * Generated from protobuf enum <code>INTERNAL_ERROR = 10;</code>
     */
    const INTERNAL_ERROR = 10;
    /**
     * Aborted because the test scenario is not supported.
     *
     * Generated from protobuf enum <code>UNSUPPORTED = 15;</code>
     */
    const UNSUPPORTED = 15;
    /**
     * Aborted because the source and destination resources have no common IP
     * version.
     *
     * Generated from protobuf enum <code>MISMATCHED_IP_VERSION = 16;</code>
     */
    const MISMATCHED_IP_VERSION = 16;
    /**
     * Aborted because the connection between the control plane and the node of
     * the source cluster is initiated by the node and managed by the
     * Konnectivity proxy.
     *
     * Generated from protobuf enum <code>GKE_KONNECTIVITY_PROXY_UNSUPPORTED = 17;</code>
     */
    const GKE_KONNECTIVITY_PROXY_UNSUPPORTED = 17;
    /**
     * Aborted because expected resource configuration was missing.
     *
     * Generated from protobuf enum <code>RESOURCE_CONFIG_NOT_FOUND = 18;</code>
     */
    const RESOURCE_CONFIG_NOT_FOUND = 18;
    /**
     * Aborted because expected VM instance configuration was missing.
     *
     * Generated from protobuf enum <code>VM_INSTANCE_CONFIG_NOT_FOUND = 24;</code>
     */
    const VM_INSTANCE_CONFIG_NOT_FOUND = 24;
    /**
     * Aborted because expected network configuration was missing.
     *
     * Generated from protobuf enum <code>NETWORK_CONFIG_NOT_FOUND = 25;</code>
     */
    const NETWORK_CONFIG_NOT_FOUND = 25;
    /**
     * Aborted because expected firewall configuration was missing.
     *
     * Generated from protobuf enum <code>FIREWALL_CONFIG_NOT_FOUND = 26;</code>
     */
    const FIREWALL_CONFIG_NOT_FOUND = 26;
    /**
     * Aborted because expected route configuration was missing.
     *
     * Generated from protobuf enum <code>ROUTE_CONFIG_NOT_FOUND = 27;</code>
     */
    const ROUTE_CONFIG_NOT_FOUND = 27;
    /**
     * Aborted because a PSC endpoint selection for the Google-managed service
     * is ambiguous (several PSC endpoints satisfy test input).
     *
     * Generated from protobuf enum <code>GOOGLE_MANAGED_SERVICE_AMBIGUOUS_PSC_ENDPOINT = 19;</code>
     */
    const GOOGLE_MANAGED_SERVICE_AMBIGUOUS_PSC_ENDPOINT = 19;
    /**
     * Aborted because tests with a PSC-based Cloud SQL instance as a source are
     * not supported.
     *
     * Generated from protobuf enum <code>SOURCE_PSC_CLOUD_SQL_UNSUPPORTED = 20;</code>
     */
    const SOURCE_PSC_CLOUD_SQL_UNSUPPORTED = 20;
    /**
     * Aborted because tests with a forwarding rule as a source are not
     * supported.
     *
     * Generated from protobuf enum <code>SOURCE_FORWARDING_RULE_UNSUPPORTED = 21;</code>
     */
    const SOURCE_FORWARDING_RULE_UNSUPPORTED = 21;
    /**
     * Aborted because one of the endpoints is a non-routable IP address
     * (loopback, link-local, etc).
     *
     * Generated from protobuf enum <code>NON_ROUTABLE_IP_ADDRESS = 22;</code>
     */
    const NON_ROUTABLE_IP_ADDRESS = 22;
    /**
     * Aborted due to an unknown issue in the Google-managed project.
     *
     * Generated from protobuf enum <code>UNKNOWN_ISSUE_IN_GOOGLE_MANAGED_PROJECT = 30;</code>
     */
    const UNKNOWN_ISSUE_IN_GOOGLE_MANAGED_PROJECT = 30;
    /**
     * Aborted due to an unsupported configuration of the Google-managed
     * project.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_GOOGLE_MANAGED_PROJECT_CONFIG = 31;</code>
     */
    const UNSUPPORTED_GOOGLE_MANAGED_PROJECT_CONFIG = 31;

    private static $valueToName = [
        self::CAUSE_UNSPECIFIED => 'CAUSE_UNSPECIFIED',
        self::UNKNOWN_NETWORK => 'UNKNOWN_NETWORK',
        self::UNKNOWN_PROJECT => 'UNKNOWN_PROJECT',
        self::NO_EXTERNAL_IP => 'NO_EXTERNAL_IP',
        self::UNINTENDED_DESTINATION => 'UNINTENDED_DESTINATION',
        self::SOURCE_ENDPOINT_NOT_FOUND => 'SOURCE_ENDPOINT_NOT_FOUND',
        self::MISMATCHED_SOURCE_NETWORK => 'MISMATCHED_SOURCE_NETWORK',
        self::DESTINATION_ENDPOINT_NOT_FOUND => 'DESTINATION_ENDPOINT_NOT_FOUND',
        self::MISMATCHED_DESTINATION_NETWORK => 'MISMATCHED_DESTINATION_NETWORK',
        self::UNKNOWN_IP => 'UNKNOWN_IP',
        self::SOURCE_IP_ADDRESS_NOT_IN_SOURCE_NETWORK => 'SOURCE_IP_ADDRESS_NOT_IN_SOURCE_NETWORK',
        self::PERMISSION_DENIED => 'PERMISSION_DENIED',
        self::PERMISSION_DENIED_NO_CLOUD_NAT_CONFIGS => 'PERMISSION_DENIED_NO_CLOUD_NAT_CONFIGS',
        self::PERMISSION_DENIED_NO_NEG_ENDPOINT_CONFIGS => 'PERMISSION_DENIED_NO_NEG_ENDPOINT_CONFIGS',
        self::NO_SOURCE_LOCATION => 'NO_SOURCE_LOCATION',
        self::INVALID_ARGUMENT => 'INVALID_ARGUMENT',
        self::TRACE_TOO_LONG => 'TRACE_TOO_LONG',
        self::INTERNAL_ERROR => 'INTERNAL_ERROR',
        self::UNSUPPORTED => 'UNSUPPORTED',
        self::MISMATCHED_IP_VERSION => 'MISMATCHED_IP_VERSION',
        self::GKE_KONNECTIVITY_PROXY_UNSUPPORTED => 'GKE_KONNECTIVITY_PROXY_UNSUPPORTED',
        self::RESOURCE_CONFIG_NOT_FOUND => 'RESOURCE_CONFIG_NOT_FOUND',
        self::VM_INSTANCE_CONFIG_NOT_FOUND => 'VM_INSTANCE_CONFIG_NOT_FOUND',
        self::NETWORK_CONFIG_NOT_FOUND => 'NETWORK_CONFIG_NOT_FOUND',
        self::FIREWALL_CONFIG_NOT_FOUND => 'FIREWALL_CONFIG_NOT_FOUND',
        self::ROUTE_CONFIG_NOT_FOUND => 'ROUTE_CONFIG_NOT_FOUND',
        self::GOOGLE_MANAGED_SERVICE_AMBIGUOUS_PSC_ENDPOINT => 'GOOGLE_MANAGED_SERVICE_AMBIGUOUS_PSC_ENDPOINT',
        self::SOURCE_PSC_CLOUD_SQL_UNSUPPORTED => 'SOURCE_PSC_CLOUD_SQL_UNSUPPORTED',
        self::SOURCE_FORWARDING_RULE_UNSUPPORTED => 'SOURCE_FORWARDING_RULE_UNSUPPORTED',
        self::NON_ROUTABLE_IP_ADDRESS => 'NON_ROUTABLE_IP_ADDRESS',
        self::UNKNOWN_ISSUE_IN_GOOGLE_MANAGED_PROJECT => 'UNKNOWN_ISSUE_IN_GOOGLE_MANAGED_PROJECT',
        self::UNSUPPORTED_GOOGLE_MANAGED_PROJECT_CONFIG => 'UNSUPPORTED_GOOGLE_MANAGED_PROJECT_CONFIG',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

