<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1/metastore.proto

namespace Google\Cloud\Metastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata about the service in a location.
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1.LocationMetadata</code>
 */
class LocationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The versions of Hive Metastore that can be used when creating a new
     * metastore service in this location. The server guarantees that exactly one
     * `HiveMetastoreVersion` in the list will set `is_default`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.metastore.v1.LocationMetadata.HiveMetastoreVersion supported_hive_metastore_versions = 1;</code>
     */
    private $supported_hive_metastore_versions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Metastore\V1\LocationMetadata\HiveMetastoreVersion>|\Google\Protobuf\Internal\RepeatedField $supported_hive_metastore_versions
     *           The versions of Hive Metastore that can be used when creating a new
     *           metastore service in this location. The server guarantees that exactly one
     *           `HiveMetastoreVersion` in the list will set `is_default`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The versions of Hive Metastore that can be used when creating a new
     * metastore service in this location. The server guarantees that exactly one
     * `HiveMetastoreVersion` in the list will set `is_default`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.metastore.v1.LocationMetadata.HiveMetastoreVersion supported_hive_metastore_versions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedHiveMetastoreVersions()
    {
        return $this->supported_hive_metastore_versions;
    }

    /**
     * The versions of Hive Metastore that can be used when creating a new
     * metastore service in this location. The server guarantees that exactly one
     * `HiveMetastoreVersion` in the list will set `is_default`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.metastore.v1.LocationMetadata.HiveMetastoreVersion supported_hive_metastore_versions = 1;</code>
     * @param array<\Google\Cloud\Metastore\V1\LocationMetadata\HiveMetastoreVersion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedHiveMetastoreVersions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Metastore\V1\LocationMetadata\HiveMetastoreVersion::class);
        $this->supported_hive_metastore_versions = $arr;

        return $this;
    }

}

