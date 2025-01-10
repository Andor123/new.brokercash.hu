<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/routeoptimization/v1/route_optimization_service.proto

namespace Google\Maps\RouteOptimization\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specify a destination for
 * [BatchOptimizeTours][google.maps.routeoptimization.v1.RouteOptimizationService.BatchOptimizeTours]
 * results.
 *
 * Generated from protobuf message <code>google.maps.routeoptimization.v1.OutputConfig</code>
 */
class OutputConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The output data format.
     *
     * Generated from protobuf field <code>.google.maps.routeoptimization.v1.DataFormat data_format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_format = 0;
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\RouteOptimization\V1\GcsDestination $gcs_destination
     *           The Google Cloud Storage location to write the output to.
     *     @type int $data_format
     *           Required. The output data format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Routeoptimization\V1\RouteOptimizationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Cloud Storage location to write the output to.
     *
     * Generated from protobuf field <code>.google.maps.routeoptimization.v1.GcsDestination gcs_destination = 1;</code>
     * @return \Google\Maps\RouteOptimization\V1\GcsDestination|null
     */
    public function getGcsDestination()
    {
        return $this->readOneof(1);
    }

    public function hasGcsDestination()
    {
        return $this->hasOneof(1);
    }

    /**
     * The Google Cloud Storage location to write the output to.
     *
     * Generated from protobuf field <code>.google.maps.routeoptimization.v1.GcsDestination gcs_destination = 1;</code>
     * @param \Google\Maps\RouteOptimization\V1\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\RouteOptimization\V1\GcsDestination::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Required. The output data format.
     *
     * Generated from protobuf field <code>.google.maps.routeoptimization.v1.DataFormat data_format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getDataFormat()
    {
        return $this->data_format;
    }

    /**
     * Required. The output data format.
     *
     * Generated from protobuf field <code>.google.maps.routeoptimization.v1.DataFormat data_format = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setDataFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\RouteOptimization\V1\DataFormat::class);
        $this->data_format = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

