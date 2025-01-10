<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstantSnapshotResourceStatus</code>
 */
class InstantSnapshotResourceStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The storage size of this instant snapshot.
     *
     * Generated from protobuf field <code>optional int64 storage_size_bytes = 387548913;</code>
     */
    private $storage_size_bytes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $storage_size_bytes
     *           [Output Only] The storage size of this instant snapshot.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The storage size of this instant snapshot.
     *
     * Generated from protobuf field <code>optional int64 storage_size_bytes = 387548913;</code>
     * @return int|string
     */
    public function getStorageSizeBytes()
    {
        return isset($this->storage_size_bytes) ? $this->storage_size_bytes : 0;
    }

    public function hasStorageSizeBytes()
    {
        return isset($this->storage_size_bytes);
    }

    public function clearStorageSizeBytes()
    {
        unset($this->storage_size_bytes);
    }

    /**
     * [Output Only] The storage size of this instant snapshot.
     *
     * Generated from protobuf field <code>optional int64 storage_size_bytes = 387548913;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStorageSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->storage_size_bytes = $var;

        return $this;
    }

}
