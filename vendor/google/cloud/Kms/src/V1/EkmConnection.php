<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/ekm_service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An [EkmConnection][google.cloud.kms.v1.EkmConnection] represents an
 * individual EKM connection. It can be used for creating
 * [CryptoKeys][google.cloud.kms.v1.CryptoKey] and
 * [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] with a
 * [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of
 * [EXTERNAL_VPC][CryptoKeyVersion.ProtectionLevel.EXTERNAL_VPC], as well as
 * performing cryptographic operations using keys created within the
 * [EkmConnection][google.cloud.kms.v1.EkmConnection].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.EkmConnection</code>
 */
class EkmConnection extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for the
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;ekmConnections/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The time at which the
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Optional. A list of
     * [ServiceResolvers][google.cloud.kms.v1.EkmConnection.ServiceResolver] where
     * the EKM can be reached. There should be one ServiceResolver per EKM
     * replica. Currently, only a single
     * [ServiceResolver][google.cloud.kms.v1.EkmConnection.ServiceResolver] is
     * supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.kms.v1.EkmConnection.ServiceResolver service_resolvers = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $service_resolvers;
    /**
     * Optional. Etag of the currently stored
     * [EkmConnection][google.cloud.kms.v1.EkmConnection].
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';
    /**
     * Optional. Describes who can perform control plane operations on the EKM. If
     * unset, this defaults to
     * [MANUAL][google.cloud.kms.v1.EkmConnection.KeyManagementMode.MANUAL].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.EkmConnection.KeyManagementMode key_management_mode = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $key_management_mode = 0;
    /**
     * Optional. Identifies the EKM Crypto Space that this
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] maps to. Note: This
     * field is required if
     * [KeyManagementMode][google.cloud.kms.v1.EkmConnection.KeyManagementMode] is
     * [CLOUD_KMS][google.cloud.kms.v1.EkmConnection.KeyManagementMode.CLOUD_KMS].
     *
     * Generated from protobuf field <code>string crypto_space_path = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $crypto_space_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for the
     *           [EkmConnection][google.cloud.kms.v1.EkmConnection] in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;ekmConnections/&#42;`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the
     *           [EkmConnection][google.cloud.kms.v1.EkmConnection] was created.
     *     @type array<\Google\Cloud\Kms\V1\EkmConnection\ServiceResolver>|\Google\Protobuf\Internal\RepeatedField $service_resolvers
     *           Optional. A list of
     *           [ServiceResolvers][google.cloud.kms.v1.EkmConnection.ServiceResolver] where
     *           the EKM can be reached. There should be one ServiceResolver per EKM
     *           replica. Currently, only a single
     *           [ServiceResolver][google.cloud.kms.v1.EkmConnection.ServiceResolver] is
     *           supported.
     *     @type string $etag
     *           Optional. Etag of the currently stored
     *           [EkmConnection][google.cloud.kms.v1.EkmConnection].
     *     @type int $key_management_mode
     *           Optional. Describes who can perform control plane operations on the EKM. If
     *           unset, this defaults to
     *           [MANUAL][google.cloud.kms.v1.EkmConnection.KeyManagementMode.MANUAL].
     *     @type string $crypto_space_path
     *           Optional. Identifies the EKM Crypto Space that this
     *           [EkmConnection][google.cloud.kms.v1.EkmConnection] maps to. Note: This
     *           field is required if
     *           [KeyManagementMode][google.cloud.kms.v1.EkmConnection.KeyManagementMode] is
     *           [CLOUD_KMS][google.cloud.kms.v1.EkmConnection.KeyManagementMode.CLOUD_KMS].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\EkmService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for the
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;ekmConnections/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for the
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;ekmConnections/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time at which the
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which the
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Optional. A list of
     * [ServiceResolvers][google.cloud.kms.v1.EkmConnection.ServiceResolver] where
     * the EKM can be reached. There should be one ServiceResolver per EKM
     * replica. Currently, only a single
     * [ServiceResolver][google.cloud.kms.v1.EkmConnection.ServiceResolver] is
     * supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.kms.v1.EkmConnection.ServiceResolver service_resolvers = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceResolvers()
    {
        return $this->service_resolvers;
    }

    /**
     * Optional. A list of
     * [ServiceResolvers][google.cloud.kms.v1.EkmConnection.ServiceResolver] where
     * the EKM can be reached. There should be one ServiceResolver per EKM
     * replica. Currently, only a single
     * [ServiceResolver][google.cloud.kms.v1.EkmConnection.ServiceResolver] is
     * supported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.kms.v1.EkmConnection.ServiceResolver service_resolvers = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Kms\V1\EkmConnection\ServiceResolver>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceResolvers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Kms\V1\EkmConnection\ServiceResolver::class);
        $this->service_resolvers = $arr;

        return $this;
    }

    /**
     * Optional. Etag of the currently stored
     * [EkmConnection][google.cloud.kms.v1.EkmConnection].
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. Etag of the currently stored
     * [EkmConnection][google.cloud.kms.v1.EkmConnection].
     *
     * Generated from protobuf field <code>string etag = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. Describes who can perform control plane operations on the EKM. If
     * unset, this defaults to
     * [MANUAL][google.cloud.kms.v1.EkmConnection.KeyManagementMode.MANUAL].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.EkmConnection.KeyManagementMode key_management_mode = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getKeyManagementMode()
    {
        return $this->key_management_mode;
    }

    /**
     * Optional. Describes who can perform control plane operations on the EKM. If
     * unset, this defaults to
     * [MANUAL][google.cloud.kms.v1.EkmConnection.KeyManagementMode.MANUAL].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.EkmConnection.KeyManagementMode key_management_mode = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setKeyManagementMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\EkmConnection\KeyManagementMode::class);
        $this->key_management_mode = $var;

        return $this;
    }

    /**
     * Optional. Identifies the EKM Crypto Space that this
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] maps to. Note: This
     * field is required if
     * [KeyManagementMode][google.cloud.kms.v1.EkmConnection.KeyManagementMode] is
     * [CLOUD_KMS][google.cloud.kms.v1.EkmConnection.KeyManagementMode.CLOUD_KMS].
     *
     * Generated from protobuf field <code>string crypto_space_path = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCryptoSpacePath()
    {
        return $this->crypto_space_path;
    }

    /**
     * Optional. Identifies the EKM Crypto Space that this
     * [EkmConnection][google.cloud.kms.v1.EkmConnection] maps to. Note: This
     * field is required if
     * [KeyManagementMode][google.cloud.kms.v1.EkmConnection.KeyManagementMode] is
     * [CLOUD_KMS][google.cloud.kms.v1.EkmConnection.KeyManagementMode.CLOUD_KMS].
     *
     * Generated from protobuf field <code>string crypto_space_path = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCryptoSpacePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->crypto_space_path = $var;

        return $this;
    }

}
