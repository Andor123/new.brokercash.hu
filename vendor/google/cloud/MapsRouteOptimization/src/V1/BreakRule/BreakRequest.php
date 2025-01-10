<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/routeoptimization/v1/route_optimization_service.proto

namespace Google\Maps\RouteOptimization\V1\BreakRule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The sequence of breaks (i.e. their number and order) that apply to each
 * vehicle must be known beforehand. The repeated `BreakRequest`s define
 * that sequence, in the order in which they must occur. Their time windows
 * (`earliest_start_time` / `latest_start_time`) may overlap, but they must
 * be compatible with the order (this is checked).
 *
 * Generated from protobuf message <code>google.maps.routeoptimization.v1.BreakRule.BreakRequest</code>
 */
class BreakRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Lower bound (inclusive) on the start of the break.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_start_time = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $earliest_start_time = null;
    /**
     * Required. Upper bound (inclusive) on the start of the break.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_start_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $latest_start_time = null;
    /**
     * Required. Minimum duration of the break. Must be positive.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_duration = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $min_duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $earliest_start_time
     *           Required. Lower bound (inclusive) on the start of the break.
     *     @type \Google\Protobuf\Timestamp $latest_start_time
     *           Required. Upper bound (inclusive) on the start of the break.
     *     @type \Google\Protobuf\Duration $min_duration
     *           Required. Minimum duration of the break. Must be positive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Routeoptimization\V1\RouteOptimizationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Lower bound (inclusive) on the start of the break.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_start_time = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEarliestStartTime()
    {
        return $this->earliest_start_time;
    }

    public function hasEarliestStartTime()
    {
        return isset($this->earliest_start_time);
    }

    public function clearEarliestStartTime()
    {
        unset($this->earliest_start_time);
    }

    /**
     * Required. Lower bound (inclusive) on the start of the break.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_start_time = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEarliestStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->earliest_start_time = $var;

        return $this;
    }

    /**
     * Required. Upper bound (inclusive) on the start of the break.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_start_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLatestStartTime()
    {
        return $this->latest_start_time;
    }

    public function hasLatestStartTime()
    {
        return isset($this->latest_start_time);
    }

    public function clearLatestStartTime()
    {
        unset($this->latest_start_time);
    }

    /**
     * Required. Upper bound (inclusive) on the start of the break.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_start_time = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLatestStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->latest_start_time = $var;

        return $this;
    }

    /**
     * Required. Minimum duration of the break. Must be positive.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_duration = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMinDuration()
    {
        return $this->min_duration;
    }

    public function hasMinDuration()
    {
        return isset($this->min_duration);
    }

    public function clearMinDuration()
    {
        unset($this->min_duration);
    }

    /**
     * Required. Minimum duration of the break. Must be positive.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration min_duration = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMinDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->min_duration = $var;

        return $this;
    }

}


