<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v2/cloud_tpu.proto

namespace Google\Cloud\Tpu\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for
 * [GenerateServiceIdentity][google.cloud.tpu.v2.Tpu.GenerateServiceIdentity].
 *
 * Generated from protobuf message <code>google.cloud.tpu.v2.GenerateServiceIdentityResponse</code>
 */
class GenerateServiceIdentityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * ServiceIdentity that was created or retrieved.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v2.ServiceIdentity identity = 1;</code>
     */
    protected $identity = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Tpu\V2\ServiceIdentity $identity
     *           ServiceIdentity that was created or retrieved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V2\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * ServiceIdentity that was created or retrieved.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v2.ServiceIdentity identity = 1;</code>
     * @return \Google\Cloud\Tpu\V2\ServiceIdentity|null
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    public function hasIdentity()
    {
        return isset($this->identity);
    }

    public function clearIdentity()
    {
        unset($this->identity);
    }

    /**
     * ServiceIdentity that was created or retrieved.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v2.ServiceIdentity identity = 1;</code>
     * @param \Google\Cloud\Tpu\V2\ServiceIdentity $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tpu\V2\ServiceIdentity::class);
        $this->identity = $var;

        return $this;
    }

}

