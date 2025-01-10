<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apphub/v1/apphub_service.proto

namespace Google\Cloud\AppHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for CreateService.
 *
 * Generated from protobuf message <code>google.cloud.apphub.v1.CreateServiceRequest</code>
 */
class CreateServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Fully qualified name of the parent Application to create the
     * Service in. Expected format:
     * `projects/{project}/locations/{location}/applications/{application}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The Service identifier.
     * Must contain only lowercase letters, numbers
     * or hyphens, with the first character a letter, the last a letter or a
     * number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string service_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service_id = '';
    /**
     * Required. The resource being created.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Service service = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string                          $parent    Required. Fully qualified name of the parent Application to create the
     *                                                   Service in. Expected format:
     *                                                   `projects/{project}/locations/{location}/applications/{application}`. Please see
     *                                                   {@see AppHubClient::applicationName()} for help formatting this field.
     * @param \Google\Cloud\AppHub\V1\Service $service   Required. The resource being created.
     * @param string                          $serviceId Required. The Service identifier.
     *                                                   Must contain only lowercase letters, numbers
     *                                                   or hyphens, with the first character a letter, the last a letter or a
     *                                                   number, and a 63 character maximum.
     *
     * @return \Google\Cloud\AppHub\V1\CreateServiceRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AppHub\V1\Service $service, string $serviceId): self
    {
        return (new self())
            ->setParent($parent)
            ->setService($service)
            ->setServiceId($serviceId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Fully qualified name of the parent Application to create the
     *           Service in. Expected format:
     *           `projects/{project}/locations/{location}/applications/{application}`.
     *     @type string $service_id
     *           Required. The Service identifier.
     *           Must contain only lowercase letters, numbers
     *           or hyphens, with the first character a letter, the last a letter or a
     *           number, and a 63 character maximum.
     *     @type \Google\Cloud\AppHub\V1\Service $service
     *           Required. The resource being created.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apphub\V1\ApphubService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Fully qualified name of the parent Application to create the
     * Service in. Expected format:
     * `projects/{project}/locations/{location}/applications/{application}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Fully qualified name of the parent Application to create the
     * Service in. Expected format:
     * `projects/{project}/locations/{location}/applications/{application}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The Service identifier.
     * Must contain only lowercase letters, numbers
     * or hyphens, with the first character a letter, the last a letter or a
     * number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string service_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * Required. The Service identifier.
     * Must contain only lowercase letters, numbers
     * or hyphens, with the first character a letter, the last a letter or a
     * number, and a 63 character maximum.
     *
     * Generated from protobuf field <code>string service_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_id = $var;

        return $this;
    }

    /**
     * Required. The resource being created.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Service service = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AppHub\V1\Service|null
     */
    public function getService()
    {
        return $this->service;
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Required. The resource being created.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.Service service = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AppHub\V1\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppHub\V1\Service::class);
        $this->service = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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

