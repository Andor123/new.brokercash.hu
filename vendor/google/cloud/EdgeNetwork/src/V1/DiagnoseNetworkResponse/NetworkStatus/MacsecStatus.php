<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/edgenetwork/v1/service.proto

namespace Google\Cloud\EdgeNetwork\V1\DiagnoseNetworkResponse\NetworkStatus;

use UnexpectedValueException;

/**
 * Denotes the status of MACsec sessions for the links of a zone.
 *
 * Protobuf type <code>google.cloud.edgenetwork.v1.DiagnoseNetworkResponse.NetworkStatus.MacsecStatus</code>
 */
class MacsecStatus
{
    /**
     * MACsec status not specified, likely due to missing metrics.
     *
     * Generated from protobuf enum <code>MACSEC_STATUS_UNSPECIFIED = 0;</code>
     */
    const MACSEC_STATUS_UNSPECIFIED = 0;
    /**
     * All relevant links have at least one MACsec session up.
     *
     * Generated from protobuf enum <code>SECURE = 1;</code>
     */
    const SECURE = 1;
    /**
     * At least one relevant link does not have any MACsec sessions up.
     *
     * Generated from protobuf enum <code>UNSECURE = 2;</code>
     */
    const UNSECURE = 2;

    private static $valueToName = [
        self::MACSEC_STATUS_UNSPECIFIED => 'MACSEC_STATUS_UNSPECIFIED',
        self::SECURE => 'SECURE',
        self::UNSECURE => 'UNSECURE',
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

