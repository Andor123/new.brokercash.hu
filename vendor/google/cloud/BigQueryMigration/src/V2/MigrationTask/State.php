<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_entities.proto

namespace Google\Cloud\BigQuery\Migration\V2\MigrationTask;

use UnexpectedValueException;

/**
 * Possible states of a migration task.
 *
 * Protobuf type <code>google.cloud.bigquery.migration.v2.MigrationTask.State</code>
 */
class State
{
    /**
     * The state is unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The task is waiting for orchestration.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The task is assigned to an orchestrator.
     *
     * Generated from protobuf enum <code>ORCHESTRATING = 2;</code>
     */
    const ORCHESTRATING = 2;
    /**
     * The task is running, i.e. its subtasks are ready for execution.
     *
     * Generated from protobuf enum <code>RUNNING = 3;</code>
     */
    const RUNNING = 3;
    /**
     * Tha task is paused. Assigned subtasks can continue, but no new subtasks
     * will be scheduled.
     *
     * Generated from protobuf enum <code>PAUSED = 4;</code>
     */
    const PAUSED = 4;
    /**
     * The task finished successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 5;</code>
     */
    const SUCCEEDED = 5;
    /**
     * The task finished unsuccessfully.
     *
     * Generated from protobuf enum <code>FAILED = 6;</code>
     */
    const FAILED = 6;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PENDING => 'PENDING',
        self::ORCHESTRATING => 'ORCHESTRATING',
        self::RUNNING => 'RUNNING',
        self::PAUSED => 'PAUSED',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
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

