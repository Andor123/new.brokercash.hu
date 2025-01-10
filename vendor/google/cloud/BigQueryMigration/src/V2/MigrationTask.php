<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/migration_entities.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single task for a migration which has details about the configuration of
 * the task.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.MigrationTask</code>
 */
class MigrationTask extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Immutable. The unique identifier for the migration task. The
     * ID is server-generated.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $id = '';
    /**
     * The type of the task. This must be one of the supported task types:
     * Translation_Teradata2BQ, Translation_Redshift2BQ, Translation_Bteq2BQ,
     * Translation_Oracle2BQ, Translation_HiveQL2BQ, Translation_SparkSQL2BQ,
     * Translation_Snowflake2BQ, Translation_Netezza2BQ,
     * Translation_AzureSynapse2BQ, Translation_Vertica2BQ,
     * Translation_SQLServer2BQ, Translation_Presto2BQ, Translation_MySQL2BQ,
     * Translation_Postgresql2BQ, Translation_SQLite2BQ, Translation_Greenplum2BQ.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * Output only. The current state of the task.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MigrationTask.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. An explanation that may be populated when the task is in
     * FAILED state.
     *
     * Generated from protobuf field <code>.google.rpc.ErrorInfo processing_error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $processing_error = null;
    /**
     * Time when the task was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     */
    protected $create_time = null;
    /**
     * Time when the task was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 7;</code>
     */
    protected $last_update_time = null;
    /**
     * Output only. Provides details to errors and issues encountered while
     * processing the task. Presence of error details does not mean that the task
     * failed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.ResourceErrorDetail resource_error_details = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $resource_error_details;
    /**
     * The number or resources with errors. Note: This is not the total
     * number of errors as each resource can have more than one error.
     * This is used to indicate truncation by having a `resource_error_count`
     * that is higher than the size of `resource_error_details`.
     *
     * Generated from protobuf field <code>int32 resource_error_count = 18;</code>
     */
    protected $resource_error_count = 0;
    /**
     * The metrics for the task.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.TimeSeries metrics = 19;</code>
     */
    private $metrics;
    /**
     * Output only. The result of the task.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MigrationTaskResult task_result = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $task_result = null;
    /**
     * Count of all the processing errors in this task and its subtasks.
     *
     * Generated from protobuf field <code>int32 total_processing_error_count = 21;</code>
     */
    protected $total_processing_error_count = 0;
    /**
     * Count of all the resource errors in this task and its subtasks.
     *
     * Generated from protobuf field <code>int32 total_resource_error_count = 22;</code>
     */
    protected $total_resource_error_count = 0;
    protected $task_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\Migration\V2\TranslationConfigDetails $translation_config_details
     *           Task configuration for CW Batch/Offline SQL Translation.
     *     @type \Google\Cloud\BigQuery\Migration\V2\TranslationDetails $translation_details
     *           Task details for unified SQL Translation.
     *     @type string $id
     *           Output only. Immutable. The unique identifier for the migration task. The
     *           ID is server-generated.
     *     @type string $type
     *           The type of the task. This must be one of the supported task types:
     *           Translation_Teradata2BQ, Translation_Redshift2BQ, Translation_Bteq2BQ,
     *           Translation_Oracle2BQ, Translation_HiveQL2BQ, Translation_SparkSQL2BQ,
     *           Translation_Snowflake2BQ, Translation_Netezza2BQ,
     *           Translation_AzureSynapse2BQ, Translation_Vertica2BQ,
     *           Translation_SQLServer2BQ, Translation_Presto2BQ, Translation_MySQL2BQ,
     *           Translation_Postgresql2BQ, Translation_SQLite2BQ, Translation_Greenplum2BQ.
     *     @type int $state
     *           Output only. The current state of the task.
     *     @type \Google\Rpc\ErrorInfo $processing_error
     *           Output only. An explanation that may be populated when the task is in
     *           FAILED state.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Time when the task was created.
     *     @type \Google\Protobuf\Timestamp $last_update_time
     *           Time when the task was last updated.
     *     @type array<\Google\Cloud\BigQuery\Migration\V2\ResourceErrorDetail>|\Google\Protobuf\Internal\RepeatedField $resource_error_details
     *           Output only. Provides details to errors and issues encountered while
     *           processing the task. Presence of error details does not mean that the task
     *           failed.
     *     @type int $resource_error_count
     *           The number or resources with errors. Note: This is not the total
     *           number of errors as each resource can have more than one error.
     *           This is used to indicate truncation by having a `resource_error_count`
     *           that is higher than the size of `resource_error_details`.
     *     @type array<\Google\Cloud\BigQuery\Migration\V2\TimeSeries>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           The metrics for the task.
     *     @type \Google\Cloud\BigQuery\Migration\V2\MigrationTaskResult $task_result
     *           Output only. The result of the task.
     *     @type int $total_processing_error_count
     *           Count of all the processing errors in this task and its subtasks.
     *     @type int $total_resource_error_count
     *           Count of all the resource errors in this task and its subtasks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\MigrationEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Task configuration for CW Batch/Offline SQL Translation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TranslationConfigDetails translation_config_details = 14;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\TranslationConfigDetails|null
     */
    public function getTranslationConfigDetails()
    {
        return $this->readOneof(14);
    }

    public function hasTranslationConfigDetails()
    {
        return $this->hasOneof(14);
    }

    /**
     * Task configuration for CW Batch/Offline SQL Translation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TranslationConfigDetails translation_config_details = 14;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\TranslationConfigDetails $var
     * @return $this
     */
    public function setTranslationConfigDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\TranslationConfigDetails::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Task details for unified SQL Translation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TranslationDetails translation_details = 16;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\TranslationDetails|null
     */
    public function getTranslationDetails()
    {
        return $this->readOneof(16);
    }

    public function hasTranslationDetails()
    {
        return $this->hasOneof(16);
    }

    /**
     * Task details for unified SQL Translation.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TranslationDetails translation_details = 16;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\TranslationDetails $var
     * @return $this
     */
    public function setTranslationDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\TranslationDetails::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Output only. Immutable. The unique identifier for the migration task. The
     * ID is server-generated.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. Immutable. The unique identifier for the migration task. The
     * ID is server-generated.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The type of the task. This must be one of the supported task types:
     * Translation_Teradata2BQ, Translation_Redshift2BQ, Translation_Bteq2BQ,
     * Translation_Oracle2BQ, Translation_HiveQL2BQ, Translation_SparkSQL2BQ,
     * Translation_Snowflake2BQ, Translation_Netezza2BQ,
     * Translation_AzureSynapse2BQ, Translation_Vertica2BQ,
     * Translation_SQLServer2BQ, Translation_Presto2BQ, Translation_MySQL2BQ,
     * Translation_Postgresql2BQ, Translation_SQLite2BQ, Translation_Greenplum2BQ.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the task. This must be one of the supported task types:
     * Translation_Teradata2BQ, Translation_Redshift2BQ, Translation_Bteq2BQ,
     * Translation_Oracle2BQ, Translation_HiveQL2BQ, Translation_SparkSQL2BQ,
     * Translation_Snowflake2BQ, Translation_Netezza2BQ,
     * Translation_AzureSynapse2BQ, Translation_Vertica2BQ,
     * Translation_SQLServer2BQ, Translation_Presto2BQ, Translation_MySQL2BQ,
     * Translation_Postgresql2BQ, Translation_SQLite2BQ, Translation_Greenplum2BQ.
     *
     * Generated from protobuf field <code>string type = 2;</code>
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
     * Output only. The current state of the task.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MigrationTask.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the task.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MigrationTask.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Migration\V2\MigrationTask\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. An explanation that may be populated when the task is in
     * FAILED state.
     *
     * Generated from protobuf field <code>.google.rpc.ErrorInfo processing_error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\ErrorInfo|null
     */
    public function getProcessingError()
    {
        return $this->processing_error;
    }

    public function hasProcessingError()
    {
        return isset($this->processing_error);
    }

    public function clearProcessingError()
    {
        unset($this->processing_error);
    }

    /**
     * Output only. An explanation that may be populated when the task is in
     * FAILED state.
     *
     * Generated from protobuf field <code>.google.rpc.ErrorInfo processing_error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\ErrorInfo $var
     * @return $this
     */
    public function setProcessingError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\ErrorInfo::class);
        $this->processing_error = $var;

        return $this;
    }

    /**
     * Time when the task was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Time when the task was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Time when the task was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastUpdateTime()
    {
        return $this->last_update_time;
    }

    public function hasLastUpdateTime()
    {
        return isset($this->last_update_time);
    }

    public function clearLastUpdateTime()
    {
        unset($this->last_update_time);
    }

    /**
     * Time when the task was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_update_time = $var;

        return $this;
    }

    /**
     * Output only. Provides details to errors and issues encountered while
     * processing the task. Presence of error details does not mean that the task
     * failed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.ResourceErrorDetail resource_error_details = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceErrorDetails()
    {
        return $this->resource_error_details;
    }

    /**
     * Output only. Provides details to errors and issues encountered while
     * processing the task. Presence of error details does not mean that the task
     * failed.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.ResourceErrorDetail resource_error_details = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\BigQuery\Migration\V2\ResourceErrorDetail>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceErrorDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Migration\V2\ResourceErrorDetail::class);
        $this->resource_error_details = $arr;

        return $this;
    }

    /**
     * The number or resources with errors. Note: This is not the total
     * number of errors as each resource can have more than one error.
     * This is used to indicate truncation by having a `resource_error_count`
     * that is higher than the size of `resource_error_details`.
     *
     * Generated from protobuf field <code>int32 resource_error_count = 18;</code>
     * @return int
     */
    public function getResourceErrorCount()
    {
        return $this->resource_error_count;
    }

    /**
     * The number or resources with errors. Note: This is not the total
     * number of errors as each resource can have more than one error.
     * This is used to indicate truncation by having a `resource_error_count`
     * that is higher than the size of `resource_error_details`.
     *
     * Generated from protobuf field <code>int32 resource_error_count = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceErrorCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->resource_error_count = $var;

        return $this;
    }

    /**
     * The metrics for the task.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.TimeSeries metrics = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * The metrics for the task.
     *
     * Generated from protobuf field <code>repeated .google.cloud.bigquery.migration.v2.TimeSeries metrics = 19;</code>
     * @param array<\Google\Cloud\BigQuery\Migration\V2\TimeSeries>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BigQuery\Migration\V2\TimeSeries::class);
        $this->metrics = $arr;

        return $this;
    }

    /**
     * Output only. The result of the task.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MigrationTaskResult task_result = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\MigrationTaskResult|null
     */
    public function getTaskResult()
    {
        return $this->task_result;
    }

    public function hasTaskResult()
    {
        return isset($this->task_result);
    }

    public function clearTaskResult()
    {
        unset($this->task_result);
    }

    /**
     * Output only. The result of the task.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.MigrationTaskResult task_result = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\MigrationTaskResult $var
     * @return $this
     */
    public function setTaskResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\MigrationTaskResult::class);
        $this->task_result = $var;

        return $this;
    }

    /**
     * Count of all the processing errors in this task and its subtasks.
     *
     * Generated from protobuf field <code>int32 total_processing_error_count = 21;</code>
     * @return int
     */
    public function getTotalProcessingErrorCount()
    {
        return $this->total_processing_error_count;
    }

    /**
     * Count of all the processing errors in this task and its subtasks.
     *
     * Generated from protobuf field <code>int32 total_processing_error_count = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalProcessingErrorCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_processing_error_count = $var;

        return $this;
    }

    /**
     * Count of all the resource errors in this task and its subtasks.
     *
     * Generated from protobuf field <code>int32 total_resource_error_count = 22;</code>
     * @return int
     */
    public function getTotalResourceErrorCount()
    {
        return $this->total_resource_error_count;
    }

    /**
     * Count of all the resource errors in this task and its subtasks.
     *
     * Generated from protobuf field <code>int32 total_resource_error_count = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalResourceErrorCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_resource_error_count = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaskDetails()
    {
        return $this->whichOneof("task_details");
    }

}

