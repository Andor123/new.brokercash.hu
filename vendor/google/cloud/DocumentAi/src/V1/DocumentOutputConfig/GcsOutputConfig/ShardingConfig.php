<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_io.proto

namespace Google\Cloud\DocumentAI\V1\DocumentOutputConfig\GcsOutputConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The sharding config for the output document.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.DocumentOutputConfig.GcsOutputConfig.ShardingConfig</code>
 */
class ShardingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of pages per shard.
     *
     * Generated from protobuf field <code>int32 pages_per_shard = 1;</code>
     */
    protected $pages_per_shard = 0;
    /**
     * The number of overlapping pages between consecutive shards.
     *
     * Generated from protobuf field <code>int32 pages_overlap = 2;</code>
     */
    protected $pages_overlap = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pages_per_shard
     *           The number of pages per shard.
     *     @type int $pages_overlap
     *           The number of overlapping pages between consecutive shards.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentIo::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of pages per shard.
     *
     * Generated from protobuf field <code>int32 pages_per_shard = 1;</code>
     * @return int
     */
    public function getPagesPerShard()
    {
        return $this->pages_per_shard;
    }

    /**
     * The number of pages per shard.
     *
     * Generated from protobuf field <code>int32 pages_per_shard = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPagesPerShard($var)
    {
        GPBUtil::checkInt32($var);
        $this->pages_per_shard = $var;

        return $this;
    }

    /**
     * The number of overlapping pages between consecutive shards.
     *
     * Generated from protobuf field <code>int32 pages_overlap = 2;</code>
     * @return int
     */
    public function getPagesOverlap()
    {
        return $this->pages_overlap;
    }

    /**
     * The number of overlapping pages between consecutive shards.
     *
     * Generated from protobuf field <code>int32 pages_overlap = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPagesOverlap($var)
    {
        GPBUtil::checkInt32($var);
        $this->pages_overlap = $var;

        return $this;
    }

}


