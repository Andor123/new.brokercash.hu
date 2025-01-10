<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/dep.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for creating a `LbTrafficExtension` resource.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.CreateLbTrafficExtensionRequest</code>
 */
class CreateLbTrafficExtensionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the `LbTrafficExtension` resource. Must be
     * in the format `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. User-provided ID of the `LbTrafficExtension` resource to be
     * created.
     *
     * Generated from protobuf field <code>string lb_traffic_extension_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $lb_traffic_extension_id = '';
    /**
     * Required. `LbTrafficExtension` resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.LbTrafficExtension lb_traffic_extension = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $lb_traffic_extension = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server can ignore
     * the request if it has already been completed. The server guarantees
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, ignores the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string                                              $parent               Required. The parent resource of the `LbTrafficExtension` resource. Must be
     *                                                                                  in the format `projects/{project}/locations/{location}`. Please see
     *                                                                                  {@see DepServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetworkServices\V1\LbTrafficExtension $lbTrafficExtension   Required. `LbTrafficExtension` resource to be created.
     * @param string                                              $lbTrafficExtensionId Required. User-provided ID of the `LbTrafficExtension` resource to be
     *                                                                                  created.
     *
     * @return \Google\Cloud\NetworkServices\V1\CreateLbTrafficExtensionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetworkServices\V1\LbTrafficExtension $lbTrafficExtension, string $lbTrafficExtensionId): self
    {
        return (new self())
            ->setParent($parent)
            ->setLbTrafficExtension($lbTrafficExtension)
            ->setLbTrafficExtensionId($lbTrafficExtensionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the `LbTrafficExtension` resource. Must be
     *           in the format `projects/{project}/locations/{location}`.
     *     @type string $lb_traffic_extension_id
     *           Required. User-provided ID of the `LbTrafficExtension` resource to be
     *           created.
     *     @type \Google\Cloud\NetworkServices\V1\LbTrafficExtension $lb_traffic_extension
     *           Required. `LbTrafficExtension` resource to be created.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server can ignore
     *           the request if it has already been completed. The server guarantees
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, ignores the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\Dep::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the `LbTrafficExtension` resource. Must be
     * in the format `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the `LbTrafficExtension` resource. Must be
     * in the format `projects/{project}/locations/{location}`.
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
     * Required. User-provided ID of the `LbTrafficExtension` resource to be
     * created.
     *
     * Generated from protobuf field <code>string lb_traffic_extension_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLbTrafficExtensionId()
    {
        return $this->lb_traffic_extension_id;
    }

    /**
     * Required. User-provided ID of the `LbTrafficExtension` resource to be
     * created.
     *
     * Generated from protobuf field <code>string lb_traffic_extension_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLbTrafficExtensionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->lb_traffic_extension_id = $var;

        return $this;
    }

    /**
     * Required. `LbTrafficExtension` resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.LbTrafficExtension lb_traffic_extension = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\LbTrafficExtension|null
     */
    public function getLbTrafficExtension()
    {
        return $this->lb_traffic_extension;
    }

    public function hasLbTrafficExtension()
    {
        return isset($this->lb_traffic_extension);
    }

    public function clearLbTrafficExtension()
    {
        unset($this->lb_traffic_extension);
    }

    /**
     * Required. `LbTrafficExtension` resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.LbTrafficExtension lb_traffic_extension = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\LbTrafficExtension $var
     * @return $this
     */
    public function setLbTrafficExtension($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\LbTrafficExtension::class);
        $this->lb_traffic_extension = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server can ignore
     * the request if it has already been completed. The server guarantees
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, ignores the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server can ignore
     * the request if it has already been completed. The server guarantees
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, ignores the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
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

