<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/resources.proto

namespace Google\Cloud\SecretManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A secret version resource in the Secret Manager API.
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.SecretVersion</code>
 */
class SecretVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] IDs in a
     * [Secret][google.cloud.secretmanager.v1.Secret] start at 1 and are
     * incremented for each subsequent version of the secret.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The time at which the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time this
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] was destroyed.
     * Only present if [state][google.cloud.secretmanager.v1.SecretVersion.state]
     * is
     * [DESTROYED][google.cloud.secretmanager.v1.SecretVersion.State.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $destroy_time = null;
    /**
     * Output only. The current state of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.SecretVersion.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * The replication status of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.ReplicationStatus replication_status = 5;</code>
     */
    protected $replication_status = null;
    /**
     * Output only. Etag of the currently stored
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>string etag = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $etag = '';
    /**
     * Output only. True if payload checksum specified in
     * [SecretPayload][google.cloud.secretmanager.v1.SecretPayload] object has
     * been received by
     * [SecretManagerService][google.cloud.secretmanager.v1.SecretManagerService]
     * on
     * [SecretManagerService.AddSecretVersion][google.cloud.secretmanager.v1.SecretManagerService.AddSecretVersion].
     *
     * Generated from protobuf field <code>bool client_specified_payload_checksum = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $client_specified_payload_checksum = false;
    /**
     * Optional. Output only. Scheduled destroy time for secret version.
     * This is a part of the Delayed secret version destroy feature. For a
     * Secret with a valid version destroy TTL, when a secert version is
     * destroyed, the version is moved to disabled state and it is scheduled for
     * destruction. The version is destroyed only after the
     * `scheduled_destroy_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_destroy_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $scheduled_destroy_time = null;
    /**
     * Output only. The customer-managed encryption status of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion]. Only
     * populated if customer-managed encryption is used and
     * [Secret][google.cloud.secretmanager.v1.Secret] is a Regionalised Secret.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.CustomerManagedEncryptionStatus customer_managed_encryption = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $customer_managed_encryption = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the
     *           [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format
     *           `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *           [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] IDs in a
     *           [Secret][google.cloud.secretmanager.v1.Secret] start at 1 and are
     *           incremented for each subsequent version of the secret.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the
     *           [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] was created.
     *     @type \Google\Protobuf\Timestamp $destroy_time
     *           Output only. The time this
     *           [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] was destroyed.
     *           Only present if [state][google.cloud.secretmanager.v1.SecretVersion.state]
     *           is
     *           [DESTROYED][google.cloud.secretmanager.v1.SecretVersion.State.DESTROYED].
     *     @type int $state
     *           Output only. The current state of the
     *           [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *     @type \Google\Cloud\SecretManager\V1\ReplicationStatus $replication_status
     *           The replication status of the
     *           [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *     @type string $etag
     *           Output only. Etag of the currently stored
     *           [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *     @type bool $client_specified_payload_checksum
     *           Output only. True if payload checksum specified in
     *           [SecretPayload][google.cloud.secretmanager.v1.SecretPayload] object has
     *           been received by
     *           [SecretManagerService][google.cloud.secretmanager.v1.SecretManagerService]
     *           on
     *           [SecretManagerService.AddSecretVersion][google.cloud.secretmanager.v1.SecretManagerService.AddSecretVersion].
     *     @type \Google\Protobuf\Timestamp $scheduled_destroy_time
     *           Optional. Output only. Scheduled destroy time for secret version.
     *           This is a part of the Delayed secret version destroy feature. For a
     *           Secret with a valid version destroy TTL, when a secert version is
     *           destroyed, the version is moved to disabled state and it is scheduled for
     *           destruction. The version is destroyed only after the
     *           `scheduled_destroy_time`.
     *     @type \Google\Cloud\SecretManager\V1\CustomerManagedEncryptionStatus $customer_managed_encryption
     *           Output only. The customer-managed encryption status of the
     *           [SecretVersion][google.cloud.secretmanager.v1.SecretVersion]. Only
     *           populated if customer-managed encryption is used and
     *           [Secret][google.cloud.secretmanager.v1.Secret] is a Regionalised Secret.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] IDs in a
     * [Secret][google.cloud.secretmanager.v1.Secret] start at 1 and are
     * incremented for each subsequent version of the secret.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] IDs in a
     * [Secret][google.cloud.secretmanager.v1.Secret] start at 1 and are
     * incremented for each subsequent version of the secret.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time this
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] was destroyed.
     * Only present if [state][google.cloud.secretmanager.v1.SecretVersion.state]
     * is
     * [DESTROYED][google.cloud.secretmanager.v1.SecretVersion.State.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDestroyTime()
    {
        return $this->destroy_time;
    }

    public function hasDestroyTime()
    {
        return isset($this->destroy_time);
    }

    public function clearDestroyTime()
    {
        unset($this->destroy_time);
    }

    /**
     * Output only. The time this
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] was destroyed.
     * Only present if [state][google.cloud.secretmanager.v1.SecretVersion.state]
     * is
     * [DESTROYED][google.cloud.secretmanager.v1.SecretVersion.State.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDestroyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->destroy_time = $var;

        return $this;
    }

    /**
     * Output only. The current state of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.SecretVersion.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.SecretVersion.State state = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecretManager\V1\SecretVersion\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The replication status of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.ReplicationStatus replication_status = 5;</code>
     * @return \Google\Cloud\SecretManager\V1\ReplicationStatus|null
     */
    public function getReplicationStatus()
    {
        return $this->replication_status;
    }

    public function hasReplicationStatus()
    {
        return isset($this->replication_status);
    }

    public function clearReplicationStatus()
    {
        unset($this->replication_status);
    }

    /**
     * The replication status of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.ReplicationStatus replication_status = 5;</code>
     * @param \Google\Cloud\SecretManager\V1\ReplicationStatus $var
     * @return $this
     */
    public function setReplicationStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1\ReplicationStatus::class);
        $this->replication_status = $var;

        return $this;
    }

    /**
     * Output only. Etag of the currently stored
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>string etag = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. Etag of the currently stored
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>string etag = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. True if payload checksum specified in
     * [SecretPayload][google.cloud.secretmanager.v1.SecretPayload] object has
     * been received by
     * [SecretManagerService][google.cloud.secretmanager.v1.SecretManagerService]
     * on
     * [SecretManagerService.AddSecretVersion][google.cloud.secretmanager.v1.SecretManagerService.AddSecretVersion].
     *
     * Generated from protobuf field <code>bool client_specified_payload_checksum = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getClientSpecifiedPayloadChecksum()
    {
        return $this->client_specified_payload_checksum;
    }

    /**
     * Output only. True if payload checksum specified in
     * [SecretPayload][google.cloud.secretmanager.v1.SecretPayload] object has
     * been received by
     * [SecretManagerService][google.cloud.secretmanager.v1.SecretManagerService]
     * on
     * [SecretManagerService.AddSecretVersion][google.cloud.secretmanager.v1.SecretManagerService.AddSecretVersion].
     *
     * Generated from protobuf field <code>bool client_specified_payload_checksum = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setClientSpecifiedPayloadChecksum($var)
    {
        GPBUtil::checkBool($var);
        $this->client_specified_payload_checksum = $var;

        return $this;
    }

    /**
     * Optional. Output only. Scheduled destroy time for secret version.
     * This is a part of the Delayed secret version destroy feature. For a
     * Secret with a valid version destroy TTL, when a secert version is
     * destroyed, the version is moved to disabled state and it is scheduled for
     * destruction. The version is destroyed only after the
     * `scheduled_destroy_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_destroy_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getScheduledDestroyTime()
    {
        return $this->scheduled_destroy_time;
    }

    public function hasScheduledDestroyTime()
    {
        return isset($this->scheduled_destroy_time);
    }

    public function clearScheduledDestroyTime()
    {
        unset($this->scheduled_destroy_time);
    }

    /**
     * Optional. Output only. Scheduled destroy time for secret version.
     * This is a part of the Delayed secret version destroy feature. For a
     * Secret with a valid version destroy TTL, when a secert version is
     * destroyed, the version is moved to disabled state and it is scheduled for
     * destruction. The version is destroyed only after the
     * `scheduled_destroy_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp scheduled_destroy_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setScheduledDestroyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->scheduled_destroy_time = $var;

        return $this;
    }

    /**
     * Output only. The customer-managed encryption status of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion]. Only
     * populated if customer-managed encryption is used and
     * [Secret][google.cloud.secretmanager.v1.Secret] is a Regionalised Secret.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.CustomerManagedEncryptionStatus customer_managed_encryption = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\SecretManager\V1\CustomerManagedEncryptionStatus|null
     */
    public function getCustomerManagedEncryption()
    {
        return $this->customer_managed_encryption;
    }

    public function hasCustomerManagedEncryption()
    {
        return isset($this->customer_managed_encryption);
    }

    public function clearCustomerManagedEncryption()
    {
        unset($this->customer_managed_encryption);
    }

    /**
     * Output only. The customer-managed encryption status of the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion]. Only
     * populated if customer-managed encryption is used and
     * [Secret][google.cloud.secretmanager.v1.Secret] is a Regionalised Secret.
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.CustomerManagedEncryptionStatus customer_managed_encryption = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\SecretManager\V1\CustomerManagedEncryptionStatus $var
     * @return $this
     */
    public function setCustomerManagedEncryption($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1\CustomerManagedEncryptionStatus::class);
        $this->customer_managed_encryption = $var;

        return $this;
    }

}

