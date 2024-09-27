<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/datasources/v1beta/datasourcetypes.proto

namespace Google\Shopping\Merchant\DataSources\V1beta\PrimaryProductDataSource;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Default rule management of the data source.
 *
 * Generated from protobuf message <code>google.shopping.merchant.datasources.v1beta.PrimaryProductDataSource.DefaultRule</code>
 */
class DefaultRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The list of data sources linked in the [default
     * rule](https://support.google.com/merchants/answer/7450276).
     * This list is ordered by the default rule priority of joining the data.
     * It might include none or multiple references to `self` and supplemental
     * data sources.
     * The list must not be empty.
     * To link the data source to the default rule, you need to add a
     * new reference to this list (in sequential order).
     * To unlink the data source from the default rule, you need to
     * remove the given reference from this list.
     * Changing the order of this list will result in changing the priority of
     * data sources in the default rule.
     * For example, providing the following list: [`1001`, `self`] will
     * take attribute values from supplemental data source `1001`, and fallback
     * to `self` if the attribute is not set in `1001`.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.datasources.v1beta.DataSourceReference take_from_data_sources = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $take_from_data_sources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Shopping\Merchant\DataSources\V1beta\DataSourceReference>|\Google\Protobuf\Internal\RepeatedField $take_from_data_sources
     *           Required. The list of data sources linked in the [default
     *           rule](https://support.google.com/merchants/answer/7450276).
     *           This list is ordered by the default rule priority of joining the data.
     *           It might include none or multiple references to `self` and supplemental
     *           data sources.
     *           The list must not be empty.
     *           To link the data source to the default rule, you need to add a
     *           new reference to this list (in sequential order).
     *           To unlink the data source from the default rule, you need to
     *           remove the given reference from this list.
     *           Changing the order of this list will result in changing the priority of
     *           data sources in the default rule.
     *           For example, providing the following list: [`1001`, `self`] will
     *           take attribute values from supplemental data source `1001`, and fallback
     *           to `self` if the attribute is not set in `1001`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Datasources\V1Beta\Datasourcetypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The list of data sources linked in the [default
     * rule](https://support.google.com/merchants/answer/7450276).
     * This list is ordered by the default rule priority of joining the data.
     * It might include none or multiple references to `self` and supplemental
     * data sources.
     * The list must not be empty.
     * To link the data source to the default rule, you need to add a
     * new reference to this list (in sequential order).
     * To unlink the data source from the default rule, you need to
     * remove the given reference from this list.
     * Changing the order of this list will result in changing the priority of
     * data sources in the default rule.
     * For example, providing the following list: [`1001`, `self`] will
     * take attribute values from supplemental data source `1001`, and fallback
     * to `self` if the attribute is not set in `1001`.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.datasources.v1beta.DataSourceReference take_from_data_sources = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTakeFromDataSources()
    {
        return $this->take_from_data_sources;
    }

    /**
     * Required. The list of data sources linked in the [default
     * rule](https://support.google.com/merchants/answer/7450276).
     * This list is ordered by the default rule priority of joining the data.
     * It might include none or multiple references to `self` and supplemental
     * data sources.
     * The list must not be empty.
     * To link the data source to the default rule, you need to add a
     * new reference to this list (in sequential order).
     * To unlink the data source from the default rule, you need to
     * remove the given reference from this list.
     * Changing the order of this list will result in changing the priority of
     * data sources in the default rule.
     * For example, providing the following list: [`1001`, `self`] will
     * take attribute values from supplemental data source `1001`, and fallback
     * to `self` if the attribute is not set in `1001`.
     *
     * Generated from protobuf field <code>repeated .google.shopping.merchant.datasources.v1beta.DataSourceReference take_from_data_sources = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Shopping\Merchant\DataSources\V1beta\DataSourceReference>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTakeFromDataSources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Merchant\DataSources\V1beta\DataSourceReference::class);
        $this->take_from_data_sources = $arr;

        return $this;
    }

}


