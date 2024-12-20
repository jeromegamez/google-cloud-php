<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/enrollment.proto

namespace GPBMetadata\Google\Cloud\Eventarc\V1;

class Enrollment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/eventarc/v1/enrollment.protogoogle.cloud.eventarc.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�

Enrollment
name (	B�A
uid (	B�A
etag (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AE
labels (20.google.cloud.eventarc.v1.Enrollment.LabelsEntryB�AO
annotations (25.google.cloud.eventarc.v1.Enrollment.AnnotationsEntryB�A
display_name (	B�A
	cel_match	 (	B�A?
message_bus
 (	B*�A�A$
"eventarc.googleapis.com/MessageBus
destination (	B�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8:��A
"eventarc.googleapis.com/Enrollment@projects/{project}/locations/{location}/enrollments/{enrollment}*enrollments2
enrollmentB�
com.google.cloud.eventarc.v1BEnrollmentProtoPZ8cloud.google.com/go/eventarc/apiv1/eventarcpb;eventarcpb�Google.Cloud.Eventarc.V1�Google\\Cloud\\Eventarc\\V1�Google::Cloud::Eventarc::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

