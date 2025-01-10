<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Target used to match against for discovery of resources from other clouds.
 * An [AWS connector in Security Command Center
 * (Enterprise](https://cloud.google.com/security-command-center/docs/connect-scc-to-aws)
 * is required to use this feature.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.OtherCloudDiscoveryTarget</code>
 */
class OtherCloudDiscoveryTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The type of data profiles generated by this discovery target.
     * Supported values are:
     * * aws/s3/bucket
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataSourceType data_source_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_source_type = null;
    /**
     * Required. The resources that the discovery cadence applies to. The
     * first target with a matching filter will be the one to apply to a resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryOtherCloudFilter filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter = null;
    /**
     * Optional. In addition to matching the filter, these conditions must be true
     * before a profile is generated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryOtherCloudConditions conditions = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $conditions = null;
    protected $cadence;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\DataSourceType $data_source_type
     *           Required. The type of data profiles generated by this discovery target.
     *           Supported values are:
     *           * aws/s3/bucket
     *     @type \Google\Cloud\Dlp\V2\DiscoveryOtherCloudFilter $filter
     *           Required. The resources that the discovery cadence applies to. The
     *           first target with a matching filter will be the one to apply to a resource.
     *     @type \Google\Cloud\Dlp\V2\DiscoveryOtherCloudConditions $conditions
     *           Optional. In addition to matching the filter, these conditions must be true
     *           before a profile is generated.
     *     @type \Google\Cloud\Dlp\V2\DiscoveryOtherCloudGenerationCadence $generation_cadence
     *           How often and when to update data profiles. New resources that match both
     *           the filter and conditions are scanned as quickly as possible depending on
     *           system capacity.
     *     @type \Google\Cloud\Dlp\V2\Disabled $disabled
     *           Disable profiling for resources that match this filter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The type of data profiles generated by this discovery target.
     * Supported values are:
     * * aws/s3/bucket
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataSourceType data_source_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\DataSourceType|null
     */
    public function getDataSourceType()
    {
        return $this->data_source_type;
    }

    public function hasDataSourceType()
    {
        return isset($this->data_source_type);
    }

    public function clearDataSourceType()
    {
        unset($this->data_source_type);
    }

    /**
     * Required. The type of data profiles generated by this discovery target.
     * Supported values are:
     * * aws/s3/bucket
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataSourceType data_source_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\DataSourceType $var
     * @return $this
     */
    public function setDataSourceType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataSourceType::class);
        $this->data_source_type = $var;

        return $this;
    }

    /**
     * Required. The resources that the discovery cadence applies to. The
     * first target with a matching filter will be the one to apply to a resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryOtherCloudFilter filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\DiscoveryOtherCloudFilter|null
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
     * Required. The resources that the discovery cadence applies to. The
     * first target with a matching filter will be the one to apply to a resource.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryOtherCloudFilter filter = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\DiscoveryOtherCloudFilter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DiscoveryOtherCloudFilter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. In addition to matching the filter, these conditions must be true
     * before a profile is generated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryOtherCloudConditions conditions = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dlp\V2\DiscoveryOtherCloudConditions|null
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    public function hasConditions()
    {
        return isset($this->conditions);
    }

    public function clearConditions()
    {
        unset($this->conditions);
    }

    /**
     * Optional. In addition to matching the filter, these conditions must be true
     * before a profile is generated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryOtherCloudConditions conditions = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dlp\V2\DiscoveryOtherCloudConditions $var
     * @return $this
     */
    public function setConditions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DiscoveryOtherCloudConditions::class);
        $this->conditions = $var;

        return $this;
    }

    /**
     * How often and when to update data profiles. New resources that match both
     * the filter and conditions are scanned as quickly as possible depending on
     * system capacity.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryOtherCloudGenerationCadence generation_cadence = 4;</code>
     * @return \Google\Cloud\Dlp\V2\DiscoveryOtherCloudGenerationCadence|null
     */
    public function getGenerationCadence()
    {
        return $this->readOneof(4);
    }

    public function hasGenerationCadence()
    {
        return $this->hasOneof(4);
    }

    /**
     * How often and when to update data profiles. New resources that match both
     * the filter and conditions are scanned as quickly as possible depending on
     * system capacity.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DiscoveryOtherCloudGenerationCadence generation_cadence = 4;</code>
     * @param \Google\Cloud\Dlp\V2\DiscoveryOtherCloudGenerationCadence $var
     * @return $this
     */
    public function setGenerationCadence($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DiscoveryOtherCloudGenerationCadence::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Disable profiling for resources that match this filter.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Disabled disabled = 5;</code>
     * @return \Google\Cloud\Dlp\V2\Disabled|null
     */
    public function getDisabled()
    {
        return $this->readOneof(5);
    }

    public function hasDisabled()
    {
        return $this->hasOneof(5);
    }

    /**
     * Disable profiling for resources that match this filter.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Disabled disabled = 5;</code>
     * @param \Google\Cloud\Dlp\V2\Disabled $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Disabled::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCadence()
    {
        return $this->whichOneof("cadence");
    }

}
