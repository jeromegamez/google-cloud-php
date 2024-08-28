<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration options for the Ray Operator add-on.
 *
 * Generated from protobuf message <code>google.container.v1.RayOperatorConfig</code>
 */
class RayOperatorConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the Ray Operator addon is enabled for this cluster.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    protected $enabled = false;
    /**
     * Optional. Logging configuration for Ray clusters.
     *
     * Generated from protobuf field <code>.google.container.v1.RayClusterLoggingConfig ray_cluster_logging_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ray_cluster_logging_config = null;
    /**
     * Optional. Monitoring configuration for Ray clusters.
     *
     * Generated from protobuf field <code>.google.container.v1.RayClusterMonitoringConfig ray_cluster_monitoring_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ray_cluster_monitoring_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Whether the Ray Operator addon is enabled for this cluster.
     *     @type \Google\Cloud\Container\V1\RayClusterLoggingConfig $ray_cluster_logging_config
     *           Optional. Logging configuration for Ray clusters.
     *     @type \Google\Cloud\Container\V1\RayClusterMonitoringConfig $ray_cluster_monitoring_config
     *           Optional. Monitoring configuration for Ray clusters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the Ray Operator addon is enabled for this cluster.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Whether the Ray Operator addon is enabled for this cluster.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Optional. Logging configuration for Ray clusters.
     *
     * Generated from protobuf field <code>.google.container.v1.RayClusterLoggingConfig ray_cluster_logging_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Container\V1\RayClusterLoggingConfig|null
     */
    public function getRayClusterLoggingConfig()
    {
        return $this->ray_cluster_logging_config;
    }

    public function hasRayClusterLoggingConfig()
    {
        return isset($this->ray_cluster_logging_config);
    }

    public function clearRayClusterLoggingConfig()
    {
        unset($this->ray_cluster_logging_config);
    }

    /**
     * Optional. Logging configuration for Ray clusters.
     *
     * Generated from protobuf field <code>.google.container.v1.RayClusterLoggingConfig ray_cluster_logging_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Container\V1\RayClusterLoggingConfig $var
     * @return $this
     */
    public function setRayClusterLoggingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\RayClusterLoggingConfig::class);
        $this->ray_cluster_logging_config = $var;

        return $this;
    }

    /**
     * Optional. Monitoring configuration for Ray clusters.
     *
     * Generated from protobuf field <code>.google.container.v1.RayClusterMonitoringConfig ray_cluster_monitoring_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Container\V1\RayClusterMonitoringConfig|null
     */
    public function getRayClusterMonitoringConfig()
    {
        return $this->ray_cluster_monitoring_config;
    }

    public function hasRayClusterMonitoringConfig()
    {
        return isset($this->ray_cluster_monitoring_config);
    }

    public function clearRayClusterMonitoringConfig()
    {
        unset($this->ray_cluster_monitoring_config);
    }

    /**
     * Optional. Monitoring configuration for Ray clusters.
     *
     * Generated from protobuf field <code>.google.container.v1.RayClusterMonitoringConfig ray_cluster_monitoring_config = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Container\V1\RayClusterMonitoringConfig $var
     * @return $this
     */
    public function setRayClusterMonitoringConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\RayClusterMonitoringConfig::class);
        $this->ray_cluster_monitoring_config = $var;

        return $this;
    }

}

