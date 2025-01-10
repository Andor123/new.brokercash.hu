<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message used to identify file cluster type being profiled.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.FileClusterType</code>
 */
class FileClusterType extends \Google\Protobuf\Internal\Message
{
    protected $file_cluster_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cluster
     *           Cluster type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Cluster type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileClusterType.Cluster cluster = 1;</code>
     * @return int
     */
    public function getCluster()
    {
        return $this->readOneof(1);
    }

    public function hasCluster()
    {
        return $this->hasOneof(1);
    }

    /**
     * Cluster type.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FileClusterType.Cluster cluster = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\FileClusterType\Cluster::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFileClusterType()
    {
        return $this->whichOneof("file_cluster_type");
    }

}
