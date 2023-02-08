<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/connectivity_test.proto

namespace GPBMetadata\Google\Cloud\Networkmanagement\V1;

class ConnectivityTest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\Trace::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/cloud/networkmanagement/v1/connectivity_test.proto!google.cloud.networkmanagement.v1google/api/resource.proto-google/cloud/networkmanagement/v1/trace.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
ConnectivityTest
name (	B�A
description (	@
source (2+.google.cloud.networkmanagement.v1.EndpointB�AE
destination (2+.google.cloud.networkmanagement.v1.EndpointB�A
protocol (	
related_projects (	
display_name (	B�AO
labels (2?.google.cloud.networkmanagement.v1.ConnectivityTest.LabelsEntry4
create_time
 (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AY
reachability_details (26.google.cloud.networkmanagement.v1.ReachabilityDetailsB�A-
LabelsEntry
key (	
value (	:8:t�Aq
1networkmanagement.googleapis.com/ConnectivityTest<projects/{project}/locations/global/connectivityTests/{test}"�
Endpoint

ip_address (	
port (
instance (	
gke_master_cluster (	
cloud_sql_instance (	
network (	M
network_type (27.google.cloud.networkmanagement.v1.Endpoint.NetworkType

project_id (	"Q
NetworkType
NETWORK_TYPE_UNSPECIFIED 
GCP_NETWORK
NON_GCP_NETWORK"�
ReachabilityDetailsM
result (2=.google.cloud.networkmanagement.v1.ReachabilityDetails.Result/
verify_time (2.google.protobuf.Timestamp!
error (2.google.rpc.Status8
traces (2(.google.cloud.networkmanagement.v1.Trace"a
Result
RESULT_UNSPECIFIED 
	REACHABLE
UNREACHABLE
	AMBIGUOUS
UNDETERMINEDB�
%com.google.cloud.networkmanagement.v1BTestOuterClassPZScloud.google.com/go/networkmanagement/apiv1/networkmanagementpb;networkmanagementpb�!Google.Cloud.NetworkManagement.V1�!Google\\Cloud\\NetworkManagement\\V1�$Google::Cloud::NetworkManagement::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

