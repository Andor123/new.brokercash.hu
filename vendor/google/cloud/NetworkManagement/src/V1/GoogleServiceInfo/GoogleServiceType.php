<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1\GoogleServiceInfo;

use UnexpectedValueException;

/**
 * Recognized type of a Google Service.
 *
 * Protobuf type <code>google.cloud.networkmanagement.v1.GoogleServiceInfo.GoogleServiceType</code>
 */
class GoogleServiceType
{
    /**
     * Unspecified Google Service.
     *
     * Generated from protobuf enum <code>GOOGLE_SERVICE_TYPE_UNSPECIFIED = 0;</code>
     */
    const GOOGLE_SERVICE_TYPE_UNSPECIFIED = 0;
    /**
     * Identity aware proxy.
     * https://cloud.google.com/iap/docs/using-tcp-forwarding
     *
     * Generated from protobuf enum <code>IAP = 1;</code>
     */
    const IAP = 1;
    /**
     * One of two services sharing IP ranges:
     * * Load Balancer proxy
     * * Centralized Health Check prober
     * https://cloud.google.com/load-balancing/docs/firewall-rules
     *
     * Generated from protobuf enum <code>GFE_PROXY_OR_HEALTH_CHECK_PROBER = 2;</code>
     */
    const GFE_PROXY_OR_HEALTH_CHECK_PROBER = 2;
    /**
     * Connectivity from Cloud DNS to forwarding targets or alternate name
     * servers that use private routing.
     * https://cloud.google.com/dns/docs/zones/forwarding-zones#firewall-rules
     * https://cloud.google.com/dns/docs/policies#firewall-rules
     *
     * Generated from protobuf enum <code>CLOUD_DNS = 3;</code>
     */
    const CLOUD_DNS = 3;
    /**
     * private.googleapis.com and restricted.googleapis.com
     *
     * Generated from protobuf enum <code>GOOGLE_API = 4;</code>
     */
    const GOOGLE_API = 4;
    /**
     * Google API via Private Service Connect.
     * https://cloud.google.com/vpc/docs/configure-private-service-connect-apis
     *
     * Generated from protobuf enum <code>GOOGLE_API_PSC = 5;</code>
     */
    const GOOGLE_API_PSC = 5;
    /**
     * Google API via VPC Service Controls.
     * https://cloud.google.com/vpc/docs/configure-private-service-connect-apis
     *
     * Generated from protobuf enum <code>GOOGLE_API_VPC_SC = 6;</code>
     */
    const GOOGLE_API_VPC_SC = 6;

    private static $valueToName = [
        self::GOOGLE_SERVICE_TYPE_UNSPECIFIED => 'GOOGLE_SERVICE_TYPE_UNSPECIFIED',
        self::IAP => 'IAP',
        self::GFE_PROXY_OR_HEALTH_CHECK_PROBER => 'GFE_PROXY_OR_HEALTH_CHECK_PROBER',
        self::CLOUD_DNS => 'CLOUD_DNS',
        self::GOOGLE_API => 'GOOGLE_API',
        self::GOOGLE_API_PSC => 'GOOGLE_API_PSC',
        self::GOOGLE_API_VPC_SC => 'GOOGLE_API_VPC_SC',
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

