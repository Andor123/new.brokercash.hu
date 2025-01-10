<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionBackendServices.SetSecurityPolicy. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SetSecurityPolicyRegionBackendServiceRequest</code>
 */
class SetSecurityPolicyRegionBackendServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the BackendService resource to which the security policy should be set. The name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string backend_service = 306946058 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $backend_service = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     */
    private $region = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyReference security_policy_reference_resource = 204135024 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $security_policy_reference_resource = null;

    /**
     * @param string                                           $project                         Project ID for this request.
     * @param string                                           $region                          Name of the region scoping this request.
     * @param string                                           $backendService                  Name of the BackendService resource to which the security policy should be set. The name should conform to RFC1035.
     * @param \Google\Cloud\Compute\V1\SecurityPolicyReference $securityPolicyReferenceResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\SetSecurityPolicyRegionBackendServiceRequest
     *
     * @experimental
     */
    public static function build(string $project, string $region, string $backendService, \Google\Cloud\Compute\V1\SecurityPolicyReference $securityPolicyReferenceResource): self
    {
        return (new self())
            ->setProject($project)
            ->setRegion($region)
            ->setBackendService($backendService)
            ->setSecurityPolicyReferenceResource($securityPolicyReferenceResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backend_service
     *           Name of the BackendService resource to which the security policy should be set. The name should conform to RFC1035.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyReference $security_policy_reference_resource
     *           The body resource for this request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the BackendService resource to which the security policy should be set. The name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string backend_service = 306946058 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackendService()
    {
        return $this->backend_service;
    }

    /**
     * Name of the BackendService resource to which the security policy should be set. The name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string backend_service = 306946058 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackendService($var)
    {
        GPBUtil::checkString($var, True);
        $this->backend_service = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyReference security_policy_reference_resource = 204135024 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyReference|null
     */
    public function getSecurityPolicyReferenceResource()
    {
        return $this->security_policy_reference_resource;
    }

    public function hasSecurityPolicyReferenceResource()
    {
        return isset($this->security_policy_reference_resource);
    }

    public function clearSecurityPolicyReferenceResource()
    {
        unset($this->security_policy_reference_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SecurityPolicyReference security_policy_reference_resource = 204135024 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyReference $var
     * @return $this
     */
    public function setSecurityPolicyReferenceResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyReference::class);
        $this->security_policy_reference_resource = $var;

        return $this;
    }

}
