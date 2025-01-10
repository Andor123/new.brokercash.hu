<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/autonomous_database.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Autonomous Data Guard standby database details.
 * https://docs.oracle.com/en-us/iaas/api/#/en/database/20160918/datatypes/AutonomousDatabaseStandbySummary
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.AutonomousDatabaseStandbySummary</code>
 */
class AutonomousDatabaseStandbySummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The amount of time, in seconds, that the data of the standby
     * database lags in comparison to the data of the primary database.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lag_time_duration = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $lag_time_duration = null;
    /**
     * Output only. The additional details about the current lifecycle state of
     * the Autonomous Database.
     *
     * Generated from protobuf field <code>string lifecycle_details = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $lifecycle_details = '';
    /**
     * Output only. The current lifecycle state of the Autonomous Database.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The date and time the Autonomous Data Guard role was switched
     * for the standby Autonomous Database.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp data_guard_role_changed_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $data_guard_role_changed_time = null;
    /**
     * Output only. The date and time the Disaster Recovery role was switched for
     * the standby Autonomous Database.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp disaster_recovery_role_changed_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $disaster_recovery_role_changed_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $lag_time_duration
     *           Output only. The amount of time, in seconds, that the data of the standby
     *           database lags in comparison to the data of the primary database.
     *     @type string $lifecycle_details
     *           Output only. The additional details about the current lifecycle state of
     *           the Autonomous Database.
     *     @type int $state
     *           Output only. The current lifecycle state of the Autonomous Database.
     *     @type \Google\Protobuf\Timestamp $data_guard_role_changed_time
     *           Output only. The date and time the Autonomous Data Guard role was switched
     *           for the standby Autonomous Database.
     *     @type \Google\Protobuf\Timestamp $disaster_recovery_role_changed_time
     *           Output only. The date and time the Disaster Recovery role was switched for
     *           the standby Autonomous Database.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\AutonomousDatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The amount of time, in seconds, that the data of the standby
     * database lags in comparison to the data of the primary database.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lag_time_duration = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLagTimeDuration()
    {
        return $this->lag_time_duration;
    }

    public function hasLagTimeDuration()
    {
        return isset($this->lag_time_duration);
    }

    public function clearLagTimeDuration()
    {
        unset($this->lag_time_duration);
    }

    /**
     * Output only. The amount of time, in seconds, that the data of the standby
     * database lags in comparison to the data of the primary database.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lag_time_duration = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLagTimeDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lag_time_duration = $var;

        return $this;
    }

    /**
     * Output only. The additional details about the current lifecycle state of
     * the Autonomous Database.
     *
     * Generated from protobuf field <code>string lifecycle_details = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLifecycleDetails()
    {
        return $this->lifecycle_details;
    }

    /**
     * Output only. The additional details about the current lifecycle state of
     * the Autonomous Database.
     *
     * Generated from protobuf field <code>string lifecycle_details = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLifecycleDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->lifecycle_details = $var;

        return $this;
    }

    /**
     * Output only. The current lifecycle state of the Autonomous Database.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current lifecycle state of the Autonomous Database.
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OracleDatabase\V1\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The date and time the Autonomous Data Guard role was switched
     * for the standby Autonomous Database.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp data_guard_role_changed_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDataGuardRoleChangedTime()
    {
        return $this->data_guard_role_changed_time;
    }

    public function hasDataGuardRoleChangedTime()
    {
        return isset($this->data_guard_role_changed_time);
    }

    public function clearDataGuardRoleChangedTime()
    {
        unset($this->data_guard_role_changed_time);
    }

    /**
     * Output only. The date and time the Autonomous Data Guard role was switched
     * for the standby Autonomous Database.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp data_guard_role_changed_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDataGuardRoleChangedTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->data_guard_role_changed_time = $var;

        return $this;
    }

    /**
     * Output only. The date and time the Disaster Recovery role was switched for
     * the standby Autonomous Database.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp disaster_recovery_role_changed_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDisasterRecoveryRoleChangedTime()
    {
        return $this->disaster_recovery_role_changed_time;
    }

    public function hasDisasterRecoveryRoleChangedTime()
    {
        return isset($this->disaster_recovery_role_changed_time);
    }

    public function clearDisasterRecoveryRoleChangedTime()
    {
        unset($this->disaster_recovery_role_changed_time);
    }

    /**
     * Output only. The date and time the Disaster Recovery role was switched for
     * the standby Autonomous Database.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp disaster_recovery_role_changed_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDisasterRecoveryRoleChangedTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->disaster_recovery_role_changed_time = $var;

        return $this;
    }

}

