<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admanager/v1/report_service.proto

namespace Google\Ads\AdManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The schedule for the report
 *
 * Generated from protobuf message <code>google.ads.admanager.v1.Schedule</code>
 */
class Schedule extends \Google\Protobuf\Internal\Message
{
    /**
     * Date for the first run of the report.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     */
    protected $start_date = null;
    /**
     * Date for the final run of the report.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     */
    protected $end_date = null;
    /**
     * Frequency to run report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Schedule.Frequency frequency = 3;</code>
     */
    protected $frequency = 0;
    /**
     * Indicates start time for schedule to run
     * Will use the time_zone from `ReportDefinition`. Defaults
     * to the publisher's time zone if not specified.
     * For HOURLY, TWO_TIMES_DAILY, THREE_TIMES_DAILY, or FOUR_TIMES_DAILY, this
     * will be the time of day that the first report will run on the first day.
     * For example, if the start time is 2:00 PM, and the frequency is
     * THREE_TIMES_DAILY, the first day will have reports scheduled at 2:00 PM,
     * 10:00 PM. Each subsequent day will have reports scheduled at 6:00 AM,
     * 2:00 PM, 10:00 PM.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time = 4;</code>
     */
    protected $start_time = null;
    protected $frequency_schedule;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\AdManager\V1\Schedule\WeeklySchedule $weekly_schedule
     *           Days of week to schedule report run.
     *     @type \Google\Ads\AdManager\V1\Schedule\MonthlySchedule $monthly_schedule
     *           Days of month to schedule report run.
     *     @type \Google\Type\Date $start_date
     *           Date for the first run of the report.
     *     @type \Google\Type\Date $end_date
     *           Date for the final run of the report.
     *     @type int $frequency
     *           Frequency to run report.
     *     @type \Google\Type\TimeOfDay $start_time
     *           Indicates start time for schedule to run
     *           Will use the time_zone from `ReportDefinition`. Defaults
     *           to the publisher's time zone if not specified.
     *           For HOURLY, TWO_TIMES_DAILY, THREE_TIMES_DAILY, or FOUR_TIMES_DAILY, this
     *           will be the time of day that the first report will run on the first day.
     *           For example, if the start time is 2:00 PM, and the frequency is
     *           THREE_TIMES_DAILY, the first day will have reports scheduled at 2:00 PM,
     *           10:00 PM. Each subsequent day will have reports scheduled at 6:00 AM,
     *           2:00 PM, 10:00 PM.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admanager\V1\ReportService::initOnce();
        parent::__construct($data);
    }

    /**
     * Days of week to schedule report run.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Schedule.WeeklySchedule weekly_schedule = 6;</code>
     * @return \Google\Ads\AdManager\V1\Schedule\WeeklySchedule|null
     */
    public function getWeeklySchedule()
    {
        return $this->readOneof(6);
    }

    public function hasWeeklySchedule()
    {
        return $this->hasOneof(6);
    }

    /**
     * Days of week to schedule report run.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Schedule.WeeklySchedule weekly_schedule = 6;</code>
     * @param \Google\Ads\AdManager\V1\Schedule\WeeklySchedule $var
     * @return $this
     */
    public function setWeeklySchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\Schedule\WeeklySchedule::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Days of month to schedule report run.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Schedule.MonthlySchedule monthly_schedule = 7;</code>
     * @return \Google\Ads\AdManager\V1\Schedule\MonthlySchedule|null
     */
    public function getMonthlySchedule()
    {
        return $this->readOneof(7);
    }

    public function hasMonthlySchedule()
    {
        return $this->hasOneof(7);
    }

    /**
     * Days of month to schedule report run.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Schedule.MonthlySchedule monthly_schedule = 7;</code>
     * @param \Google\Ads\AdManager\V1\Schedule\MonthlySchedule $var
     * @return $this
     */
    public function setMonthlySchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\AdManager\V1\Schedule\MonthlySchedule::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Date for the first run of the report.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     * @return \Google\Type\Date|null
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    public function hasStartDate()
    {
        return isset($this->start_date);
    }

    public function clearStartDate()
    {
        unset($this->start_date);
    }

    /**
     * Date for the first run of the report.
     *
     * Generated from protobuf field <code>.google.type.Date start_date = 1;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Date for the final run of the report.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     * @return \Google\Type\Date|null
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    public function hasEndDate()
    {
        return isset($this->end_date);
    }

    public function clearEndDate()
    {
        unset($this->end_date);
    }

    /**
     * Date for the final run of the report.
     *
     * Generated from protobuf field <code>.google.type.Date end_date = 2;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Frequency to run report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Schedule.Frequency frequency = 3;</code>
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Frequency to run report.
     *
     * Generated from protobuf field <code>.google.ads.admanager.v1.Schedule.Frequency frequency = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFrequency($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\AdManager\V1\Schedule\Frequency::class);
        $this->frequency = $var;

        return $this;
    }

    /**
     * Indicates start time for schedule to run
     * Will use the time_zone from `ReportDefinition`. Defaults
     * to the publisher's time zone if not specified.
     * For HOURLY, TWO_TIMES_DAILY, THREE_TIMES_DAILY, or FOUR_TIMES_DAILY, this
     * will be the time of day that the first report will run on the first day.
     * For example, if the start time is 2:00 PM, and the frequency is
     * THREE_TIMES_DAILY, the first day will have reports scheduled at 2:00 PM,
     * 10:00 PM. Each subsequent day will have reports scheduled at 6:00 AM,
     * 2:00 PM, 10:00 PM.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time = 4;</code>
     * @return \Google\Type\TimeOfDay|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Indicates start time for schedule to run
     * Will use the time_zone from `ReportDefinition`. Defaults
     * to the publisher's time zone if not specified.
     * For HOURLY, TWO_TIMES_DAILY, THREE_TIMES_DAILY, or FOUR_TIMES_DAILY, this
     * will be the time of day that the first report will run on the first day.
     * For example, if the start time is 2:00 PM, and the frequency is
     * THREE_TIMES_DAILY, the first day will have reports scheduled at 2:00 PM,
     * 10:00 PM. Each subsequent day will have reports scheduled at 6:00 AM,
     * 2:00 PM, 10:00 PM.
     *
     * Generated from protobuf field <code>.google.type.TimeOfDay start_time = 4;</code>
     * @param \Google\Type\TimeOfDay $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\TimeOfDay::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrequencySchedule()
    {
        return $this->whichOneof("frequency_schedule");
    }

}

