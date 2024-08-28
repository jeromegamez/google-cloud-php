<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message to get resource value config
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.GetResourceValueConfigRequest</code>
 */
class GetResourceValueConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the resource value config to retrieve. Its format is
     * `organizations/{organization}/resourceValueConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Name of the resource value config to retrieve. Its format is
     *                     `organizations/{organization}/resourceValueConfigs/{config_id}`. Please see
     *                     {@see SecurityCenterClient::resourceValueConfigName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenter\V1\GetResourceValueConfigRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the resource value config to retrieve. Its format is
     *           `organizations/{organization}/resourceValueConfigs/{config_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the resource value config to retrieve. Its format is
     * `organizations/{organization}/resourceValueConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the resource value config to retrieve. Its format is
     * `organizations/{organization}/resourceValueConfigs/{config_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

