<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apphub/v1/apphub_service.proto

namespace Google\Cloud\AppHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for LookupDiscoveredService.
 *
 * Generated from protobuf message <code>google.cloud.apphub.v1.LookupDiscoveredServiceResponse</code>
 */
class LookupDiscoveredServiceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Discovered Service if exists, empty otherwise.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.DiscoveredService discovered_service = 1;</code>
     */
    protected $discovered_service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AppHub\V1\DiscoveredService $discovered_service
     *           Discovered Service if exists, empty otherwise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apphub\V1\ApphubService::initOnce();
        parent::__construct($data);
    }

    /**
     * Discovered Service if exists, empty otherwise.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.DiscoveredService discovered_service = 1;</code>
     * @return \Google\Cloud\AppHub\V1\DiscoveredService|null
     */
    public function getDiscoveredService()
    {
        return $this->discovered_service;
    }

    public function hasDiscoveredService()
    {
        return isset($this->discovered_service);
    }

    public function clearDiscoveredService()
    {
        unset($this->discovered_service);
    }

    /**
     * Discovered Service if exists, empty otherwise.
     *
     * Generated from protobuf field <code>.google.cloud.apphub.v1.DiscoveredService discovered_service = 1;</code>
     * @param \Google\Cloud\AppHub\V1\DiscoveredService $var
     * @return $this
     */
    public function setDiscoveredService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppHub\V1\DiscoveredService::class);
        $this->discovered_service = $var;

        return $this;
    }

}

