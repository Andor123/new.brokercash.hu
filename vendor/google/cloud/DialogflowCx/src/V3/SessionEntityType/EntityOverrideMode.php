<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/session_entity_type.proto

namespace Google\Cloud\Dialogflow\Cx\V3\SessionEntityType;

use UnexpectedValueException;

/**
 * The types of modifications for the session entity type.
 *
 * Protobuf type <code>google.cloud.dialogflow.cx.v3.SessionEntityType.EntityOverrideMode</code>
 */
class EntityOverrideMode
{
    /**
     * Not specified. This value should be never used.
     *
     * Generated from protobuf enum <code>ENTITY_OVERRIDE_MODE_UNSPECIFIED = 0;</code>
     */
    const ENTITY_OVERRIDE_MODE_UNSPECIFIED = 0;
    /**
     * The collection of session entities overrides the collection of entities
     * in the corresponding custom entity type.
     *
     * Generated from protobuf enum <code>ENTITY_OVERRIDE_MODE_OVERRIDE = 1;</code>
     */
    const ENTITY_OVERRIDE_MODE_OVERRIDE = 1;
    /**
     * The collection of session entities extends the collection of entities in
     * the corresponding custom entity type.
     * Note: Even in this override mode calls to `ListSessionEntityTypes`,
     * `GetSessionEntityType`, `CreateSessionEntityType` and
     * `UpdateSessionEntityType` only return the additional entities added in
     * this session entity type. If you want to get the supplemented list,
     * please call
     * [EntityTypes.GetEntityType][google.cloud.dialogflow.cx.v3.EntityTypes.GetEntityType]
     * on the custom entity type and merge.
     *
     * Generated from protobuf enum <code>ENTITY_OVERRIDE_MODE_SUPPLEMENT = 2;</code>
     */
    const ENTITY_OVERRIDE_MODE_SUPPLEMENT = 2;

    private static $valueToName = [
        self::ENTITY_OVERRIDE_MODE_UNSPECIFIED => 'ENTITY_OVERRIDE_MODE_UNSPECIFIED',
        self::ENTITY_OVERRIDE_MODE_OVERRIDE => 'ENTITY_OVERRIDE_MODE_OVERRIDE',
        self::ENTITY_OVERRIDE_MODE_SUPPLEMENT => 'ENTITY_OVERRIDE_MODE_SUPPLEMENT',
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


