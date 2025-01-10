<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/oracledatabase.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for `CloudVmCluster.Create`.
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.CreateCloudVmClusterRequest</code>
 */
class CreateCloudVmClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent in the following format:
     * projects/{project}/locations/{location}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID of the VM Cluster to create. This value is restricted
     * to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of 63
     * characters in length. The value must start with a letter and end with
     * a letter or a number.
     *
     * Generated from protobuf field <code>string cloud_vm_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cloud_vm_cluster_id = '';
    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.CloudVmCluster cloud_vm_cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cloud_vm_cluster = null;
    /**
     * Optional. An optional ID to identify the request. This value is used to
     * identify duplicate requests. If you make a request with the same request ID
     * and the original request is still in progress or completed, the server
     * ignores the second request. This prevents clients from
     * accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string                                         $parent           Required. The name of the parent in the following format:
     *                                                                         projects/{project}/locations/{location}. Please see
     *                                                                         {@see OracleDatabaseClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\OracleDatabase\V1\CloudVmCluster $cloudVmCluster   Required. The resource being created
     * @param string                                         $cloudVmClusterId Required. The ID of the VM Cluster to create. This value is restricted
     *                                                                         to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of 63
     *                                                                         characters in length. The value must start with a letter and end with
     *                                                                         a letter or a number.
     *
     * @return \Google\Cloud\OracleDatabase\V1\CreateCloudVmClusterRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\OracleDatabase\V1\CloudVmCluster $cloudVmCluster, string $cloudVmClusterId): self
    {
        return (new self())
            ->setParent($parent)
            ->setCloudVmCluster($cloudVmCluster)
            ->setCloudVmClusterId($cloudVmClusterId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent in the following format:
     *           projects/{project}/locations/{location}.
     *     @type string $cloud_vm_cluster_id
     *           Required. The ID of the VM Cluster to create. This value is restricted
     *           to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of 63
     *           characters in length. The value must start with a letter and end with
     *           a letter or a number.
     *     @type \Google\Cloud\OracleDatabase\V1\CloudVmCluster $cloud_vm_cluster
     *           Required. The resource being created
     *     @type string $request_id
     *           Optional. An optional ID to identify the request. This value is used to
     *           identify duplicate requests. If you make a request with the same request ID
     *           and the original request is still in progress or completed, the server
     *           ignores the second request. This prevents clients from
     *           accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\Oracledatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent in the following format:
     * projects/{project}/locations/{location}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent in the following format:
     * projects/{project}/locations/{location}.
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
     * Required. The ID of the VM Cluster to create. This value is restricted
     * to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of 63
     * characters in length. The value must start with a letter and end with
     * a letter or a number.
     *
     * Generated from protobuf field <code>string cloud_vm_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCloudVmClusterId()
    {
        return $this->cloud_vm_cluster_id;
    }

    /**
     * Required. The ID of the VM Cluster to create. This value is restricted
     * to (^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$) and must be a maximum of 63
     * characters in length. The value must start with a letter and end with
     * a letter or a number.
     *
     * Generated from protobuf field <code>string cloud_vm_cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCloudVmClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cloud_vm_cluster_id = $var;

        return $this;
    }

    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.CloudVmCluster cloud_vm_cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\OracleDatabase\V1\CloudVmCluster|null
     */
    public function getCloudVmCluster()
    {
        return $this->cloud_vm_cluster;
    }

    public function hasCloudVmCluster()
    {
        return isset($this->cloud_vm_cluster);
    }

    public function clearCloudVmCluster()
    {
        unset($this->cloud_vm_cluster);
    }

    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.oracledatabase.v1.CloudVmCluster cloud_vm_cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\OracleDatabase\V1\CloudVmCluster $var
     * @return $this
     */
    public function setCloudVmCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OracleDatabase\V1\CloudVmCluster::class);
        $this->cloud_vm_cluster = $var;

        return $this;
    }

    /**
     * Optional. An optional ID to identify the request. This value is used to
     * identify duplicate requests. If you make a request with the same request ID
     * and the original request is still in progress or completed, the server
     * ignores the second request. This prevents clients from
     * accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional ID to identify the request. This value is used to
     * identify duplicate requests. If you make a request with the same request ID
     * and the original request is still in progress or completed, the server
     * ignores the second request. This prevents clients from
     * accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}
