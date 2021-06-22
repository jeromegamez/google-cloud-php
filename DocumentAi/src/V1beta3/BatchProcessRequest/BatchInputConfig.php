<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta3/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1beta3\BatchProcessRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The message for input config in batch process.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1beta3.BatchProcessRequest.BatchInputConfig</code>
 */
class BatchInputConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The Cloud Storage location as the source of the document.
     *
     * Generated from protobuf field <code>string gcs_source = 1;</code>
     */
    private $gcs_source = '';
    /**
     * Mimetype of the input. If the input is a raw document, the supported
     * mimetypes are application/pdf, image/tiff, and image/gif.
     * If the input is a [Document] proto, the type should be application/json.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     */
    private $mime_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcs_source
     *           The Cloud Storage location as the source of the document.
     *     @type string $mime_type
     *           Mimetype of the input. If the input is a raw document, the supported
     *           mimetypes are application/pdf, image/tiff, and image/gif.
     *           If the input is a [Document] proto, the type should be application/json.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1Beta3\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Cloud Storage location as the source of the document.
     *
     * Generated from protobuf field <code>string gcs_source = 1;</code>
     * @return string
     */
    public function getGcsSource()
    {
        return $this->gcs_source;
    }

    /**
     * The Cloud Storage location as the source of the document.
     *
     * Generated from protobuf field <code>string gcs_source = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_source = $var;

        return $this;
    }

    /**
     * Mimetype of the input. If the input is a raw document, the supported
     * mimetypes are application/pdf, image/tiff, and image/gif.
     * If the input is a [Document] proto, the type should be application/json.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Mimetype of the input. If the input is a raw document, the supported
     * mimetypes are application/pdf, image/tiff, and image/gif.
     * If the input is a [Document] proto, the type should be application/json.
     *
     * Generated from protobuf field <code>string mime_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchInputConfig::class, \Google\Cloud\DocumentAI\V1beta3\BatchProcessRequest_BatchInputConfig::class);
