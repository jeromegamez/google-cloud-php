<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/size.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class Size
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Admanager\V1\SizeTypeEnum::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"google/ads/admanager/v1/size.protogoogle.ads.admanager.v1google/api/field_behavior.proto"w
Size
width (B�A
height (B�AF
	size_type (2..google.ads.admanager.v1.SizeTypeEnum.SizeTypeB�AB�
com.google.ads.admanager.v1B	SizeProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1�Google::Ads::AdManager::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

