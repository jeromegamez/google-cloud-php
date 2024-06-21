<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/cloudcontrolspartner/v1beta/access_approval_requests.proto

namespace Google\Cloud\CloudControlsPartner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about the Access request.
 *
 * Generated from protobuf message <code>google.cloud.cloudcontrolspartner.v1beta.AccessApprovalRequest</code>
 */
class AccessApprovalRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Format:
     * `organizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}/accessApprovalRequests/{access_approval_request}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * The time at which approval was requested.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp request_time = 2;</code>
     */
    protected $request_time = null;
    /**
     * The justification for which approval is being requested.
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1beta.AccessReason requested_reason = 3;</code>
     */
    protected $requested_reason = null;
    /**
     * The requested expiration for the approval. If the request is approved,
     * access will be granted from the time of approval until the expiration time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp requested_expiration_time = 4;</code>
     */
    protected $requested_expiration_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Format:
     *           `organizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}/accessApprovalRequests/{access_approval_request}`
     *     @type \Google\Protobuf\Timestamp $request_time
     *           The time at which approval was requested.
     *     @type \Google\Cloud\CloudControlsPartner\V1beta\AccessReason $requested_reason
     *           The justification for which approval is being requested.
     *     @type \Google\Protobuf\Timestamp $requested_expiration_time
     *           The requested expiration for the approval. If the request is approved,
     *           access will be granted from the time of approval until the expiration time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Cloudcontrolspartner\V1Beta\AccessApprovalRequests::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Format:
     * `organizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}/accessApprovalRequests/{access_approval_request}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Format:
     * `organizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}/accessApprovalRequests/{access_approval_request}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
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
     * The time at which approval was requested.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp request_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRequestTime()
    {
        return $this->request_time;
    }

    public function hasRequestTime()
    {
        return isset($this->request_time);
    }

    public function clearRequestTime()
    {
        unset($this->request_time);
    }

    /**
     * The time at which approval was requested.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp request_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRequestTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->request_time = $var;

        return $this;
    }

    /**
     * The justification for which approval is being requested.
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1beta.AccessReason requested_reason = 3;</code>
     * @return \Google\Cloud\CloudControlsPartner\V1beta\AccessReason|null
     */
    public function getRequestedReason()
    {
        return $this->requested_reason;
    }

    public function hasRequestedReason()
    {
        return isset($this->requested_reason);
    }

    public function clearRequestedReason()
    {
        unset($this->requested_reason);
    }

    /**
     * The justification for which approval is being requested.
     *
     * Generated from protobuf field <code>.google.cloud.cloudcontrolspartner.v1beta.AccessReason requested_reason = 3;</code>
     * @param \Google\Cloud\CloudControlsPartner\V1beta\AccessReason $var
     * @return $this
     */
    public function setRequestedReason($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudControlsPartner\V1beta\AccessReason::class);
        $this->requested_reason = $var;

        return $this;
    }

    /**
     * The requested expiration for the approval. If the request is approved,
     * access will be granted from the time of approval until the expiration time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp requested_expiration_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRequestedExpirationTime()
    {
        return $this->requested_expiration_time;
    }

    public function hasRequestedExpirationTime()
    {
        return isset($this->requested_expiration_time);
    }

    public function clearRequestedExpirationTime()
    {
        unset($this->requested_expiration_time);
    }

    /**
     * The requested expiration for the approval. If the request is approved,
     * access will be granted from the time of approval until the expiration time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp requested_expiration_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRequestedExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->requested_expiration_time = $var;

        return $this;
    }

}

