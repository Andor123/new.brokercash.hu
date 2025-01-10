<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains information on the resources to select for a deploy policy.
 * Attributes provided must all match the resource in order for policy
 * restrictions to apply. For example, if delivery pipelines attributes given
 * are an id "prod" and labels "foo: bar", a delivery pipeline resource must
 * match both that id and have that label in order to be subject to the policy.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.DeployPolicyResourceSelector</code>
 */
class DeployPolicyResourceSelector extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Contains attributes about a delivery pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeliveryPipelineAttribute delivery_pipeline = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $delivery_pipeline = null;
    /**
     * Optional. Contains attributes about a target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetAttribute target = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $target = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Deploy\V1\DeliveryPipelineAttribute $delivery_pipeline
     *           Optional. Contains attributes about a delivery pipeline.
     *     @type \Google\Cloud\Deploy\V1\TargetAttribute $target
     *           Optional. Contains attributes about a target.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Contains attributes about a delivery pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeliveryPipelineAttribute delivery_pipeline = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\DeliveryPipelineAttribute|null
     */
    public function getDeliveryPipeline()
    {
        return $this->delivery_pipeline;
    }

    public function hasDeliveryPipeline()
    {
        return isset($this->delivery_pipeline);
    }

    public function clearDeliveryPipeline()
    {
        unset($this->delivery_pipeline);
    }

    /**
     * Optional. Contains attributes about a delivery pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DeliveryPipelineAttribute delivery_pipeline = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\DeliveryPipelineAttribute $var
     * @return $this
     */
    public function setDeliveryPipeline($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\DeliveryPipelineAttribute::class);
        $this->delivery_pipeline = $var;

        return $this;
    }

    /**
     * Optional. Contains attributes about a target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetAttribute target = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\TargetAttribute|null
     */
    public function getTarget()
    {
        return $this->target;
    }

    public function hasTarget()
    {
        return isset($this->target);
    }

    public function clearTarget()
    {
        unset($this->target);
    }

    /**
     * Optional. Contains attributes about a target.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.TargetAttribute target = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\TargetAttribute $var
     * @return $this
     */
    public function setTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\TargetAttribute::class);
        $this->target = $var;

        return $this;
    }

}

