<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Database instance import context.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.ImportContext</code>
 */
class ImportContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Path to the import file in Cloud Storage, in the form
     * **gs://bucketName/fileName**. Compressed gzip files (.gz) are supported
     * when **fileType** is **SQL**. The instance must have
     * write permissions to the bucket and read access to the file.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    private $uri = '';
    /**
     * The target database for the import. If **fileType** is **SQL**, this field
     * is required only if the import file does not specify a database, and is
     * overridden by any database specification in the import file. If
     * **fileType** is **CSV**, one database must be specified.
     *
     * Generated from protobuf field <code>string database = 2;</code>
     */
    private $database = '';
    /**
     * This is always **sql#importContext**.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     */
    private $kind = '';
    /**
     * The file type for the specified uri. <br>**SQL**: The file
     * contains SQL statements. <br>**CSV**: The file contains CSV data.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlFileType file_type = 4;</code>
     */
    private $file_type = 0;
    /**
     * Options for importing data as CSV.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext.SqlCsvImportOptions csv_import_options = 5;</code>
     */
    private $csv_import_options = null;
    /**
     * The PostgreSQL user for this import operation. PostgreSQL instances only.
     *
     * Generated from protobuf field <code>string import_user = 6;</code>
     */
    private $import_user = '';
    /**
     * Import parameters specific to SQL Server .BAK files
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext.SqlBakImportOptions bak_import_options = 7;</code>
     */
    private $bak_import_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Path to the import file in Cloud Storage, in the form
     *           **gs://bucketName/fileName**. Compressed gzip files (.gz) are supported
     *           when **fileType** is **SQL**. The instance must have
     *           write permissions to the bucket and read access to the file.
     *     @type string $database
     *           The target database for the import. If **fileType** is **SQL**, this field
     *           is required only if the import file does not specify a database, and is
     *           overridden by any database specification in the import file. If
     *           **fileType** is **CSV**, one database must be specified.
     *     @type string $kind
     *           This is always **sql#importContext**.
     *     @type int $file_type
     *           The file type for the specified uri. <br>**SQL**: The file
     *           contains SQL statements. <br>**CSV**: The file contains CSV data.
     *     @type \Google\Cloud\Sql\V1\ImportContext\SqlCsvImportOptions $csv_import_options
     *           Options for importing data as CSV.
     *     @type string $import_user
     *           The PostgreSQL user for this import operation. PostgreSQL instances only.
     *     @type \Google\Cloud\Sql\V1\ImportContext\SqlBakImportOptions $bak_import_options
     *           Import parameters specific to SQL Server .BAK files
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Path to the import file in Cloud Storage, in the form
     * **gs://bucketName/fileName**. Compressed gzip files (.gz) are supported
     * when **fileType** is **SQL**. The instance must have
     * write permissions to the bucket and read access to the file.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Path to the import file in Cloud Storage, in the form
     * **gs://bucketName/fileName**. Compressed gzip files (.gz) are supported
     * when **fileType** is **SQL**. The instance must have
     * write permissions to the bucket and read access to the file.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * The target database for the import. If **fileType** is **SQL**, this field
     * is required only if the import file does not specify a database, and is
     * overridden by any database specification in the import file. If
     * **fileType** is **CSV**, one database must be specified.
     *
     * Generated from protobuf field <code>string database = 2;</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * The target database for the import. If **fileType** is **SQL**, this field
     * is required only if the import file does not specify a database, and is
     * overridden by any database specification in the import file. If
     * **fileType** is **CSV**, one database must be specified.
     *
     * Generated from protobuf field <code>string database = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * This is always **sql#importContext**.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always **sql#importContext**.
     *
     * Generated from protobuf field <code>string kind = 3;</code>
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
     * The file type for the specified uri. <br>**SQL**: The file
     * contains SQL statements. <br>**CSV**: The file contains CSV data.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlFileType file_type = 4;</code>
     * @return int
     */
    public function getFileType()
    {
        return $this->file_type;
    }

    /**
     * The file type for the specified uri. <br>**SQL**: The file
     * contains SQL statements. <br>**CSV**: The file contains CSV data.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.SqlFileType file_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\SqlFileType::class);
        $this->file_type = $var;

        return $this;
    }

    /**
     * Options for importing data as CSV.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext.SqlCsvImportOptions csv_import_options = 5;</code>
     * @return \Google\Cloud\Sql\V1\ImportContext\SqlCsvImportOptions|null
     */
    public function getCsvImportOptions()
    {
        return $this->csv_import_options;
    }

    public function hasCsvImportOptions()
    {
        return isset($this->csv_import_options);
    }

    public function clearCsvImportOptions()
    {
        unset($this->csv_import_options);
    }

    /**
     * Options for importing data as CSV.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext.SqlCsvImportOptions csv_import_options = 5;</code>
     * @param \Google\Cloud\Sql\V1\ImportContext\SqlCsvImportOptions $var
     * @return $this
     */
    public function setCsvImportOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\ImportContext\SqlCsvImportOptions::class);
        $this->csv_import_options = $var;

        return $this;
    }

    /**
     * The PostgreSQL user for this import operation. PostgreSQL instances only.
     *
     * Generated from protobuf field <code>string import_user = 6;</code>
     * @return string
     */
    public function getImportUser()
    {
        return $this->import_user;
    }

    /**
     * The PostgreSQL user for this import operation. PostgreSQL instances only.
     *
     * Generated from protobuf field <code>string import_user = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setImportUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->import_user = $var;

        return $this;
    }

    /**
     * Import parameters specific to SQL Server .BAK files
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext.SqlBakImportOptions bak_import_options = 7;</code>
     * @return \Google\Cloud\Sql\V1\ImportContext\SqlBakImportOptions|null
     */
    public function getBakImportOptions()
    {
        return $this->bak_import_options;
    }

    public function hasBakImportOptions()
    {
        return isset($this->bak_import_options);
    }

    public function clearBakImportOptions()
    {
        unset($this->bak_import_options);
    }

    /**
     * Import parameters specific to SQL Server .BAK files
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext.SqlBakImportOptions bak_import_options = 7;</code>
     * @param \Google\Cloud\Sql\V1\ImportContext\SqlBakImportOptions $var
     * @return $this
     */
    public function setBakImportOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\ImportContext\SqlBakImportOptions::class);
        $this->bak_import_options = $var;

        return $this;
    }

}

