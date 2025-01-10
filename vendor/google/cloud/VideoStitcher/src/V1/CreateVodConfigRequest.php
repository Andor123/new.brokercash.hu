<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for VideoStitcherService.createVodConfig
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.CreateVodConfigRequest</code>
 */
class CreateVodConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project in which the VOD config should be created, in
     * the form of `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The unique identifier ID to use for the VOD config.
     *
     * Generated from protobuf field <code>string vod_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $vod_config_id = '';
    /**
     * Required. The VOD config resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.VodConfig vod_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $vod_config = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string                                    $parent      Required. The project in which the VOD config should be created, in
     *                                                               the form of `projects/{project_number}/locations/{location}`. Please see
     *                                                               {@see VideoStitcherServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Video\Stitcher\V1\VodConfig $vodConfig   Required. The VOD config resource to create.
     * @param string                                    $vodConfigId Required. The unique identifier ID to use for the VOD config.
     *
     * @return \Google\Cloud\Video\Stitcher\V1\CreateVodConfigRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Video\Stitcher\V1\VodConfig $vodConfig, string $vodConfigId): self
    {
        return (new self())
            ->setParent($parent)
            ->setVodConfig($vodConfig)
            ->setVodConfigId($vodConfigId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project in which the VOD config should be created, in
     *           the form of `projects/{project_number}/locations/{location}`.
     *     @type string $vod_config_id
     *           Required. The unique identifier ID to use for the VOD config.
     *     @type \Google\Cloud\Video\Stitcher\V1\VodConfig $vod_config
     *           Required. The VOD config resource to create.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported `(00000000-0000-0000-0000-000000000000)`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project in which the VOD config should be created, in
     * the form of `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project in which the VOD config should be created, in
     * the form of `projects/{project_number}/locations/{location}`.
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
     * Required. The unique identifier ID to use for the VOD config.
     *
     * Generated from protobuf field <code>string vod_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVodConfigId()
    {
        return $this->vod_config_id;
    }

    /**
     * Required. The unique identifier ID to use for the VOD config.
     *
     * Generated from protobuf field <code>string vod_config_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVodConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->vod_config_id = $var;

        return $this;
    }

    /**
     * Required. The VOD config resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.VodConfig vod_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Video\Stitcher\V1\VodConfig|null
     */
    public function getVodConfig()
    {
        return $this->vod_config;
    }

    public function hasVodConfig()
    {
        return isset($this->vod_config);
    }

    public function clearVodConfig()
    {
        unset($this->vod_config);
    }

    /**
     * Required. The VOD config resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.VodConfig vod_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Video\Stitcher\V1\VodConfig $var
     * @return $this
     */
    public function setVodConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\VodConfig::class);
        $this->vod_config = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported `(00000000-0000-0000-0000-000000000000)`.
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
