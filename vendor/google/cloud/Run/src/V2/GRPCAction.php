<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/k8s.min.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GRPCAction describes an action involving a GRPC port.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.GRPCAction</code>
 */
class GRPCAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Port number of the gRPC service. Number must be in the range 1 to
     * 65535. If not specified, defaults to the exposed port of the container,
     * which is the value of container.ports[0].containerPort.
     *
     * Generated from protobuf field <code>int32 port = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $port = 0;
    /**
     * Optional. Service is the name of the service to place in the gRPC
     * HealthCheckRequest (see
     * https://github.com/grpc/grpc/blob/master/doc/health-checking.md ). If this
     * is not specified, the default behavior is defined by gRPC.
     *
     * Generated from protobuf field <code>string service = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $port
     *           Optional. Port number of the gRPC service. Number must be in the range 1 to
     *           65535. If not specified, defaults to the exposed port of the container,
     *           which is the value of container.ports[0].containerPort.
     *     @type string $service
     *           Optional. Service is the name of the service to place in the gRPC
     *           HealthCheckRequest (see
     *           https://github.com/grpc/grpc/blob/master/doc/health-checking.md ). If this
     *           is not specified, the default behavior is defined by gRPC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Port number of the gRPC service. Number must be in the range 1 to
     * 65535. If not specified, defaults to the exposed port of the container,
     * which is the value of container.ports[0].containerPort.
     *
     * Generated from protobuf field <code>int32 port = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Optional. Port number of the gRPC service. Number must be in the range 1 to
     * 65535. If not specified, defaults to the exposed port of the container,
     * which is the value of container.ports[0].containerPort.
     *
     * Generated from protobuf field <code>int32 port = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Optional. Service is the name of the service to place in the gRPC
     * HealthCheckRequest (see
     * https://github.com/grpc/grpc/blob/master/doc/health-checking.md ). If this
     * is not specified, the default behavior is defined by gRPC.
     *
     * Generated from protobuf field <code>string service = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Optional. Service is the name of the service to place in the gRPC
     * HealthCheckRequest (see
     * https://github.com/grpc/grpc/blob/master/doc/health-checking.md ). If this
     * is not specified, the default behavior is defined by gRPC.
     *
     * Generated from protobuf field <code>string service = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

}

