<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/translation_suggestion.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details about a record.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.TranslationReportRecord</code>
 */
class TranslationReportRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Severity of the translation record.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TranslationReportRecord.Severity severity = 1;</code>
     */
    protected $severity = 0;
    /**
     * Specifies the row from the source text where the error occurred (0 based).
     * Example: 2
     *
     * Generated from protobuf field <code>int32 script_line = 2;</code>
     */
    protected $script_line = 0;
    /**
     * Specifies the column from the source texts where the error occurred. (0
     * based) example: 6
     *
     * Generated from protobuf field <code>int32 script_column = 3;</code>
     */
    protected $script_column = 0;
    /**
     * Category of the error/warning. Example: SyntaxError
     *
     * Generated from protobuf field <code>string category = 4;</code>
     */
    protected $category = '';
    /**
     * Detailed message of the record.
     *
     * Generated from protobuf field <code>string message = 5;</code>
     */
    protected $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $severity
     *           Severity of the translation record.
     *     @type int $script_line
     *           Specifies the row from the source text where the error occurred (0 based).
     *           Example: 2
     *     @type int $script_column
     *           Specifies the column from the source texts where the error occurred. (0
     *           based) example: 6
     *     @type string $category
     *           Category of the error/warning. Example: SyntaxError
     *     @type string $message
     *           Detailed message of the record.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\TranslationSuggestion::initOnce();
        parent::__construct($data);
    }

    /**
     * Severity of the translation record.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TranslationReportRecord.Severity severity = 1;</code>
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Severity of the translation record.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TranslationReportRecord.Severity severity = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BigQuery\Migration\V2\TranslationReportRecord\Severity::class);
        $this->severity = $var;

        return $this;
    }

    /**
     * Specifies the row from the source text where the error occurred (0 based).
     * Example: 2
     *
     * Generated from protobuf field <code>int32 script_line = 2;</code>
     * @return int
     */
    public function getScriptLine()
    {
        return $this->script_line;
    }

    /**
     * Specifies the row from the source text where the error occurred (0 based).
     * Example: 2
     *
     * Generated from protobuf field <code>int32 script_line = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setScriptLine($var)
    {
        GPBUtil::checkInt32($var);
        $this->script_line = $var;

        return $this;
    }

    /**
     * Specifies the column from the source texts where the error occurred. (0
     * based) example: 6
     *
     * Generated from protobuf field <code>int32 script_column = 3;</code>
     * @return int
     */
    public function getScriptColumn()
    {
        return $this->script_column;
    }

    /**
     * Specifies the column from the source texts where the error occurred. (0
     * based) example: 6
     *
     * Generated from protobuf field <code>int32 script_column = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setScriptColumn($var)
    {
        GPBUtil::checkInt32($var);
        $this->script_column = $var;

        return $this;
    }

    /**
     * Category of the error/warning. Example: SyntaxError
     *
     * Generated from protobuf field <code>string category = 4;</code>
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Category of the error/warning. Example: SyntaxError
     *
     * Generated from protobuf field <code>string category = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->category = $var;

        return $this;
    }

    /**
     * Detailed message of the record.
     *
     * Generated from protobuf field <code>string message = 5;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Detailed message of the record.
     *
     * Generated from protobuf field <code>string message = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

