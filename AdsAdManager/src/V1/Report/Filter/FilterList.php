<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_service.proto

namespace Google\Ads\AdManager\V1\Report\Filter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of filters.
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.Report.Filter.FilterList</code>
 */
class FilterList extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A list of filters.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Filter filters = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $filters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\AdManager\V1\Report\Filter>|\Google\Protobuf\Internal\RepeatedField $filters
     *           Required. A list of filters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\ReportService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A list of filters.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Filter filters = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * Required. A list of filters.
     *
     * Generated from protobuf field <code>repeated .google.ads.admanager.v1.Report.Filter filters = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\AdManager\V1\Report\Filter>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\AdManager\V1\Report\Filter::class);
        $this->filters = $arr;

        return $this;
    }

}


