<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/constraint.proto

namespace Google\Cloud\OrgPolicy\V2\CustomConstraint;

use UnexpectedValueException;

/**
 * Allow or deny type.
 *
 * Protobuf type <code>google.cloud.orgpolicy.v2.CustomConstraint.ActionType</code>
 */
class ActionType
{
    /**
     * Unspecified. Results in an error.
     *
     * Generated from protobuf enum <code>ACTION_TYPE_UNSPECIFIED = 0;</code>
     */
    const ACTION_TYPE_UNSPECIFIED = 0;
    /**
     * Allowed action type.
     *
     * Generated from protobuf enum <code>ALLOW = 1;</code>
     */
    const ALLOW = 1;
    /**
     * Deny action type.
     *
     * Generated from protobuf enum <code>DENY = 2;</code>
     */
    const DENY = 2;

    private static $valueToName = [
        self::ACTION_TYPE_UNSPECIFIED => 'ACTION_TYPE_UNSPECIFIED',
        self::ALLOW => 'ALLOW',
        self::DENY => 'DENY',
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

