<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1\ImportContext;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1.ImportContext.SqlBakImportOptions</code>
 */
class SqlBakImportOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext.SqlBakImportOptions.EncryptionOptions encryption_options = 1;</code>
     */
    protected $encryption_options = null;
    /**
     * Whether or not the backup set being restored is striped.
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue striped = 2;</code>
     */
    protected $striped = null;
    /**
     * Whether or not the backup importing will restore database
     * with NORECOVERY option
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue no_recovery = 4;</code>
     */
    protected $no_recovery = null;
    /**
     * Whether or not the backup importing request will just bring database
     * online without downloading Bak content only one of "no_recovery" and
     * "recovery_only" can be true otherwise error will return. Applies only to
     * Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue recovery_only = 5;</code>
     */
    protected $recovery_only = null;
    /**
     * Type of the bak content, FULL or DIFF
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.BakType bak_type = 6;</code>
     */
    protected $bak_type = 0;
    /**
     * Optional. The timestamp when the import should stop. This timestamp is in
     * the [RFC 3339](https://tools.ietf.org/html/rfc3339) format (for example,
     * `2023-10-01T16:19:00.094`). This field is equivalent to the STOPAT
     * keyword and applies to Cloud SQL for SQL Server only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp stop_at = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $stop_at = null;
    /**
     * Optional. The marked transaction where the import should stop. This field
     * is equivalent to the STOPATMARK keyword and applies to Cloud SQL for SQL
     * Server only.
     *
     * Generated from protobuf field <code>string stop_at_mark = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $stop_at_mark = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Sql\V1\ImportContext\SqlBakImportOptions\EncryptionOptions $encryption_options
     *     @type \Google\Protobuf\BoolValue $striped
     *           Whether or not the backup set being restored is striped.
     *           Applies only to Cloud SQL for SQL Server.
     *     @type \Google\Protobuf\BoolValue $no_recovery
     *           Whether or not the backup importing will restore database
     *           with NORECOVERY option
     *           Applies only to Cloud SQL for SQL Server.
     *     @type \Google\Protobuf\BoolValue $recovery_only
     *           Whether or not the backup importing request will just bring database
     *           online without downloading Bak content only one of "no_recovery" and
     *           "recovery_only" can be true otherwise error will return. Applies only to
     *           Cloud SQL for SQL Server.
     *     @type int $bak_type
     *           Type of the bak content, FULL or DIFF
     *     @type \Google\Protobuf\Timestamp $stop_at
     *           Optional. The timestamp when the import should stop. This timestamp is in
     *           the [RFC 3339](https://tools.ietf.org/html/rfc3339) format (for example,
     *           `2023-10-01T16:19:00.094`). This field is equivalent to the STOPAT
     *           keyword and applies to Cloud SQL for SQL Server only.
     *     @type string $stop_at_mark
     *           Optional. The marked transaction where the import should stop. This field
     *           is equivalent to the STOPATMARK keyword and applies to Cloud SQL for SQL
     *           Server only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext.SqlBakImportOptions.EncryptionOptions encryption_options = 1;</code>
     * @return \Google\Cloud\Sql\V1\ImportContext\SqlBakImportOptions\EncryptionOptions|null
     */
    public function getEncryptionOptions()
    {
        return $this->encryption_options;
    }

    public function hasEncryptionOptions()
    {
        return isset($this->encryption_options);
    }

    public function clearEncryptionOptions()
    {
        unset($this->encryption_options);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.sql.v1.ImportContext.SqlBakImportOptions.EncryptionOptions encryption_options = 1;</code>
     * @param \Google\Cloud\Sql\V1\ImportContext\SqlBakImportOptions\EncryptionOptions $var
     * @return $this
     */
    public function setEncryptionOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\ImportContext\SqlBakImportOptions\EncryptionOptions::class);
        $this->encryption_options = $var;

        return $this;
    }

    /**
     * Whether or not the backup set being restored is striped.
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue striped = 2;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getStriped()
    {
        return $this->striped;
    }

    public function hasStriped()
    {
        return isset($this->striped);
    }

    public function clearStriped()
    {
        unset($this->striped);
    }

    /**
     * Returns the unboxed value from <code>getStriped()</code>

     * Whether or not the backup set being restored is striped.
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue striped = 2;</code>
     * @return bool|null
     */
    public function getStripedUnwrapped()
    {
        return $this->readWrapperValue("striped");
    }

    /**
     * Whether or not the backup set being restored is striped.
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue striped = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setStriped($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->striped = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether or not the backup set being restored is striped.
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue striped = 2;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setStripedUnwrapped($var)
    {
        $this->writeWrapperValue("striped", $var);
        return $this;}

    /**
     * Whether or not the backup importing will restore database
     * with NORECOVERY option
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue no_recovery = 4;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getNoRecovery()
    {
        return $this->no_recovery;
    }

    public function hasNoRecovery()
    {
        return isset($this->no_recovery);
    }

    public function clearNoRecovery()
    {
        unset($this->no_recovery);
    }

    /**
     * Returns the unboxed value from <code>getNoRecovery()</code>

     * Whether or not the backup importing will restore database
     * with NORECOVERY option
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue no_recovery = 4;</code>
     * @return bool|null
     */
    public function getNoRecoveryUnwrapped()
    {
        return $this->readWrapperValue("no_recovery");
    }

    /**
     * Whether or not the backup importing will restore database
     * with NORECOVERY option
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue no_recovery = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setNoRecovery($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->no_recovery = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether or not the backup importing will restore database
     * with NORECOVERY option
     * Applies only to Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue no_recovery = 4;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setNoRecoveryUnwrapped($var)
    {
        $this->writeWrapperValue("no_recovery", $var);
        return $this;}

    /**
     * Whether or not the backup importing request will just bring database
     * online without downloading Bak content only one of "no_recovery" and
     * "recovery_only" can be true otherwise error will return. Applies only to
     * Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue recovery_only = 5;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getRecoveryOnly()
    {
        return $this->recovery_only;
    }

    public function hasRecoveryOnly()
    {
        return isset($this->recovery_only);
    }

    public function clearRecoveryOnly()
    {
        unset($this->recovery_only);
    }

    /**
     * Returns the unboxed value from <code>getRecoveryOnly()</code>

     * Whether or not the backup importing request will just bring database
     * online without downloading Bak content only one of "no_recovery" and
     * "recovery_only" can be true otherwise error will return. Applies only to
     * Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue recovery_only = 5;</code>
     * @return bool|null
     */
    public function getRecoveryOnlyUnwrapped()
    {
        return $this->readWrapperValue("recovery_only");
    }

    /**
     * Whether or not the backup importing request will just bring database
     * online without downloading Bak content only one of "no_recovery" and
     * "recovery_only" can be true otherwise error will return. Applies only to
     * Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue recovery_only = 5;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setRecoveryOnly($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->recovery_only = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether or not the backup importing request will just bring database
     * online without downloading Bak content only one of "no_recovery" and
     * "recovery_only" can be true otherwise error will return. Applies only to
     * Cloud SQL for SQL Server.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue recovery_only = 5;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setRecoveryOnlyUnwrapped($var)
    {
        $this->writeWrapperValue("recovery_only", $var);
        return $this;}

    /**
     * Type of the bak content, FULL or DIFF
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.BakType bak_type = 6;</code>
     * @return int
     */
    public function getBakType()
    {
        return $this->bak_type;
    }

    /**
     * Type of the bak content, FULL or DIFF
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.BakType bak_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setBakType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\BakType::class);
        $this->bak_type = $var;

        return $this;
    }

    /**
     * Optional. The timestamp when the import should stop. This timestamp is in
     * the [RFC 3339](https://tools.ietf.org/html/rfc3339) format (for example,
     * `2023-10-01T16:19:00.094`). This field is equivalent to the STOPAT
     * keyword and applies to Cloud SQL for SQL Server only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp stop_at = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStopAt()
    {
        return $this->stop_at;
    }

    public function hasStopAt()
    {
        return isset($this->stop_at);
    }

    public function clearStopAt()
    {
        unset($this->stop_at);
    }

    /**
     * Optional. The timestamp when the import should stop. This timestamp is in
     * the [RFC 3339](https://tools.ietf.org/html/rfc3339) format (for example,
     * `2023-10-01T16:19:00.094`). This field is equivalent to the STOPAT
     * keyword and applies to Cloud SQL for SQL Server only.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp stop_at = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStopAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->stop_at = $var;

        return $this;
    }

    /**
     * Optional. The marked transaction where the import should stop. This field
     * is equivalent to the STOPATMARK keyword and applies to Cloud SQL for SQL
     * Server only.
     *
     * Generated from protobuf field <code>string stop_at_mark = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getStopAtMark()
    {
        return $this->stop_at_mark;
    }

    /**
     * Optional. The marked transaction where the import should stop. This field
     * is equivalent to the STOPATMARK keyword and applies to Cloud SQL for SQL
     * Server only.
     *
     * Generated from protobuf field <code>string stop_at_mark = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setStopAtMark($var)
    {
        GPBUtil::checkString($var, True);
        $this->stop_at_mark = $var;

        return $this;
    }

}


