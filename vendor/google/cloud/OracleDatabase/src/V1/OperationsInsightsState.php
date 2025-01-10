<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/autonomous_database.proto

namespace Google\Cloud\OracleDatabase\V1;

use UnexpectedValueException;

/**
 * The state of the Operations Insights for this Autonomous Database.
 *
 * Protobuf type <code>google.cloud.oracledatabase.v1.OperationsInsightsState</code>
 */
class OperationsInsightsState
{
    /**
     * Default unspecified value.
     *
     * Generated from protobuf enum <code>OPERATIONS_INSIGHTS_STATE_UNSPECIFIED = 0;</code>
     */
    const OPERATIONS_INSIGHTS_STATE_UNSPECIFIED = 0;
    /**
     * Enabling status for operation insights.
     *
     * Generated from protobuf enum <code>ENABLING = 1;</code>
     */
    const ENABLING = 1;
    /**
     * Enabled status for operation insights.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * Disabling status for operation insights.
     *
     * Generated from protobuf enum <code>DISABLING = 3;</code>
     */
    const DISABLING = 3;
    /**
     * Not Enabled status for operation insights.
     *
     * Generated from protobuf enum <code>NOT_ENABLED = 4;</code>
     */
    const NOT_ENABLED = 4;
    /**
     * Failed enabling status for operation insights.
     *
     * Generated from protobuf enum <code>FAILED_ENABLING = 5;</code>
     */
    const FAILED_ENABLING = 5;
    /**
     * Failed disabling status for operation insights.
     *
     * Generated from protobuf enum <code>FAILED_DISABLING = 6;</code>
     */
    const FAILED_DISABLING = 6;

    private static $valueToName = [
        self::OPERATIONS_INSIGHTS_STATE_UNSPECIFIED => 'OPERATIONS_INSIGHTS_STATE_UNSPECIFIED',
        self::ENABLING => 'ENABLING',
        self::ENABLED => 'ENABLED',
        self::DISABLING => 'DISABLING',
        self::NOT_ENABLED => 'NOT_ENABLED',
        self::FAILED_ENABLING => 'FAILED_ENABLING',
        self::FAILED_DISABLING => 'FAILED_DISABLING',
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

