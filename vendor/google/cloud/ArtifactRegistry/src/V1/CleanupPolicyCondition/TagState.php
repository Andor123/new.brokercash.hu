<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1\CleanupPolicyCondition;

use UnexpectedValueException;

/**
 * Statuses applying to versions.
 *
 * Protobuf type <code>google.devtools.artifactregistry.v1.CleanupPolicyCondition.TagState</code>
 */
class TagState
{
    /**
     * Tag status not specified.
     *
     * Generated from protobuf enum <code>TAG_STATE_UNSPECIFIED = 0;</code>
     */
    const TAG_STATE_UNSPECIFIED = 0;
    /**
     * Applies to tagged versions only.
     *
     * Generated from protobuf enum <code>TAGGED = 1;</code>
     */
    const TAGGED = 1;
    /**
     * Applies to untagged versions only.
     *
     * Generated from protobuf enum <code>UNTAGGED = 2;</code>
     */
    const UNTAGGED = 2;
    /**
     * Applies to all versions.
     *
     * Generated from protobuf enum <code>ANY = 3;</code>
     */
    const ANY = 3;

    private static $valueToName = [
        self::TAG_STATE_UNSPECIFIED => 'TAG_STATE_UNSPECIFIED',
        self::TAGGED => 'TAGGED',
        self::UNTAGGED => 'UNTAGGED',
        self::ANY => 'ANY',
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

