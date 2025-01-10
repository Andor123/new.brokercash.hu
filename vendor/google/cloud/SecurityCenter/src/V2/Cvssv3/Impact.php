<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/vulnerability.proto

namespace Google\Cloud\SecurityCenter\V2\Cvssv3;

use UnexpectedValueException;

/**
 * The Impact metrics capture the effects of a successfully exploited
 * vulnerability on the component that suffers the worst outcome that is most
 * directly and predictably associated with the attack.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.Cvssv3.Impact</code>
 */
class Impact
{
    /**
     * Invalid value.
     *
     * Generated from protobuf enum <code>IMPACT_UNSPECIFIED = 0;</code>
     */
    const IMPACT_UNSPECIFIED = 0;
    /**
     * High impact.
     *
     * Generated from protobuf enum <code>IMPACT_HIGH = 1;</code>
     */
    const IMPACT_HIGH = 1;
    /**
     * Low impact.
     *
     * Generated from protobuf enum <code>IMPACT_LOW = 2;</code>
     */
    const IMPACT_LOW = 2;
    /**
     * No impact.
     *
     * Generated from protobuf enum <code>IMPACT_NONE = 3;</code>
     */
    const IMPACT_NONE = 3;

    private static $valueToName = [
        self::IMPACT_UNSPECIFIED => 'IMPACT_UNSPECIFIED',
        self::IMPACT_HIGH => 'IMPACT_HIGH',
        self::IMPACT_LOW => 'IMPACT_LOW',
        self::IMPACT_NONE => 'IMPACT_NONE',
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


