<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2\KnowledgeAssistAnswer\KnowledgeAnswer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about source of FAQ answer.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.KnowledgeAssistAnswer.KnowledgeAnswer.FaqSource</code>
 */
class FaqSource extends \Google\Protobuf\Internal\Message
{
    /**
     * The corresponding FAQ question.
     *
     * Generated from protobuf field <code>string question = 2;</code>
     */
    protected $question = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $question
     *           The corresponding FAQ question.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * The corresponding FAQ question.
     *
     * Generated from protobuf field <code>string question = 2;</code>
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * The corresponding FAQ question.
     *
     * Generated from protobuf field <code>string question = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQuestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->question = $var;

        return $this;
    }

}


