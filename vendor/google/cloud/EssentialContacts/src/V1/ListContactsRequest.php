<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/essentialcontacts/v1/service.proto

namespace Google\Cloud\EssentialContacts\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the ListContacts method.
 *
 * Generated from protobuf message <code>google.cloud.essentialcontacts.v1.ListContactsRequest</code>
 */
class ListContactsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name.
     * Format: organizations/{organization_id}, folders/{folder_id} or
     * projects/{project_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored. The presence of `next_page_token` in the
     * response indicates that more results might be available.
     * If not specified, the default page_size is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. If present, retrieves the next batch of results from the
     * preceding call to this method. `page_token` must be the value of
     * `next_page_token` from the previous response. The values of other method
     * parameters should be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent resource name.
     *                       Format: organizations/{organization_id}, folders/{folder_id} or
     *                       projects/{project_id}
     *                       Please see {@see EssentialContactsServiceClient::projectName()} for help formatting this field.
     *
     * @return \Google\Cloud\EssentialContacts\V1\ListContactsRequest
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
     *           Required. The parent resource name.
     *           Format: organizations/{organization_id}, folders/{folder_id} or
     *           projects/{project_id}
     *     @type int $page_size
     *           Optional. The maximum number of results to return from this request.
     *           Non-positive values are ignored. The presence of `next_page_token` in the
     *           response indicates that more results might be available.
     *           If not specified, the default page_size is 100.
     *     @type string $page_token
     *           Optional. If present, retrieves the next batch of results from the
     *           preceding call to this method. `page_token` must be the value of
     *           `next_page_token` from the previous response. The values of other method
     *           parameters should be identical to those in the previous call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Essentialcontacts\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name.
     * Format: organizations/{organization_id}, folders/{folder_id} or
     * projects/{project_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name.
     * Format: organizations/{organization_id}, folders/{folder_id} or
     * projects/{project_id}
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
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored. The presence of `next_page_token` in the
     * response indicates that more results might be available.
     * If not specified, the default page_size is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored. The presence of `next_page_token` in the
     * response indicates that more results might be available.
     * If not specified, the default page_size is 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. If present, retrieves the next batch of results from the
     * preceding call to this method. `page_token` must be the value of
     * `next_page_token` from the previous response. The values of other method
     * parameters should be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If present, retrieves the next batch of results from the
     * preceding call to this method. `page_token` must be the value of
     * `next_page_token` from the previous response. The values of other method
     * parameters should be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
