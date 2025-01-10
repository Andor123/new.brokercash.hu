<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/tasks.proto

namespace Google\Cloud\Dataplex\V1\Task\InfrastructureSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Batch compute resources associated with the task.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Task.InfrastructureSpec.BatchComputeResources</code>
 */
class BatchComputeResources extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Total number of job executors.
     * Executor Count should be between 2 and 100. [Default=2]
     *
     * Generated from protobuf field <code>int32 executors_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $executors_count = 0;
    /**
     * Optional. Max configurable executors.
     * If max_executors_count > executors_count, then auto-scaling is enabled.
     * Max Executor Count should be between 2 and 1000. [Default=1000]
     *
     * Generated from protobuf field <code>int32 max_executors_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $max_executors_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $executors_count
     *           Optional. Total number of job executors.
     *           Executor Count should be between 2 and 100. [Default=2]
     *     @type int $max_executors_count
     *           Optional. Max configurable executors.
     *           If max_executors_count > executors_count, then auto-scaling is enabled.
     *           Max Executor Count should be between 2 and 1000. [Default=1000]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Tasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Total number of job executors.
     * Executor Count should be between 2 and 100. [Default=2]
     *
     * Generated from protobuf field <code>int32 executors_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getExecutorsCount()
    {
        return $this->executors_count;
    }

    /**
     * Optional. Total number of job executors.
     * Executor Count should be between 2 and 100. [Default=2]
     *
     * Generated from protobuf field <code>int32 executors_count = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setExecutorsCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->executors_count = $var;

        return $this;
    }

    /**
     * Optional. Max configurable executors.
     * If max_executors_count > executors_count, then auto-scaling is enabled.
     * Max Executor Count should be between 2 and 1000. [Default=1000]
     *
     * Generated from protobuf field <code>int32 max_executors_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxExecutorsCount()
    {
        return $this->max_executors_count;
    }

    /**
     * Optional. Max configurable executors.
     * If max_executors_count > executors_count, then auto-scaling is enabled.
     * Max Executor Count should be between 2 and 1000. [Default=1000]
     *
     * Generated from protobuf field <code>int32 max_executors_count = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxExecutorsCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_executors_count = $var;

        return $this;
    }

}


