<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_connect.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Connect settings retrieval response.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.ConnectSettings</code>
 */
class ConnectSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always `sql#connectSettings`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    protected $kind = '';
    /**
     * SSL configuration.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SslCert server_ca_cert = 2;</code>
     */
    protected $server_ca_cert = null;
    /**
     * The assigned IP addresses for the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.IpMapping ip_addresses = 3;</code>
     */
    private $ip_addresses;
    /**
     * The cloud region for the instance. For example, `us-central1`,
     * `europe-west1`. The region cannot be changed after instance creation.
     *
     * Generated from protobuf field <code>string region = 4;</code>
     */
    protected $region = '';
    /**
     * The database engine type and version. The `databaseVersion`
     * field cannot be changed after instance creation.
     *   MySQL instances: `MYSQL_8_0`, `MYSQL_5_7` (default),
     * or `MYSQL_5_6`.
     *   PostgreSQL instances: `POSTGRES_9_6`, `POSTGRES_10`,
     * `POSTGRES_11`, `POSTGRES_12` (default), `POSTGRES_13`, or `POSTGRES_14`.
     *   SQL Server instances: `SQLSERVER_2017_STANDARD` (default),
     * `SQLSERVER_2017_ENTERPRISE`, `SQLSERVER_2017_EXPRESS`,
     * `SQLSERVER_2017_WEB`, `SQLSERVER_2019_STANDARD`,
     * `SQLSERVER_2019_ENTERPRISE`, `SQLSERVER_2019_EXPRESS`, or
     * `SQLSERVER_2019_WEB`.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlDatabaseVersion database_version = 31;</code>
     */
    protected $database_version = 0;
    /**
     * `SECOND_GEN`: Cloud SQL database instance.
     * `EXTERNAL`: A database server that is not managed by Google.
     * This property is read-only; use the `tier` property in the `settings`
     * object to determine the database type.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackendType backend_type = 32;</code>
     */
    protected $backend_type = 0;
    /**
     * Whether PSC connectivity is enabled for this instance.
     *
     * Generated from protobuf field <code>bool psc_enabled = 33;</code>
     */
    protected $psc_enabled = false;
    /**
     * The dns name of the instance.
     *
     * Generated from protobuf field <code>string dns_name = 34;</code>
     */
    protected $dns_name = '';
    /**
     * Specify what type of CA is used for the server certificate.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ConnectSettings.CaMode server_ca_mode = 35;</code>
     */
    protected $server_ca_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always `sql#connectSettings`.
     *     @type \Google\Cloud\Sql\V1\SslCert $server_ca_cert
     *           SSL configuration.
     *     @type array<\Google\Cloud\Sql\V1\IpMapping>|\Google\Protobuf\Internal\RepeatedField $ip_addresses
     *           The assigned IP addresses for the instance.
     *     @type string $region
     *           The cloud region for the instance. For example, `us-central1`,
     *           `europe-west1`. The region cannot be changed after instance creation.
     *     @type int $database_version
     *           The database engine type and version. The `databaseVersion`
     *           field cannot be changed after instance creation.
     *             MySQL instances: `MYSQL_8_0`, `MYSQL_5_7` (default),
     *           or `MYSQL_5_6`.
     *             PostgreSQL instances: `POSTGRES_9_6`, `POSTGRES_10`,
     *           `POSTGRES_11`, `POSTGRES_12` (default), `POSTGRES_13`, or `POSTGRES_14`.
     *             SQL Server instances: `SQLSERVER_2017_STANDARD` (default),
     *           `SQLSERVER_2017_ENTERPRISE`, `SQLSERVER_2017_EXPRESS`,
     *           `SQLSERVER_2017_WEB`, `SQLSERVER_2019_STANDARD`,
     *           `SQLSERVER_2019_ENTERPRISE`, `SQLSERVER_2019_EXPRESS`, or
     *           `SQLSERVER_2019_WEB`.
     *     @type int $backend_type
     *           `SECOND_GEN`: Cloud SQL database instance.
     *           `EXTERNAL`: A database server that is not managed by Google.
     *           This property is read-only; use the `tier` property in the `settings`
     *           object to determine the database type.
     *     @type bool $psc_enabled
     *           Whether PSC connectivity is enabled for this instance.
     *     @type string $dns_name
     *           The dns name of the instance.
     *     @type int $server_ca_mode
     *           Specify what type of CA is used for the server certificate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlConnect::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always `sql#connectSettings`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#connectSettings`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * SSL configuration.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SslCert server_ca_cert = 2;</code>
     * @return \Google\Cloud\Sql\V1\SslCert|null
     */
    public function getServerCaCert()
    {
        return $this->server_ca_cert;
    }

    public function hasServerCaCert()
    {
        return isset($this->server_ca_cert);
    }

    public function clearServerCaCert()
    {
        unset($this->server_ca_cert);
    }

    /**
     * SSL configuration.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SslCert server_ca_cert = 2;</code>
     * @param \Google\Cloud\Sql\V1\SslCert $var
     * @return $this
     */
    public function setServerCaCert($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\SslCert::class);
        $this->server_ca_cert = $var;

        return $this;
    }

    /**
     * The assigned IP addresses for the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.IpMapping ip_addresses = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpAddresses()
    {
        return $this->ip_addresses;
    }

    /**
     * The assigned IP addresses for the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.IpMapping ip_addresses = 3;</code>
     * @param array<\Google\Cloud\Sql\V1\IpMapping>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpAddresses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1\IpMapping::class);
        $this->ip_addresses = $arr;

        return $this;
    }

    /**
     * The cloud region for the instance. For example, `us-central1`,
     * `europe-west1`. The region cannot be changed after instance creation.
     *
     * Generated from protobuf field <code>string region = 4;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The cloud region for the instance. For example, `us-central1`,
     * `europe-west1`. The region cannot be changed after instance creation.
     *
     * Generated from protobuf field <code>string region = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * The database engine type and version. The `databaseVersion`
     * field cannot be changed after instance creation.
     *   MySQL instances: `MYSQL_8_0`, `MYSQL_5_7` (default),
     * or `MYSQL_5_6`.
     *   PostgreSQL instances: `POSTGRES_9_6`, `POSTGRES_10`,
     * `POSTGRES_11`, `POSTGRES_12` (default), `POSTGRES_13`, or `POSTGRES_14`.
     *   SQL Server instances: `SQLSERVER_2017_STANDARD` (default),
     * `SQLSERVER_2017_ENTERPRISE`, `SQLSERVER_2017_EXPRESS`,
     * `SQLSERVER_2017_WEB`, `SQLSERVER_2019_STANDARD`,
     * `SQLSERVER_2019_ENTERPRISE`, `SQLSERVER_2019_EXPRESS`, or
     * `SQLSERVER_2019_WEB`.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlDatabaseVersion database_version = 31;</code>
     * @return int
     */
    public function getDatabaseVersion()
    {
        return $this->database_version;
    }

    /**
     * The database engine type and version. The `databaseVersion`
     * field cannot be changed after instance creation.
     *   MySQL instances: `MYSQL_8_0`, `MYSQL_5_7` (default),
     * or `MYSQL_5_6`.
     *   PostgreSQL instances: `POSTGRES_9_6`, `POSTGRES_10`,
     * `POSTGRES_11`, `POSTGRES_12` (default), `POSTGRES_13`, or `POSTGRES_14`.
     *   SQL Server instances: `SQLSERVER_2017_STANDARD` (default),
     * `SQLSERVER_2017_ENTERPRISE`, `SQLSERVER_2017_EXPRESS`,
     * `SQLSERVER_2017_WEB`, `SQLSERVER_2019_STANDARD`,
     * `SQLSERVER_2019_ENTERPRISE`, `SQLSERVER_2019_EXPRESS`, or
     * `SQLSERVER_2019_WEB`.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlDatabaseVersion database_version = 31;</code>
     * @param int $var
     * @return $this
     */
    public function setDatabaseVersion($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\SqlDatabaseVersion::class);
        $this->database_version = $var;

        return $this;
    }

    /**
     * `SECOND_GEN`: Cloud SQL database instance.
     * `EXTERNAL`: A database server that is not managed by Google.
     * This property is read-only; use the `tier` property in the `settings`
     * object to determine the database type.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackendType backend_type = 32;</code>
     * @return int
     */
    public function getBackendType()
    {
        return $this->backend_type;
    }

    /**
     * `SECOND_GEN`: Cloud SQL database instance.
     * `EXTERNAL`: A database server that is not managed by Google.
     * This property is read-only; use the `tier` property in the `settings`
     * object to determine the database type.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlBackendType backend_type = 32;</code>
     * @param int $var
     * @return $this
     */
    public function setBackendType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\SqlBackendType::class);
        $this->backend_type = $var;

        return $this;
    }

    /**
     * Whether PSC connectivity is enabled for this instance.
     *
     * Generated from protobuf field <code>bool psc_enabled = 33;</code>
     * @return bool
     */
    public function getPscEnabled()
    {
        return $this->psc_enabled;
    }

    /**
     * Whether PSC connectivity is enabled for this instance.
     *
     * Generated from protobuf field <code>bool psc_enabled = 33;</code>
     * @param bool $var
     * @return $this
     */
    public function setPscEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->psc_enabled = $var;

        return $this;
    }

    /**
     * The dns name of the instance.
     *
     * Generated from protobuf field <code>string dns_name = 34;</code>
     * @return string
     */
    public function getDnsName()
    {
        return $this->dns_name;
    }

    /**
     * The dns name of the instance.
     *
     * Generated from protobuf field <code>string dns_name = 34;</code>
     * @param string $var
     * @return $this
     */
    public function setDnsName($var)
    {
        GPBUtil::checkString($var, True);
        $this->dns_name = $var;

        return $this;
    }

    /**
     * Specify what type of CA is used for the server certificate.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ConnectSettings.CaMode server_ca_mode = 35;</code>
     * @return int
     */
    public function getServerCaMode()
    {
        return $this->server_ca_mode;
    }

    /**
     * Specify what type of CA is used for the server certificate.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ConnectSettings.CaMode server_ca_mode = 35;</code>
     * @param int $var
     * @return $this
     */
    public function setServerCaMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\ConnectSettings\CaMode::class);
        $this->server_ca_mode = $var;

        return $this;
    }

}

