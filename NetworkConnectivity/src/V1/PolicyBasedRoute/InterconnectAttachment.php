<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/policy_based_routing.proto

namespace Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InterconnectAttachment to which this route applies to.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.PolicyBasedRoute.InterconnectAttachment</code>
 */
class InterconnectAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Cloud region to install this policy based route on interconnect
     * attachment. Use `all` to install it on all interconnect attachments.
     *
     * Generated from protobuf field <code>string region = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $region
     *           Optional. Cloud region to install this policy based route on interconnect
     *           attachment. Use `all` to install it on all interconnect attachments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\PolicyBasedRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Cloud region to install this policy based route on interconnect
     * attachment. Use `all` to install it on all interconnect attachments.
     *
     * Generated from protobuf field <code>string region = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Optional. Cloud region to install this policy based route on interconnect
     * attachment. Use `all` to install it on all interconnect attachments.
     *
     * Generated from protobuf field <code>string region = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InterconnectAttachment::class, \Google\Cloud\NetworkConnectivity\V1\PolicyBasedRoute_InterconnectAttachment::class);
