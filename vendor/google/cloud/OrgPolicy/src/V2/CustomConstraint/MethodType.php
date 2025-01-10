<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/constraint.proto

namespace Google\Cloud\OrgPolicy\V2\CustomConstraint;

use UnexpectedValueException;

/**
 * The operation for which this constraint will be applied. To apply this
 * constraint only when creating new VMs, the `method_types` should be
 * `CREATE` only. To apply this constraint when creating or deleting
 * VMs, the `method_types` should be `CREATE` and `DELETE`.
 * `UPDATE` only custom constraints are not supported. Use `CREATE` or
 * `CREATE, UPDATE`.
 *
 * Protobuf type <code>google.cloud.orgpolicy.v2.CustomConstraint.MethodType</code>
 */
class MethodType
{
    /**
     * Unspecified. Results in an error.
     *
     * Generated from protobuf enum <code>METHOD_TYPE_UNSPECIFIED = 0;</code>
     */
    const METHOD_TYPE_UNSPECIFIED = 0;
    /**
     * Constraint applied when creating the resource.
     *
     * Generated from protobuf enum <code>CREATE = 1;</code>
     */
    const CREATE = 1;
    /**
     * Constraint applied when updating the resource.
     *
     * Generated from protobuf enum <code>UPDATE = 2;</code>
     */
    const UPDATE = 2;
    /**
     * Constraint applied when deleting the resource.
     * Not supported yet.
     *
     * Generated from protobuf enum <code>DELETE = 3;</code>
     */
    const DELETE = 3;
    /**
     * Constraint applied when removing an IAM grant.
     *
     * Generated from protobuf enum <code>REMOVE_GRANT = 4;</code>
     */
    const REMOVE_GRANT = 4;
    /**
     * Constraint applied when enforcing forced tagging.
     *
     * Generated from protobuf enum <code>GOVERN_TAGS = 5;</code>
     */
    const GOVERN_TAGS = 5;

    private static $valueToName = [
        self::METHOD_TYPE_UNSPECIFIED => 'METHOD_TYPE_UNSPECIFIED',
        self::CREATE => 'CREATE',
        self::UPDATE => 'UPDATE',
        self::DELETE => 'DELETE',
        self::REMOVE_GRANT => 'REMOVE_GRANT',
        self::GOVERN_TAGS => 'GOVERN_TAGS',
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

