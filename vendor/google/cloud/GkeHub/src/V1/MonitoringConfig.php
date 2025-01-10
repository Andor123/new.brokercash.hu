<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/membership.proto

namespace Google\Cloud\GkeHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This field informs Fleet-based applications/services/UIs with the necessary
 * information for where each underlying Cluster reports its metrics.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1.MonitoringConfig</code>
 */
class MonitoringConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Project used to report Metrics
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $project_id = '';
    /**
     * Immutable. Location used to report Metrics
     *
     * Generated from protobuf field <code>string location = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $location = '';
    /**
     * Immutable. Cluster name used to report metrics.
     * For Anthos on VMWare/Baremetal, it would be in format
     * `memberClusters/cluster_name`; And for Anthos on MultiCloud, it would be in
     * format
     * `{azureClusters, awsClusters}/cluster_name`.
     *
     * Generated from protobuf field <code>string cluster = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $cluster = '';
    /**
     * Kubernetes system metrics, if available, are written to this prefix.
     * This defaults to kubernetes.io for GKE, and kubernetes.io/anthos for Anthos
     * eventually. Noted: Anthos MultiCloud will have kubernetes.io prefix today
     * but will migration to be under kubernetes.io/anthos
     *
     * Generated from protobuf field <code>string kubernetes_metrics_prefix = 4;</code>
     */
    protected $kubernetes_metrics_prefix = '';
    /**
     * Immutable. Cluster hash, this is a unique string generated by google code,
     * which does not contain any PII, which we can use to reference the cluster.
     * This is expected to be created by the monitoring stack and persisted into
     * the Cluster object as well as to GKE-Hub.
     *
     * Generated from protobuf field <code>string cluster_hash = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $cluster_hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Immutable. Project used to report Metrics
     *     @type string $location
     *           Immutable. Location used to report Metrics
     *     @type string $cluster
     *           Immutable. Cluster name used to report metrics.
     *           For Anthos on VMWare/Baremetal, it would be in format
     *           `memberClusters/cluster_name`; And for Anthos on MultiCloud, it would be in
     *           format
     *           `{azureClusters, awsClusters}/cluster_name`.
     *     @type string $kubernetes_metrics_prefix
     *           Kubernetes system metrics, if available, are written to this prefix.
     *           This defaults to kubernetes.io for GKE, and kubernetes.io/anthos for Anthos
     *           eventually. Noted: Anthos MultiCloud will have kubernetes.io prefix today
     *           but will migration to be under kubernetes.io/anthos
     *     @type string $cluster_hash
     *           Immutable. Cluster hash, this is a unique string generated by google code,
     *           which does not contain any PII, which we can use to reference the cluster.
     *           This is expected to be created by the monitoring stack and persisted into
     *           the Cluster object as well as to GKE-Hub.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Project used to report Metrics
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Immutable. Project used to report Metrics
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Immutable. Location used to report Metrics
     *
     * Generated from protobuf field <code>string location = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Immutable. Location used to report Metrics
     *
     * Generated from protobuf field <code>string location = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * Immutable. Cluster name used to report metrics.
     * For Anthos on VMWare/Baremetal, it would be in format
     * `memberClusters/cluster_name`; And for Anthos on MultiCloud, it would be in
     * format
     * `{azureClusters, awsClusters}/cluster_name`.
     *
     * Generated from protobuf field <code>string cluster = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Immutable. Cluster name used to report metrics.
     * For Anthos on VMWare/Baremetal, it would be in format
     * `memberClusters/cluster_name`; And for Anthos on MultiCloud, it would be in
     * format
     * `{azureClusters, awsClusters}/cluster_name`.
     *
     * Generated from protobuf field <code>string cluster = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Kubernetes system metrics, if available, are written to this prefix.
     * This defaults to kubernetes.io for GKE, and kubernetes.io/anthos for Anthos
     * eventually. Noted: Anthos MultiCloud will have kubernetes.io prefix today
     * but will migration to be under kubernetes.io/anthos
     *
     * Generated from protobuf field <code>string kubernetes_metrics_prefix = 4;</code>
     * @return string
     */
    public function getKubernetesMetricsPrefix()
    {
        return $this->kubernetes_metrics_prefix;
    }

    /**
     * Kubernetes system metrics, if available, are written to this prefix.
     * This defaults to kubernetes.io for GKE, and kubernetes.io/anthos for Anthos
     * eventually. Noted: Anthos MultiCloud will have kubernetes.io prefix today
     * but will migration to be under kubernetes.io/anthos
     *
     * Generated from protobuf field <code>string kubernetes_metrics_prefix = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setKubernetesMetricsPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->kubernetes_metrics_prefix = $var;

        return $this;
    }

    /**
     * Immutable. Cluster hash, this is a unique string generated by google code,
     * which does not contain any PII, which we can use to reference the cluster.
     * This is expected to be created by the monitoring stack and persisted into
     * the Cluster object as well as to GKE-Hub.
     *
     * Generated from protobuf field <code>string cluster_hash = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getClusterHash()
    {
        return $this->cluster_hash;
    }

    /**
     * Immutable. Cluster hash, this is a unique string generated by google code,
     * which does not contain any PII, which we can use to reference the cluster.
     * This is expected to be created by the monitoring stack and persisted into
     * the Cluster object as well as to GKE-Hub.
     *
     * Generated from protobuf field <code>string cluster_hash = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_hash = $var;

        return $this;
    }

}

