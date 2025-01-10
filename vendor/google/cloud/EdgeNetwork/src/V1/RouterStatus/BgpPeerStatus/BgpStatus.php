<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/edgenetwork/v1/resources.proto

namespace Google\Cloud\EdgeNetwork\V1\RouterStatus\BgpPeerStatus;

use UnexpectedValueException;

/**
 * Status of the BGP peer: {UP, DOWN}
 *
 * Protobuf type <code>google.cloud.edgenetwork.v1.RouterStatus.BgpPeerStatus.BgpStatus</code>
 */
class BgpStatus
{
    /**
     * The default status indicating BGP session is in unknown state.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * The UP status indicating BGP session is established.
     *
     * Generated from protobuf enum <code>UP = 1;</code>
     */
    const UP = 1;
    /**
     * The DOWN state indicating BGP session is not established yet.
     *
     * Generated from protobuf enum <code>DOWN = 2;</code>
     */
    const DOWN = 2;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::UP => 'UP',
        self::DOWN => 'DOWN',
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

