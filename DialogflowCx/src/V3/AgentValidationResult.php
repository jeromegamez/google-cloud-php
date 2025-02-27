<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/agent.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [Agents.GetAgentValidationResult][google.cloud.dialogflow.cx.v3.Agents.GetAgentValidationResult].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.AgentValidationResult</code>
 */
class AgentValidationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the agent validation result.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/validationResult`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Contains all flow validation results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.FlowValidationResult flow_validation_results = 2;</code>
     */
    private $flow_validation_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique identifier of the agent validation result.
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/validationResult`.
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\FlowValidationResult>|\Google\Protobuf\Internal\RepeatedField $flow_validation_results
     *           Contains all flow validation results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the agent validation result.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/validationResult`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique identifier of the agent validation result.
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/validationResult`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Contains all flow validation results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.FlowValidationResult flow_validation_results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFlowValidationResults()
    {
        return $this->flow_validation_results;
    }

    /**
     * Contains all flow validation results.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.FlowValidationResult flow_validation_results = 2;</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\FlowValidationResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFlowValidationResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\FlowValidationResult::class);
        $this->flow_validation_results = $arr;

        return $this;
    }

}

