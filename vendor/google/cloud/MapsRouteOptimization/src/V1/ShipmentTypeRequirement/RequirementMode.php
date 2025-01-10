<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/routeoptimization/v1/route_optimization_service.proto

namespace Google\Maps\RouteOptimization\V1\ShipmentTypeRequirement;

use UnexpectedValueException;

/**
 * Modes defining the appearance of dependent shipments on a route.
 *
 * Protobuf type <code>google.maps.routeoptimization.v1.ShipmentTypeRequirement.RequirementMode</code>
 */
class RequirementMode
{
    /**
     * Unspecified requirement mode. This value should never be used.
     *
     * Generated from protobuf enum <code>REQUIREMENT_MODE_UNSPECIFIED = 0;</code>
     */
    const REQUIREMENT_MODE_UNSPECIFIED = 0;
    /**
     * In this mode, all "dependent" shipments must share the same vehicle as at
     * least one of their "required" shipments.
     *
     * Generated from protobuf enum <code>PERFORMED_BY_SAME_VEHICLE = 1;</code>
     */
    const PERFORMED_BY_SAME_VEHICLE = 1;
    /**
     * With the `IN_SAME_VEHICLE_AT_PICKUP_TIME` mode, all "dependent"
     * shipments need to have at least one "required" shipment on their vehicle
     * at the time of their pickup.
     * A "dependent" shipment pickup must therefore have either:
     * * A delivery-only "required" shipment delivered on the route after, or
     * * A "required" shipment picked up on the route before it, and if the
     *   "required" shipment has a delivery, this delivery must be performed
     *   after the "dependent" shipment's pickup.
     *
     * Generated from protobuf enum <code>IN_SAME_VEHICLE_AT_PICKUP_TIME = 2;</code>
     */
    const IN_SAME_VEHICLE_AT_PICKUP_TIME = 2;
    /**
     * Same as before, except the "dependent" shipments need to have a
     * "required" shipment on their vehicle at the time of their *delivery*.
     *
     * Generated from protobuf enum <code>IN_SAME_VEHICLE_AT_DELIVERY_TIME = 3;</code>
     */
    const IN_SAME_VEHICLE_AT_DELIVERY_TIME = 3;

    private static $valueToName = [
        self::REQUIREMENT_MODE_UNSPECIFIED => 'REQUIREMENT_MODE_UNSPECIFIED',
        self::PERFORMED_BY_SAME_VEHICLE => 'PERFORMED_BY_SAME_VEHICLE',
        self::IN_SAME_VEHICLE_AT_PICKUP_TIME => 'IN_SAME_VEHICLE_AT_PICKUP_TIME',
        self::IN_SAME_VEHICLE_AT_DELIVERY_TIME => 'IN_SAME_VEHICLE_AT_DELIVERY_TIME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

