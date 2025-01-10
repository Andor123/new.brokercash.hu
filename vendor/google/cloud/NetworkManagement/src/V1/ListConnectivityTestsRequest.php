<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/reachability.proto

namespace Google\Cloud\NetworkManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListConnectivityTests` method.
 *
 * Generated from protobuf message <code>google.cloud.networkmanagement.v1.ListConnectivityTestsRequest</code>
 */
class ListConnectivityTestsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the Connectivity Tests:
     *     `projects/{project_id}/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Number of `ConnectivityTests` to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * Page token from an earlier query, as returned in `next_page_token`.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Lists the `ConnectivityTests` that match the filter expression. A filter
     * expression filters the resources listed in the response. The expression
     * must be of the form `<field> <operator> <value>` where operators: `<`, `>`,
     * `<=`,
     * `>=`,
     * `!=`, `=`, `:` are supported (colon `:` represents a HAS operator which is
     * roughly synonymous with equality). <field> can refer to a proto or JSON
     * field, or a synthetic field. Field names can be camelCase or snake_case.
     * Examples:
     * - Filter by name:
     *   name = "projects/proj-1/locations/global/connectivityTests/test-1
     * - Filter by labels:
     *   - Resources that have a key called `foo`
     *     labels.foo:*
     *   - Resources that have a key called `foo` whose value is `bar`
     *     labels.foo = bar
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    protected $filter = '';
    /**
     * Field to use to sort the list.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The parent resource of the Connectivity Tests:
     *                       `projects/{project_id}/locations/global`
     *
     * @return \Google\Cloud\NetworkManagement\V1\ListConnectivityTestsRequest
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
     *           Required. The parent resource of the Connectivity Tests:
     *               `projects/{project_id}/locations/global`
     *     @type int $page_size
     *           Number of `ConnectivityTests` to return.
     *     @type string $page_token
     *           Page token from an earlier query, as returned in `next_page_token`.
     *     @type string $filter
     *           Lists the `ConnectivityTests` that match the filter expression. A filter
     *           expression filters the resources listed in the response. The expression
     *           must be of the form `<field> <operator> <value>` where operators: `<`, `>`,
     *           `<=`,
     *           `>=`,
     *           `!=`, `=`, `:` are supported (colon `:` represents a HAS operator which is
     *           roughly synonymous with equality). <field> can refer to a proto or JSON
     *           field, or a synthetic field. Field names can be camelCase or snake_case.
     *           Examples:
     *           - Filter by name:
     *             name = "projects/proj-1/locations/global/connectivityTests/test-1
     *           - Filter by labels:
     *             - Resources that have a key called `foo`
     *               labels.foo:*
     *             - Resources that have a key called `foo` whose value is `bar`
     *               labels.foo = bar
     *     @type string $order_by
     *           Field to use to sort the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Reachability::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the Connectivity Tests:
     *     `projects/{project_id}/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the Connectivity Tests:
     *     `projects/{project_id}/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Number of `ConnectivityTests` to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of `ConnectivityTests` to return.
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
     * Page token from an earlier query, as returned in `next_page_token`.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token from an earlier query, as returned in `next_page_token`.
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
     * Lists the `ConnectivityTests` that match the filter expression. A filter
     * expression filters the resources listed in the response. The expression
     * must be of the form `<field> <operator> <value>` where operators: `<`, `>`,
     * `<=`,
     * `>=`,
     * `!=`, `=`, `:` are supported (colon `:` represents a HAS operator which is
     * roughly synonymous with equality). <field> can refer to a proto or JSON
     * field, or a synthetic field. Field names can be camelCase or snake_case.
     * Examples:
     * - Filter by name:
     *   name = "projects/proj-1/locations/global/connectivityTests/test-1
     * - Filter by labels:
     *   - Resources that have a key called `foo`
     *     labels.foo:*
     *   - Resources that have a key called `foo` whose value is `bar`
     *     labels.foo = bar
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Lists the `ConnectivityTests` that match the filter expression. A filter
     * expression filters the resources listed in the response. The expression
     * must be of the form `<field> <operator> <value>` where operators: `<`, `>`,
     * `<=`,
     * `>=`,
     * `!=`, `=`, `:` are supported (colon `:` represents a HAS operator which is
     * roughly synonymous with equality). <field> can refer to a proto or JSON
     * field, or a synthetic field. Field names can be camelCase or snake_case.
     * Examples:
     * - Filter by name:
     *   name = "projects/proj-1/locations/global/connectivityTests/test-1
     * - Filter by labels:
     *   - Resources that have a key called `foo`
     *     labels.foo:*
     *   - Resources that have a key called `foo` whose value is `bar`
     *     labels.foo = bar
     *
     * Generated from protobuf field <code>string filter = 4;</code>
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
     * Field to use to sort the list.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Field to use to sort the list.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

