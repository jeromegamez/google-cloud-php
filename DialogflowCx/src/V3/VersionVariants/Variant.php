<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/experiment.proto

namespace Google\Cloud\Dialogflow\Cx\V3\VersionVariants;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single flow version with specified traffic allocation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.VersionVariants.Variant</code>
 */
class Variant extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the flow version.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * Percentage of the traffic which should be routed to this
     * version of flow. Traffic allocation for a single flow must sum up to 1.0.
     *
     * Generated from protobuf field <code>float traffic_allocation = 2;</code>
     */
    protected $traffic_allocation = 0.0;
    /**
     * Whether the variant is for the control group.
     *
     * Generated from protobuf field <code>bool is_control_group = 3;</code>
     */
    protected $is_control_group = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The name of the flow version.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *     @type float $traffic_allocation
     *           Percentage of the traffic which should be routed to this
     *           version of flow. Traffic allocation for a single flow must sum up to 1.0.
     *     @type bool $is_control_group
     *           Whether the variant is for the control group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the flow version.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The name of the flow version.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/versions/<VersionID>`.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Percentage of the traffic which should be routed to this
     * version of flow. Traffic allocation for a single flow must sum up to 1.0.
     *
     * Generated from protobuf field <code>float traffic_allocation = 2;</code>
     * @return float
     */
    public function getTrafficAllocation()
    {
        return $this->traffic_allocation;
    }

    /**
     * Percentage of the traffic which should be routed to this
     * version of flow. Traffic allocation for a single flow must sum up to 1.0.
     *
     * Generated from protobuf field <code>float traffic_allocation = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setTrafficAllocation($var)
    {
        GPBUtil::checkFloat($var);
        $this->traffic_allocation = $var;

        return $this;
    }

    /**
     * Whether the variant is for the control group.
     *
     * Generated from protobuf field <code>bool is_control_group = 3;</code>
     * @return bool
     */
    public function getIsControlGroup()
    {
        return $this->is_control_group;
    }

    /**
     * Whether the variant is for the control group.
     *
     * Generated from protobuf field <code>bool is_control_group = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsControlGroup($var)
    {
        GPBUtil::checkBool($var);
        $this->is_control_group = $var;

        return $this;
    }

}


