<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The type and version of a source or destination database.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.DatabaseEngineInfo</code>
 */
class DatabaseEngineInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Engine type.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEngine engine = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $engine = 0;
    /**
     * Required. Engine named version, for example 12.c.1.
     *
     * Generated from protobuf field <code>string version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $engine
     *           Required. Engine type.
     *     @type string $version
     *           Required. Engine named version, for example 12.c.1.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Engine type.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEngine engine = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * Required. Engine type.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.DatabaseEngine engine = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setEngine($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\CloudDms\V1\DatabaseEngine::class);
        $this->engine = $var;

        return $this;
    }

    /**
     * Required. Engine named version, for example 12.c.1.
     *
     * Generated from protobuf field <code>string version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Required. Engine named version, for example 12.c.1.
     *
     * Generated from protobuf field <code>string version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

