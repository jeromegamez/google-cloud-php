<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/ad_unit_enums.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class AdUnitEnums
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
+google/ads/admanager/v1/ad_unit_enums.protogoogle.ads.admanager.v1"j
AdUnitStatusEnum"V
AdUnitStatus
AD_UNIT_STATUS_UNSPECIFIED 

ACTIVE
INACTIVE
ARCHIVED"s
SmartSizeModeEnum"^
SmartSizeMode
SMART_SIZE_MODE_UNSPECIFIED 
NONE
SMART_BANNER
DYNAMIC_SIZE"U
TargetWindowEnum"A
TargetWindow
TARGET_WINDOW_UNSPECIFIED 
TOP	
BLANKB�
com.google.ads.admanager.v1BAdUnitEnumsProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

