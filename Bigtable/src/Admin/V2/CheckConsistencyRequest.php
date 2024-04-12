<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.CheckConsistency][google.bigtable.admin.v2.BigtableTableAdmin.CheckConsistency]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CheckConsistencyRequest</code>
 */
class CheckConsistencyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the Table for which to check replication
     * consistency. Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The token created using GenerateConsistencyToken for the Table.
     *
     * Generated from protobuf field <code>string consistency_token = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $consistency_token = '';
    protected $mode;

    /**
     * @param string $name             Required. The unique name of the Table for which to check replication
     *                                 consistency. Values are of the form
     *                                 `projects/{project}/instances/{instance}/tables/{table}`. Please see
     *                                 {@see BigtableTableAdminClient::tableName()} for help formatting this field.
     * @param string $consistencyToken Required. The token created using GenerateConsistencyToken for the Table.
     *
     * @return \Google\Cloud\Bigtable\Admin\V2\CheckConsistencyRequest
     *
     * @experimental
     */
    public static function build(string $name, string $consistencyToken): self
    {
        return (new self())
            ->setName($name)
            ->setConsistencyToken($consistencyToken);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique name of the Table for which to check replication
     *           consistency. Values are of the form
     *           `projects/{project}/instances/{instance}/tables/{table}`.
     *     @type string $consistency_token
     *           Required. The token created using GenerateConsistencyToken for the Table.
     *     @type \Google\Cloud\Bigtable\Admin\V2\StandardReadRemoteWrites $standard_read_remote_writes
     *           Checks that reads using an app profile with `StandardIsolation` can
     *           see all writes committed before the token was created, even if the
     *           read and write target different clusters.
     *     @type \Google\Cloud\Bigtable\Admin\V2\DataBoostReadLocalWrites $data_boost_read_local_writes
     *           Checks that reads using an app profile with `DataBoostIsolationReadOnly`
     *           can see all writes committed before the token was created, but only if
     *           the read and write target the same cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the Table for which to check replication
     * consistency. Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique name of the Table for which to check replication
     * consistency. Values are of the form
     * `projects/{project}/instances/{instance}/tables/{table}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The token created using GenerateConsistencyToken for the Table.
     *
     * Generated from protobuf field <code>string consistency_token = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConsistencyToken()
    {
        return $this->consistency_token;
    }

    /**
     * Required. The token created using GenerateConsistencyToken for the Table.
     *
     * Generated from protobuf field <code>string consistency_token = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConsistencyToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->consistency_token = $var;

        return $this;
    }

    /**
     * Checks that reads using an app profile with `StandardIsolation` can
     * see all writes committed before the token was created, even if the
     * read and write target different clusters.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.StandardReadRemoteWrites standard_read_remote_writes = 3;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\StandardReadRemoteWrites|null
     */
    public function getStandardReadRemoteWrites()
    {
        return $this->readOneof(3);
    }

    public function hasStandardReadRemoteWrites()
    {
        return $this->hasOneof(3);
    }

    /**
     * Checks that reads using an app profile with `StandardIsolation` can
     * see all writes committed before the token was created, even if the
     * read and write target different clusters.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.StandardReadRemoteWrites standard_read_remote_writes = 3;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\StandardReadRemoteWrites $var
     * @return $this
     */
    public function setStandardReadRemoteWrites($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\StandardReadRemoteWrites::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Checks that reads using an app profile with `DataBoostIsolationReadOnly`
     * can see all writes committed before the token was created, but only if
     * the read and write target the same cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.DataBoostReadLocalWrites data_boost_read_local_writes = 4;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\DataBoostReadLocalWrites|null
     */
    public function getDataBoostReadLocalWrites()
    {
        return $this->readOneof(4);
    }

    public function hasDataBoostReadLocalWrites()
    {
        return $this->hasOneof(4);
    }

    /**
     * Checks that reads using an app profile with `DataBoostIsolationReadOnly`
     * can see all writes committed before the token was created, but only if
     * the read and write target the same cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.DataBoostReadLocalWrites data_boost_read_local_writes = 4;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\DataBoostReadLocalWrites $var
     * @return $this
     */
    public function setDataBoostReadLocalWrites($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\DataBoostReadLocalWrites::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->whichOneof("mode");
    }

}

