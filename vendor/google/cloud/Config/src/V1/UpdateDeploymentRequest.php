<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/config/v1/config.proto

namespace Google\Cloud\Config\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.config.v1.UpdateDeploymentRequest</code>
 */
class UpdateDeploymentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Field mask used to specify the fields to be overwritten in the
     * Deployment resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;
    /**
     * Required. [Deployment][google.cloud.config.v1.Deployment] to update.
     * The deployment's `name` field is used to identify the resource to be
     * updated. Format:
     * `projects/{project}/locations/{location}/deployments/{deployment}`
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment deployment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $deployment = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param \Google\Cloud\Config\V1\Deployment $deployment Required. [Deployment][google.cloud.config.v1.Deployment] to update.
     *
     *                                                       The deployment's `name` field is used to identify the resource to be
     *                                                       updated. Format:
     *                                                       `projects/{project}/locations/{location}/deployments/{deployment}`
     * @param \Google\Protobuf\FieldMask         $updateMask Optional. Field mask used to specify the fields to be overwritten in the
     *                                                       Deployment resource by the update.
     *
     *                                                       The fields specified in the update_mask are relative to the resource, not
     *                                                       the full request. A field will be overwritten if it is in the mask. If the
     *                                                       user does not provide a mask then all fields will be overwritten.
     *
     * @return \Google\Cloud\Config\V1\UpdateDeploymentRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Config\V1\Deployment $deployment, \Google\Protobuf\FieldMask $updateMask): self
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
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Field mask used to specify the fields to be overwritten in the
     *           Deployment resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then all fields will be overwritten.
     *     @type \Google\Cloud\Config\V1\Deployment $deployment
     *           Required. [Deployment][google.cloud.config.v1.Deployment] to update.
     *           The deployment's `name` field is used to identify the resource to be
     *           updated. Format:
     *           `projects/{project}/locations/{location}/deployments/{deployment}`
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Config\V1\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Field mask used to specify the fields to be overwritten in the
     * Deployment resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Field mask used to specify the fields to be overwritten in the
     * Deployment resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. [Deployment][google.cloud.config.v1.Deployment] to update.
     * The deployment's `name` field is used to identify the resource to be
     * updated. Format:
     * `projects/{project}/locations/{location}/deployments/{deployment}`
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment deployment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Config\V1\Deployment|null
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
     * Required. [Deployment][google.cloud.config.v1.Deployment] to update.
     * The deployment's `name` field is used to identify the resource to be
     * updated. Format:
     * `projects/{project}/locations/{location}/deployments/{deployment}`
     *
     * Generated from protobuf field <code>.google.cloud.config.v1.Deployment deployment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Config\V1\Deployment $var
     * @return $this
     */
    public function setDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Config\V1\Deployment::class);
        $this->deployment = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}
