<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/resource.proto

namespace Google\Cloud\SecurityCenter\V2\ResourcePath;

use UnexpectedValueException;

/**
 * The type of resource the node represents.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.ResourcePath.ResourcePathNodeType</code>
 */
class ResourcePathNodeType
{
    /**
     * Node type is unspecified.
     *
     * Generated from protobuf enum <code>RESOURCE_PATH_NODE_TYPE_UNSPECIFIED = 0;</code>
     */
    const RESOURCE_PATH_NODE_TYPE_UNSPECIFIED = 0;
    /**
     * The node represents a Google Cloud organization.
     *
     * Generated from protobuf enum <code>GCP_ORGANIZATION = 1;</code>
     */
    const GCP_ORGANIZATION = 1;
    /**
     * The node represents a Google Cloud folder.
     *
     * Generated from protobuf enum <code>GCP_FOLDER = 2;</code>
     */
    const GCP_FOLDER = 2;
    /**
     * The node represents a Google Cloud project.
     *
     * Generated from protobuf enum <code>GCP_PROJECT = 3;</code>
     */
    const GCP_PROJECT = 3;
    /**
     * The node represents an AWS organization.
     *
     * Generated from protobuf enum <code>AWS_ORGANIZATION = 4;</code>
     */
    const AWS_ORGANIZATION = 4;
    /**
     * The node represents an AWS organizational unit.
     *
     * Generated from protobuf enum <code>AWS_ORGANIZATIONAL_UNIT = 5;</code>
     */
    const AWS_ORGANIZATIONAL_UNIT = 5;
    /**
     * The node represents an AWS account.
     *
     * Generated from protobuf enum <code>AWS_ACCOUNT = 6;</code>
     */
    const AWS_ACCOUNT = 6;
    /**
     * The node represents an Azure management group.
     *
     * Generated from protobuf enum <code>AZURE_MANAGEMENT_GROUP = 7;</code>
     */
    const AZURE_MANAGEMENT_GROUP = 7;
    /**
     * The node represents an Azure subscription.
     *
     * Generated from protobuf enum <code>AZURE_SUBSCRIPTION = 8;</code>
     */
    const AZURE_SUBSCRIPTION = 8;
    /**
     * The node represents an Azure resource group.
     *
     * Generated from protobuf enum <code>AZURE_RESOURCE_GROUP = 9;</code>
     */
    const AZURE_RESOURCE_GROUP = 9;

    private static $valueToName = [
        self::RESOURCE_PATH_NODE_TYPE_UNSPECIFIED => 'RESOURCE_PATH_NODE_TYPE_UNSPECIFIED',
        self::GCP_ORGANIZATION => 'GCP_ORGANIZATION',
        self::GCP_FOLDER => 'GCP_FOLDER',
        self::GCP_PROJECT => 'GCP_PROJECT',
        self::AWS_ORGANIZATION => 'AWS_ORGANIZATION',
        self::AWS_ORGANIZATIONAL_UNIT => 'AWS_ORGANIZATIONAL_UNIT',
        self::AWS_ACCOUNT => 'AWS_ACCOUNT',
        self::AZURE_MANAGEMENT_GROUP => 'AZURE_MANAGEMENT_GROUP',
        self::AZURE_SUBSCRIPTION => 'AZURE_SUBSCRIPTION',
        self::AZURE_RESOURCE_GROUP => 'AZURE_RESOURCE_GROUP',
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


