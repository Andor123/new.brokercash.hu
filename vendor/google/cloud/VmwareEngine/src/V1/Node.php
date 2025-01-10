<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Node in a cluster.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.Node</code>
 */
class Node extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of this node.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * projects/my-project/locations/us-central1-a/privateClouds/my-cloud/clusters/my-cluster/nodes/my-node
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Fully qualified domain name of the node.
     *
     * Generated from protobuf field <code>string fqdn = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $fqdn = '';
    /**
     * Output only. Internal IP address of the node.
     *
     * Generated from protobuf field <code>string internal_ip = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $internal_ip = '';
    /**
     * Output only. The canonical identifier of the node type (corresponds to the
     * `NodeType`).
     * For example: standard-72.
     *
     * Generated from protobuf field <code>string node_type_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $node_type_id = '';
    /**
     * Output only. The version number of the VMware ESXi
     * management component in this cluster.
     *
     * Generated from protobuf field <code>string version = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $version = '';
    /**
     * Output only. Customized number of cores
     *
     * Generated from protobuf field <code>int64 custom_core_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $custom_core_count = 0;
    /**
     * Output only. The state of the appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Node.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of this node.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           projects/my-project/locations/us-central1-a/privateClouds/my-cloud/clusters/my-cluster/nodes/my-node
     *     @type string $fqdn
     *           Output only. Fully qualified domain name of the node.
     *     @type string $internal_ip
     *           Output only. Internal IP address of the node.
     *     @type string $node_type_id
     *           Output only. The canonical identifier of the node type (corresponds to the
     *           `NodeType`).
     *           For example: standard-72.
     *     @type string $version
     *           Output only. The version number of the VMware ESXi
     *           management component in this cluster.
     *     @type int|string $custom_core_count
     *           Output only. Customized number of cores
     *     @type int $state
     *           Output only. The state of the appliance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of this node.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * projects/my-project/locations/us-central1-a/privateClouds/my-cloud/clusters/my-cluster/nodes/my-node
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of this node.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * projects/my-project/locations/us-central1-a/privateClouds/my-cloud/clusters/my-cluster/nodes/my-node
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Fully qualified domain name of the node.
     *
     * Generated from protobuf field <code>string fqdn = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFqdn()
    {
        return $this->fqdn;
    }

    /**
     * Output only. Fully qualified domain name of the node.
     *
     * Generated from protobuf field <code>string fqdn = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFqdn($var)
    {
        GPBUtil::checkString($var, True);
        $this->fqdn = $var;

        return $this;
    }

    /**
     * Output only. Internal IP address of the node.
     *
     * Generated from protobuf field <code>string internal_ip = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getInternalIp()
    {
        return $this->internal_ip;
    }

    /**
     * Output only. Internal IP address of the node.
     *
     * Generated from protobuf field <code>string internal_ip = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setInternalIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->internal_ip = $var;

        return $this;
    }

    /**
     * Output only. The canonical identifier of the node type (corresponds to the
     * `NodeType`).
     * For example: standard-72.
     *
     * Generated from protobuf field <code>string node_type_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getNodeTypeId()
    {
        return $this->node_type_id;
    }

    /**
     * Output only. The canonical identifier of the node type (corresponds to the
     * `NodeType`).
     * For example: standard-72.
     *
     * Generated from protobuf field <code>string node_type_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setNodeTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_type_id = $var;

        return $this;
    }

    /**
     * Output only. The version number of the VMware ESXi
     * management component in this cluster.
     *
     * Generated from protobuf field <code>string version = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Output only. The version number of the VMware ESXi
     * management component in this cluster.
     *
     * Generated from protobuf field <code>string version = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Output only. Customized number of cores
     *
     * Generated from protobuf field <code>int64 custom_core_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCustomCoreCount()
    {
        return $this->custom_core_count;
    }

    /**
     * Output only. Customized number of cores
     *
     * Generated from protobuf field <code>int64 custom_core_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCustomCoreCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->custom_core_count = $var;

        return $this;
    }

    /**
     * Output only. The state of the appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Node.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The state of the appliance.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Node.State state = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VmwareEngine\V1\Node\State::class);
        $this->state = $var;

        return $this;
    }

}
