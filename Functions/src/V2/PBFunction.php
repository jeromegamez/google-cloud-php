<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a Cloud Function that contains user computation executed in
 * response to an event. It encapsulates function and trigger configurations.
 *
 * Generated from protobuf message <code>google.cloud.functions.v2.Function</code>
 */
class PBFunction extends \Google\Protobuf\Internal\Message
{
    /**
     * A user-defined name of the function. Function names must be unique
     * globally and match pattern `projects/&#42;&#47;locations/&#42;&#47;functions/&#42;`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * User-provided description of a function.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Describes the Build step of the function that builds a container from the
     * given source.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.BuildConfig build_config = 3;</code>
     */
    private $build_config = null;
    /**
     * Describes the Service being deployed. Currently deploys services to Cloud
     * Run (fully managed).
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig service_config = 4;</code>
     */
    private $service_config = null;
    /**
     * An Eventarc trigger managed by Google Cloud Functions that fires events in
     * response to a condition in another service.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.EventTrigger event_trigger = 5;</code>
     */
    private $event_trigger = null;
    /**
     * Output only. State of the function.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.Function.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. The last update timestamp of a Cloud Function.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Labels associated with this Cloud Function.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     */
    private $labels;
    /**
     * Output only. State Messages for this Cloud Function.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.StateMessage state_messages = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_messages;
    /**
     * Describe whether the function is 1st Gen or 2nd Gen.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.Environment environment = 10;</code>
     */
    private $environment = 0;
    /**
     * Output only. The deployed url for the function.
     *
     * Generated from protobuf field <code>string url = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $url = '';
    /**
     * [Preview] Resource name of a KMS crypto key (managed by the user) used to
     * encrypt/decrypt function resources.
     * It must match the pattern
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 25 [(.google.api.resource_reference) = {</code>
     */
    private $kms_key_name = '';
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 27 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $satisfies_pzs = false;
    /**
     * Output only. The create timestamp of a Cloud Function. This is only
     * applicable to 2nd Gen functions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           A user-defined name of the function. Function names must be unique
     *           globally and match pattern `projects/&#42;&#47;locations/&#42;&#47;functions/&#42;`
     *     @type string $description
     *           User-provided description of a function.
     *     @type \Google\Cloud\Functions\V2\BuildConfig $build_config
     *           Describes the Build step of the function that builds a container from the
     *           given source.
     *     @type \Google\Cloud\Functions\V2\ServiceConfig $service_config
     *           Describes the Service being deployed. Currently deploys services to Cloud
     *           Run (fully managed).
     *     @type \Google\Cloud\Functions\V2\EventTrigger $event_trigger
     *           An Eventarc trigger managed by Google Cloud Functions that fires events in
     *           response to a condition in another service.
     *     @type int $state
     *           Output only. State of the function.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last update timestamp of a Cloud Function.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels associated with this Cloud Function.
     *     @type array<\Google\Cloud\Functions\V2\StateMessage>|\Google\Protobuf\Internal\RepeatedField $state_messages
     *           Output only. State Messages for this Cloud Function.
     *     @type int $environment
     *           Describe whether the function is 1st Gen or 2nd Gen.
     *     @type string $url
     *           Output only. The deployed url for the function.
     *     @type string $kms_key_name
     *           [Preview] Resource name of a KMS crypto key (managed by the user) used to
     *           encrypt/decrypt function resources.
     *           It must match the pattern
     *           `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *     @type bool $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The create timestamp of a Cloud Function. This is only
     *           applicable to 2nd Gen functions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V2\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * A user-defined name of the function. Function names must be unique
     * globally and match pattern `projects/&#42;&#47;locations/&#42;&#47;functions/&#42;`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A user-defined name of the function. Function names must be unique
     * globally and match pattern `projects/&#42;&#47;locations/&#42;&#47;functions/&#42;`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * User-provided description of a function.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User-provided description of a function.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Describes the Build step of the function that builds a container from the
     * given source.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.BuildConfig build_config = 3;</code>
     * @return \Google\Cloud\Functions\V2\BuildConfig|null
     */
    public function getBuildConfig()
    {
        return $this->build_config;
    }

