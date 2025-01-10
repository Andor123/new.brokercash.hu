<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\BackendServiceLogConfig;

use UnexpectedValueException;

/**
 * This field can only be specified if logging is enabled for this backend service. Configures whether all, none or a subset of optional fields should be added to the reported logs. One of [INCLUDE_ALL_OPTIONAL, EXCLUDE_ALL_OPTIONAL, CUSTOM]. Default is EXCLUDE_ALL_OPTIONAL.
 *
 * Protobuf type <code>google.cloud.compute.v1.BackendServiceLogConfig.OptionalMode</code>
 */
class OptionalMode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_OPTIONAL_MODE = 0;</code>
     */
    const UNDEFINED_OPTIONAL_MODE = 0;
    /**
     * A subset of optional fields.
     *
     * Generated from protobuf enum <code>CUSTOM = 388595569;</code>
     */
    const CUSTOM = 388595569;
    /**
     * None optional fields.
     *
     * Generated from protobuf enum <code>EXCLUDE_ALL_OPTIONAL = 168636099;</code>
     */
    const EXCLUDE_ALL_OPTIONAL = 168636099;
    /**
     * All optional fields.
     *
     * Generated from protobuf enum <code>INCLUDE_ALL_OPTIONAL = 535606965;</code>
     */
    const INCLUDE_ALL_OPTIONAL = 535606965;

    private static $valueToName = [
        self::UNDEFINED_OPTIONAL_MODE => 'UNDEFINED_OPTIONAL_MODE',
        self::CUSTOM => 'CUSTOM',
        self::EXCLUDE_ALL_OPTIONAL => 'EXCLUDE_ALL_OPTIONAL',
        self::INCLUDE_ALL_OPTIONAL => 'INCLUDE_ALL_OPTIONAL',
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

