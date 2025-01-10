<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service.proto

namespace Google\Cloud\Monitoring\V3\Service;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GKE Namespace. The field names correspond to the resource metadata labels
 * on monitored resources that fall under a namespace (for example,
 * `k8s_container` or `k8s_pod`).
 *
 * Generated from protobuf message <code>google.monitoring.v3.Service.GkeNamespace</code>
 */
class GkeNamespace extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The project this resource lives in. For legacy services
     * migrated from the `Custom` type, this may be a distinct project from the
     * one parenting the service itself.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $project_id = '';
    /**
     * The location of the parent cluster. This may be a zone or region.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     */
    private $location = '';
    /**
     * The name of the parent cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 3;</code>
     */
    private $cluster_name = '';
    /**
     * The name of this namespace.
     *
     * Generated from protobuf field <code>string namespace_name = 4;</code>
     */
    private $namespace_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Output only. The project this resource lives in. For legacy services
     *           migrated from the `Custom` type, this may be a distinct project from the
     *           one parenting the service itself.
     *     @type string $location
     *           The location of the parent cluster. This may be a zone or region.
     *     @type string $cluster_name
     *           The name of the parent cluster.
     *     @type string $namespace_name
     *           The name of this namespace.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The project this resource lives in. For legacy services
     * migrated from the `Custom` type, this may be a distinct project from the
     * one parenting the service itself.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Output only. The project this resource lives in. For legacy services
     * migrated from the `Custom` type, this may be a distinct project from the
     * one parenting the service itself.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The location of the parent cluster. This may be a zone or region.
     *
     * Generated from protobuf field <code>string location = 2;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location of the parent cluster. This may be a zone or region.
     *
     * Generated from protobuf field <code>string location = 2;</code>
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
     * The name of the parent cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 3;</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * The name of the parent cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * The name of this namespace.
     *
     * Generated from protobuf field <code>string namespace_name = 4;</code>
     * @return string
     */
    public function getNamespaceName()
    {
        return $this->namespace_name;
    }

    /**
     * The name of this namespace.
     *
     * Generated from protobuf field <code>string namespace_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GkeNamespace::class, \Google\Cloud\Monitoring\V3\Service_GkeNamespace::class);

