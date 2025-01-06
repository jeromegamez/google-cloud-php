<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An expression to filter dimension or metric values.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.SegmentFilter</code>
 */
class SegmentFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The dimension name or metric name.
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     */
    protected $field_name = '';
    /**
     * Specifies the scope for the filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SegmentFilterScoping filter_scoping = 8;</code>
     */
    protected $filter_scoping = null;
    protected $one_filter;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_name
     *           The dimension name or metric name.
     *     @type \Google\Analytics\Data\V1alpha\StringFilter $string_filter
     *           Strings related filter.
     *     @type \Google\Analytics\Data\V1alpha\InListFilter $in_list_filter
     *           A filter for in list values.
     *     @type \Google\Analytics\Data\V1alpha\NumericFilter $numeric_filter
     *           A filter for numeric or date values.
     *     @type \Google\Analytics\Data\V1alpha\BetweenFilter $between_filter
     *           A filter for between two values.
     *     @type \Google\Analytics\Data\V1alpha\SegmentFilterScoping $filter_scoping
     *           Specifies the scope for the filter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The dimension name or metric name.
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * The dimension name or metric name.
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;

        return $this;
    }

    /**
     * Strings related filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.StringFilter string_filter = 4;</code>
     * @return \Google\Analytics\Data\V1alpha\StringFilter|null
     */
    public function getStringFilter()
    {
        return $this->readOneof(4);
    }

    public function hasStringFilter()
    {
        return $this->hasOneof(4);
    }

    /**
     * Strings related filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.StringFilter string_filter = 4;</code>
     * @param \Google\Analytics\Data\V1alpha\StringFilter $var
     * @return $this
     */
    public function setStringFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\StringFilter::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A filter for in list values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.InListFilter in_list_filter = 5;</code>
     * @return \Google\Analytics\Data\V1alpha\InListFilter|null
     */
    public function getInListFilter()
    {
        return $this->readOneof(5);
    }

    public function hasInListFilter()
    {
        return $this->hasOneof(5);
    }

    /**
     * A filter for in list values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.InListFilter in_list_filter = 5;</code>
     * @param \Google\Analytics\Data\V1alpha\InListFilter $var
     * @return $this
     */
    public function setInListFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\InListFilter::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * A filter for numeric or date values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.NumericFilter numeric_filter = 6;</code>
     * @return \Google\Analytics\Data\V1alpha\NumericFilter|null
     */
    public function getNumericFilter()
    {
        return $this->readOneof(6);
    }

    public function hasNumericFilter()
    {
        return $this->hasOneof(6);
    }

    /**
     * A filter for numeric or date values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.NumericFilter numeric_filter = 6;</code>
     * @param \Google\Analytics\Data\V1alpha\NumericFilter $var
     * @return $this
     */
    public function setNumericFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\NumericFilter::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A filter for between two values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.BetweenFilter between_filter = 7;</code>
     * @return \Google\Analytics\Data\V1alpha\BetweenFilter|null
     */
    public function getBetweenFilter()
    {
        return $this->readOneof(7);
    }

    public function hasBetweenFilter()
    {
        return $this->hasOneof(7);
    }

    /**
     * A filter for between two values.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.BetweenFilter between_filter = 7;</code>
     * @param \Google\Analytics\Data\V1alpha\BetweenFilter $var
     * @return $this
     */
    public function setBetweenFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\BetweenFilter::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Specifies the scope for the filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SegmentFilterScoping filter_scoping = 8;</code>
     * @return \Google\Analytics\Data\V1alpha\SegmentFilterScoping|null
     */
    public function getFilterScoping()
    {
        return $this->filter_scoping;
    }

    public function hasFilterScoping()
    {
        return isset($this->filter_scoping);
    }

    public function clearFilterScoping()
    {
        unset($this->filter_scoping);
    }

    /**
     * Specifies the scope for the filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SegmentFilterScoping filter_scoping = 8;</code>
     * @param \Google\Analytics\Data\V1alpha\SegmentFilterScoping $var
     * @return $this
     */
    public function setFilterScoping($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\SegmentFilterScoping::class);
        $this->filter_scoping = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOneFilter()
    {
        return $this->whichOneof("one_filter");
    }

}

