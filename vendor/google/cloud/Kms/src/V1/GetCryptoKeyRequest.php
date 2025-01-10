<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.GetCryptoKey][google.cloud.kms.v1.KeyManagementService.GetCryptoKey].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.GetCryptoKeyRequest</code>
 */
class GetCryptoKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [name][google.cloud.kms.v1.CryptoKey.name] of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The [name][google.cloud.kms.v1.CryptoKey.name] of the
     *                     [CryptoKey][google.cloud.kms.v1.CryptoKey] to get. Please see
     *                     {@see KeyManagementServiceClient::cryptoKeyName()} for help formatting this field.
     *
     * @return \Google\Cloud\Kms\V1\GetCryptoKeyRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The [name][google.cloud.kms.v1.CryptoKey.name] of the
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] to get.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [name][google.cloud.kms.v1.CryptoKey.name] of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The [name][google.cloud.kms.v1.CryptoKey.name] of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

