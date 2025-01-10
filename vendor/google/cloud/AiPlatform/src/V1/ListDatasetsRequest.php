<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DatasetService.ListDatasets][google.cloud.aiplatform.v1.DatasetService.ListDatasets].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListDatasetsRequest</code>
 */
class ListDatasetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Dataset's parent resource.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * An expression for filtering the results of the request. For field names
     * both snake_case and camelCase are supported.
     *   * `display_name`: supports = and !=
     *   * `metadata_schema_uri`: supports = and !=
     *   * `labels` supports general map functions that is:
     *     * `labels.key=value` - key:value equality
     *     * `labels.key:* or labels:key - key existence
     *     * A key including a space must be quoted. `labels."a key"`.
     * Some examples:
     *   * `displayName="myDisplayName"`
     *   * `labels.myKey="myValue"`
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';
    /**
     * The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * The standard list page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    protected $page_token = '';
    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5;</code>
     */
    protected $read_mask = null;
    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported fields:
     *   * `display_name`
     *   * `create_time`
     *   * `update_time`
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The name of the Dataset's parent resource.
     *                       Format: `projects/{project}/locations/{location}`
     *                       Please see {@see DatasetServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\ListDatasetsRequest
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
     *           Required. The name of the Dataset's parent resource.
     *           Format: `projects/{project}/locations/{location}`
     *     @type string $filter
     *           An expression for filtering the results of the request. For field names
     *           both snake_case and camelCase are supported.
     *             * `display_name`: supports = and !=
     *             * `metadata_schema_uri`: supports = and !=
     *             * `labels` supports general map functions that is:
     *               * `labels.key=value` - key:value equality
     *               * `labels.key:* or labels:key - key existence
     *               * A key including a space must be quoted. `labels."a key"`.
     *           Some examples:
     *             * `displayName="myDisplayName"`
     *             * `labels.myKey="myValue"`
     *     @type int $page_size
     *           The standard list page size.
     *     @type string $page_token
     *           The standard list page token.
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Mask specifying which fields to read.
     *     @type string $order_by
     *           A comma-separated list of fields to order by, sorted in ascending order.
     *           Use "desc" after a field name for descending.
     *           Supported fields:
     *             * `display_name`
     *             * `create_time`
     *             * `update_time`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Dataset's parent resource.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the Dataset's parent resource.
     * Format: `projects/{project}/locations/{location}`
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
     * An expression for filtering the results of the request. For field names
     * both snake_case and camelCase are supported.
     *   * `display_name`: supports = and !=
     *   * `metadata_schema_uri`: supports = and !=
     *   * `labels` supports general map functions that is:
     *     * `labels.key=value` - key:value equality
     *     * `labels.key:* or labels:key - key existence
     *     * A key including a space must be quoted. `labels."a key"`.
     * Some examples:
     *   * `displayName="myDisplayName"`
     *   * `labels.myKey="myValue"`
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * An expression for filtering the results of the request. For field names
     * both snake_case and camelCase are supported.
     *   * `display_name`: supports = and !=
     *   * `metadata_schema_uri`: supports = and !=
     *   * `labels` supports general map functions that is:
     *     * `labels.key=value` - key:value equality
     *     * `labels.key:* or labels:key - key existence
     *     * A key including a space must be quoted. `labels."a key"`.
     * Some examples:
     *   * `displayName="myDisplayName"`
     *   * `labels.myKey="myValue"`
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
     * The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The standard list page size.
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
     * The standard list page token.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The standard list page token.
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

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported fields:
     *   * `display_name`
     *   * `create_time`
     *   * `update_time`
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * A comma-separated list of fields to order by, sorted in ascending order.
     * Use "desc" after a field name for descending.
     * Supported fields:
     *   * `display_name`
     *   * `create_time`
     *   * `update_time`
     *
     * Generated from protobuf field <code>string order_by = 6;</code>
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
