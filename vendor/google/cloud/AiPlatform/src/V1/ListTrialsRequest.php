<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vizier_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VizierService.ListTrials][google.cloud.aiplatform.v1.VizierService.ListTrials].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListTrialsRequest</code>
 */
class ListTrialsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Study to list the Trial from.
     * Format: `projects/{project}/locations/{location}/studies/{study}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. A page token to request the next page of results.
     * If unspecified, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. The number of Trials to retrieve per "page" of results.
     * If unspecified, the service will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;

    /**
     * @param string $parent Required. The resource name of the Study to list the Trial from.
     *                       Format: `projects/{project}/locations/{location}/studies/{study}`
     *                       Please see {@see VizierServiceClient::studyName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\ListTrialsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Study to list the Trial from.
     *           Format: `projects/{project}/locations/{location}/studies/{study}`
     *     @type string $page_token
     *           Optional. A page token to request the next page of results.
     *           If unspecified, there are no subsequent pages.
     *     @type int $page_size
     *           Optional. The number of Trials to retrieve per "page" of results.
     *           If unspecified, the service will pick an appropriate default.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VizierService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Study to list the Trial from.
     * Format: `projects/{project}/locations/{location}/studies/{study}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Study to list the Trial from.
     * Format: `projects/{project}/locations/{location}/studies/{study}`
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
     * Optional. A page token to request the next page of results.
     * If unspecified, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token to request the next page of results.
     * If unspecified, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string page_token = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The number of Trials to retrieve per "page" of results.
     * If unspecified, the service will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The number of Trials to retrieve per "page" of results.
     * If unspecified, the service will pick an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

