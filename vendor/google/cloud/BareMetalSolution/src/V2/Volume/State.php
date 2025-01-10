<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/volume.proto

namespace Google\Cloud\BareMetalSolution\V2\Volume;

use UnexpectedValueException;

/**
 * The possible states for a storage volume.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.Volume.State</code>
 */
class State
{
    /**
     * The storage volume is in an unknown state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The storage volume is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The storage volume is ready for use.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * The storage volume has been requested to be deleted.
     *
     * Generated from protobuf enum <code>DELETING = 3;</code>
     */
    const DELETING = 3;
    /**
     * The storage volume is being updated.
     *
     * Generated from protobuf enum <code>UPDATING = 4;</code>
     */
    const UPDATING = 4;
    /**
     * The storage volume is in cool off state. It will be deleted after
     * `expire_time`.
     *
     * Generated from protobuf enum <code>COOL_OFF = 5;</code>
     */
    const COOL_OFF = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
        self::DELETING => 'DELETING',
        self::UPDATING => 'UPDATING',
        self::COOL_OFF => 'COOL_OFF',
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

