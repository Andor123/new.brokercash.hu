<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/lifesciences/v2beta/workflows.proto

namespace Google\Cloud\LifeSciences\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Carries information about an accelerator that can be attached to a VM.
 *
 * Generated from protobuf message <code>google.cloud.lifesciences.v2beta.Accelerator</code>
 */
class Accelerator extends \Google\Protobuf\Internal\Message
{
    /**
     * The accelerator type string (for example, "nvidia-tesla-t4").
     * Only NVIDIA GPU accelerators are currently supported. If an NVIDIA GPU is
     * attached, the required runtime libraries will be made available to all
     * containers under `/usr/local/nvidia`. The driver version to install must
     * be specified using the NVIDIA driver version parameter on the virtual
     * machine specification. Note that attaching a GPU increases the worker VM
     * startup time by a few minutes.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    private $type = '';
    /**
     * How many accelerators of this type to attach.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     */
    private $count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           The accelerator type string (for example, "nvidia-tesla-t4").
     *           Only NVIDIA GPU accelerators are currently supported. If an NVIDIA GPU is
     *           attached, the required runtime libraries will be made available to all
     *           containers under `/usr/local/nvidia`. The driver version to install must
     *           be specified using the NVIDIA driver version parameter on the virtual
     *           machine specification. Note that attaching a GPU increases the worker VM
     *           startup time by a few minutes.
     *     @type int|string $count
     *           How many accelerators of this type to attach.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Lifesciences\V2Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * The accelerator type string (for example, "nvidia-tesla-t4").
     * Only NVIDIA GPU accelerators are currently supported. If an NVIDIA GPU is
     * attached, the required runtime libraries will be made available to all
     * containers under `/usr/local/nvidia`. The driver version to install must
     * be specified using the NVIDIA driver version parameter on the virtual
     * machine specification. Note that attaching a GPU increases the worker VM
     * startup time by a few minutes.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The accelerator type string (for example, "nvidia-tesla-t4").
     * Only NVIDIA GPU accelerators are currently supported. If an NVIDIA GPU is
     * attached, the required runtime libraries will be made available to all
     * containers under `/usr/local/nvidia`. The driver version to install must
     * be specified using the NVIDIA driver version parameter on the virtual
     * machine specification. Note that attaching a GPU increases the worker VM
     * startup time by a few minutes.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * How many accelerators of this type to attach.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * How many accelerators of this type to attach.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

}

