<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EnterpriseConfig is the cluster enterprise configuration.
 *
 * Generated from protobuf message <code>google.container.v1.EnterpriseConfig</code>
 */
class EnterpriseConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. cluster_tier specifies the premium tier of the cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.EnterpriseConfig.ClusterTier cluster_tier = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $cluster_tier = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cluster_tier
     *           Output only. cluster_tier specifies the premium tier of the cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. cluster_tier specifies the premium tier of the cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.EnterpriseConfig.ClusterTier cluster_tier = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getClusterTier()
    {
        return $this->cluster_tier;
    }

    /**
     * Output only. cluster_tier specifies the premium tier of the cluster.
     *
     * Generated from protobuf field <code>.google.container.v1.EnterpriseConfig.ClusterTier cluster_tier = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setClusterTier($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Container\V1\EnterpriseConfig\ClusterTier::class);
        $this->cluster_tier = $var;

        return $this;
    }

}

