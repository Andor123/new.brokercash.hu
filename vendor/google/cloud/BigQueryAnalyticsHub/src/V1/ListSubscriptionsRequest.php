<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for listing subscriptions.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.ListSubscriptionsRequest</code>
 */
class ListSubscriptionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource path of the subscription.
     * e.g. projects/myproject/locations/US
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * An expression for filtering the results of the request. Eligible
     * fields for filtering are:
     *  * `listing`
     *  * `data_exchange`
     * Alternatively, a literal wrapped in double quotes may be provided.
     * This will be checked for an exact match against both fields above.
     * In all cases, the full Data Exchange or Listing resource name must
     * be provided. Some example of using filters:
     *  * data_exchange="projects/myproject/locations/us/dataExchanges/123"
     *  * listing="projects/123/locations/us/dataExchanges/456/listings/789"
     *  * "projects/myproject/locations/us/dataExchanges/123"
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';
    /**
     * The maximum number of results to return in a single response page.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * Page token, returned by a previous call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent resource path of the subscription.
     *                       e.g. projects/myproject/locations/US
     *                       Please see {@see AnalyticsHubServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\ListSubscriptionsRequest
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
     *           Required. The parent resource path of the subscription.
     *           e.g. projects/myproject/locations/US
     *     @type string $filter
     *           An expression for filtering the results of the request. Eligible
     *           fields for filtering are:
     *            * `listing`
     *            * `data_exchange`
     *           Alternatively, a literal wrapped in double quotes may be provided.
     *           This will be checked for an exact match against both fields above.
     *           In all cases, the full Data Exchange or Listing resource name must
     *           be provided. Some example of using filters:
     *            * data_exchange="projects/myproject/locations/us/dataExchanges/123"
     *            * listing="projects/123/locations/us/dataExchanges/456/listings/789"
     *            * "projects/myproject/locations/us/dataExchanges/123"
     *     @type int $page_size
     *           The maximum number of results to return in a single response page.
     *     @type string $page_token
     *           Page token, returned by a previous call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource path of the subscription.
     * e.g. projects/myproject/locations/US
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource path of the subscription.
     * e.g. projects/myproject/locations/US
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
     * An expression for filtering the results of the request. Eligible
     * fields for filtering are:
     *  * `listing`
     *  * `data_exchange`
     * Alternatively, a literal wrapped in double quotes may be provided.
     * This will be checked for an exact match against both fields above.
     * In all cases, the full Data Exchange or Listing resource name must
     * be provided. Some example of using filters:
     *  * data_exchange="projects/myproject/locations/us/dataExchanges/123"
     *  * listing="projects/123/locations/us/dataExchanges/456/listings/789"
     *  * "projects/myproject/locations/us/dataExchanges/123"
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * An expression for filtering the results of the request. Eligible
     * fields for filtering are:
     *  * `listing`
     *  * `data_exchange`
     * Alternatively, a literal wrapped in double quotes may be provided.
     * This will be checked for an exact match against both fields above.
     * In all cases, the full Data Exchange or Listing resource name must
     * be provided. Some example of using filters:
     *  * data_exchange="projects/myproject/locations/us/dataExchanges/123"
     *  * listing="projects/123/locations/us/dataExchanges/456/listings/789"
     *  * "projects/myproject/locations/us/dataExchanges/123"
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of results to return in a single response page.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return in a single response page.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
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
     * Page token, returned by a previous call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token, returned by a previous call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
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
