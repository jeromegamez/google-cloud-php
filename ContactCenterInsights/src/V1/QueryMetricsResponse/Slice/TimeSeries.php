<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A time series of metric values.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice.TimeSeries</code>
 */
class TimeSeries extends \Google\Protobuf\Internal\Message
{
    /**
     * The data points that make up the time series .
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice.DataPoint data_points = 4;</code>
     */
    private $data_points;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice\DataPoint>|\Google\Protobuf\Internal\RepeatedField $data_points
     *           The data points that make up the time series .
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * The data points that make up the time series .
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice.DataPoint data_points = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataPoints()
    {
        return $this->data_points;
    }

    /**
     * The data points that make up the time series .
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice.DataPoint data_points = 4;</code>
     * @param array<\Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice\DataPoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataPoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice\DataPoint::class);
        $this->data_points = $arr;

        return $this;
    }

}


