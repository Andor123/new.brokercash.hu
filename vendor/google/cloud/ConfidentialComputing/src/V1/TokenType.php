<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/confidentialcomputing/v1/service.proto

namespace Google\Cloud\ConfidentialComputing\V1;

use UnexpectedValueException;

/**
 * Token type enum contains the different types of token responses Confidential
 * Space supports
 *
 * Protobuf type <code>google.cloud.confidentialcomputing.v1.TokenType</code>
 */
class TokenType
{
    /**
     * Unspecified token type
     *
     * Generated from protobuf enum <code>TOKEN_TYPE_UNSPECIFIED = 0;</code>
     */
    const TOKEN_TYPE_UNSPECIFIED = 0;
    /**
     * OpenID Connect (OIDC) token type
     *
     * Generated from protobuf enum <code>TOKEN_TYPE_OIDC = 1;</code>
     */
    const TOKEN_TYPE_OIDC = 1;
    /**
     * Public Key Infrastructure (PKI) token type
     *
     * Generated from protobuf enum <code>TOKEN_TYPE_PKI = 2;</code>
     */
    const TOKEN_TYPE_PKI = 2;
    /**
     * Limited claim token type for AWS integration
     *
     * Generated from protobuf enum <code>TOKEN_TYPE_LIMITED_AWS = 3;</code>
     */
    const TOKEN_TYPE_LIMITED_AWS = 3;

    private static $valueToName = [
        self::TOKEN_TYPE_UNSPECIFIED => 'TOKEN_TYPE_UNSPECIFIED',
        self::TOKEN_TYPE_OIDC => 'TOKEN_TYPE_OIDC',
        self::TOKEN_TYPE_PKI => 'TOKEN_TYPE_PKI',
        self::TOKEN_TYPE_LIMITED_AWS => 'TOKEN_TYPE_LIMITED_AWS',
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

