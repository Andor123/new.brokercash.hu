<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create dataScan request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.CreateDataScanRequest</code>
 */
class CreateDataScanRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent location:
     * `projects/{project}/locations/{location_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. DataScan resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan data_scan = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_scan = null;
    /**
     * Required. DataScan identifier.
     * * Must contain only lowercase letters, numbers and hyphens.
     * * Must start with a letter.
     * * Must end with a number or a letter.
     * * Must be between 1-63 characters.
     * * Must be unique within the customer project / location.
     *
     * Generated from protobuf field <code>string data_scan_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_scan_id = '';
    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is `false`.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                             $parent     Required. The resource name of the parent location:
     *                                                       `projects/{project}/locations/{location_id}`
     *                                                       where `project` refers to a *project_id* or *project_number* and
     *                                                       `location_id` refers to a GCP region. Please see
     *                                                       {@see DataScanServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Dataplex\V1\DataScan $dataScan   Required. DataScan resource.
     * @param string                             $dataScanId Required. DataScan identifier.
     *
     *                                                       * Must contain only lowercase letters, numbers and hyphens.
     *                                                       * Must start with a letter.
     *                                                       * Must end with a number or a letter.
     *                                                       * Must be between 1-63 characters.
     *                                                       * Must be unique within the customer project / location.
     *
     * @return \Google\Cloud\Dataplex\V1\CreateDataScanRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dataplex\V1\DataScan $dataScan, string $dataScanId): self
    {
        return (new self())
            ->setParent($parent)
            ->setDataScan($dataScan)
            ->setDataScanId($dataScanId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the parent location:
     *           `projects/{project}/locations/{location_id}`
     *           where `project` refers to a *project_id* or *project_number* and
     *           `location_id` refers to a GCP region.
     *     @type \Google\Cloud\Dataplex\V1\DataScan $data_scan
     *           Required. DataScan resource.
     *     @type string $data_scan_id
     *           Required. DataScan identifier.
     *           * Must contain only lowercase letters, numbers and hyphens.
     *           * Must start with a letter.
     *           * Must end with a number or a letter.
     *           * Must be between 1-63 characters.
     *           * Must be unique within the customer project / location.
     *     @type bool $validate_only
     *           Optional. Only validate the request, but do not perform mutations.
     *           The default is `false`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent location:
     * `projects/{project}/locations/{location_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent location:
     * `projects/{project}/locations/{location_id}`
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
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
     * Required. DataScan resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan data_scan = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\DataScan|null
     */
    public function getDataScan()
    {
        return $this->data_scan;
    }

    public function hasDataScan()
    {
        return isset($this->data_scan);
    }

    public function clearDataScan()
    {
        unset($this->data_scan);
    }

    /**
     * Required. DataScan resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan data_scan = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\DataScan $var
     * @return $this
     */
    public function setDataScan($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScan::class);
        $this->data_scan = $var;

        return $this;
    }

    /**
     * Required. DataScan identifier.
     * * Must contain only lowercase letters, numbers and hyphens.
     * * Must start with a letter.
     * * Must end with a number or a letter.
     * * Must be between 1-63 characters.
     * * Must be unique within the customer project / location.
     *
     * Generated from protobuf field <code>string data_scan_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDataScanId()
    {
        return $this->data_scan_id;
    }

    /**
     * Required. DataScan identifier.
     * * Must contain only lowercase letters, numbers and hyphens.
     * * Must start with a letter.
     * * Must end with a number or a letter.
     * * Must be between 1-63 characters.
     * * Must be unique within the customer project / location.
     *
     * Generated from protobuf field <code>string data_scan_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDataScanId($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_scan_id = $var;

        return $this;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is `false`.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is `false`.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

