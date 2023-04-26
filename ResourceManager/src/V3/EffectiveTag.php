<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_bindings.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An EffectiveTag represents a tag that applies to a resource during policy
 * evaluation. Tags can be either directly bound to a resource or inherited from
 * its ancestor. EffectiveTag contains the name and
 * namespaced_name of the tag value and tag key, with additional fields of
 * `inherited` to indicate the inheritance status of the effective tag.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.EffectiveTag</code>
 */
class EffectiveTag extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name for TagValue in the format `tagValues/456`.
     *
     * Generated from protobuf field <code>string tag_value = 1 [(.google.api.resource_reference) = {</code>
     */
    private $tag_value = '';
    /**
     * Namespaced name of the TagValue. Now only supported in the format
     * `{organization_id}/{tag_key_short_name}/{tag_value_short_name}`.
     * Other formats will be supported when we add non-org parented tags.
     *
     * Generated from protobuf field <code>string namespaced_tag_value = 2;</code>
     */
    private $namespaced_tag_value = '';
    /**
     * The name of the TagKey, in the format `tagKeys/{id}`, such as
     * `tagKeys/123`.
     *
     * Generated from protobuf field <code>string tag_key = 3 [(.google.api.resource_reference) = {</code>
     */
    private $tag_key = '';
    /**
     * The namespaced_name of the TagKey. Now only supported in the format of
     * `{organization_id}/{tag_key_short_name}`. Other formats will be
     * supported when we add non-org parented tags.
     *
     * Generated from protobuf field <code>string namespaced_tag_key = 4;</code>
     */
    private $namespaced_tag_key = '';
    /**
     * The parent name of the tag key.
     * Must be in the format `organizations/{organization_id}`.
     *
     * Generated from protobuf field <code>string tag_key_parent_name = 6;</code>
     */
    private $tag_key_parent_name = '';
    /**
     * Indicates the inheritance status of a tag value
     * attached to the given resource. If the tag value is inherited from one of
     * the resource's ancestors, inherited will be true. If false, then the tag
     * value is directly attached to the resource, inherited will be false.
     *
     * Generated from protobuf field <code>bool inherited = 5;</code>
     */
    private $inherited = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tag_value
     *           Resource name for TagValue in the format `tagValues/456`.
     *     @type string $namespaced_tag_value
     *           Namespaced name of the TagValue. Now only supported in the format
     *           `{organization_id}/{tag_key_short_name}/{tag_value_short_name}`.
     *           Other formats will be supported when we add non-org parented tags.
     *     @type string $tag_key
     *           The name of the TagKey, in the format `tagKeys/{id}`, such as
     *           `tagKeys/123`.
     *     @type string $namespaced_tag_key
     *           The namespaced_name of the TagKey. Now only supported in the format of
     *           `{organization_id}/{tag_key_short_name}`. Other formats will be
     *           supported when we add non-org parented tags.
     *     @type string $tag_key_parent_name
     *           The parent name of the tag key.
     *           Must be in the format `organizations/{organization_id}`.
     *     @type bool $inherited
     *           Indicates the inheritance status of a tag value
     *           attached to the given resource. If the tag value is inherited from one of
     *           the resource's ancestors, inherited will be true. If false, then the tag
     *           value is directly attached to the resource, inherited will be false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagBindings::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name for TagValue in the format `tagValues/456`.
     *
     * Generated from protobuf field <code>string tag_value = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTagValue()
    {
        return $this->tag_value;
    }

    /**
     * Resource name for TagValue in the format `tagValues/456`.
     *
     * Generated from protobuf field <code>string tag_value = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTagValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag_value = $var;

        return $this;
    }

    /**
     * Namespaced name of the TagValue. Now only supported in the format
     * `{organization_id}/{tag_key_short_name}/{tag_value_short_name}`.
     * Other formats will be supported when we add non-org parented tags.
     *
     * Generated from protobuf field <code>string namespaced_tag_value = 2;</code>
     * @return string
     */
    public function getNamespacedTagValue()
    {
        return $this->namespaced_tag_value;
    }

    /**
     * Namespaced name of the TagValue. Now only supported in the format
     * `{organization_id}/{tag_key_short_name}/{tag_value_short_name}`.
     * Other formats will be supported when we add non-org parented tags.
     *
     * Generated from protobuf field <code>string namespaced_tag_value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespacedTagValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespaced_tag_value = $var;

        return $this;
    }

    /**
     * The name of the TagKey, in the format `tagKeys/{id}`, such as
     * `tagKeys/123`.
     *
     * Generated from protobuf field <code>string tag_key = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getTagKey()
    {
        return $this->tag_key;
    }

    /**
     * The name of the TagKey, in the format `tagKeys/{id}`, such as
     * `tagKeys/123`.
     *
     * Generated from protobuf field <code>string tag_key = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTagKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag_key = $var;

        return $this;
    }

    /**
     * The namespaced_name of the TagKey. Now only supported in the format of
     * `{organization_id}/{tag_key_short_name}`. Other formats will be
     * supported when we add non-org parented tags.
     *
     * Generated from protobuf field <code>string namespaced_tag_key = 4;</code>
     * @return string
     */
    public function getNamespacedTagKey()
    {
        return $this->namespaced_tag_key;
    }

    /**
     * The namespaced_name of the TagKey. Now only supported in the format of
     * `{organization_id}/{tag_key_short_name}`. Other formats will be
     * supported when we add non-org parented tags.
     *
     * Generated from protobuf field <code>string namespaced_tag_key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespacedTagKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespaced_tag_key = $var;

        return $this;
    }

    /**
     * The parent name of the tag key.
     * Must be in the format `organizations/{organization_id}`.
     *
     * Generated from protobuf field <code>string tag_key_parent_name = 6;</code>
     * @return string
     */
    public function getTagKeyParentName()
    {
        return $this->tag_key_parent_name;
    }

    /**
     * The parent name of the tag key.
     * Must be in the format `organizations/{organization_id}`.
     *
     * Generated from protobuf field <code>string tag_key_parent_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTagKeyParentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag_key_parent_name = $var;

        return $this;
    }

    /**
     * Indicates the inheritance status of a tag value
     * attached to the given resource. If the tag value is inherited from one of
     * the resource's ancestors, inherited will be true. If false, then the tag
     * value is directly attached to the resource, inherited will be false.
     *
     * Generated from protobuf field <code>bool inherited = 5;</code>
     * @return bool
     */
    public function getInherited()
    {
        return $this->inherited;
    }

    /**
     * Indicates the inheritance status of a tag value
     * attached to the given resource. If the tag value is inherited from one of
     * the resource's ancestors, inherited will be true. If false, then the tag
     * value is directly attached to the resource, inherited will be false.
     *
     * Generated from protobuf field <code>bool inherited = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setInherited($var)
    {
        GPBUtil::checkBool($var);
        $this->inherited = $var;

        return $this;
    }

}
