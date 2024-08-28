<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for manually stopping a running backfill job for a specific stream
 * object.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.StopBackfillJobRequest</code>
 */
class StopBackfillJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the stream object resource to stop the backfill job
     * for.
     *
     * Generated from protobuf field <code>string object = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $object = '';

    /**
     * @param string $object Required. The name of the stream object resource to stop the backfill job
     *                       for. Please see
     *                       {@see DatastreamClient::streamObjectName()} for help formatting this field.
     *
     * @return \Google\Cloud\Datastream\V1\StopBackfillJobRequest
     *
     * @experimental
     */
    public static function build(string $object): self
    {
        return (new self())
            ->setObject($object);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $object
     *           Required. The name of the stream object resource to stop the backfill job
     *           for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\Datastream::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the stream object resource to stop the backfill job
     * for.
     *
     * Generated from protobuf field <code>string object = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Required. The name of the stream object resource to stop the backfill job
     * for.
     *
     * Generated from protobuf field <code>string object = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setObject($var)
    {
        GPBUtil::checkString($var, True);
        $this->object = $var;

        return $this;
    }

}

