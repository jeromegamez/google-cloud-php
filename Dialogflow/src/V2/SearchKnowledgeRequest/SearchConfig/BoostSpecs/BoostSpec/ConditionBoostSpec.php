<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation.proto

namespace Google\Cloud\Dialogflow\V2\SearchKnowledgeRequest\SearchConfig\BoostSpecs\BoostSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Boost applies to documents which match a condition.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SearchKnowledgeRequest.SearchConfig.BoostSpecs.BoostSpec.ConditionBoostSpec</code>
 */
class ConditionBoostSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. An expression which specifies a boost condition. The
     * syntax and supported fields are the same as a filter expression.
     * Examples:
     * * To boost documents with document ID "doc_1" or "doc_2", and
     * color
     *   "Red" or "Blue":
     *     * (id: ANY("doc_1", "doc_2")) AND (color: ANY("Red","Blue"))
     *
     * Generated from protobuf field <code>string condition = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $condition = '';
    /**
     * Optional. Strength of the condition boost, which should be in [-1,
     * 1]. Negative boost means demotion. Default is 0.0.
     * Setting to 1.0 gives the document a big promotion. However, it does
     * not necessarily mean that the boosted document will be the top
     * result at all times, nor that other documents will be excluded.
     * Results could still be shown even when none of them matches the
     * condition. And results that are significantly more relevant to the
     * search query can still trump your heavily favored but irrelevant
     * documents.
     * Setting to -1.0 gives the document a big demotion. However, results
     * that are deeply relevant might still be shown. The document will
     * have an upstream battle to get a fairly high ranking, but it is not
     * blocked out completely.
     * Setting to 0.0 means no boost applied. The boosting condition is
     * ignored.
     *
     * Generated from protobuf field <code>float boost = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $boost = 0.0;
    /**
     * Optional. Complex specification for custom ranking based on
     * customer defined attribute value.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SearchKnowledgeRequest.SearchConfig.BoostSpecs.BoostSpec.ConditionBoostSpec.BoostControlSpec boost_control_spec = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $boost_control_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $condition
     *           Optional. An expression which specifies a boost condition. The
     *           syntax and supported fields are the same as a filter expression.
     *           Examples:
     *           * To boost documents with document ID "doc_1" or "doc_2", and
     *           color
     *             "Red" or "Blue":
     *               * (id: ANY("doc_1", "doc_2")) AND (color: ANY("Red","Blue"))
     *     @type float $boost
     *           Optional. Strength of the condition boost, which should be in [-1,
     *           1]. Negative boost means demotion. Default is 0.0.
     *           Setting to 1.0 gives the document a big promotion. However, it does
     *           not necessarily mean that the boosted document will be the top
     *           result at all times, nor that other documents will be excluded.
     *           Results could still be shown even when none of them matches the
     *           condition. And results that are significantly more relevant to the
     *           search query can still trump your heavily favored but irrelevant
     *           documents.
     *           Setting to -1.0 gives the document a big demotion. However, results
     *           that are deeply relevant might still be shown. The document will
     *           have an upstream battle to get a fairly high ranking, but it is not
     *           blocked out completely.
     *           Setting to 0.0 means no boost applied. The boosting condition is
     *           ignored.
     *     @type \Google\Cloud\Dialogflow\V2\SearchKnowledgeRequest\SearchConfig\BoostSpecs\BoostSpec\ConditionBoostSpec\BoostControlSpec $boost_control_spec
     *           Optional. Complex specification for custom ranking based on
     *           customer defined attribute value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. An expression which specifies a boost condition. The
     * syntax and supported fields are the same as a filter expression.
     * Examples:
     * * To boost documents with document ID "doc_1" or "doc_2", and
     * color
     *   "Red" or "Blue":
     *     * (id: ANY("doc_1", "doc_2")) AND (color: ANY("Red","Blue"))
     *
     * Generated from protobuf field <code>string condition = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Optional. An expression which specifies a boost condition. The
     * syntax and supported fields are the same as a filter expression.
     * Examples:
     * * To boost documents with document ID "doc_1" or "doc_2", and
     * color
     *   "Red" or "Blue":
     *     * (id: ANY("doc_1", "doc_2")) AND (color: ANY("Red","Blue"))
     *
     * Generated from protobuf field <code>string condition = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkString($var, True);
        $this->condition = $var;

        return $this;
    }

    /**
     * Optional. Strength of the condition boost, which should be in [-1,
     * 1]. Negative boost means demotion. Default is 0.0.
     * Setting to 1.0 gives the document a big promotion. However, it does
     * not necessarily mean that the boosted document will be the top
     * result at all times, nor that other documents will be excluded.
     * Results could still be shown even when none of them matches the
     * condition. And results that are significantly more relevant to the
     * search query can still trump your heavily favored but irrelevant
     * documents.
     * Setting to -1.0 gives the document a big demotion. However, results
     * that are deeply relevant might still be shown. The document will
     * have an upstream battle to get a fairly high ranking, but it is not
     * blocked out completely.
     * Setting to 0.0 means no boost applied. The boosting condition is
     * ignored.
     *
     * Generated from protobuf field <code>float boost = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**
     * Optional. Strength of the condition boost, which should be in [-1,
     * 1]. Negative boost means demotion. Default is 0.0.
     * Setting to 1.0 gives the document a big promotion. However, it does
     * not necessarily mean that the boosted document will be the top
     * result at all times, nor that other documents will be excluded.
     * Results could still be shown even when none of them matches the
     * condition. And results that are significantly more relevant to the
     * search query can still trump your heavily favored but irrelevant
     * documents.
     * Setting to -1.0 gives the document a big demotion. However, results
     * that are deeply relevant might still be shown. The document will
     * have an upstream battle to get a fairly high ranking, but it is not
     * blocked out completely.
     * Setting to 0.0 means no boost applied. The boosting condition is
     * ignored.
     *
     * Generated from protobuf field <code>float boost = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setBoost($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost = $var;

        return $this;
    }

    /**
     * Optional. Complex specification for custom ranking based on
     * customer defined attribute value.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SearchKnowledgeRequest.SearchConfig.BoostSpecs.BoostSpec.ConditionBoostSpec.BoostControlSpec boost_control_spec = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\SearchKnowledgeRequest\SearchConfig\BoostSpecs\BoostSpec\ConditionBoostSpec\BoostControlSpec|null
     */
    public function getBoostControlSpec()
    {
        return $this->boost_control_spec;
    }

    public function hasBoostControlSpec()
    {
        return isset($this->boost_control_spec);
    }

    public function clearBoostControlSpec()
    {
        unset($this->boost_control_spec);
    }

    /**
     * Optional. Complex specification for custom ranking based on
     * customer defined attribute value.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SearchKnowledgeRequest.SearchConfig.BoostSpecs.BoostSpec.ConditionBoostSpec.BoostControlSpec boost_control_spec = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\SearchKnowledgeRequest\SearchConfig\BoostSpecs\BoostSpec\ConditionBoostSpec\BoostControlSpec $var
     * @return $this
     */
    public function setBoostControlSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\SearchKnowledgeRequest\SearchConfig\BoostSpecs\BoostSpec\ConditionBoostSpec\BoostControlSpec::class);
        $this->boost_control_spec = $var;

        return $this;
    }

}


