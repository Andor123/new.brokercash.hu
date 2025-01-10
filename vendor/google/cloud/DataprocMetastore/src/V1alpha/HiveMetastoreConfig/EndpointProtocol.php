<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha\HiveMetastoreConfig;

use UnexpectedValueException;

/**
 * Protocols available for serving the metastore service endpoint.
 *
 * Protobuf type <code>google.cloud.metastore.v1alpha.HiveMetastoreConfig.EndpointProtocol</code>
 */
class EndpointProtocol
{
    /**
     * The protocol is not set.
     *
     * Generated from protobuf enum <code>ENDPOINT_PROTOCOL_UNSPECIFIED = 0;</code>
     */
    const ENDPOINT_PROTOCOL_UNSPECIFIED = 0;
    /**
     * Use the legacy Apache Thrift protocol for the metastore service endpoint.
     *
     * Generated from protobuf enum <code>THRIFT = 1;</code>
     */
    const THRIFT = 1;
    /**
     * Use the modernized gRPC protocol for the metastore service endpoint.
     *
     * Generated from protobuf enum <code>GRPC = 2;</code>
     */
    const GRPC = 2;

    private static $valueToName = [
        self::ENDPOINT_PROTOCOL_UNSPECIFIED => 'ENDPOINT_PROTOCOL_UNSPECIFIED',
        self::THRIFT => 'THRIFT',
        self::GRPC => 'GRPC',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


