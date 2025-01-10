<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1\ReportSummary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a collection of data points rendered as a Chart.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.ReportSummary.ChartData</code>
 */
class ChartData extends \Google\Protobuf\Internal\Message
{
    /**
     * Each data point in the chart is represented as a name-value pair
     * with the name being the x-axis label, and the value being the y-axis
     * value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.ReportSummary.ChartData.DataPoint data_points = 1;</code>
     */
    private $data_points;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\MigrationCenter\V1\ReportSummary\ChartData\DataPoint>|\Google\Protobuf\Internal\RepeatedField $data_points
     *           Each data point in the chart is represented as a name-value pair
     *           with the name being the x-axis label, and the value being the y-axis
     *           value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Each data point in the chart is represented as a name-value pair
     * with the name being the x-axis label, and the value being the y-axis
     * value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.ReportSummary.ChartData.DataPoint data_points = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataPoints()
    {
        return $this->data_points;
    }

    /**
     * Each data point in the chart is represented as a name-value pair
     * with the name being the x-axis label, and the value being the y-axis
     * value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.migrationcenter.v1.ReportSummary.ChartData.DataPoint data_points = 1;</code>
     * @param array<\Google\Cloud\MigrationCenter\V1\ReportSummary\ChartData\DataPoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\MigrationCenter\V1\ReportSummary\ChartData\DataPoint::class);
        $this->data_points = $arr;

        return $this;
    }

}

