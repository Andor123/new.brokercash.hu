<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy\Resource\File;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a file available via some URI.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicy.Resource.File.Remote</code>
 */
class Remote extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. URI from which to fetch the object. It should contain both
     * the protocol and path following the format `{protocol}://{location}`.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $uri = '';
    /**
     * SHA256 checksum of the remote file.
     *
     * Generated from protobuf field <code>string sha256_checksum = 2;</code>
     */
    protected $sha256_checksum = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. URI from which to fetch the object. It should contain both
     *           the protocol and path following the format `{protocol}://{location}`.
     *     @type string $sha256_checksum
     *           SHA256 checksum of the remote file.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. URI from which to fetch the object. It should contain both
     * the protocol and path following the format `{protocol}://{location}`.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. URI from which to fetch the object. It should contain both
     * the protocol and path following the format `{protocol}://{location}`.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * SHA256 checksum of the remote file.
     *
     * Generated from protobuf field <code>string sha256_checksum = 2;</code>
     * @return string
     */
    public function getSha256Checksum()
    {
        return $this->sha256_checksum;
    }

    /**
     * SHA256 checksum of the remote file.
     *
     * Generated from protobuf field <code>string sha256_checksum = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSha256Checksum($var)
    {
        GPBUtil::checkString($var, True);
        $this->sha256_checksum = $var;

        return $this;
    }

}

