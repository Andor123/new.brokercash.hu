<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/migration/v2/translation_details.proto

namespace Google\Cloud\BigQuery\Migration\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents one mapping from a source SQL to a target SQL.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.migration.v2.SourceTargetMapping</code>
 */
class SourceTargetMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * The source SQL or the path to it.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.SourceSpec source_spec = 1;</code>
     */
    protected $source_spec = null;
    /**
     * The target SQL or the path for it.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TargetSpec target_spec = 2;</code>
     */
    protected $target_spec = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\Migration\V2\SourceSpec $source_spec
     *           The source SQL or the path to it.
     *     @type \Google\Cloud\BigQuery\Migration\V2\TargetSpec $target_spec
     *           The target SQL or the path for it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Migration\V2\TranslationDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * The source SQL or the path to it.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.SourceSpec source_spec = 1;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\SourceSpec|null
     */
    public function getSourceSpec()
    {
        return $this->source_spec;
    }

    public function hasSourceSpec()
    {
        return isset($this->source_spec);
    }

    public function clearSourceSpec()
    {
        unset($this->source_spec);
    }

    /**
     * The source SQL or the path to it.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.SourceSpec source_spec = 1;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\SourceSpec $var
     * @return $this
     */
    public function setSourceSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\SourceSpec::class);
        $this->source_spec = $var;

        return $this;
    }

    /**
     * The target SQL or the path for it.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TargetSpec target_spec = 2;</code>
     * @return \Google\Cloud\BigQuery\Migration\V2\TargetSpec|null
     */
    public function getTargetSpec()
    {
        return $this->target_spec;
    }

    public function hasTargetSpec()
    {
        return isset($this->target_spec);
    }

    public function clearTargetSpec()
    {
        unset($this->target_spec);
    }

    /**
     * The target SQL or the path for it.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.migration.v2.TargetSpec target_spec = 2;</code>
     * @param \Google\Cloud\BigQuery\Migration\V2\TargetSpec $var
     * @return $this
     */
    public function setTargetSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Migration\V2\TargetSpec::class);
        $this->target_spec = $var;

        return $this;
    }

}