    public function hasBuildConfig()
    {
        return isset($this->build_config);
    }

    public function clearBuildConfig()
    {
        unset($this->build_config);
    }

    /**
     * Describes the Build step of the function that builds a container from the
     * given source.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.BuildConfig build_config = 3;</code>
     * @param \Google\Cloud\Functions\V2\BuildConfig $var
     * @return $this
     */
    public function setBuildConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V2\BuildConfig::class);
        $this->build_config = $var;

        return $this;
    }

    /**
     * Describes the Service being deployed. Currently deploys services to Cloud
     * Run (fully managed).
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig service_config = 4;</code>
     * @return \Google\Cloud\Functions\V2\ServiceConfig|null
     */
    public function getServiceConfig()
    {
        return $this->service_config;
    }

    public function hasServiceConfig()
    {
        return isset($this->service_config);
    }

    public function clearServiceConfig()
    {
        unset($this->service_config);
    }

    /**
     * Describes the Service being deployed. Currently deploys services to Cloud
     * Run (fully managed).
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig service_config = 4;</code>
     * @param \Google\Cloud\Functions\V2\ServiceConfig $var
     * @return $this
     */
    public function setServiceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V2\ServiceConfig::class);
        $this->service_config = $var;

        return $this;
    }

    /**
     * An Eventarc trigger managed by Google Cloud Functions that fires events in
     * response to a condition in another service.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.EventTrigger event_trigger = 5;</code>
     * @return \Google\Cloud\Functions\V2\EventTrigger|null
     */
    public function getEventTrigger()
    {
        return $this->event_trigger;
    }

    public function hasEventTrigger()
    {
        return isset($this->event_trigger);
    }

    public function clearEventTrigger()
    {
        unset($this->event_trigger);
    }

    /**
     * An Eventarc trigger managed by Google Cloud Functions that fires events in
     * response to a condition in another service.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.EventTrigger event_trigger = 5;</code>
     * @param \Google\Cloud\Functions\V2\EventTrigger $var
     * @return $this
     */
    public function setEventTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V2\EventTrigger::class);
        $this->event_trigger = $var;

        return $this;
    }

    /**
     * Output only. State of the function.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.Function.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. State of the function.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.Function.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Functions\V2\PBFunction\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The last update timestamp of a Cloud Function.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last update timestamp of a Cloud Function.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Labels associated with this Cloud Function.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels associated with this Cloud Function.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. State Messages for this Cloud Function.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.StateMessage state_messages = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStateMessages()
    {
        return $this->state_messages;
    }

    /**
     * Output only. State Messages for this Cloud Function.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.StateMessage state_messages = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Functions\V2\StateMessage>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStateMessages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Functions\V2\StateMessage::class);
        $this->state_messages = $arr;

        return $this;
    }

    /**
     * Describe whether the function is 1st Gen or 2nd Gen.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.Environment environment = 10;</code>
     * @return int
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Describe whether the function is 1st Gen or 2nd Gen.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.Environment environment = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Functions\V2\Environment::class);
        $this->environment = $var;

        return $this;
    }

    /**
     * Output only. The deployed url for the function.
     *
     * Generated from protobuf field <code>string url = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Output only. The deployed url for the function.
     *
     * Generated from protobuf field <code>string url = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * [Preview] Resource name of a KMS crypto key (managed by the user) used to
     * encrypt/decrypt function resources.
     * It must match the pattern
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 25 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * [Preview] Resource name of a KMS crypto key (managed by the user) used to
     * encrypt/decrypt function resources.
     * It must match the pattern
     * `projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key}`.
     *
     * Generated from protobuf field <code>string kms_key_name = 25 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 27 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return $this->satisfies_pzs;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>bool satisfies_pzs = 27 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Output only. The create timestamp of a Cloud Function. This is only
     * applicable to 2nd Gen functions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The create timestamp of a Cloud Function. This is only
     * applicable to 2nd Gen functions.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}

