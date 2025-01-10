<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Action;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Failed to apply security policy to the managed resource(s) under a
 * lake, zone or an asset. For a lake or zone resource, one or more underlying
 * assets has a failure applying security policy to the associated managed
 * resource.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Action.FailedSecurityPolicyApply</code>
 */
class FailedSecurityPolicyApply extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of one of the assets with failing security policy
     * application. Populated for a lake or zone resource only.
     *
     * Generated from protobuf field <code>string asset = 1;</code>
     */
    protected $asset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $asset
     *           Resource name of one of the assets with failing security policy
     *           application. Populated for a lake or zone resource only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of one of the assets with failing security policy
     * application. Populated for a lake or zone resource only.
     *
     * Generated from protobuf field <code>string asset = 1;</code>
     * @return string
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Resource name of one of the assets with failing security policy
     * application. Populated for a lake or zone resource only.
     *
     * Generated from protobuf field <code>string asset = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset = $var;

        return $this;
    }

}

