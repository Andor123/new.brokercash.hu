<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [UpdateDeployment][google.cloud.apihub.v1.ApiHub.UpdateDeployment]
 * method's request.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.UpdateDeploymentRequest</code>
 */
class UpdateDeploymentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The deployment resource to update.
     * The deployment resource's `name` field is used to identify the deployment
     * resource to update.
     * Format: `projects/{project}/locations/{location}/deployments/{deployment}`
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Deployment deployment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $deployment = null;
    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\ApiHub\V1\Deployment $deployment Required. The deployment resource to update.
     *
     *                                                       The deployment resource's `name` field is used to identify the deployment
     *                                                       resource to update.
     *                                                       Format: `projects/{project}/locations/{location}/deployments/{deployment}`
     * @param \Google\Protobuf\FieldMask         $updateMask Required. The list of fields to update.
     *
     * @return \Google\Cloud\ApiHub\V1\UpdateDeploymentRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ApiHub\V1\Deployment $deployment, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setDeployment($deployment)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApiHub\V1\Deployment $deployment
     *           Required. The deployment resource to update.
     *           The deployment resource's `name` field is used to identify the deployment
     *           resource to update.
     *           Format: `projects/{project}/locations/{location}/deployments/{deployment}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The deployment resource to update.
     * The deployment resource's `name` field is used to identify the deployment
     * resource to update.
     * Format: `projects/{project}/locations/{location}/deployments/{deployment}`
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Deployment deployment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiHub\V1\Deployment|null
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    public function hasDeployment()
    {
        return isset($this->deployment);
    }

    public function clearDeployment()
    {
        unset($this->deployment);
    }

    /**
     * Required. The deployment resource to update.
     * The deployment resource's `name` field is used to identify the deployment
     * resource to update.
     * Format: `projects/{project}/locations/{location}/deployments/{deployment}`
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Deployment deployment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiHub\V1\Deployment $var
     * @return $this
     */
    public function setDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Deployment::class);
        $this->deployment = $var;

        return $this;
    }

    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

