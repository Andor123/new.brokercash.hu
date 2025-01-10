<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/policy_based_routing.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Policy Based Routes (PBR) are more powerful routes that allows GCP customers
 * to route their L4 network traffic based on not just destination IP, but also
 * source IP, protocol and more. A PBR always take precedence when it conflicts
 * with other types of routes.
 * Next id: 22
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.PolicyBasedRoute</code>
 */
class PolicyBasedRoute extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. A unique name of the resource in the form of
     * `projects/{project_number}/locations/global/PolicyBasedRoutes/{policy_based_route_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Output only. Time when the PolicyBasedRoute was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time when the PolicyBasedRoute was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * User-defined labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * Optional. An optional description of this resource. Provide this field when
     * you create the resource.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Required. Fully-qualified URL of the network that this route applies to.
     * e.g. projects/my-project/global/networks/my-network.
     *
     * Generated from protobuf field <code>string network = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $network = '';
    /**
     * Required. The filter to match L4 traffic.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PolicyBasedRoute.Filter filter = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter = null;
    /**
     * Optional. The priority of this policy based route. Priority is used to
     * break ties in cases where there are more than one matching policy based
     * routes found. In cases where multiple policy based routes are matched, the
     * one with the lowest-numbered priority value wins. The default value is
     * 1000. The priority value must be from 1 to 65535, inclusive.
     *
     * Generated from protobuf field <code>int32 priority = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $priority = 0;
    /**
     * Output only. If potential misconfigurations are detected for this route,
     * this field will be populated with warning messages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.PolicyBasedRoute.Warnings warnings = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $warnings;
    /**
     * Output only. Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>string self_link = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $self_link = '';
    /**
     * Output only. Type of this resource. Always
     * networkconnectivity#policyBasedRoute for Policy Based Route resources.
     *
     * Generated from protobuf field <code>string kind = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $kind = '';
    protected $target;
    protected $next_hop;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\VirtualMachine $virtual_machine
     *           Optional. VM instances to which this policy based route applies to.
     *     @type \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\InterconnectAttachment $interconnect_attachment
     *           Optional. The interconnect attachments to which this route applies to.
     *     @type string $next_hop_ilb_ip
     *           Optional. The IP of a global access enabled L4 ILB that should be the
     *           next hop to handle matching packets. For this version, only
     *           next_hop_ilb_ip is supported.
     *     @type int $next_hop_other_routes
     *           Optional. Other routes that will be referenced to determine the next hop
     *           of the packet.
     *     @type string $name
     *           Immutable. A unique name of the resource in the form of
     *           `projects/{project_number}/locations/global/PolicyBasedRoutes/{policy_based_route_id}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the PolicyBasedRoute was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when the PolicyBasedRoute was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           User-defined labels.
     *     @type string $description
     *           Optional. An optional description of this resource. Provide this field when
     *           you create the resource.
     *     @type string $network
     *           Required. Fully-qualified URL of the network that this route applies to.
     *           e.g. projects/my-project/global/networks/my-network.
     *     @type \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\Filter $filter
     *           Required. The filter to match L4 traffic.
     *     @type int $priority
     *           Optional. The priority of this policy based route. Priority is used to
     *           break ties in cases where there are more than one matching policy based
     *           routes found. In cases where multiple policy based routes are matched, the
     *           one with the lowest-numbered priority value wins. The default value is
     *           1000. The priority value must be from 1 to 65535, inclusive.
     *     @type array<\Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\Warnings>|\Google\Protobuf\Internal\RepeatedField $warnings
     *           Output only. If potential misconfigurations are detected for this route,
     *           this field will be populated with warning messages.
     *     @type string $self_link
     *           Output only. Server-defined fully-qualified URL for this resource.
     *     @type string $kind
     *           Output only. Type of this resource. Always
     *           networkconnectivity#policyBasedRoute for Policy Based Route resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\PolicyBasedRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. VM instances to which this policy based route applies to.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PolicyBasedRoute.VirtualMachine virtual_machine = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\VirtualMachine|null
     */
    public function getVirtualMachine()
    {
        return $this->readOneof(18);
    }

    public function hasVirtualMachine()
    {
        return $this->hasOneof(18);
    }

    /**
     * Optional. VM instances to which this policy based route applies to.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PolicyBasedRoute.VirtualMachine virtual_machine = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\VirtualMachine $var
     * @return $this
     */
    public function setVirtualMachine($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\VirtualMachine::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Optional. The interconnect attachments to which this route applies to.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PolicyBasedRoute.InterconnectAttachment interconnect_attachment = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\InterconnectAttachment|null
     */
    public function getInterconnectAttachment()
    {
        return $this->readOneof(9);
    }

    public function hasInterconnectAttachment()
    {
        return $this->hasOneof(9);
    }

    /**
     * Optional. The interconnect attachments to which this route applies to.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PolicyBasedRoute.InterconnectAttachment interconnect_attachment = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\InterconnectAttachment $var
     * @return $this
     */
    public function setInterconnectAttachment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\InterconnectAttachment::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Optional. The IP of a global access enabled L4 ILB that should be the
     * next hop to handle matching packets. For this version, only
     * next_hop_ilb_ip is supported.
     *
     * Generated from protobuf field <code>string next_hop_ilb_ip = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNextHopIlbIp()
    {
        return $this->readOneof(12);
    }

    public function hasNextHopIlbIp()
    {
        return $this->hasOneof(12);
    }

    /**
     * Optional. The IP of a global access enabled L4 ILB that should be the
     * next hop to handle matching packets. For this version, only
     * next_hop_ilb_ip is supported.
     *
     * Generated from protobuf field <code>string next_hop_ilb_ip = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNextHopIlbIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Optional. Other routes that will be referenced to determine the next hop
     * of the packet.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PolicyBasedRoute.OtherRoutes next_hop_other_routes = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getNextHopOtherRoutes()
    {
        return $this->readOneof(21);
    }

    public function hasNextHopOtherRoutes()
    {
        return $this->hasOneof(21);
    }

    /**
     * Optional. Other routes that will be referenced to determine the next hop
     * of the packet.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PolicyBasedRoute.OtherRoutes next_hop_other_routes = 21 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setNextHopOtherRoutes($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\OtherRoutes::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * Immutable. A unique name of the resource in the form of
     * `projects/{project_number}/locations/global/PolicyBasedRoutes/{policy_based_route_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. A unique name of the resource in the form of
     * `projects/{project_number}/locations/global/PolicyBasedRoutes/{policy_based_route_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Output only. Time when the PolicyBasedRoute was created.
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
     * Output only. Time when the PolicyBasedRoute was created.
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
     * Output only. Time when the PolicyBasedRoute was updated.
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
     * Output only. Time when the PolicyBasedRoute was updated.
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
     * User-defined labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * User-defined labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. An optional description of this resource. Provide this field when
     * you create the resource.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. An optional description of this resource. Provide this field when
     * you create the resource.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. Fully-qualified URL of the network that this route applies to.
     * e.g. projects/my-project/global/networks/my-network.
     *
     * Generated from protobuf field <code>string network = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Required. Fully-qualified URL of the network that this route applies to.
     * e.g. projects/my-project/global/networks/my-network.
     *
     * Generated from protobuf field <code>string network = 6 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Required. The filter to match L4 traffic.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PolicyBasedRoute.Filter filter = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\Filter|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    public function hasFilter()
    {
        return isset($this->filter);
    }

    public function clearFilter()
    {
        unset($this->filter);
    }

    /**
     * Required. The filter to match L4 traffic.
     *
     * Generated from protobuf field <code>.google.cloud.networkconnectivity.v1.PolicyBasedRoute.Filter filter = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\Filter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\Filter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The priority of this policy based route. Priority is used to
     * break ties in cases where there are more than one matching policy based
     * routes found. In cases where multiple policy based routes are matched, the
     * one with the lowest-numbered priority value wins. The default value is
     * 1000. The priority value must be from 1 to 65535, inclusive.
     *
     * Generated from protobuf field <code>int32 priority = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Optional. The priority of this policy based route. Priority is used to
     * break ties in cases where there are more than one matching policy based
     * routes found. In cases where multiple policy based routes are matched, the
     * one with the lowest-numbered priority value wins. The default value is
     * 1000. The priority value must be from 1 to 65535, inclusive.
     *
     * Generated from protobuf field <code>int32 priority = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->priority = $var;

        return $this;
    }

    /**
     * Output only. If potential misconfigurations are detected for this route,
     * this field will be populated with warning messages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.PolicyBasedRoute.Warnings warnings = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Output only. If potential misconfigurations are detected for this route,
     * this field will be populated with warning messages.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.PolicyBasedRoute.Warnings warnings = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\Warnings>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWarnings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute\Warnings::class);
        $this->warnings = $arr;

        return $this;
    }

    /**
     * Output only. Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>string self_link = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * Output only. Server-defined fully-qualified URL for this resource.
     *
     * Generated from protobuf field <code>string self_link = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Output only. Type of this resource. Always
     * networkconnectivity#policyBasedRoute for Policy Based Route resources.
     *
     * Generated from protobuf field <code>string kind = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Output only. Type of this resource. Always
     * networkconnectivity#policyBasedRoute for Policy Based Route resources.
     *
     * Generated from protobuf field <code>string kind = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

    /**
     * @return string
     */
    public function getNextHop()
    {
        return $this->whichOneof("next_hop");
    }

}
