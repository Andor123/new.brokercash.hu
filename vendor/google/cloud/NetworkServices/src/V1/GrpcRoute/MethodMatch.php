<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/grpc_route.proto

namespace Google\Cloud\NetworkServices\V1\GrpcRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a match against a method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.GrpcRoute.MethodMatch</code>
 */
class MethodMatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Specifies how to match against the name. If not specified, a
     * default value of "EXACT" is used.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute.MethodMatch.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type = 0;
    /**
     * Required. Name of the service to match against. If unspecified, will
     * match all services.
     *
     * Generated from protobuf field <code>string grpc_service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $grpc_service = '';
    /**
     * Required. Name of the method to match against. If unspecified, will match
     * all methods.
     *
     * Generated from protobuf field <code>string grpc_method = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $grpc_method = '';
    /**
     * Optional. Specifies that matches are case sensitive.  The default value
     * is true. case_sensitive must not be used with a type of
     * REGULAR_EXPRESSION.
     *
     * Generated from protobuf field <code>optional bool case_sensitive = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $case_sensitive = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Optional. Specifies how to match against the name. If not specified, a
     *           default value of "EXACT" is used.
     *     @type string $grpc_service
     *           Required. Name of the service to match against. If unspecified, will
     *           match all services.
     *     @type string $grpc_method
     *           Required. Name of the method to match against. If unspecified, will match
     *           all methods.
     *     @type bool $case_sensitive
     *           Optional. Specifies that matches are case sensitive.  The default value
     *           is true. case_sensitive must not be used with a type of
     *           REGULAR_EXPRESSION.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\GrpcRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Specifies how to match against the name. If not specified, a
     * default value of "EXACT" is used.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute.MethodMatch.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. Specifies how to match against the name. If not specified, a
     * default value of "EXACT" is used.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.GrpcRoute.MethodMatch.Type type = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\NetworkServices\V1\GrpcRoute\MethodMatch\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Required. Name of the service to match against. If unspecified, will
     * match all services.
     *
     * Generated from protobuf field <code>string grpc_service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getGrpcService()
    {
        return $this->grpc_service;
    }

    /**
     * Required. Name of the service to match against. If unspecified, will
     * match all services.
     *
     * Generated from protobuf field <code>string grpc_service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setGrpcService($var)
    {
        GPBUtil::checkString($var, True);
        $this->grpc_service = $var;

        return $this;
    }

    /**
     * Required. Name of the method to match against. If unspecified, will match
     * all methods.
     *
     * Generated from protobuf field <code>string grpc_method = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getGrpcMethod()
    {
        return $this->grpc_method;
    }

    /**
     * Required. Name of the method to match against. If unspecified, will match
     * all methods.
     *
     * Generated from protobuf field <code>string grpc_method = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setGrpcMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->grpc_method = $var;

        return $this;
    }

    /**
     * Optional. Specifies that matches are case sensitive.  The default value
     * is true. case_sensitive must not be used with a type of
     * REGULAR_EXPRESSION.
     *
     * Generated from protobuf field <code>optional bool case_sensitive = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getCaseSensitive()
    {
        return isset($this->case_sensitive) ? $this->case_sensitive : false;
    }

    public function hasCaseSensitive()
    {
        return isset($this->case_sensitive);
    }

    public function clearCaseSensitive()
    {
        unset($this->case_sensitive);
    }

    /**
     * Optional. Specifies that matches are case sensitive.  The default value
     * is true. case_sensitive must not be used with a type of
     * REGULAR_EXPRESSION.
     *
     * Generated from protobuf field <code>optional bool case_sensitive = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setCaseSensitive($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive = $var;

        return $this;
    }

}


