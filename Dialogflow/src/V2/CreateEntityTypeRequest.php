<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [EntityTypes.CreateEntityType][google.cloud.dialogflow.v2.EntityTypes.CreateEntityType].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.CreateEntityTypeRequest</code>
 */
class CreateEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to create a entity type for.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The entity type to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType entity_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $entity_type = null;
    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';

    /**
     * @param string                                 $parent     Required. The agent to create a entity type for.
     *                                                           Format: `projects/<Project ID>/agent`. Please see
     *                                                           {@see EntityTypesClient::agentName()} for help formatting this field.
     * @param \Google\Cloud\Dialogflow\V2\EntityType $entityType Required. The entity type to create.
     *
     * @return \Google\Cloud\Dialogflow\V2\CreateEntityTypeRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dialogflow\V2\EntityType $entityType): self
    {
        return (new self())
            ->setParent($parent)
            ->setEntityType($entityType);
    }

    /**
     * @param string                                 $parent       Required. The agent to create a entity type for.
     *                                                             Format: `projects/<Project ID>/agent`. Please see
     *                                                             {@see EntityTypesClient::agentName()} for help formatting this field.
     * @param \Google\Cloud\Dialogflow\V2\EntityType $entityType   Required. The entity type to create.
     * @param string                                 $languageCode Optional. The language used to access language-specific data.
     *                                                             If not specified, the agent's default language is used.
     *                                                             For more information, see
     *                                                             [Multilingual intent and entity
     *                                                             data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * @return \Google\Cloud\Dialogflow\V2\CreateEntityTypeRequest
     *
     * @experimental
     */
    public static function buildFromParentEntityTypeLanguageCode(string $parent, \Google\Cloud\Dialogflow\V2\EntityType $entityType, string $languageCode): self
    {
        return (new self())
            ->setParent($parent)
            ->setEntityType($entityType)
            ->setLanguageCode($languageCode);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent to create a entity type for.
     *           Format: `projects/<Project ID>/agent`.
     *     @type \Google\Cloud\Dialogflow\V2\EntityType $entity_type
     *           Required. The entity type to create.
     *     @type string $language_code
     *           Optional. The language used to access language-specific data.
     *           If not specified, the agent's default language is used.
     *           For more information, see
     *           [Multilingual intent and entity
     *           data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to create a entity type for.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The agent to create a entity type for.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The entity type to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType entity_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\EntityType|null
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    public function hasEntityType()
    {
        return isset($this->entity_type);
    }

    public function clearEntityType()
    {
        unset($this->entity_type);
    }

    /**
     * Required. The entity type to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EntityType entity_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\EntityType $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\EntityType::class);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language used to access language-specific data.
     * If not specified, the agent's default language is used.
     * For more information, see
     * [Multilingual intent and entity
     * data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
     *
     * Generated from protobuf field <code>string language_code = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

