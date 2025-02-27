<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/snooze.proto

namespace Google\Cloud\Monitoring\V3\Snooze;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Criteria specific to the `AlertPolicy`s that this `Snooze` applies to. The
 * `Snooze` will suppress alerts that come from one of the `AlertPolicy`s
 * whose names are supplied.
 *
 * Generated from protobuf message <code>google.monitoring.v3.Snooze.Criteria</code>
 */
class Criteria extends \Google\Protobuf\Internal\Message
{
    /**
     * The specific `AlertPolicy` names for the alert that should be snoozed.
     * The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]
     * There is a limit of 16 policies per snooze. This limit is checked during
     * snooze creation.
     *
     * Generated from protobuf field <code>repeated string policies = 1 [(.google.api.resource_reference) = {</code>
     */
    private $policies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $policies
     *           The specific `AlertPolicy` names for the alert that should be snoozed.
     *           The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]
     *           There is a limit of 16 policies per snooze. This limit is checked during
     *           snooze creation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Snooze::initOnce();
        parent::__construct($data);
    }

    /**
     * The specific `AlertPolicy` names for the alert that should be snoozed.
     * The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]
     * There is a limit of 16 policies per snooze. This limit is checked during
     * snooze creation.
     *
     * Generated from protobuf field <code>repeated string policies = 1 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * The specific `AlertPolicy` names for the alert that should be snoozed.
     * The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]
     * There is a limit of 16 policies per snooze. This limit is checked during
     * snooze creation.
     *
     * Generated from protobuf field <code>repeated string policies = 1 [(.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->policies = $arr;

        return $this;
    }

}


