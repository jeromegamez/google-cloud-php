<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v2/escalation.proto

namespace GPBMetadata\Google\Cloud\Support\V2;

class Escalation
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/support/v2/escalation.protogoogle.cloud.support.v2"�

Escalation?
reason (2*.google.cloud.support.v2.Escalation.ReasonB�A
justification (	B�A"c
Reason
REASON_UNSPECIFIED 
RESOLUTION_TIME
TECHNICAL_EXPERTISE
BUSINESS_IMPACTB�
com.google.cloud.support.v2BEscalationProtoPZ5cloud.google.com/go/support/apiv2/supportpb;supportpb�Google.Cloud.Support.V2�Google\\Cloud\\Support\\V2�Google::Cloud::Support::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

