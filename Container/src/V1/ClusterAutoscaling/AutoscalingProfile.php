<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1\ClusterAutoscaling;

use UnexpectedValueException;

/**
 * Defines possible options for autoscaling_profile field.
 *
 * Protobuf type <code>google.container.v1.ClusterAutoscaling.AutoscalingProfile</code>
 */
class AutoscalingProfile
{
    /**
     * No change to autoscaling configuration.
     *
     * Generated from protobuf enum <code>PROFILE_UNSPECIFIED = 0;</code>
     */
    const PROFILE_UNSPECIFIED = 0;
    /**
     * Prioritize optimizing utilization of resources.
     *
     * Generated from protobuf enum <code>OPTIMIZE_UTILIZATION = 1;</code>
     */
    const OPTIMIZE_UTILIZATION = 1;
    /**
     * Use default (balanced) autoscaling configuration.
     *
     * Generated from protobuf enum <code>BALANCED = 2;</code>
     */
    const BALANCED = 2;

    private static $valueToName = [
        self::PROFILE_UNSPECIFIED => 'PROFILE_UNSPECIFIED',
        self::OPTIMIZE_UTILIZATION => 'OPTIMIZE_UTILIZATION',
        self::BALANCED => 'BALANCED',
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


