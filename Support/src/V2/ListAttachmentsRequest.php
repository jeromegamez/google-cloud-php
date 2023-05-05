<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v2/attachment_service.proto

namespace Google\Cloud\Support\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the ListAttachments endpoint.
 *
 * Generated from protobuf message <code>google.cloud.support.v2.ListAttachmentsRequest</code>
 */
class ListAttachmentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of Case object for which attachments should be
     * listed.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of attachments fetched with each request. If not
     * provided, the default is 10. The maximum page size that will be returned is
     * 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A token identifying the page of results to return. If unspecified, the
     * first page is retrieved.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The resource name of Case object for which attachments should be
     *                       listed. Please see
     *                       {@see CaseAttachmentServiceClient::caseName()} for help formatting this field.
     *
     * @return \Google\Cloud\Support\V2\ListAttachmentsRequest
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
     *           Required. The resource name of Case object for which attachments should be
     *           listed.
     *     @type int $page_size
     *           The maximum number of attachments fetched with each request. If not
     *           provided, the default is 10. The maximum page size that will be returned is
     *           100.
     *     @type string $page_token
     *           A token identifying the page of results to return. If unspecified, the
     *           first page is retrieved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Support\V2\AttachmentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of Case object for which attachments should be
     * listed.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of Case object for which attachments should be
     * listed.
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
     * The maximum number of attachments fetched with each request. If not
     * provided, the default is 10. The maximum page size that will be returned is
     * 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of attachments fetched with each request. If not
     * provided, the default is 10. The maximum page size that will be returned is
     * 100.
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
     * A token identifying the page of results to return. If unspecified, the
     * first page is retrieved.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying the page of results to return. If unspecified, the
     * first page is retrieved.
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

