<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/delivery_vehicles.proto

namespace Google\Maps\FleetEngine\Delivery\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a point where a Vehicle stops to perform one or more `Task`s.
 *
 * Generated from protobuf message <code>maps.fleetengine.delivery.v1.VehicleStop</code>
 */
class VehicleStop extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The location of the stop. Note that the locations in the `Task`s
     * might not exactly match this location, but will be within a short distance
     * of it. This field won't be populated in the response of a `GetTask` call.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.LocationInfo planned_location = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $planned_location = null;
    /**
     * The list of `Task`s to be performed at this stop. This field won't be
     * populated in the response of a `GetTask` call.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.VehicleStop.TaskInfo tasks = 2;</code>
     */
    private $tasks;
    /**
     * The state of the `VehicleStop`. This field won't be populated in the
     * response of a `GetTask` call.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.VehicleStop.State state = 3;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\FleetEngine\Delivery\V1\LocationInfo $planned_location
     *           Required. The location of the stop. Note that the locations in the `Task`s
     *           might not exactly match this location, but will be within a short distance
     *           of it. This field won't be populated in the response of a `GetTask` call.
     *     @type array<\Google\Maps\FleetEngine\Delivery\V1\VehicleStop\TaskInfo>|\Google\Protobuf\Internal\RepeatedField $tasks
     *           The list of `Task`s to be performed at this stop. This field won't be
     *           populated in the response of a `GetTask` call.
     *     @type int $state
     *           The state of the `VehicleStop`. This field won't be populated in the
     *           response of a `GetTask` call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\DeliveryVehicles::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The location of the stop. Note that the locations in the `Task`s
     * might not exactly match this location, but will be within a short distance
     * of it. This field won't be populated in the response of a `GetTask` call.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.LocationInfo planned_location = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\LocationInfo|null
     */
    public function getPlannedLocation()
    {
        return $this->planned_location;
    }

    public function hasPlannedLocation()
    {
        return isset($this->planned_location);
    }

    public function clearPlannedLocation()
    {
        unset($this->planned_location);
    }

    /**
     * Required. The location of the stop. Note that the locations in the `Task`s
     * might not exactly match this location, but will be within a short distance
     * of it. This field won't be populated in the response of a `GetTask` call.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.LocationInfo planned_location = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\LocationInfo $var
     * @return $this
     */
    public function setPlannedLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\LocationInfo::class);
        $this->planned_location = $var;

        return $this;
    }

    /**
     * The list of `Task`s to be performed at this stop. This field won't be
     * populated in the response of a `GetTask` call.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.VehicleStop.TaskInfo tasks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * The list of `Task`s to be performed at this stop. This field won't be
     * populated in the response of a `GetTask` call.
     *
     * Generated from protobuf field <code>repeated .maps.fleetengine.delivery.v1.VehicleStop.TaskInfo tasks = 2;</code>
     * @param array<\Google\Maps\FleetEngine\Delivery\V1\VehicleStop\TaskInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTasks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Maps\FleetEngine\Delivery\V1\VehicleStop\TaskInfo::class);
        $this->tasks = $arr;

        return $this;
    }

    /**
     * The state of the `VehicleStop`. This field won't be populated in the
     * response of a `GetTask` call.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.VehicleStop.State state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of the `VehicleStop`. This field won't be populated in the
     * response of a `GetTask` call.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.VehicleStop.State state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Maps\FleetEngine\Delivery\V1\VehicleStop\State::class);
        $this->state = $var;

        return $this;
    }

}

