<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/clientconnectorservices/v1/client_connector_services_service.proto

namespace Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService\Egress;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The peered VPC owned by the consumer project.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.clientconnectorservices.v1.ClientConnectorService.Egress.PeeredVpc</code>
 */
class PeeredVpc extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the peered VPC owned by the consumer project.
     *
     * Generated from protobuf field <code>string network_vpc = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $network_vpc = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network_vpc
     *           Required. The name of the peered VPC owned by the consumer project.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Clientconnectorservices\V1\ClientConnectorServicesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the peered VPC owned by the consumer project.
     *
     * Generated from protobuf field <code>string network_vpc = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNetworkVpc()
    {
        return $this->network_vpc;
    }

    /**
     * Required. The name of the peered VPC owned by the consumer project.
     *
     * Generated from protobuf field <code>string network_vpc = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkVpc($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_vpc = $var;

        return $this;
    }

}


