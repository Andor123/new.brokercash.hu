<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/target.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PathOverride.
 * Path message defines path override for HTTP targets.
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.PathOverride</code>
 */
class PathOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * The URI path (e.g., /users/1234). Default is an empty string.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    private $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           The URI path (e.g., /users/1234). Default is an empty string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI path (e.g., /users/1234). Default is an empty string.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The URI path (e.g., /users/1234). Default is an empty string.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}

