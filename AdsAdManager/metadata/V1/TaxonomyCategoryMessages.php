<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/taxonomy_category_messages.proto

namespace GPBMetadata\Google\Ads\Admanager\V1;

class TaxonomyCategoryMessages
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Admanager\V1\TaxonomyTypeEnum::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/admanager/v1/taxonomy_category_messages.protogoogle.ads.admanager.v1google/api/field_behavior.protogoogle/api/resource.proto"�
TaxonomyCategory
name (	B�A!
taxonomy_category_id (B�A
display_name (	B�A
grouping_only (B�A(
parent_taxonomy_category_id (B�AR
taxonomy_type	 (26.google.ads.admanager.v1.TaxonomyTypeEnum.TaxonomyTypeB�A
ancestor_names (	B�A+
ancestor_taxonomy_category_ids (B�A:��A�
)admanager.googleapis.com/TaxonomyCategory>networks/{network_code}/taxonomyCategories/{taxonomy_category}*taxonomyCategories2taxonomyCategoryB�
com.google.ads.admanager.v1BTaxonomyCategoryMessagesProtoPZ@google.golang.org/genproto/googleapis/ads/admanager/v1;admanager�Google.Ads.AdManager.V1�Google\\Ads\\AdManager\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

