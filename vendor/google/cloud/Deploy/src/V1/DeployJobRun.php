<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DeployJobRun contains information specific to a deploy `JobRun`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.DeployJobRun</code>
 */
class DeployJobRun extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the Cloud Build `Build` object that is
     * used to deploy. Format is
     * `projects/{project}/locations/{location}/builds/{build}`.
     *
     * Generated from protobuf field <code>string build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $build = '';
    /**
     * Output only. The reason the deploy failed. This will always be unspecified
     * while the deploy is in progress or if it succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployJobRun.FailureCause failure_cause = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failure_cause = 0;
    /**
     * Output only. Additional information about the deploy failure, if available.
     *
     * Generated from protobuf field <code>string failure_message = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $failure_message = '';
    /**
     * Output only. Metadata containing information about the deploy job run.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployJobRunMetadata metadata = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $metadata = null;
    /**
     * Output only. The artifact of a deploy job run, if available.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployArtifact artifact = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $artifact = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $build
     *           Output only. The resource name of the Cloud Build `Build` object that is
     *           used to deploy. Format is
     *           `projects/{project}/locations/{location}/builds/{build}`.
     *     @type int $failure_cause
     *           Output only. The reason the deploy failed. This will always be unspecified
     *           while the deploy is in progress or if it succeeded.
     *     @type string $failure_message
     *           Output only. Additional information about the deploy failure, if available.
     *     @type \Google\Cloud\Deploy\V1\DeployJobRunMetadata $metadata
     *           Output only. Metadata containing information about the deploy job run.
     *     @type \Google\Cloud\Deploy\V1\DeployArtifact $artifact
     *           Output only. The artifact of a deploy job run, if available.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the Cloud Build `Build` object that is
     * used to deploy. Format is
     * `projects/{project}/locations/{location}/builds/{build}`.
     *
     * Generated from protobuf field <code>string build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Output only. The resource name of the Cloud Build `Build` object that is
     * used to deploy. Format is
     * `projects/{project}/locations/{location}/builds/{build}`.
     *
     * Generated from protobuf field <code>string build = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The reason the deploy failed. This will always be unspecified
     * while the deploy is in progress or if it succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployJobRun.FailureCause failure_cause = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFailureCause()
    {
        return $this->failure_cause;
    }

    /**
     * Output only. The reason the deploy failed. This will always be unspecified
     * while the deploy is in progress or if it succeeded.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployJobRun.FailureCause failure_cause = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFailureCause($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\DeployJobRun\FailureCause::class);
        $this->failure_cause = $var;

        return $this;
    }

    /**
     * Output only. Additional information about the deploy failure, if available.
     *
     * Generated from protobuf field <code>string failure_message = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFailureMessage()
    {
        return $this->failure_message;
    }

    /**
     * Output only. Additional information about the deploy failure, if available.
     *
     * Generated from protobuf field <code>string failure_message = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFailureMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_message = $var;

        return $this;
    }

    /**
     * Output only. Metadata containing information about the deploy job run.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployJobRunMetadata metadata = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\DeployJobRunMetadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Output only. Metadata containing information about the deploy job run.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployJobRunMetadata metadata = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\DeployJobRunMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\DeployJobRunMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Output only. The artifact of a deploy job run, if available.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployArtifact artifact = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Deploy\V1\DeployArtifact|null
     */
    public function getArtifact()
    {
        return $this->artifact;
    }

    public function hasArtifact()
    {
        return isset($this->artifact);
    }

    public function clearArtifact()
    {
        unset($this->artifact);
    }

    /**
     * Output only. The artifact of a deploy job run, if available.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeployArtifact artifact = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Deploy\V1\DeployArtifact $var
     * @return $this
     */
    public function setArtifact($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\DeployArtifact::class);
        $this->artifact = $var;

        return $this;
    }

}

