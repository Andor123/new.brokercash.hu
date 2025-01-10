<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1\SourceObjectIdentifier;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mysql data source object identifier.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.SourceObjectIdentifier.MysqlObjectIdentifier</code>
 */
class MysqlObjectIdentifier extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The database name.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $database = '';
    /**
     * Required. The table name.
     *
     * Generated from protobuf field <code>string table = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $table = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Required. The database name.
     *     @type string $table
     *           Required. The table name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The database name.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required. The database name.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The table name.
     *
     * Generated from protobuf field <code>string table = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Required. The table name.
     *
     * Generated from protobuf field <code>string table = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

}


