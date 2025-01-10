<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Anthos node pool running on Azure.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AzureNodePool</code>
 */
class AzureNodePool extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of this resource.
     * Node pool names are formatted as
     * `projects/<project-number>/locations/<region>/azureClusters/<cluster-id>/azureNodePools/<node-pool-id>`.
     * For more details on Google Cloud resource names,
     * see [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The Kubernetes version (e.g. `1.19.10-gke.1000`) running on this
     * node pool.
     *
     * Generated from protobuf field <code>string version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $version = '';
    /**
     * Required. The node configuration of the node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodeConfig config = 22 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $config = null;
    /**
     * Required. The ARM ID of the subnet where the node pool VMs run. Make sure
     * it's a subnet under the virtual network in the cluster configuration.
     *
     * Generated from protobuf field <code>string subnet_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $subnet_id = '';
    /**
     * Required. Autoscaler configuration for this node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodePoolAutoscaling autoscaling = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $autoscaling = null;
    /**
     * Output only. The current state of the node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodePool.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. A globally unique identifier for the node pool.
     *
     * Generated from protobuf field <code>string uid = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. If set, there are currently pending changes to the node
     * pool.
     *
     * Generated from protobuf field <code>bool reconciling = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $reconciling = false;
    /**
     * Output only. The time at which this node pool was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time at which this node pool was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Allows clients to perform consistent read-modify-writes
     * through optimistic concurrency control.
     * Can be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 12;</code>
     */
    protected $etag = '';
    /**
     * Optional. Annotations on the node pool.
     * This field has the same restrictions as Kubernetes annotations.
     * The total size of all keys and values combined is limited to 256k.
     * Keys can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotations;
    /**
     * Required. The constraint on the maximum number of pods that can be run
     * simultaneously on a node in the node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.MaxPodsConstraint max_pods_constraint = 21 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $max_pods_constraint = null;
    /**
     * Optional. The Azure availability zone of the nodes in this nodepool.
     * When unspecified, it defaults to `1`.
     *
     * Generated from protobuf field <code>string azure_availability_zone = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $azure_availability_zone = '';
    /**
     * Output only. A set of errors found in the node pool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureNodePoolError errors = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $errors;
    /**
     * Optional. The Management configuration for this node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodeManagement management = 30 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $management = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of this resource.
     *           Node pool names are formatted as
     *           `projects/<project-number>/locations/<region>/azureClusters/<cluster-id>/azureNodePools/<node-pool-id>`.
     *           For more details on Google Cloud resource names,
     *           see [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *     @type string $version
     *           Required. The Kubernetes version (e.g. `1.19.10-gke.1000`) running on this
     *           node pool.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureNodeConfig $config
     *           Required. The node configuration of the node pool.
     *     @type string $subnet_id
     *           Required. The ARM ID of the subnet where the node pool VMs run. Make sure
     *           it's a subnet under the virtual network in the cluster configuration.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureNodePoolAutoscaling $autoscaling
     *           Required. Autoscaler configuration for this node pool.
     *     @type int $state
     *           Output only. The current state of the node pool.
     *     @type string $uid
     *           Output only. A globally unique identifier for the node pool.
     *     @type bool $reconciling
     *           Output only. If set, there are currently pending changes to the node
     *           pool.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this node pool was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which this node pool was last updated.
     *     @type string $etag
     *           Allows clients to perform consistent read-modify-writes
     *           through optimistic concurrency control.
     *           Can be sent on update and delete requests to ensure the
     *           client has an up-to-date value before proceeding.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. Annotations on the node pool.
     *           This field has the same restrictions as Kubernetes annotations.
     *           The total size of all keys and values combined is limited to 256k.
     *           Keys can have 2 segments: prefix (optional) and name (required),
     *           separated by a slash (/).
     *           Prefix must be a DNS subdomain.
     *           Name must be 63 characters or less, begin and end with alphanumerics,
     *           with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *     @type \Google\Cloud\GkeMultiCloud\V1\MaxPodsConstraint $max_pods_constraint
     *           Required. The constraint on the maximum number of pods that can be run
     *           simultaneously on a node in the node pool.
     *     @type string $azure_availability_zone
     *           Optional. The Azure availability zone of the nodes in this nodepool.
     *           When unspecified, it defaults to `1`.
     *     @type array<\Google\Cloud\GkeMultiCloud\V1\AzureNodePoolError>|\Google\Protobuf\Internal\RepeatedField $errors
     *           Output only. A set of errors found in the node pool.
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureNodeManagement $management
     *           Optional. The Management configuration for this node pool.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of this resource.
     * Node pool names are formatted as
     * `projects/<project-number>/locations/<region>/azureClusters/<cluster-id>/azureNodePools/<node-pool-id>`.
     * For more details on Google Cloud resource names,
     * see [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of this resource.
     * Node pool names are formatted as
     * `projects/<project-number>/locations/<region>/azureClusters/<cluster-id>/azureNodePools/<node-pool-id>`.
     * For more details on Google Cloud resource names,
     * see [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. The Kubernetes version (e.g. `1.19.10-gke.1000`) running on this
     * node pool.
     *
     * Generated from protobuf field <code>string version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Required. The Kubernetes version (e.g. `1.19.10-gke.1000`) running on this
     * node pool.
     *
     * Generated from protobuf field <code>string version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The node configuration of the node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodeConfig config = 22 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureNodeConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Required. The node configuration of the node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodeConfig config = 22 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureNodeConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureNodeConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Required. The ARM ID of the subnet where the node pool VMs run. Make sure
     * it's a subnet under the virtual network in the cluster configuration.
     *
     * Generated from protobuf field <code>string subnet_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSubnetId()
    {
        return $this->subnet_id;
    }

    /**
     * Required. The ARM ID of the subnet where the node pool VMs run. Make sure
     * it's a subnet under the virtual network in the cluster configuration.
     *
     * Generated from protobuf field <code>string subnet_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnet_id = $var;

        return $this;
    }

    /**
     * Required. Autoscaler configuration for this node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodePoolAutoscaling autoscaling = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureNodePoolAutoscaling|null
     */
    public function getAutoscaling()
    {
        return $this->autoscaling;
    }

    public function hasAutoscaling()
    {
        return isset($this->autoscaling);
    }

    public function clearAutoscaling()
    {
        unset($this->autoscaling);
    }

    /**
     * Required. Autoscaler configuration for this node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodePoolAutoscaling autoscaling = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureNodePoolAutoscaling $var
     * @return $this
     */
    public function setAutoscaling($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureNodePoolAutoscaling::class);
        $this->autoscaling = $var;

        return $this;
    }

    /**
     * Output only. The current state of the node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodePool.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodePool.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeMultiCloud\V1\AzureNodePool\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. A globally unique identifier for the node pool.
     *
     * Generated from protobuf field <code>string uid = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. A globally unique identifier for the node pool.
     *
     * Generated from protobuf field <code>string uid = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. If set, there are currently pending changes to the node
     * pool.
     *
     * Generated from protobuf field <code>bool reconciling = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReconciling()
    {
        return $this->reconciling;
    }

    /**
     * Output only. If set, there are currently pending changes to the node
     * pool.
     *
     * Generated from protobuf field <code>bool reconciling = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReconciling($var)
    {
        GPBUtil::checkBool($var);
        $this->reconciling = $var;

        return $this;
    }

    /**
     * Output only. The time at which this node pool was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this node pool was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which this node pool was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which this node pool was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Allows clients to perform consistent read-modify-writes
     * through optimistic concurrency control.
     * Can be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 12;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Allows clients to perform consistent read-modify-writes
     * through optimistic concurrency control.
     * Can be sent on update and delete requests to ensure the
     * client has an up-to-date value before proceeding.
     *
     * Generated from protobuf field <code>string etag = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. Annotations on the node pool.
     * This field has the same restrictions as Kubernetes annotations.
     * The total size of all keys and values combined is limited to 256k.
     * Keys can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. Annotations on the node pool.
     * This field has the same restrictions as Kubernetes annotations.
     * The total size of all keys and values combined is limited to 256k.
     * Keys can have 2 segments: prefix (optional) and name (required),
     * separated by a slash (/).
     * Prefix must be a DNS subdomain.
     * Name must be 63 characters or less, begin and end with alphanumerics,
     * with dashes (-), underscores (_), dots (.), and alphanumerics between.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Required. The constraint on the maximum number of pods that can be run
     * simultaneously on a node in the node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.MaxPodsConstraint max_pods_constraint = 21 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\MaxPodsConstraint|null
     */
    public function getMaxPodsConstraint()
    {
        return $this->max_pods_constraint;
    }

    public function hasMaxPodsConstraint()
    {
        return isset($this->max_pods_constraint);
    }

    public function clearMaxPodsConstraint()
    {
        unset($this->max_pods_constraint);
    }

    /**
     * Required. The constraint on the maximum number of pods that can be run
     * simultaneously on a node in the node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.MaxPodsConstraint max_pods_constraint = 21 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\MaxPodsConstraint $var
     * @return $this
     */
    public function setMaxPodsConstraint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\MaxPodsConstraint::class);
        $this->max_pods_constraint = $var;

        return $this;
    }

    /**
     * Optional. The Azure availability zone of the nodes in this nodepool.
     * When unspecified, it defaults to `1`.
     *
     * Generated from protobuf field <code>string azure_availability_zone = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAzureAvailabilityZone()
    {
        return $this->azure_availability_zone;
    }

    /**
     * Optional. The Azure availability zone of the nodes in this nodepool.
     * When unspecified, it defaults to `1`.
     *
     * Generated from protobuf field <code>string azure_availability_zone = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAzureAvailabilityZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->azure_availability_zone = $var;

        return $this;
    }

    /**
     * Output only. A set of errors found in the node pool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureNodePoolError errors = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Output only. A set of errors found in the node pool.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkemulticloud.v1.AzureNodePoolError errors = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\GkeMultiCloud\V1\AzureNodePoolError>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeMultiCloud\V1\AzureNodePoolError::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * Optional. The Management configuration for this node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodeManagement management = 30 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureNodeManagement|null
     */
    public function getManagement()
    {
        return $this->management;
    }

    public function hasManagement()
    {
        return isset($this->management);
    }

    public function clearManagement()
    {
        unset($this->management);
    }

    /**
     * Optional. The Management configuration for this node pool.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodeManagement management = 30 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureNodeManagement $var
     * @return $this
     */
    public function setManagement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureNodeManagement::class);
        $this->management = $var;

        return $this;
    }

}

