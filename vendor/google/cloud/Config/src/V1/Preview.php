<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A preview represents a set of actions Infra Manager would perform
 * to move the resources towards the desired state as specified in the
 * configuration.
 *
 * Generated from protobuf message <code>google.cloud.config.v1.Preview</code>
 */
class Preview extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Resource name of the preview. Resource name can be user
     * provided or server generated ID if unspecified. Format:
     * `projects/{project}/locations/{location}/previews/{preview}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. Time the preview was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Optional. User-defined labels for the preview.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Output only. Current state of the preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Preview.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. Optional deployment reference. If specified, the preview will be
     * performed using the provided deployment's current state and use any
     * relevant fields from the deployment unless explicitly specified in the
     * preview create request.
     *
     * Generated from protobuf field <code>string deployment = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $deployment = '';
    /**
     * Optional. Current mode of preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Preview.PreviewMode preview_mode = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $preview_mode = 0;
    /**
     * Optional. User-specified Service Account (SA) credentials to be used when
     * previewing resources.
     * Format: `projects/{projectID}/serviceAccounts/{serviceAccount}`
     *
     * Generated from protobuf field <code>string service_account = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $service_account = '';
    /**
     * Optional. User-defined location of Cloud Build logs, artifacts, and
     * in Google Cloud Storage.
     * Format: `gs://{bucket}/{folder}`
     * A default bucket will be bootstrapped if the field is not set or empty
     * Default Bucket Format: `gs://<project number>-<region>-blueprint-config`
     * Constraints:
     * - The bucket needs to be in the same project as the deployment
     * - The path cannot be within the path of `gcs_source`
     * If omitted and deployment resource ref provided has artifacts_gcs_bucket
     * defined, that artifact bucket is used.
     *
     * Generated from protobuf field <code>optional string artifacts_gcs_bucket = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $artifacts_gcs_bucket = null;
    /**
     * Optional. The user-specified Worker Pool resource in which the Cloud Build
     * job will execute. Format
     * projects/{project}/locations/{location}/workerPools/{workerPoolId} If this
     * field is unspecified, the default Cloud Build worker pool will be used. If
     * omitted and deployment resource ref provided has worker_pool defined, that
     * worker pool is used.
     *
     * Generated from protobuf field <code>optional string worker_pool = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $worker_pool = null;
    /**
     * Output only. Code describing any errors that may have occurred.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Preview.ErrorCode error_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error_code = 0;
    /**
     * Output only. Additional information regarding the current state.
     *
     * Generated from protobuf field <code>.google.rpc.Status error_status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error_status = null;
    /**
     * Output only. Cloud Build instance UUID associated with this preview.
     *
     * Generated from protobuf field <code>string build = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $build = '';
    /**
     * Output only. Summary of errors encountered during Terraform preview.
     * It has a size limit of 10, i.e. only top 10 errors will be summarized here.
     *
     * Generated from protobuf field <code>repeated .google.cloud.config.v1.TerraformError tf_errors = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $tf_errors;
    /**
     * Output only. Link to tf-error.ndjson file, which contains the full list of
     * the errors encountered during a Terraform preview.
     * Format: `gs://{bucket}/{object}`.
     *
     * Generated from protobuf field <code>string error_logs = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error_logs = '';
    /**
     * Output only. Artifacts from preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.PreviewArtifacts preview_artifacts = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $preview_artifacts = null;
    /**
     * Output only. Location of preview logs in `gs://{bucket}/{object}` format.
     *
     * Generated from protobuf field <code>string logs = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $logs = '';
    /**
     * Output only. The current Terraform version set on the preview.
     * It is in the format of "Major.Minor.Patch", for example, "1.3.10".
     *
     * Generated from protobuf field <code>string tf_version = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $tf_version = '';
    /**
     * Optional. The user-specified Terraform version constraint.
     * Example: "=1.3.10".
     *
     * Generated from protobuf field <code>optional string tf_version_constraint = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $tf_version_constraint = null;
    protected $blueprint;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Config\V1\TerraformBlueprint $terraform_blueprint
     *           The terraform blueprint to preview.
     *     @type string $name
     *           Identifier. Resource name of the preview. Resource name can be user
     *           provided or server generated ID if unspecified. Format:
     *           `projects/{project}/locations/{location}/previews/{preview}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time the preview was created.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User-defined labels for the preview.
     *     @type int $state
     *           Output only. Current state of the preview.
     *     @type string $deployment
     *           Optional. Optional deployment reference. If specified, the preview will be
     *           performed using the provided deployment's current state and use any
     *           relevant fields from the deployment unless explicitly specified in the
     *           preview create request.
     *     @type int $preview_mode
     *           Optional. Current mode of preview.
     *     @type string $service_account
     *           Optional. User-specified Service Account (SA) credentials to be used when
     *           previewing resources.
     *           Format: `projects/{projectID}/serviceAccounts/{serviceAccount}`
     *     @type string $artifacts_gcs_bucket
     *           Optional. User-defined location of Cloud Build logs, artifacts, and
     *           in Google Cloud Storage.
     *           Format: `gs://{bucket}/{folder}`
     *           A default bucket will be bootstrapped if the field is not set or empty
     *           Default Bucket Format: `gs://<project number>-<region>-blueprint-config`
     *           Constraints:
     *           - The bucket needs to be in the same project as the deployment
     *           - The path cannot be within the path of `gcs_source`
     *           If omitted and deployment resource ref provided has artifacts_gcs_bucket
     *           defined, that artifact bucket is used.
     *     @type string $worker_pool
     *           Optional. The user-specified Worker Pool resource in which the Cloud Build
     *           job will execute. Format
     *           projects/{project}/locations/{location}/workerPools/{workerPoolId} If this
     *           field is unspecified, the default Cloud Build worker pool will be used. If
     *           omitted and deployment resource ref provided has worker_pool defined, that
     *           worker pool is used.
     *     @type int $error_code
     *           Output only. Code describing any errors that may have occurred.
     *     @type \Google\Rpc\Status $error_status
     *           Output only. Additional information regarding the current state.
     *     @type string $build
     *           Output only. Cloud Build instance UUID associated with this preview.
     *     @type array<\Google\Cloud\Config\V1\TerraformError>|\Google\Protobuf\Internal\RepeatedField $tf_errors
     *           Output only. Summary of errors encountered during Terraform preview.
     *           It has a size limit of 10, i.e. only top 10 errors will be summarized here.
     *     @type string $error_logs
     *           Output only. Link to tf-error.ndjson file, which contains the full list of
     *           the errors encountered during a Terraform preview.
     *           Format: `gs://{bucket}/{object}`.
     *     @type \Google\Cloud\Config\V1\PreviewArtifacts $preview_artifacts
     *           Output only. Artifacts from preview.
     *     @type string $logs
     *           Output only. Location of preview logs in `gs://{bucket}/{object}` format.
     *     @type string $tf_version
     *           Output only. The current Terraform version set on the preview.
     *           It is in the format of "Major.Minor.Patch", for example, "1.3.10".
     *     @type string $tf_version_constraint
     *           Optional. The user-specified Terraform version constraint.
     *           Example: "=1.3.10".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * The terraform blueprint to preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.TerraformBlueprint terraform_blueprint = 6;</code>
     * @return \Google\Cloud\Config\V1\TerraformBlueprint|null
     */
    public function getTerraformBlueprint()
    {
        return $this->readOneof(6);
    }

    public function hasTerraformBlueprint()
    {
        return $this->hasOneof(6);
    }

    /**
     * The terraform blueprint to preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.TerraformBlueprint terraform_blueprint = 6;</code>
     * @param \Google\Cloud\Config\V1\TerraformBlueprint $var
     * @return $this
     */
    public function setTerraformBlueprint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Config\V1\TerraformBlueprint::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Identifier. Resource name of the preview. Resource name can be user
     * provided or server generated ID if unspecified. Format:
     * `projects/{project}/locations/{location}/previews/{preview}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Resource name of the preview. Resource name can be user
     * provided or server generated ID if unspecified. Format:
     * `projects/{project}/locations/{location}/previews/{preview}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Time the preview was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time the preview was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. User-defined labels for the preview.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User-defined labels for the preview.
     *
     * Generated from protobuf field <code>map<string, string> labels = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. Current state of the preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Preview.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Preview.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\Preview\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. Optional deployment reference. If specified, the preview will be
     * performed using the provided deployment's current state and use any
     * relevant fields from the deployment unless explicitly specified in the
     * preview create request.
     *
     * Generated from protobuf field <code>string deployment = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    /**
     * Optional. Optional deployment reference. If specified, the preview will be
     * performed using the provided deployment's current state and use any
     * relevant fields from the deployment unless explicitly specified in the
     * preview create request.
     *
     * Generated from protobuf field <code>string deployment = 5 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDeployment($var)
    {
        GPBUtil::checkString($var, True);
        $this->deployment = $var;

        return $this;
    }

    /**
     * Optional. Current mode of preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Preview.PreviewMode preview_mode = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPreviewMode()
    {
        return $this->preview_mode;
    }

    /**
     * Optional. Current mode of preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Preview.PreviewMode preview_mode = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPreviewMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\Preview\PreviewMode::class);
        $this->preview_mode = $var;

        return $this;
    }

    /**
     * Optional. User-specified Service Account (SA) credentials to be used when
     * previewing resources.
     * Format: `projects/{projectID}/serviceAccounts/{serviceAccount}`
     *
     * Generated from protobuf field <code>string service_account = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Optional. User-specified Service Account (SA) credentials to be used when
     * previewing resources.
     * Format: `projects/{projectID}/serviceAccounts/{serviceAccount}`
     *
     * Generated from protobuf field <code>string service_account = 7 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Optional. User-defined location of Cloud Build logs, artifacts, and
     * in Google Cloud Storage.
     * Format: `gs://{bucket}/{folder}`
     * A default bucket will be bootstrapped if the field is not set or empty
     * Default Bucket Format: `gs://<project number>-<region>-blueprint-config`
     * Constraints:
     * - The bucket needs to be in the same project as the deployment
     * - The path cannot be within the path of `gcs_source`
     * If omitted and deployment resource ref provided has artifacts_gcs_bucket
     * defined, that artifact bucket is used.
     *
     * Generated from protobuf field <code>optional string artifacts_gcs_bucket = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getArtifactsGcsBucket()
    {
        return isset($this->artifacts_gcs_bucket) ? $this->artifacts_gcs_bucket : '';
    }

    public function hasArtifactsGcsBucket()
    {
        return isset($this->artifacts_gcs_bucket);
    }

    public function clearArtifactsGcsBucket()
    {
        unset($this->artifacts_gcs_bucket);
    }

    /**
     * Optional. User-defined location of Cloud Build logs, artifacts, and
     * in Google Cloud Storage.
     * Format: `gs://{bucket}/{folder}`
     * A default bucket will be bootstrapped if the field is not set or empty
     * Default Bucket Format: `gs://<project number>-<region>-blueprint-config`
     * Constraints:
     * - The bucket needs to be in the same project as the deployment
     * - The path cannot be within the path of `gcs_source`
     * If omitted and deployment resource ref provided has artifacts_gcs_bucket
     * defined, that artifact bucket is used.
     *
     * Generated from protobuf field <code>optional string artifacts_gcs_bucket = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactsGcsBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifacts_gcs_bucket = $var;

        return $this;
    }

    /**
     * Optional. The user-specified Worker Pool resource in which the Cloud Build
     * job will execute. Format
     * projects/{project}/locations/{location}/workerPools/{workerPoolId} If this
     * field is unspecified, the default Cloud Build worker pool will be used. If
     * omitted and deployment resource ref provided has worker_pool defined, that
     * worker pool is used.
     *
     * Generated from protobuf field <code>optional string worker_pool = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWorkerPool()
    {
        return isset($this->worker_pool) ? $this->worker_pool : '';
    }

    public function hasWorkerPool()
    {
        return isset($this->worker_pool);
    }

    public function clearWorkerPool()
    {
        unset($this->worker_pool);
    }

    /**
     * Optional. The user-specified Worker Pool resource in which the Cloud Build
     * job will execute. Format
     * projects/{project}/locations/{location}/workerPools/{workerPoolId} If this
     * field is unspecified, the default Cloud Build worker pool will be used. If
     * omitted and deployment resource ref provided has worker_pool defined, that
     * worker pool is used.
     *
     * Generated from protobuf field <code>optional string worker_pool = 9 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerPool($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_pool = $var;

        return $this;
    }

    /**
     * Output only. Code describing any errors that may have occurred.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Preview.ErrorCode error_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * Output only. Code describing any errors that may have occurred.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Preview.ErrorCode error_code = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Config\V1\Preview\ErrorCode::class);
        $this->error_code = $var;

        return $this;
    }

    /**
     * Output only. Additional information regarding the current state.
     *
     * Generated from protobuf field <code>.google.rpc.Status error_status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getErrorStatus()
    {
        return $this->error_status;
    }

    public function hasErrorStatus()
    {
        return isset($this->error_status);
    }

    public function clearErrorStatus()
    {
        unset($this->error_status);
    }

    /**
     * Output only. Additional information regarding the current state.
     *
     * Generated from protobuf field <code>.google.rpc.Status error_status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setErrorStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error_status = $var;

        return $this;
    }

    /**
     * Output only. Cloud Build instance UUID associated with this preview.
     *
     * Generated from protobuf field <code>string build = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Output only. Cloud Build instance UUID associated with this preview.
     *
     * Generated from protobuf field <code>string build = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setBuild($var)
    {
        GPBUtil::checkString($var, True);
        $this->build = $var;

        return $this;
    }

    /**
     * Output only. Summary of errors encountered during Terraform preview.
     * It has a size limit of 10, i.e. only top 10 errors will be summarized here.
     *
     * Generated from protobuf field <code>repeated .google.cloud.config.v1.TerraformError tf_errors = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTfErrors()
    {
        return $this->tf_errors;
    }

    /**
     * Output only. Summary of errors encountered during Terraform preview.
     * It has a size limit of 10, i.e. only top 10 errors will be summarized here.
     *
     * Generated from protobuf field <code>repeated .google.cloud.config.v1.TerraformError tf_errors = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Config\V1\TerraformError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTfErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Config\V1\TerraformError::class);
        $this->tf_errors = $arr;

        return $this;
    }

    /**
     * Output only. Link to tf-error.ndjson file, which contains the full list of
     * the errors encountered during a Terraform preview.
     * Format: `gs://{bucket}/{object}`.
     *
     * Generated from protobuf field <code>string error_logs = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getErrorLogs()
    {
        return $this->error_logs;
    }

    /**
     * Output only. Link to tf-error.ndjson file, which contains the full list of
     * the errors encountered during a Terraform preview.
     * Format: `gs://{bucket}/{object}`.
     *
     * Generated from protobuf field <code>string error_logs = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setErrorLogs($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_logs = $var;

        return $this;
    }

    /**
     * Output only. Artifacts from preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.PreviewArtifacts preview_artifacts = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Config\V1\PreviewArtifacts|null
     */
    public function getPreviewArtifacts()
    {
        return $this->preview_artifacts;
    }

    public function hasPreviewArtifacts()
    {
        return isset($this->preview_artifacts);
    }

    public function clearPreviewArtifacts()
    {
        unset($this->preview_artifacts);
    }

    /**
     * Output only. Artifacts from preview.
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.PreviewArtifacts preview_artifacts = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Config\V1\PreviewArtifacts $var
     * @return $this
     */
    public function setPreviewArtifacts($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Config\V1\PreviewArtifacts::class);
        $this->preview_artifacts = $var;

        return $this;
    }

    /**
     * Output only. Location of preview logs in `gs://{bucket}/{object}` format.
     *
     * Generated from protobuf field <code>string logs = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLogs()
    {
        return $this->logs;
    }

    /**
     * Output only. Location of preview logs in `gs://{bucket}/{object}` format.
     *
     * Generated from protobuf field <code>string logs = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLogs($var)
    {
        GPBUtil::checkString($var, True);
        $this->logs = $var;

        return $this;
    }

    /**
     * Output only. The current Terraform version set on the preview.
     * It is in the format of "Major.Minor.Patch", for example, "1.3.10".
     *
     * Generated from protobuf field <code>string tf_version = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTfVersion()
    {
        return $this->tf_version;
    }

    /**
     * Output only. The current Terraform version set on the preview.
     * It is in the format of "Major.Minor.Patch", for example, "1.3.10".
     *
     * Generated from protobuf field <code>string tf_version = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTfVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->tf_version = $var;

        return $this;
    }

    /**
     * Optional. The user-specified Terraform version constraint.
     * Example: "=1.3.10".
     *
     * Generated from protobuf field <code>optional string tf_version_constraint = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTfVersionConstraint()
    {
        return isset($this->tf_version_constraint) ? $this->tf_version_constraint : '';
    }

    public function hasTfVersionConstraint()
    {
        return isset($this->tf_version_constraint);
    }

    public function clearTfVersionConstraint()
    {
        unset($this->tf_version_constraint);
    }

    /**
     * Optional. The user-specified Terraform version constraint.
     * Example: "=1.3.10".
     *
     * Generated from protobuf field <code>optional string tf_version_constraint = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTfVersionConstraint($var)
    {
        GPBUtil::checkString($var, True);
        $this->tf_version_constraint = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getBlueprint()
    {
        return $this->whichOneof("blueprint");
    }

}

