<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ACM created error representing a problem syncing configurations
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.SyncError</code>
 */
class SyncError extends \Google\Protobuf\Internal\Message
{
    /**
     * An ACM defined error code
     *
     * Generated from protobuf field <code>string code = 1;</code>
     */
    protected $code = '';
    /**
     * A description of the error
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     */
    protected $error_message = '';
    /**
     * A list of config(s) associated with the error, if any
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.configmanagement.v1.ErrorResource error_resources = 3;</code>
     */
    private $error_resources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *           An ACM defined error code
     *     @type string $error_message
     *           A description of the error
     *     @type array<\Google\Cloud\GkeHub\ConfigManagement\V1\ErrorResource>|\Google\Protobuf\Internal\RepeatedField $error_resources
     *           A list of config(s) associated with the error, if any
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * An ACM defined error code
     *
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * An ACM defined error code
     *
     * Generated from protobuf field <code>string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * A description of the error
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * A description of the error
     *
     * Generated from protobuf field <code>string error_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

    /**
     * A list of config(s) associated with the error, if any
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.configmanagement.v1.ErrorResource error_resources = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrorResources()
    {
        return $this->error_resources;
    }

    /**
     * A list of config(s) associated with the error, if any
     *
     * Generated from protobuf field <code>repeated .google.cloud.gkehub.configmanagement.v1.ErrorResource error_resources = 3;</code>
     * @param array<\Google\Cloud\GkeHub\ConfigManagement\V1\ErrorResource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrorResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\GkeHub\ConfigManagement\V1\ErrorResource::class);
        $this->error_resources = $arr;

        return $this;
    }

}
