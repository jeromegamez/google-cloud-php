<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/lifesciences/v2beta/workflows.proto

namespace Google\Cloud\LifeSciences\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An event generated whenever a resource limitation or transient error
 * delays execution of a pipeline that was otherwise ready to run.
 *
 * Generated from protobuf message <code>google.cloud.lifesciences.v2beta.DelayedEvent</code>
 */
class DelayedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * A textual description of the cause of the delay. The string can change
     * without notice because it is often generated by another service (such as
     * Compute Engine).
     *
     * Generated from protobuf field <code>string cause = 1;</code>
     */
    protected $cause = '';
    /**
     * If the delay was caused by a resource shortage, this field lists the
     * Compute Engine metrics that are preventing this operation from running
     * (for example, `CPUS` or `INSTANCES`). If the particular metric is not
     * known, a single `UNKNOWN` metric will be present.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     */
    private $metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cause
     *           A textual description of the cause of the delay. The string can change
     *           without notice because it is often generated by another service (such as
     *           Compute Engine).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           If the delay was caused by a resource shortage, this field lists the
     *           Compute Engine metrics that are preventing this operation from running
     *           (for example, `CPUS` or `INSTANCES`). If the particular metric is not
     *           known, a single `UNKNOWN` metric will be present.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Lifesciences\V2Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * A textual description of the cause of the delay. The string can change
     * without notice because it is often generated by another service (such as
     * Compute Engine).
     *
     * Generated from protobuf field <code>string cause = 1;</code>
     * @return string
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * A textual description of the cause of the delay. The string can change
     * without notice because it is often generated by another service (such as
     * Compute Engine).
     *
     * Generated from protobuf field <code>string cause = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCause($var)
    {
        GPBUtil::checkString($var, True);
        $this->cause = $var;

        return $this;
    }

    /**
     * If the delay was caused by a resource shortage, this field lists the
     * Compute Engine metrics that are preventing this operation from running
     * (for example, `CPUS` or `INSTANCES`). If the particular metric is not
     * known, a single `UNKNOWN` metric will be present.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }

    /**
     * If the delay was caused by a resource shortage, this field lists the
     * Compute Engine metrics that are preventing this operation from running
     * (for example, `CPUS` or `INSTANCES`). If the particular metric is not
     * known, a single `UNKNOWN` metric will be present.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metrics = $arr;

        return $this;
    }

}

