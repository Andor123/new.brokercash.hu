<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1\RemoteRepositoryConfig\AptRepository\PublicRepository;

use UnexpectedValueException;

/**
 * Predefined list of publicly available repository bases for Apt.
 *
 * Protobuf type <code>google.devtools.artifactregistry.v1.RemoteRepositoryConfig.AptRepository.PublicRepository.RepositoryBase</code>
 */
class RepositoryBase
{
    /**
     * Unspecified repository base.
     *
     * Generated from protobuf enum <code>REPOSITORY_BASE_UNSPECIFIED = 0;</code>
     */
    const REPOSITORY_BASE_UNSPECIFIED = 0;
    /**
     * Debian.
     *
     * Generated from protobuf enum <code>DEBIAN = 1;</code>
     */
    const DEBIAN = 1;
    /**
     * Ubuntu LTS/Pro.
     *
     * Generated from protobuf enum <code>UBUNTU = 2;</code>
     */
    const UBUNTU = 2;

    private static $valueToName = [
        self::REPOSITORY_BASE_UNSPECIFIED => 'REPOSITORY_BASE_UNSPECIFIED',
        self::DEBIAN => 'DEBIAN',
        self::UBUNTU => 'UBUNTU',
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


