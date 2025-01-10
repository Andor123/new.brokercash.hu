<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RetryPhase contains the retry attempts and the metadata for initiating a
 * new attempt.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.RetryPhase</code>
 */
class RetryPhase extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The number of attempts that have been made.
     *
     * Generated from protobuf field <code>int64 total_attempts = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $total_attempts = 0;
    /**
     * Output only. The pattern of how the wait time of the retry attempt is
     * calculated.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.BackoffMode backoff_mode = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $backoff_mode = 0;
    /**
     * Output only. Detail of a retry action.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.RetryAttempt attempts = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $attempts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $total_attempts
     *           Output only. The number of attempts that have been made.
     *     @type int $backoff_mode
     *           Output only. The pattern of how the wait time of the retry attempt is
     *           calculated.
     *     @type array<\Google\Cloud\Deploy\V1\RetryAttempt>|\Google\Protobuf\Internal\RepeatedField $attempts
     *           Output only. Detail of a retry action.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The number of attempts that have been made.
     *
     * Generated from protobuf field <code>int64 total_attempts = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTotalAttempts()
    {
        return $this->total_attempts;
    }

    /**
     * Output only. The number of attempts that have been made.
     *
     * Generated from protobuf field <code>int64 total_attempts = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalAttempts($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_attempts = $var;

        return $this;
    }

    /**
     * Output only. The pattern of how the wait time of the retry attempt is
     * calculated.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.BackoffMode backoff_mode = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getBackoffMode()
    {
        return $this->backoff_mode;
    }

    /**
     * Output only. The pattern of how the wait time of the retry attempt is
     * calculated.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.BackoffMode backoff_mode = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setBackoffMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\BackoffMode::class);
        $this->backoff_mode = $var;

        return $this;
    }

    /**
     * Output only. Detail of a retry action.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.RetryAttempt attempts = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttempts()
    {
        return $this->attempts;
    }

    /**
     * Output only. Detail of a retry action.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.RetryAttempt attempts = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Deploy\V1\RetryAttempt>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttempts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\RetryAttempt::class);
        $this->attempts = $arr;

        return $this;
    }

}
