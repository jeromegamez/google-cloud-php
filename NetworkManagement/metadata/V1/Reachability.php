<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/reachability.proto

namespace GPBMetadata\Google\Cloud\Networkmanagement\V1;

class Reachability
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Networkmanagement\V1\ConnectivityTest::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/cloud/networkmanagement/v1/reachability.proto!google.cloud.networkmanagement.v1google/api/client.protogoogle/api/field_behavior.proto9google/cloud/networkmanagement/v1/connectivity_test.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"|
ListConnectivityTestsRequest
parent (	B�A
	page_size (

page_token (	
filter (	
order_by (	"�
ListConnectivityTestsResponseF
	resources (23.google.cloud.networkmanagement.v1.ConnectivityTest
next_page_token (	
unreachable (	"/
GetConnectivityTestRequest
name (	B�A"�
CreateConnectivityTestRequest
parent (	B�A
test_id (	B�AJ
resource (23.google.cloud.networkmanagement.v1.ConnectivityTestB�A"�
UpdateConnectivityTestRequest4
update_mask (2.google.protobuf.FieldMaskB�AJ
resource (23.google.cloud.networkmanagement.v1.ConnectivityTestB�A"2
DeleteConnectivityTestRequest
name (	B�A"1
RerunConnectivityTestRequest
name (	B�A"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
status_detail (	
cancel_requested (
api_version (	2�
ReachabilityService�
ListConnectivityTests?.google.cloud.networkmanagement.v1.ListConnectivityTestsRequest@.google.cloud.networkmanagement.v1.ListConnectivityTestsResponse"K���<:/v1/{parent=projects/*/locations/global}/connectivityTests�Aparent�
GetConnectivityTest=.google.cloud.networkmanagement.v1.GetConnectivityTestRequest3.google.cloud.networkmanagement.v1.ConnectivityTest"I���<:/v1/{name=projects/*/locations/global/connectivityTests/*}�Aname�
CreateConnectivityTest@.google.cloud.networkmanagement.v1.CreateConnectivityTestRequest.google.longrunning.Operation"����F":/v1/{parent=projects/*/locations/global}/connectivityTests:resource�Aparent,test_id,resource�AG
2google.cloud.networkmanagement.v1.ConnectivityTestOperationMetadata�
UpdateConnectivityTest@.google.cloud.networkmanagement.v1.UpdateConnectivityTestRequest.google.longrunning.Operation"����O2C/v1/{resource.name=projects/*/locations/global/connectivityTests/*}:resource�Aupdate_mask,resource�AG
2google.cloud.networkmanagement.v1.ConnectivityTestOperationMetadata�
RerunConnectivityTest?.google.cloud.networkmanagement.v1.RerunConnectivityTestRequest.google.longrunning.Operation"����E"@/v1/{name=projects/*/locations/global/connectivityTests/*}:rerun:*�AG
2google.cloud.networkmanagement.v1.ConnectivityTestOperationMetadata�
DeleteConnectivityTest@.google.cloud.networkmanagement.v1.DeleteConnectivityTestRequest.google.longrunning.Operation"v���<*:/v1/{name=projects/*/locations/global/connectivityTests/*}�Aname�A*
google.protobuf.EmptyOperationMetadataT�A networkmanagement.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
%com.google.cloud.networkmanagement.v1BReachabilityServiceProtoPZScloud.google.com/go/networkmanagement/apiv1/networkmanagementpb;networkmanagementpb�!Google.Cloud.NetworkManagement.V1�!Google\\Cloud\\NetworkManagement\\V1�$Google::Cloud::NetworkManagement::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

