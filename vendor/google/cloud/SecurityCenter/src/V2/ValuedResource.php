<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/valued_resource.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that is determined to have value to a user's system
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.ValuedResource</code>
 */
class ValuedResource extends \Google\Protobuf\Internal\Message
{
    /**
     * Valued resource name, for example,
     *  e.g.:
     *  `organizations/123/simulations/456/valuedResources/789`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The
     * [full resource
     * name](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * of the valued resource.
     *
     * Generated from protobuf field <code>string resource = 2;</code>
     */
    protected $resource = '';
    /**
     * The [resource
     * type](https://cloud.google.com/asset-inventory/docs/supported-asset-types)
     * of the valued resource.
     *
     * Generated from protobuf field <code>string resource_type = 3;</code>
     */
    protected $resource_type = '';
    /**
     * Human-readable name of the valued resource.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     */
    protected $display_name = '';
    /**
     * How valuable this resource is.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.ValuedResource.ResourceValue resource_value = 5;</code>
     */
    protected $resource_value = 0;
    /**
     * Exposed score for this valued resource. A value of 0 means no exposure was
     * detected exposure.
     *
     * Generated from protobuf field <code>double exposed_score = 6;</code>
     */
    protected $exposed_score = 0.0;
    /**
     * List of resource value configurations' metadata used to determine the value
     * of this resource. Maximum of 100.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.ResourceValueConfigMetadata resource_value_configs_used = 7;</code>
     */
    private $resource_value_configs_used;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Valued resource name, for example,
     *            e.g.:
     *            `organizations/123/simulations/456/valuedResources/789`
     *     @type string $resource
     *           The
     *           [full resource
     *           name](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     *           of the valued resource.
     *     @type string $resource_type
     *           The [resource
     *           type](https://cloud.google.com/asset-inventory/docs/supported-asset-types)
     *           of the valued resource.
     *     @type string $display_name
     *           Human-readable name of the valued resource.
     *     @type int $resource_value
     *           How valuable this resource is.
     *     @type float $exposed_score
     *           Exposed score for this valued resource. A value of 0 means no exposure was
     *           detected exposure.
     *     @type array<\Google\Cloud\SecurityCenter\V2\ResourceValueConfigMetadata>|\Google\Protobuf\Internal\RepeatedField $resource_value_configs_used
     *           List of resource value configurations' metadata used to determine the value
     *           of this resource. Maximum of 100.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\ValuedResource::initOnce();
        parent::__construct($data);
    }

    /**
     * Valued resource name, for example,
     *  e.g.:
     *  `organizations/123/simulations/456/valuedResources/789`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Valued resource name, for example,
     *  e.g.:
     *  `organizations/123/simulations/456/valuedResources/789`
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
     * The
     * [full resource
     * name](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * of the valued resource.
     *
     * Generated from protobuf field <code>string resource = 2;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The
     * [full resource
     * name](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * of the valued resource.
     *
     * Generated from protobuf field <code>string resource = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * The [resource
     * type](https://cloud.google.com/asset-inventory/docs/supported-asset-types)
     * of the valued resource.
     *
     * Generated from protobuf field <code>string resource_type = 3;</code>
     * @return string
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }

    /**
     * The [resource
     * type](https://cloud.google.com/asset-inventory/docs/supported-asset-types)
     * of the valued resource.
     *
     * Generated from protobuf field <code>string resource_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceType($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_type = $var;

        return $this;
    }

    /**
     * Human-readable name of the valued resource.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Human-readable name of the valued resource.
     *
     * Generated from protobuf field <code>string display_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * How valuable this resource is.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.ValuedResource.ResourceValue resource_value = 5;</code>
     * @return int
     */
    public function getResourceValue()
    {
        return $this->resource_value;
    }

    /**
     * How valuable this resource is.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.ValuedResource.ResourceValue resource_value = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceValue($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V2\ValuedResource\ResourceValue::class);
        $this->resource_value = $var;

        return $this;
    }

    /**
     * Exposed score for this valued resource. A value of 0 means no exposure was
     * detected exposure.
     *
     * Generated from protobuf field <code>double exposed_score = 6;</code>
     * @return float
     */
    public function getExposedScore()
    {
        return $this->exposed_score;
    }

    /**
     * Exposed score for this valued resource. A value of 0 means no exposure was
     * detected exposure.
     *
     * Generated from protobuf field <code>double exposed_score = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setExposedScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->exposed_score = $var;

        return $this;
    }

    /**
     * List of resource value configurations' metadata used to determine the value
     * of this resource. Maximum of 100.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.ResourceValueConfigMetadata resource_value_configs_used = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceValueConfigsUsed()
    {
        return $this->resource_value_configs_used;
    }

    /**
     * List of resource value configurations' metadata used to determine the value
     * of this resource. Maximum of 100.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.ResourceValueConfigMetadata resource_value_configs_used = 7;</code>
     * @param array<\Google\Cloud\SecurityCenter\V2\ResourceValueConfigMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceValueConfigsUsed($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V2\ResourceValueConfigMetadata::class);
        $this->resource_value_configs_used = $arr;

        return $this;
    }

}

