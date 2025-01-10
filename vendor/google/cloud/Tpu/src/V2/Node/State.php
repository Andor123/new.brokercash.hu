<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2\Node;

use UnexpectedValueException;

/**
 * Represents the different states of a TPU node during its lifecycle.
 *
 * Protobuf type <code>google.cloud.tpu.v2.Node.State</code>
 */
class State
{
    /**
     * TPU node state is not known/set.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * TPU node is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * TPU node has been created.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * TPU node is restarting.
     *
     * Generated from protobuf enum <code>RESTARTING = 3;</code>
     */
    const RESTARTING = 3;
    /**
     * TPU node is undergoing reimaging.
     *
     * Generated from protobuf enum <code>REIMAGING = 4;</code>
     */
    const REIMAGING = 4;
    /**
     * TPU node is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 5;</code>
     */
    const DELETING = 5;
    /**
     * TPU node is being repaired and may be unusable. Details can be
     * found in the 'help_description' field.
     *
     * Generated from protobuf enum <code>REPAIRING = 6;</code>
     */
    const REPAIRING = 6;
    /**
     * TPU node is stopped.
     *
     * Generated from protobuf enum <code>STOPPED = 8;</code>
     */
    const STOPPED = 8;
    /**
     * TPU node is currently stopping.
     *
     * Generated from protobuf enum <code>STOPPING = 9;</code>
     */
    const STOPPING = 9;
    /**
     * TPU node is currently starting.
     *
     * Generated from protobuf enum <code>STARTING = 10;</code>
     */
    const STARTING = 10;
    /**
     * TPU node has been preempted. Only applies to Preemptible TPU Nodes.
     *
     * Generated from protobuf enum <code>PREEMPTED = 11;</code>
     */
    const PREEMPTED = 11;
    /**
     * TPU node has been terminated due to maintenance or has reached the end of
     * its life cycle (for preemptible nodes).
     *
     * Generated from protobuf enum <code>TERMINATED = 12;</code>
     */
    const TERMINATED = 12;
    /**
     * TPU node is currently hiding.
     *
     * Generated from protobuf enum <code>HIDING = 13;</code>
     */
    const HIDING = 13;
    /**
     * TPU node has been hidden.
     *
     * Generated from protobuf enum <code>HIDDEN = 14;</code>
     */
    const HIDDEN = 14;
    /**
     * TPU node is currently unhiding.
     *
     * Generated from protobuf enum <code>UNHIDING = 15;</code>
     */
    const UNHIDING = 15;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
        self::RESTARTING => 'RESTARTING',
        self::REIMAGING => 'REIMAGING',
        self::DELETING => 'DELETING',
        self::REPAIRING => 'REPAIRING',
        self::STOPPED => 'STOPPED',
        self::STOPPING => 'STOPPING',
        self::STARTING => 'STARTING',
        self::PREEMPTED => 'PREEMPTED',
        self::TERMINATED => 'TERMINATED',
        self::HIDING => 'HIDING',
        self::HIDDEN => 'HIDDEN',
        self::UNHIDING => 'UNHIDING',
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


