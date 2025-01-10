<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SecondaryBootDisk represents a persistent disk attached to a node
 * with special configurations based on its mode.
 *
 * Generated from protobuf message <code>google.container.v1.SecondaryBootDisk</code>
 */
class SecondaryBootDisk extends \Google\Protobuf\Internal\Message
{
    /**
     * Disk mode (container image cache, etc.)
     *
     * Generated from protobuf field <code>.google.container.v1.SecondaryBootDisk.Mode mode = 1;</code>
     */
    protected $mode = 0;
    /**
     * Fully-qualified resource ID for an existing disk image.
     *
     * Generated from protobuf field <code>string disk_image = 2;</code>
     */
    protected $disk_image = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mode
     *           Disk mode (container image cache, etc.)
     *     @type string $disk_image
     *           Fully-qualified resource ID for an existing disk image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Disk mode (container image cache, etc.)
     *
     * Generated from protobuf field <code>.google.container.v1.SecondaryBootDisk.Mode mode = 1;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Disk mode (container image cache, etc.)
     *
     * Generated from protobuf field <code>.google.container.v1.SecondaryBootDisk.Mode mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\SecondaryBootDisk\Mode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * Fully-qualified resource ID for an existing disk image.
     *
     * Generated from protobuf field <code>string disk_image = 2;</code>
     * @return string
     */
    public function getDiskImage()
    {
        return $this->disk_image;
    }

    /**
     * Fully-qualified resource ID for an existing disk image.
     *
     * Generated from protobuf field <code>string disk_image = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDiskImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->disk_image = $var;

        return $this;
    }

}
