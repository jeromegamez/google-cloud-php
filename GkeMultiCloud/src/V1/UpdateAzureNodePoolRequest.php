<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AzureClusters.UpdateAzureNodePool` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.UpdateAzureNodePoolRequest</code>
 */
class UpdateAzureNodePoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]
     * resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodePool azure_node_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $azure_node_pool = null;
    /**
     * If set, only validate the request, but don't actually update the node pool.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     */
    private $validate_only = false;
    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field can only include these
     * fields from [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]:
     *  *.  `annotations`.
     *  *   `version`.
     *  *   `autoscaling.min_node_count`.
     *  *   `autoscaling.max_node_count`.
     *  *   `config.ssh_config.authorized_key`.
     *  *   `management.auto_repair`.
     *  *   `management`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureNodePool $azureNodePool Required. The [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]
     *                                                                    resource to update.
     * @param \Google\Protobuf\FieldMask                   $updateMask    Required. Mask of fields to update. At least one path must be supplied in
     *                                                                    this field. The elements of the repeated paths field can only include these
     *                                                                    fields from [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]:
     *
     *                                                                    *.  `annotations`.
     *                                                                    *   `version`.
     *                                                                    *   `autoscaling.min_node_count`.
     *                                                                    *   `autoscaling.max_node_count`.
     *                                                                    *   `config.ssh_config.authorized_key`.
     *                                                                    *   `management.auto_repair`.
     *                                                                    *   `management`.
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\UpdateAzureNodePoolRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\GkeMultiCloud\V1\AzureNodePool $azureNodePool, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setAzureNodePool($azureNodePool)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeMultiCloud\V1\AzureNodePool $azure_node_pool
     *           Required. The [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]
     *           resource to update.
     *     @type bool $validate_only
     *           If set, only validate the request, but don't actually update the node pool.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update. At least one path must be supplied in
     *           this field. The elements of the repeated paths field can only include these
     *           fields from [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]:
     *            *.  `annotations`.
     *            *   `version`.
     *            *   `autoscaling.min_node_count`.
     *            *   `autoscaling.max_node_count`.
     *            *   `config.ssh_config.authorized_key`.
     *            *   `management.auto_repair`.
     *            *   `management`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]
     * resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodePool azure_node_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\GkeMultiCloud\V1\AzureNodePool|null
     */
    public function getAzureNodePool()
    {
        return $this->azure_node_pool;
    }

    public function hasAzureNodePool()
    {
        return isset($this->azure_node_pool);
    }

    public function clearAzureNodePool()
    {
        unset($this->azure_node_pool);
    }

    /**
     * Required. The [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]
     * resource to update.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AzureNodePool azure_node_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\GkeMultiCloud\V1\AzureNodePool $var
     * @return $this
     */
    public function setAzureNodePool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeMultiCloud\V1\AzureNodePool::class);
        $this->azure_node_pool = $var;

        return $this;
    }

    /**
     * If set, only validate the request, but don't actually update the node pool.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, only validate the request, but don't actually update the node pool.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field can only include these
     * fields from [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]:
     *  *.  `annotations`.
     *  *   `version`.
     *  *   `autoscaling.min_node_count`.
     *  *   `autoscaling.max_node_count`.
     *  *   `config.ssh_config.authorized_key`.
     *  *   `management.auto_repair`.
     *  *   `management`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field can only include these
     * fields from [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool]:
     *  *.  `annotations`.
     *  *   `version`.
     *  *   `autoscaling.min_node_count`.
     *  *   `autoscaling.max_node_count`.
     *  *   `config.ssh_config.authorized_key`.
     *  *   `management.auto_repair`.
     *  *   `management`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

