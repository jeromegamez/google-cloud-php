<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to ListTunnelDestGroups.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.ListTunnelDestGroupsRequest</code>
 */
class ListTunnelDestGroupsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Google Cloud Project ID and location.
     * In the following format:
     * `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     * A `-` can be used for the location to group across all locations.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of groups to return. The service might return fewer than
     * this value.
     * If unspecified, at most 100 groups are returned.
     * The maximum value is 1000; values above 1000 are coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous `ListTunnelDestGroups`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListTunnelDestGroups` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. Google Cloud Project ID and location.
     *                       In the following format:
     *                       `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     *                       A `-` can be used for the location to group across all locations. Please see
     *                       {@see IdentityAwareProxyAdminServiceClient::tunnelLocationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Iap\V1\ListTunnelDestGroupsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Google Cloud Project ID and location.
     *           In the following format:
     *           `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     *           A `-` can be used for the location to group across all locations.
     *     @type int $page_size
     *           The maximum number of groups to return. The service might return fewer than
     *           this value.
     *           If unspecified, at most 100 groups are returned.
     *           The maximum value is 1000; values above 1000 are coerced to 1000.
     *     @type string $page_token
     *           A page token, received from a previous `ListTunnelDestGroups`
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           `ListTunnelDestGroups` must match the call that provided the page
     *           token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Google Cloud Project ID and location.
     * In the following format:
     * `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     * A `-` can be used for the location to group across all locations.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Google Cloud Project ID and location.
     * In the following format:
     * `projects/{project_number/id}/iap_tunnel/locations/{location}`.
     * A `-` can be used for the location to group across all locations.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of groups to return. The service might return fewer than
     * this value.
     * If unspecified, at most 100 groups are returned.
     * The maximum value is 1000; values above 1000 are coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of groups to return. The service might return fewer than
     * this value.
     * If unspecified, at most 100 groups are returned.
     * The maximum value is 1000; values above 1000 are coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous `ListTunnelDestGroups`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListTunnelDestGroups` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous `ListTunnelDestGroups`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListTunnelDestGroups` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

