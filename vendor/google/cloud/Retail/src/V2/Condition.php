<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata that is used to define a condition that triggers an action.
 * A valid condition must specify at least one of 'query_terms' or
 * 'products_filter'. If multiple fields are specified, the condition is met if
 * all the fields are satisfied e.g. if a set of query terms and product_filter
 * are set, then only items matching the product_filter for requests with a
 * query matching the query terms wil get boosted.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Condition</code>
 */
class Condition extends \Google\Protobuf\Internal\Message
{
    /**
     * A list (up to 10 entries) of terms to match the query on. If not
     * specified, match all queries.
     * If many query terms are specified, the condition
     * is matched if any of the terms is a match (i.e. using the OR operator).
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Condition.QueryTerm query_terms = 1;</code>
     */
    private $query_terms;
    /**
     * Range of time(s) specifying when Condition is active.
     * Condition true if any time range matches.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Condition.TimeRange active_time_range = 3;</code>
     */
    private $active_time_range;
    /**
     * Used to support browse uses cases.
     * A list (up to 10 entries) of categories or departments.
     * The format should be the same as
     * [UserEvent.page_categories][google.cloud.retail.v2.UserEvent.page_categories];
     *
     * Generated from protobuf field <code>repeated string page_categories = 4;</code>
     */
    private $page_categories;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Retail\V2\Condition\QueryTerm>|\Google\Protobuf\Internal\RepeatedField $query_terms
     *           A list (up to 10 entries) of terms to match the query on. If not
     *           specified, match all queries.
     *           If many query terms are specified, the condition
     *           is matched if any of the terms is a match (i.e. using the OR operator).
     *     @type array<\Google\Cloud\Retail\V2\Condition\TimeRange>|\Google\Protobuf\Internal\RepeatedField $active_time_range
     *           Range of time(s) specifying when Condition is active.
     *           Condition true if any time range matches.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $page_categories
     *           Used to support browse uses cases.
     *           A list (up to 10 entries) of categories or departments.
     *           The format should be the same as
     *           [UserEvent.page_categories][google.cloud.retail.v2.UserEvent.page_categories];
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * A list (up to 10 entries) of terms to match the query on. If not
     * specified, match all queries.
     * If many query terms are specified, the condition
     * is matched if any of the terms is a match (i.e. using the OR operator).
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Condition.QueryTerm query_terms = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryTerms()
    {
        return $this->query_terms;
    }

    /**
     * A list (up to 10 entries) of terms to match the query on. If not
     * specified, match all queries.
     * If many query terms are specified, the condition
     * is matched if any of the terms is a match (i.e. using the OR operator).
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Condition.QueryTerm query_terms = 1;</code>
     * @param array<\Google\Cloud\Retail\V2\Condition\QueryTerm>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryTerms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Retail\V2\Condition\QueryTerm::class);
        $this->query_terms = $arr;

        return $this;
    }

    /**
     * Range of time(s) specifying when Condition is active.
     * Condition true if any time range matches.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Condition.TimeRange active_time_range = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActiveTimeRange()
    {
        return $this->active_time_range;
    }

    /**
     * Range of time(s) specifying when Condition is active.
     * Condition true if any time range matches.
     *
     * Generated from protobuf field <code>repeated .google.cloud.retail.v2.Condition.TimeRange active_time_range = 3;</code>
     * @param array<\Google\Cloud\Retail\V2\Condition\TimeRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActiveTimeRange($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Retail\V2\Condition\TimeRange::class);
        $this->active_time_range = $arr;

        return $this;
    }

    /**
     * Used to support browse uses cases.
     * A list (up to 10 entries) of categories or departments.
     * The format should be the same as
     * [UserEvent.page_categories][google.cloud.retail.v2.UserEvent.page_categories];
     *
     * Generated from protobuf field <code>repeated string page_categories = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPageCategories()
    {
        return $this->page_categories;
    }

    /**
     * Used to support browse uses cases.
     * A list (up to 10 entries) of categories or departments.
     * The format should be the same as
     * [UserEvent.page_categories][google.cloud.retail.v2.UserEvent.page_categories];
     *
     * Generated from protobuf field <code>repeated string page_categories = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPageCategories($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->page_categories = $arr;

        return $this;
    }

}

