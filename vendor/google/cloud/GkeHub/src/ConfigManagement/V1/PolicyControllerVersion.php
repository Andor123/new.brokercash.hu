<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/configmanagement/configmanagement.proto

namespace Google\Cloud\GkeHub\ConfigManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The build version of Gatekeeper Policy Controller is using.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.configmanagement.v1.PolicyControllerVersion</code>
 */
class PolicyControllerVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * The gatekeeper image tag that is composed of ACM version, git tag, build
     * number.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The gatekeeper image tag that is composed of ACM version, git tag, build
     *           number.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Configmanagement\Configmanagement::initOnce();
        parent::__construct($data);
    }

    /**
     * The gatekeeper image tag that is composed of ACM version, git tag, build
     * number.
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The gatekeeper image tag that is composed of ACM version, git tag, build
     * number.
     *
     * Generated from protobuf field <code>string version = 1;</code>
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
