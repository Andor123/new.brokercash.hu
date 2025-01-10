<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/import_strategy.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use UnexpectedValueException;

/**
 * Import strategies for the conflict resolution of resources (i.e. intents,
 * entities, and webhooks) with identical display names during import
 * operations.
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.ImportStrategy</code>
 */
class ImportStrategy
{
    /**
     * Unspecified. Treated as 'CREATE_NEW'.
     *
     * Generated from protobuf enum <code>IMPORT_STRATEGY_UNSPECIFIED = 0;</code>
     */
    const IMPORT_STRATEGY_UNSPECIFIED = 0;
    /**
     * Create a new resource with a numeric suffix appended to the end of the
     * existing display name.
     *
     * Generated from protobuf enum <code>IMPORT_STRATEGY_CREATE_NEW = 1;</code>
     */
    const IMPORT_STRATEGY_CREATE_NEW = 1;
    /**
     * Replace existing resource with incoming resource in the content to be
     * imported.
     *
     * Generated from protobuf enum <code>IMPORT_STRATEGY_REPLACE = 2;</code>
     */
    const IMPORT_STRATEGY_REPLACE = 2;
    /**
     * Keep existing resource and discard incoming resource in the content to be
     * imported.
     *
     * Generated from protobuf enum <code>IMPORT_STRATEGY_KEEP = 3;</code>
     */
    const IMPORT_STRATEGY_KEEP = 3;
    /**
     * Combine existing and incoming resources when a conflict is encountered.
     *
     * Generated from protobuf enum <code>IMPORT_STRATEGY_MERGE = 4;</code>
     */
    const IMPORT_STRATEGY_MERGE = 4;
    /**
     * Throw error if a conflict is encountered.
     *
     * Generated from protobuf enum <code>IMPORT_STRATEGY_THROW_ERROR = 5;</code>
     */
    const IMPORT_STRATEGY_THROW_ERROR = 5;

    private static $valueToName = [
        self::IMPORT_STRATEGY_UNSPECIFIED => 'IMPORT_STRATEGY_UNSPECIFIED',
        self::IMPORT_STRATEGY_CREATE_NEW => 'IMPORT_STRATEGY_CREATE_NEW',
        self::IMPORT_STRATEGY_REPLACE => 'IMPORT_STRATEGY_REPLACE',
        self::IMPORT_STRATEGY_KEEP => 'IMPORT_STRATEGY_KEEP',
        self::IMPORT_STRATEGY_MERGE => 'IMPORT_STRATEGY_MERGE',
        self::IMPORT_STRATEGY_THROW_ERROR => 'IMPORT_STRATEGY_THROW_ERROR',
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

