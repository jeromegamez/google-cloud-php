<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A contiguous set of days: `startDate`, `startDate + 1`, ..., `endDate`.
 * Requests are allowed up to 4 date ranges.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.DateRange</code>
 */
class DateRange extends \Google\Protobuf\Internal\Message
{
    /**
     * The inclusive start date for the query in the format `YYYY-MM-DD`. Cannot
     * be after `end_date`. The format `NdaysAgo`, `yesterday`, or `today` is also
     * accepted, and in that case, the date is inferred based on the property's
     * reporting time zone.
     *
     * Generated from protobuf field <code>string start_date = 1;</code>
     */
    protected $start_date = '';
    /**
     * The inclusive end date for the query in the format `YYYY-MM-DD`. Cannot
     * be before `start_date`. The format `NdaysAgo`, `yesterday`, or `today` is
     * also accepted, and in that case, the date is inferred based on the
     * property's reporting time zone.
     *
     * Generated from protobuf field <code>string end_date = 2;</code>
     */
    protected $end_date = '';
    /**
     * Assigns a name to this date range. The dimension `dateRange` is valued to
     * this name in a report response. If set, cannot begin with `date_range_` or
     * `RESERVED_`. If not set, date ranges are named by their zero based index in
     * the request: `date_range_0`, `date_range_1`, etc.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $start_date
     *           The inclusive start date for the query in the format `YYYY-MM-DD`. Cannot
     *           be after `end_date`. The format `NdaysAgo`, `yesterday`, or `today` is also
     *           accepted, and in that case, the date is inferred based on the property's
     *           reporting time zone.
     *     @type string $end_date
     *           The inclusive end date for the query in the format `YYYY-MM-DD`. Cannot
     *           be before `start_date`. The format `NdaysAgo`, `yesterday`, or `today` is
     *           also accepted, and in that case, the date is inferred based on the
     *           property's reporting time zone.
     *     @type string $name
     *           Assigns a name to this date range. The dimension `dateRange` is valued to
     *           this name in a report response. If set, cannot begin with `date_range_` or
     *           `RESERVED_`. If not set, date ranges are named by their zero based index in
     *           the request: `date_range_0`, `date_range_1`, etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The inclusive start date for the query in the format `YYYY-MM-DD`. Cannot
     * be after `end_date`. The format `NdaysAgo`, `yesterday`, or `today` is also
     * accepted, and in that case, the date is inferred based on the property's
     * reporting time zone.
     *
     * Generated from protobuf field <code>string start_date = 1;</code>
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * The inclusive start date for the query in the format `YYYY-MM-DD`. Cannot
     * be after `end_date`. The format `NdaysAgo`, `yesterday`, or `today` is also
     * accepted, and in that case, the date is inferred based on the property's
     * reporting time zone.
     *
     * Generated from protobuf field <code>string start_date = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * The inclusive end date for the query in the format `YYYY-MM-DD`. Cannot
     * be before `start_date`. The format `NdaysAgo`, `yesterday`, or `today` is
     * also accepted, and in that case, the date is inferred based on the
     * property's reporting time zone.
     *
     * Generated from protobuf field <code>string end_date = 2;</code>
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * The inclusive end date for the query in the format `YYYY-MM-DD`. Cannot
     * be before `start_date`. The format `NdaysAgo`, `yesterday`, or `today` is
     * also accepted, and in that case, the date is inferred based on the
     * property's reporting time zone.
     *
     * Generated from protobuf field <code>string end_date = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Assigns a name to this date range. The dimension `dateRange` is valued to
     * this name in a report response. If set, cannot begin with `date_range_` or
     * `RESERVED_`. If not set, date ranges are named by their zero based index in
     * the request: `date_range_0`, `date_range_1`, etc.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Assigns a name to this date range. The dimension `dateRange` is valued to
     * this name in a report response. If set, cannot begin with `date_range_` or
     * `RESERVED_`. If not set, date ranges are named by their zero based index in
     * the request: `date_range_0`, `date_range_1`, etc.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

