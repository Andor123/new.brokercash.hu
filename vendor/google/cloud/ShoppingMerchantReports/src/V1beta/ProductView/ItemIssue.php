<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reports/v1beta/reports.proto

namespace Google\Shopping\Merchant\Reports\V1beta\ProductView;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Item issue associated with the product.
 *
 * Generated from protobuf message <code>google.shopping.merchant.reports.v1beta.ProductView.ItemIssue</code>
 */
class ItemIssue extends \Google\Protobuf\Internal\Message
{
    /**
     * Item issue type.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueType type = 1;</code>
     */
    protected $type = null;
    /**
     * Item issue severity.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity severity = 2;</code>
     */
    protected $severity = null;
    /**
     * Item issue resolution.
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueResolution resolution = 3;</code>
     */
    protected $resolution = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueType $type
     *           Item issue type.
     *     @type \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueSeverity $severity
     *           Item issue severity.
     *     @type int $resolution
     *           Item issue resolution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Reports\V1Beta\Reports::initOnce();
        parent::__construct($data);
    }

    /**
     * Item issue type.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueType type = 1;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueType|null
     */
    public function getType()
    {
        return $this->type;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Item issue type.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueType type = 1;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueType $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Item issue severity.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity severity = 2;</code>
     * @return \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueSeverity|null
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    public function hasSeverity()
    {
        return isset($this->severity);
    }

    public function clearSeverity()
    {
        unset($this->severity);
    }

    /**
     * Item issue severity.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueSeverity severity = 2;</code>
     * @param \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueSeverity $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueSeverity::class);
        $this->severity = $var;

        return $this;
    }

    /**
     * Item issue resolution.
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueResolution resolution = 3;</code>
     * @return int
     */
    public function getResolution()
    {
        return isset($this->resolution) ? $this->resolution : 0;
    }

    public function hasResolution()
    {
        return isset($this->resolution);
    }

    public function clearResolution()
    {
        unset($this->resolution);
    }

    /**
     * Item issue resolution.
     *
     * Generated from protobuf field <code>optional .google.shopping.merchant.reports.v1beta.ProductView.ItemIssue.ItemIssueResolution resolution = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setResolution($var)
    {
        GPBUtil::checkEnum($var, \Google\Shopping\Merchant\Reports\V1beta\ProductView\ItemIssue\ItemIssueResolution::class);
        $this->resolution = $var;

        return $this;
    }

}

