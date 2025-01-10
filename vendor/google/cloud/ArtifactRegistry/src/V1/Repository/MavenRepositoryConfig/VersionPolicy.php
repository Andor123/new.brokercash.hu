<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1\Repository\MavenRepositoryConfig;

use UnexpectedValueException;

/**
 * VersionPolicy is the version policy for the repository.
 *
 * Protobuf type <code>google.devtools.artifactregistry.v1.Repository.MavenRepositoryConfig.VersionPolicy</code>
 */
class VersionPolicy
{
    /**
     * VERSION_POLICY_UNSPECIFIED - the version policy is not defined.
     * When the version policy is not defined, no validation is performed
     * for the versions.
     *
     * Generated from protobuf enum <code>VERSION_POLICY_UNSPECIFIED = 0;</code>
     */
    const VERSION_POLICY_UNSPECIFIED = 0;
    /**
     * RELEASE - repository will accept only Release versions.
     *
     * Generated from protobuf enum <code>RELEASE = 1;</code>
     */
    const RELEASE = 1;
    /**
     * SNAPSHOT - repository will accept only Snapshot versions.
     *
     * Generated from protobuf enum <code>SNAPSHOT = 2;</code>
     */
    const SNAPSHOT = 2;

    private static $valueToName = [
        self::VERSION_POLICY_UNSPECIFIED => 'VERSION_POLICY_UNSPECIFIED',
        self::RELEASE => 'RELEASE',
        self::SNAPSHOT => 'SNAPSHOT',
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

