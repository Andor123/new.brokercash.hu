<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A data connection to allow DLP to profile data in locations that require
 * additional configuration.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Connection</code>
 */
class Connection extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the connection:
     * `projects/{project}/locations/{location}/connections/{name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Required. The connection's state in its lifecycle.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ConnectionState state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $state = 0;
    /**
     * Output only. Set if status == ERROR, to provide additional details. Will
     * store the last 10 errors sorted with the most recent first.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $errors;
    protected $properties;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of the connection:
     *           `projects/{project}/locations/{location}/connections/{name}`.
     *     @type int $state
     *           Required. The connection's state in its lifecycle.
     *     @type array<\Google\Cloud\Dlp\V2\Error>|\Google\Protobuf\Internal\RepeatedField $errors
     *           Output only. Set if status == ERROR, to provide additional details. Will
     *           store the last 10 errors sorted with the most recent first.
     *     @type \Google\Cloud\Dlp\V2\CloudSqlProperties $cloud_sql
     *           Connect to a Cloud SQL instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the connection:
     * `projects/{project}/locations/{location}/connections/{name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the connection:
     * `projects/{project}/locations/{location}/connections/{name}`.
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
     * Required. The connection's state in its lifecycle.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ConnectionState state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Required. The connection's state in its lifecycle.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ConnectionState state = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\ConnectionState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Set if status == ERROR, to provide additional details. Will
     * store the last 10 errors sorted with the most recent first.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Output only. Set if status == ERROR, to provide additional details. Will
     * store the last 10 errors sorted with the most recent first.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Error errors = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Dlp\V2\Error>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Error::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * Connect to a Cloud SQL instance.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudSqlProperties cloud_sql = 4;</code>
     * @return \Google\Cloud\Dlp\V2\CloudSqlProperties|null
     */
    public function getCloudSql()
    {
        return $this->readOneof(4);
    }

    public function hasCloudSql()
    {
        return $this->hasOneof(4);
    }

    /**
     * Connect to a Cloud SQL instance.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.CloudSqlProperties cloud_sql = 4;</code>
     * @param \Google\Cloud\Dlp\V2\CloudSqlProperties $var
     * @return $this
     */
    public function setCloudSql($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\CloudSqlProperties::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getProperties()
    {
        return $this->whichOneof("properties");
    }

}
