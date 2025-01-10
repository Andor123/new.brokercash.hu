<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1\DatabaseTableSpec;

use UnexpectedValueException;

/**
 * Type of the table.
 *
 * Protobuf type <code>google.cloud.datacatalog.v1.DatabaseTableSpec.TableType</code>
 */
class TableType
{
    /**
     * Default unknown table type.
     *
     * Generated from protobuf enum <code>TABLE_TYPE_UNSPECIFIED = 0;</code>
     */
    const TABLE_TYPE_UNSPECIFIED = 0;
    /**
     * Native table.
     *
     * Generated from protobuf enum <code>NATIVE = 1;</code>
     */
    const NATIVE = 1;
    /**
     * External table.
     *
     * Generated from protobuf enum <code>EXTERNAL = 2;</code>
     */
    const EXTERNAL = 2;

    private static $valueToName = [
        self::TABLE_TYPE_UNSPECIFIED => 'TABLE_TYPE_UNSPECIFIED',
        self::NATIVE => 'NATIVE',
        self::EXTERNAL => 'EXTERNAL',
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


