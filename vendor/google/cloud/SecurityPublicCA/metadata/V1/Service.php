<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/publicca/v1/service.proto

namespace GPBMetadata\Google\Cloud\Security\Publicca\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Security\Publicca\V1\Resources::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/security/publicca/v1/service.proto!google.cloud.security.publicca.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto1google/cloud/security/publicca/v1/resources.proto"�
CreateExternalAccountKeyRequestB
parent (	B2�A�A,*publicca.googleapis.com/ExternalAccountKeyX
external_account_key (25.google.cloud.security.publicca.v1.ExternalAccountKeyB�A2�
!PublicCertificateAuthorityService�
CreateExternalAccountKeyB.google.cloud.security.publicca.v1.CreateExternalAccountKeyRequest5.google.cloud.security.publicca.v1.ExternalAccountKey"s�Aparent,external_account_key���O"7/v1/{parent=projects/*/locations/*}/externalAccountKeys:external_account_keyK�Apublicca.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
%com.google.cloud.security.publicca.v1BServiceProtoPZAcloud.google.com/go/security/publicca/apiv1/publiccapb;publiccapb��!Google.Cloud.Security.PublicCA.V1�!Google\\Cloud\\Security\\PublicCA\\V1�%Google::Cloud::Security::PublicCA::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
