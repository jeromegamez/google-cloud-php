<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/answer_record.proto

namespace Google\Cloud\Dialogflow\V2\AgentAssistantFeedback;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Feedback for knowledge search.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.AgentAssistantFeedback.KnowledgeSearchFeedback</code>
 */
class KnowledgeSearchFeedback extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the answer was copied by the human agent or not.
     * If the value is set to be true,
     * [AnswerFeedback.clicked][google.cloud.dialogflow.v2.AnswerFeedback.clicked]
     * will be updated to be true.
     *
     * Generated from protobuf field <code>bool answer_copied = 1;</code>
     */
    protected $answer_copied = false;
    /**
     * The URIs clicked by the human agent. The value is appended for each
     * [UpdateAnswerRecordRequest][google.cloud.dialogflow.v2.UpdateAnswerRecordRequest].
     * If the value is not empty,
     * [AnswerFeedback.clicked][google.cloud.dialogflow.v2.AnswerFeedback.clicked]
     * will be updated to be true.
     *
     * Generated from protobuf field <code>repeated string clicked_uris = 2;</code>
     */
    private $clicked_uris;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $answer_copied
     *           Whether the answer was copied by the human agent or not.
     *           If the value is set to be true,
     *           [AnswerFeedback.clicked][google.cloud.dialogflow.v2.AnswerFeedback.clicked]
     *           will be updated to be true.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $clicked_uris
     *           The URIs clicked by the human agent. The value is appended for each
     *           [UpdateAnswerRecordRequest][google.cloud.dialogflow.v2.UpdateAnswerRecordRequest].
     *           If the value is not empty,
     *           [AnswerFeedback.clicked][google.cloud.dialogflow.v2.AnswerFeedback.clicked]
     *           will be updated to be true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AnswerRecord::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the answer was copied by the human agent or not.
     * If the value is set to be true,
     * [AnswerFeedback.clicked][google.cloud.dialogflow.v2.AnswerFeedback.clicked]
     * will be updated to be true.
     *
     * Generated from protobuf field <code>bool answer_copied = 1;</code>
     * @return bool
     */
    public function getAnswerCopied()
    {
        return $this->answer_copied;
    }

    /**
     * Whether the answer was copied by the human agent or not.
     * If the value is set to be true,
     * [AnswerFeedback.clicked][google.cloud.dialogflow.v2.AnswerFeedback.clicked]
     * will be updated to be true.
     *
     * Generated from protobuf field <code>bool answer_copied = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAnswerCopied($var)
    {
        GPBUtil::checkBool($var);
        $this->answer_copied = $var;

        return $this;
    }

    /**
     * The URIs clicked by the human agent. The value is appended for each
     * [UpdateAnswerRecordRequest][google.cloud.dialogflow.v2.UpdateAnswerRecordRequest].
     * If the value is not empty,
     * [AnswerFeedback.clicked][google.cloud.dialogflow.v2.AnswerFeedback.clicked]
     * will be updated to be true.
     *
     * Generated from protobuf field <code>repeated string clicked_uris = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClickedUris()
    {
        return $this->clicked_uris;
    }

    /**
     * The URIs clicked by the human agent. The value is appended for each
     * [UpdateAnswerRecordRequest][google.cloud.dialogflow.v2.UpdateAnswerRecordRequest].
     * If the value is not empty,
     * [AnswerFeedback.clicked][google.cloud.dialogflow.v2.AnswerFeedback.clicked]
     * will be updated to be true.
     *
     * Generated from protobuf field <code>repeated string clicked_uris = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClickedUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->clicked_uris = $arr;

        return $this;
    }

}


