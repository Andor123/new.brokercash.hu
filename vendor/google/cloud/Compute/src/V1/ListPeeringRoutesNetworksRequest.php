<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Networks.ListPeeringRoutes. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ListPeeringRoutesNetworksRequest</code>
 */
class ListPeeringRoutesNetworksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The direction of the exchanged routes.
     * Check the Direction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string direction = 111150975;</code>
     */
    private $direction = null;
    /**
     * A filter expression that filters resources listed in the response. Most Compute resources support two types of filter expressions: expressions that support regular expressions and expressions that follow API improvement proposal AIP-160. These two types of filter expressions cannot be mixed in one request. If you want to use AIP-160, your expression must specify the field name, an operator, and the value that you want to use for filtering. The value must be a string, a number, or a boolean. The operator must be either `=`, `!=`, `>`, `<`, `<=`, `>=` or `:`. For example, if you are filtering Compute Engine instances, you can exclude instances named `example-instance` by specifying `name != example-instance`. The `:*` comparison can be used to test whether a key has been defined. For example, to find all objects with `owner` label use: ``` labels.owner:* ``` You can also filter nested fields. For example, you could specify `scheduling.automaticRestart = false` to include instances only if they are not scheduled for automatic restarts. You can use filtering on nested fields to filter based on resource labels. To filter on multiple expressions, provide each separate expression within parentheses. For example: ``` (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By default, each expression is an `AND` expression. However, you can include `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND (scheduling.automaticRestart = true) ``` If you want to use a regular expression, use the `eq` (equal) or `ne` (not equal) operator against a single un-parenthesized expression with or without quotes or against multiple parenthesized expressions. Examples: `fieldname eq unquoted literal` `fieldname eq 'single quoted literal'` `fieldname eq "double quoted literal"` `(fieldname1 eq literal) (fieldname2 ne "literal")` The literal value is interpreted as a regular expression using Google RE2 library syntax. The literal value must match the entire field. For example, to filter for instances that do not end with name "instance", you would use `name ne .*instance`. You cannot combine constraints on multiple fields using regular expressions.
     *
     * Generated from protobuf field <code>optional string filter = 336120696;</code>
     */
    private $filter = null;
    /**
     * The maximum number of results per page that should be returned. If the number of available results is larger than `maxResults`, Compute Engine returns a `nextPageToken` that can be used to get the next page of results in subsequent list requests. Acceptable values are `0` to `500`, inclusive. (Default: `500`)
     *
     * Generated from protobuf field <code>optional uint32 max_results = 54715419;</code>
     */
    private $max_results = null;
    /**
     * Name of the network for this request.
     *
     * Generated from protobuf field <code>string network = 232872494 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $network = '';
    /**
     * Sorts list results by a certain order. By default, results are returned in alphanumerical order based on the resource name. You can also sort results in descending order based on the creation timestamp using `orderBy="creationTimestamp desc"`. This sorts results based on the `creationTimestamp` field in reverse chronological order (newest result first). Use this to sort resources like operations so that the newest operation is returned first. Currently, only sorting by `name` or `creationTimestamp desc` is supported.
     *
     * Generated from protobuf field <code>optional string order_by = 160562920;</code>
     */
    private $order_by = null;
    /**
     * Specifies a page token to use. Set `pageToken` to the `nextPageToken` returned by a previous list request to get the next page of results.
     *
     * Generated from protobuf field <code>optional string page_token = 19994697;</code>
     */
    private $page_token = null;
    /**
     * The response will show routes exchanged over the given peering connection.
     *
     * Generated from protobuf field <code>optional string peering_name = 249571370;</code>
     */
    private $peering_name = null;
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * The region of the request. The response will include all subnet routes, static routes and dynamic routes in the region.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * Opt-in for partial success behavior which provides partial results in case of failure. The default value is false. For example, when partial success behavior is enabled, aggregatedList for a single zone scope either returns all resources in the zone or no resources, with an error code.
     *
     * Generated from protobuf field <code>optional bool return_partial_success = 517198390;</code>
     */
    private $return_partial_success = null;

    /**
     * @param string $project Project ID for this request.
     * @param string $network Name of the network for this request.
     *
     * @return \Google\Cloud\Compute\V1\ListPeeringRoutesNetworksRequest
     *
     * @experimental
     */
    public static function build(string $project, string $network): self
    {
        return (new self())
            ->setProject($project)
            ->setNetwork($network);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $direction
     *           The direction of the exchanged routes.
     *           Check the Direction enum for the list of possible values.
     *     @type string $filter
     *           A filter expression that filters resources listed in the response. Most Compute resources support two types of filter expressions: expressions that support regular expressions and expressions that follow API improvement proposal AIP-160. These two types of filter expressions cannot be mixed in one request. If you want to use AIP-160, your expression must specify the field name, an operator, and the value that you want to use for filtering. The value must be a string, a number, or a boolean. The operator must be either `=`, `!=`, `>`, `<`, `<=`, `>=` or `:`. For example, if you are filtering Compute Engine instances, you can exclude instances named `example-instance` by specifying `name != example-instance`. The `:*` comparison can be used to test whether a key has been defined. For example, to find all objects with `owner` label use: ``` labels.owner:* ``` You can also filter nested fields. For example, you could specify `scheduling.automaticRestart = false` to include instances only if they are not scheduled for automatic restarts. You can use filtering on nested fields to filter based on resource labels. To filter on multiple expressions, provide each separate expression within parentheses. For example: ``` (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By default, each expression is an `AND` expression. However, you can include `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND (scheduling.automaticRestart = true) ``` If you want to use a regular expression, use the `eq` (equal) or `ne` (not equal) operator against a single un-parenthesized expression with or without quotes or against multiple parenthesized expressions. Examples: `fieldname eq unquoted literal` `fieldname eq 'single quoted literal'` `fieldname eq "double quoted literal"` `(fieldname1 eq literal) (fieldname2 ne "literal")` The literal value is interpreted as a regular expression using Google RE2 library syntax. The literal value must match the entire field. For example, to filter for instances that do not end with name "instance", you would use `name ne .*instance`. You cannot combine constraints on multiple fields using regular expressions.
     *     @type int $max_results
     *           The maximum number of results per page that should be returned. If the number of available results is larger than `maxResults`, Compute Engine returns a `nextPageToken` that can be used to get the next page of results in subsequent list requests. Acceptable values are `0` to `500`, inclusive. (Default: `500`)
     *     @type string $network
     *           Name of the network for this request.
     *     @type string $order_by
     *           Sorts list results by a certain order. By default, results are returned in alphanumerical order based on the resource name. You can also sort results in descending order based on the creation timestamp using `orderBy="creationTimestamp desc"`. This sorts results based on the `creationTimestamp` field in reverse chronological order (newest result first). Use this to sort resources like operations so that the newest operation is returned first. Currently, only sorting by `name` or `creationTimestamp desc` is supported.
     *     @type string $page_token
     *           Specifies a page token to use. Set `pageToken` to the `nextPageToken` returned by a previous list request to get the next page of results.
     *     @type string $peering_name
     *           The response will show routes exchanged over the given peering connection.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           The region of the request. The response will include all subnet routes, static routes and dynamic routes in the region.
     *     @type bool $return_partial_success
     *           Opt-in for partial success behavior which provides partial results in case of failure. The default value is false. For example, when partial success behavior is enabled, aggregatedList for a single zone scope either returns all resources in the zone or no resources, with an error code.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The direction of the exchanged routes.
     * Check the Direction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string direction = 111150975;</code>
     * @return string
     */
    public function getDirection()
    {
        return isset($this->direction) ? $this->direction : '';
    }

    public function hasDirection()
    {
        return isset($this->direction);
    }

    public function clearDirection()
    {
        unset($this->direction);
    }

    /**
     * The direction of the exchanged routes.
     * Check the Direction enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string direction = 111150975;</code>
     * @param string $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkString($var, True);
        $this->direction = $var;

        return $this;
    }

    /**
     * A filter expression that filters resources listed in the response. Most Compute resources support two types of filter expressions: expressions that support regular expressions and expressions that follow API improvement proposal AIP-160. These two types of filter expressions cannot be mixed in one request. If you want to use AIP-160, your expression must specify the field name, an operator, and the value that you want to use for filtering. The value must be a string, a number, or a boolean. The operator must be either `=`, `!=`, `>`, `<`, `<=`, `>=` or `:`. For example, if you are filtering Compute Engine instances, you can exclude instances named `example-instance` by specifying `name != example-instance`. The `:*` comparison can be used to test whether a key has been defined. For example, to find all objects with `owner` label use: ``` labels.owner:* ``` You can also filter nested fields. For example, you could specify `scheduling.automaticRestart = false` to include instances only if they are not scheduled for automatic restarts. You can use filtering on nested fields to filter based on resource labels. To filter on multiple expressions, provide each separate expression within parentheses. For example: ``` (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By default, each expression is an `AND` expression. However, you can include `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND (scheduling.automaticRestart = true) ``` If you want to use a regular expression, use the `eq` (equal) or `ne` (not equal) operator against a single un-parenthesized expression with or without quotes or against multiple parenthesized expressions. Examples: `fieldname eq unquoted literal` `fieldname eq 'single quoted literal'` `fieldname eq "double quoted literal"` `(fieldname1 eq literal) (fieldname2 ne "literal")` The literal value is interpreted as a regular expression using Google RE2 library syntax. The literal value must match the entire field. For example, to filter for instances that do not end with name "instance", you would use `name ne .*instance`. You cannot combine constraints on multiple fields using regular expressions.
     *
     * Generated from protobuf field <code>optional string filter = 336120696;</code>
     * @return string
     */
    public function getFilter()
    {
        return isset($this->filter) ? $this->filter : '';
    }

    public function hasFilter()
    {
        return isset($this->filter);
    }

    public function clearFilter()
    {
        unset($this->filter);
    }

    /**
     * A filter expression that filters resources listed in the response. Most Compute resources support two types of filter expressions: expressions that support regular expressions and expressions that follow API improvement proposal AIP-160. These two types of filter expressions cannot be mixed in one request. If you want to use AIP-160, your expression must specify the field name, an operator, and the value that you want to use for filtering. The value must be a string, a number, or a boolean. The operator must be either `=`, `!=`, `>`, `<`, `<=`, `>=` or `:`. For example, if you are filtering Compute Engine instances, you can exclude instances named `example-instance` by specifying `name != example-instance`. The `:*` comparison can be used to test whether a key has been defined. For example, to find all objects with `owner` label use: ``` labels.owner:* ``` You can also filter nested fields. For example, you could specify `scheduling.automaticRestart = false` to include instances only if they are not scheduled for automatic restarts. You can use filtering on nested fields to filter based on resource labels. To filter on multiple expressions, provide each separate expression within parentheses. For example: ``` (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By default, each expression is an `AND` expression. However, you can include `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND (scheduling.automaticRestart = true) ``` If you want to use a regular expression, use the `eq` (equal) or `ne` (not equal) operator against a single un-parenthesized expression with or without quotes or against multiple parenthesized expressions. Examples: `fieldname eq unquoted literal` `fieldname eq 'single quoted literal'` `fieldname eq "double quoted literal"` `(fieldname1 eq literal) (fieldname2 ne "literal")` The literal value is interpreted as a regular expression using Google RE2 library syntax. The literal value must match the entire field. For example, to filter for instances that do not end with name "instance", you would use `name ne .*instance`. You cannot combine constraints on multiple fields using regular expressions.
     *
     * Generated from protobuf field <code>optional string filter = 336120696;</code>
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
     * The maximum number of results per page that should be returned. If the number of available results is larger than `maxResults`, Compute Engine returns a `nextPageToken` that can be used to get the next page of results in subsequent list requests. Acceptable values are `0` to `500`, inclusive. (Default: `500`)
     *
     * Generated from protobuf field <code>optional uint32 max_results = 54715419;</code>
     * @return int
     */
    public function getMaxResults()
    {
        return isset($this->max_results) ? $this->max_results : 0;
    }

    public function hasMaxResults()
    {
        return isset($this->max_results);
    }

    public function clearMaxResults()
    {
        unset($this->max_results);
    }

    /**
     * The maximum number of results per page that should be returned. If the number of available results is larger than `maxResults`, Compute Engine returns a `nextPageToken` that can be used to get the next page of results in subsequent list requests. Acceptable values are `0` to `500`, inclusive. (Default: `500`)
     *
     * Generated from protobuf field <code>optional uint32 max_results = 54715419;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxResults($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_results = $var;

        return $this;
    }

    /**
     * Name of the network for this request.
     *
     * Generated from protobuf field <code>string network = 232872494 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Name of the network for this request.
     *
     * Generated from protobuf field <code>string network = 232872494 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Sorts list results by a certain order. By default, results are returned in alphanumerical order based on the resource name. You can also sort results in descending order based on the creation timestamp using `orderBy="creationTimestamp desc"`. This sorts results based on the `creationTimestamp` field in reverse chronological order (newest result first). Use this to sort resources like operations so that the newest operation is returned first. Currently, only sorting by `name` or `creationTimestamp desc` is supported.
     *
     * Generated from protobuf field <code>optional string order_by = 160562920;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return isset($this->order_by) ? $this->order_by : '';
    }

    public function hasOrderBy()
    {
        return isset($this->order_by);
    }

    public function clearOrderBy()
    {
        unset($this->order_by);
    }

    /**
     * Sorts list results by a certain order. By default, results are returned in alphanumerical order based on the resource name. You can also sort results in descending order based on the creation timestamp using `orderBy="creationTimestamp desc"`. This sorts results based on the `creationTimestamp` field in reverse chronological order (newest result first). Use this to sort resources like operations so that the newest operation is returned first. Currently, only sorting by `name` or `creationTimestamp desc` is supported.
     *
     * Generated from protobuf field <code>optional string order_by = 160562920;</code>
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
     * Specifies a page token to use. Set `pageToken` to the `nextPageToken` returned by a previous list request to get the next page of results.
     *
     * Generated from protobuf field <code>optional string page_token = 19994697;</code>
     * @return string
     */
    public function getPageToken()
    {
        return isset($this->page_token) ? $this->page_token : '';
    }

    public function hasPageToken()
    {
        return isset($this->page_token);
    }

    public function clearPageToken()
    {
        unset($this->page_token);
    }

    /**
     * Specifies a page token to use. Set `pageToken` to the `nextPageToken` returned by a previous list request to get the next page of results.
     *
     * Generated from protobuf field <code>optional string page_token = 19994697;</code>
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
     * The response will show routes exchanged over the given peering connection.
     *
     * Generated from protobuf field <code>optional string peering_name = 249571370;</code>
     * @return string
     */
    public function getPeeringName()
    {
        return isset($this->peering_name) ? $this->peering_name : '';
    }

    public function hasPeeringName()
    {
        return isset($this->peering_name);
    }

    public function clearPeeringName()
    {
        unset($this->peering_name);
    }

    /**
     * The response will show routes exchanged over the given peering connection.
     *
     * Generated from protobuf field <code>optional string peering_name = 249571370;</code>
     * @param string $var
     * @return $this
     */
    public function setPeeringName($var)
    {
        GPBUtil::checkString($var, True);
        $this->peering_name = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The region of the request. The response will include all subnet routes, static routes and dynamic routes in the region.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * The region of the request. The response will include all subnet routes, static routes and dynamic routes in the region.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
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
     * Opt-in for partial success behavior which provides partial results in case of failure. The default value is false. For example, when partial success behavior is enabled, aggregatedList for a single zone scope either returns all resources in the zone or no resources, with an error code.
     *
     * Generated from protobuf field <code>optional bool return_partial_success = 517198390;</code>
     * @return bool
     */
    public function getReturnPartialSuccess()
    {
        return isset($this->return_partial_success) ? $this->return_partial_success : false;
    }

    public function hasReturnPartialSuccess()
    {
        return isset($this->return_partial_success);
    }

    public function clearReturnPartialSuccess()
    {
        unset($this->return_partial_success);
    }

    /**
     * Opt-in for partial success behavior which provides partial results in case of failure. The default value is false. For example, when partial success behavior is enabled, aggregatedList for a single zone scope either returns all resources in the zone or no resources, with an error code.
     *
     * Generated from protobuf field <code>optional bool return_partial_success = 517198390;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnPartialSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->return_partial_success = $var;

        return $this;
    }

}

