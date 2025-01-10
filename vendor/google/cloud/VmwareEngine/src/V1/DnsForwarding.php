<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine_resources.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DNS forwarding config.
 * This config defines a list of domain to name server mappings,
 * and is attached to the private cloud for custom domain resolution.
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.DnsForwarding</code>
 */
class DnsForwarding extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of this DNS profile.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/dnsForwarding`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Creation time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Last update time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Required. List of domain mappings to configure
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.DnsForwarding.ForwardingRule forwarding_rules = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $forwarding_rules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of this DNS profile.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/dnsForwarding`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time of this resource.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Last update time of this resource.
     *     @type array<\Google\Cloud\VmwareEngine\V1\DnsForwarding\ForwardingRule>|\Google\Protobuf\Internal\RepeatedField $forwarding_rules
     *           Required. List of domain mappings to configure
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of this DNS profile.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/dnsForwarding`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of this DNS profile.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud/dnsForwarding`
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
     * Output only. Creation time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Creation time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Last update time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Last update time of this resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. List of domain mappings to configure
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.DnsForwarding.ForwardingRule forwarding_rules = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getForwardingRules()
    {
        return $this->forwarding_rules;
    }

    /**
     * Required. List of domain mappings to configure
     *
     * Generated from protobuf field <code>repeated .google.cloud.vmwareengine.v1.DnsForwarding.ForwardingRule forwarding_rules = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\VmwareEngine\V1\DnsForwarding\ForwardingRule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setForwardingRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VmwareEngine\V1\DnsForwarding\ForwardingRule::class);
        $this->forwarding_rules = $arr;

        return $this;
    }

}
