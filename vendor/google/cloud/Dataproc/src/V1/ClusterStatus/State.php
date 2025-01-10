<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1\ClusterStatus;

use UnexpectedValueException;

/**
 * The cluster state.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.ClusterStatus.State</code>
 */
class State
{
    /**
     * The cluster state is unknown.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * The cluster is being created and set up. It is not ready for use.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The cluster is currently running and healthy. It is ready for use.
     * **Note:** The cluster state changes from "creating" to "running" status
     * after the master node(s), first two primary worker nodes (and the last
     * primary worker node if primary workers > 2) are running.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The cluster encountered an error. It is not ready for use.
     *
     * Generated from protobuf enum <code>ERROR = 3;</code>
     */
    const ERROR = 3;
    /**
     * The cluster has encountered an error while being updated. Jobs can
     * be submitted to the cluster, but the cluster cannot be updated.
     *
     * Generated from protobuf enum <code>ERROR_DUE_TO_UPDATE = 9;</code>
     */
    const ERROR_DUE_TO_UPDATE = 9;
    /**
     * The cluster is being deleted. It cannot be used.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * The cluster is being updated. It continues to accept and process jobs.
     *
     * Generated from protobuf enum <code>UPDATING = 5;</code>
     */
    const UPDATING = 5;
    /**
     * The cluster is being stopped. It cannot be used.
     *
     * Generated from protobuf enum <code>STOPPING = 6;</code>
     */
    const STOPPING = 6;
    /**
     * The cluster is currently stopped. It is not ready for use.
     *
     * Generated from protobuf enum <code>STOPPED = 7;</code>
     */
    const STOPPED = 7;
    /**
     * The cluster is being started. It is not ready for use.
     *
     * Generated from protobuf enum <code>STARTING = 8;</code>
     */
    const STARTING = 8;
    /**
     * The cluster is being repaired. It is not ready for use.
     *
     * Generated from protobuf enum <code>REPAIRING = 10;</code>
     */
    const REPAIRING = 10;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::CREATING => 'CREATING',
        self::RUNNING => 'RUNNING',
        self::ERROR => 'ERROR',
        self::ERROR_DUE_TO_UPDATE => 'ERROR_DUE_TO_UPDATE',
        self::DELETING => 'DELETING',
        self::UPDATING => 'UPDATING',
        self::STOPPING => 'STOPPING',
        self::STOPPED => 'STOPPED',
        self::STARTING => 'STARTING',
        self::REPAIRING => 'REPAIRING',
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


