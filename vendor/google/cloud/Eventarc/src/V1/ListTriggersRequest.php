<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/eventarc.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the ListTriggers method.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.ListTriggersRequest</code>
 */
class ListTriggersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent collection to list triggers on.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of triggers to return on each page.
     * Note: The service may send fewer.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The page token; provide the value from the `next_page_token` field in a
     * previous `ListTriggers` call to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListTriggers` must match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * The sorting order of the resources returned. Value should be a
     * comma-separated list of fields. The default sorting order is ascending. To
     * specify descending order for a field, append a `desc` suffix; for example:
     * `name desc, trigger_id`.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     */
    protected $order_by = '';
    /**
     * Filter field. Used to filter the Triggers to be listed. Possible filters
     * are described in https://google.aip.dev/160. For example, using
     * "?filter=destination:gke" would list only Triggers with a gke destination.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. The parent collection to list triggers on. Please see
     *                       {@see EventarcClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Eventarc\V1\ListTriggersRequest
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
     *           Required. The parent collection to list triggers on.
     *     @type int $page_size
     *           The maximum number of triggers to return on each page.
     *           Note: The service may send fewer.
     *     @type string $page_token
     *           The page token; provide the value from the `next_page_token` field in a
     *           previous `ListTriggers` call to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListTriggers` must match
     *           the call that provided the page token.
     *     @type string $order_by
     *           The sorting order of the resources returned. Value should be a
     *           comma-separated list of fields. The default sorting order is ascending. To
     *           specify descending order for a field, append a `desc` suffix; for example:
     *           `name desc, trigger_id`.
     *     @type string $filter
     *           Filter field. Used to filter the Triggers to be listed. Possible filters
     *           are described in https://google.aip.dev/160. For example, using
     *           "?filter=destination:gke" would list only Triggers with a gke destination.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Eventarc::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent collection to list triggers on.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent collection to list triggers on.
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
     * The maximum number of triggers to return on each page.
     * Note: The service may send fewer.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of triggers to return on each page.
     * Note: The service may send fewer.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * The page token; provide the value from the `next_page_token` field in a
     * previous `ListTriggers` call to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListTriggers` must match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The page token; provide the value from the `next_page_token` field in a
     * previous `ListTriggers` call to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListTriggers` must match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
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
     * The sorting order of the resources returned. Value should be a
     * comma-separated list of fields. The default sorting order is ascending. To
     * specify descending order for a field, append a `desc` suffix; for example:
     * `name desc, trigger_id`.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * The sorting order of the resources returned. Value should be a
     * comma-separated list of fields. The default sorting order is ascending. To
     * specify descending order for a field, append a `desc` suffix; for example:
     * `name desc, trigger_id`.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Filter field. Used to filter the Triggers to be listed. Possible filters
     * are described in https://google.aip.dev/160. For example, using
     * "?filter=destination:gke" would list only Triggers with a gke destination.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter field. Used to filter the Triggers to be listed. Possible filters
     * are described in https://google.aip.dev/160. For example, using
     * "?filter=destination:gke" would list only Triggers with a gke destination.
     *
     * Generated from protobuf field <code>string filter = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}
