<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use UnexpectedValueException;

/**
 * The route's type
 *
 * Protobuf type <code>google.cloud.networkconnectivity.v1.RouteType</code>
 */
class RouteType
{
    /**
     * No route type information specified
     *
     * Generated from protobuf enum <code>ROUTE_TYPE_UNSPECIFIED = 0;</code>
     */
    const ROUTE_TYPE_UNSPECIFIED = 0;
    /**
     * The route leads to a destination within the primary address range of the
     * VPC network's subnet.
     *
     * Generated from protobuf enum <code>VPC_PRIMARY_SUBNET = 1;</code>
     */
    const VPC_PRIMARY_SUBNET = 1;
    /**
     * The route leads to a destination within the secondary address range of the
     * VPC network's subnet.
     *
     * Generated from protobuf enum <code>VPC_SECONDARY_SUBNET = 2;</code>
     */
    const VPC_SECONDARY_SUBNET = 2;
    /**
     * The route leads to a destination in a dynamic route. Dynamic routes are
     * derived from Border Gateway Protocol (BGP) advertisements received from an
     * NCC hybrid spoke.
     *
     * Generated from protobuf enum <code>DYNAMIC_ROUTE = 3;</code>
     */
    const DYNAMIC_ROUTE = 3;

    private static $valueToName = [
        self::ROUTE_TYPE_UNSPECIFIED => 'ROUTE_TYPE_UNSPECIFIED',
        self::VPC_PRIMARY_SUBNET => 'VPC_PRIMARY_SUBNET',
        self::VPC_SECONDARY_SUBNET => 'VPC_SECONDARY_SUBNET',
        self::DYNAMIC_ROUTE => 'DYNAMIC_ROUTE',
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

