<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The policy for airflow metadata database retention.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.AirflowMetadataRetentionPolicyConfig</code>
 */
class AirflowMetadataRetentionPolicyConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Retention can be either enabled or disabled.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.AirflowMetadataRetentionPolicyConfig.RetentionMode retention_mode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $retention_mode = 0;
    /**
     * Optional. How many days data should be retained for.
     *
     * Generated from protobuf field <code>int32 retention_days = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $retention_days = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retention_mode
     *           Optional. Retention can be either enabled or disabled.
     *     @type int $retention_days
     *           Optional. How many days data should be retained for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Retention can be either enabled or disabled.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.AirflowMetadataRetentionPolicyConfig.RetentionMode retention_mode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getRetentionMode()
    {
        return $this->retention_mode;
    }

    /**
     * Optional. Retention can be either enabled or disabled.
     *
     * Generated from protobuf field <code>.google.cloud.orchestration.airflow.service.v1.AirflowMetadataRetentionPolicyConfig.RetentionMode retention_mode = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setRetentionMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Orchestration\Airflow\Service\V1\AirflowMetadataRetentionPolicyConfig\RetentionMode::class);
        $this->retention_mode = $var;

        return $this;
    }

    /**
     * Optional. How many days data should be retained for.
     *
     * Generated from protobuf field <code>int32 retention_days = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getRetentionDays()
    {
        return $this->retention_days;
    }

    /**
     * Optional. How many days data should be retained for.
     *
     * Generated from protobuf field <code>int32 retention_days = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setRetentionDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->retention_days = $var;

        return $this;
    }

}
