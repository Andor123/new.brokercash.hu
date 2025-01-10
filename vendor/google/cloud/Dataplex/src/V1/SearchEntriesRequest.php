<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.dataplex.v1.SearchEntriesRequest</code>
 */
class SearchEntriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project to which the request should be attributed in the
     * following form: `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. The query against which entries in scope should be matched.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $query = '';
    /**
     * Optional. Pagination.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. Ordering of the results. Supported options to be added later.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';
    /**
     * Optional. The scope under which the search should be operating. Should
     * either be organizations/<org_id> or projects/<project_ref>. If left
     * unspecified, it will default to the organization where the project provided
     * in `name` is located.
     *
     * Generated from protobuf field <code>string scope = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $scope = '';

    /**
     * @param string $name  Required. The project to which the request should be attributed in the
     *                      following form: `projects/{project}/locations/{location}`.
     * @param string $query Required. The query against which entries in scope should be matched.
     *
     * @return \Google\Cloud\Dataplex\V1\SearchEntriesRequest
     *
     * @experimental
     */
    public static function build(string $name, string $query): self
    {
        return (new self())
            ->setName($name)
            ->setQuery($query);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The project to which the request should be attributed in the
     *           following form: `projects/{project}/locations/{location}`.
     *     @type string $query
     *           Required. The query against which entries in scope should be matched.
     *     @type int $page_size
     *           Optional. Pagination.
     *     @type string $page_token
     *     @type string $order_by
     *           Optional. Ordering of the results. Supported options to be added later.
     *     @type string $scope
     *           Optional. The scope under which the search should be operating. Should
     *           either be organizations/<org_id> or projects/<project_ref>. If left
     *           unspecified, it will default to the organization where the project provided
     *           in `name` is located.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project to which the request should be attributed in the
     * following form: `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The project to which the request should be attributed in the
     * following form: `projects/{project}/locations/{location}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The query against which entries in scope should be matched.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Required. The query against which entries in scope should be matched.
     *
     * Generated from protobuf field <code>string query = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Optional. Pagination.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Pagination.
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

    /**
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Ordering of the results. Supported options to be added later.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. Ordering of the results. Supported options to be added later.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The scope under which the search should be operating. Should
     * either be organizations/<org_id> or projects/<project_ref>. If left
     * unspecified, it will default to the organization where the project provided
     * in `name` is located.
     *
     * Generated from protobuf field <code>string scope = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Optional. The scope under which the search should be operating. Should
     * either be organizations/<org_id> or projects/<project_ref>. If left
     * unspecified, it will default to the organization where the project provided
     * in `name` is located.
     *
     * Generated from protobuf field <code>string scope = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

}
