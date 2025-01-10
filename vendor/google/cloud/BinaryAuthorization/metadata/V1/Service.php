<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1/service.proto

namespace GPBMetadata\Google\Cloud\Binaryauthorization\V1;

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
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1\Resources::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Grafeas\V1\Attestation::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/binaryauthorization/v1/service.proto#google.cloud.binaryauthorization.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto3google/cloud/binaryauthorization/v1/resources.protogoogle/protobuf/empty.protografeas/v1/attestation.proto"S
GetPolicyRequest?
name (	B1�A�A+
)binaryauthorization.googleapis.com/Policy"W
UpdatePolicyRequest@
policy (2+.google.cloud.binaryauthorization.v1.PolicyB�A"�
CreateAttestorRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
attestor_id (	B�AD
attestor (2-.google.cloud.binaryauthorization.v1.AttestorB�A"W
GetAttestorRequestA
name (	B3�A�A-
+binaryauthorization.googleapis.com/Attestor"]
UpdateAttestorRequestD
attestor (2-.google.cloud.binaryauthorization.v1.AttestorB�A"�
ListAttestorsRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (

page_token (	"r
ListAttestorsResponse@
	attestors (2-.google.cloud.binaryauthorization.v1.Attestor
next_page_token (	"Z
DeleteAttestorRequestA
name (	B3�A�A-
+binaryauthorization.googleapis.com/Attestor"Y
GetSystemPolicyRequest?
name (	B1�A�A+
)binaryauthorization.googleapis.com/Policy"�
$ValidateAttestationOccurrenceRequest
attestor (	B�A;
attestation (2!.grafeas.v1.AttestationOccurrenceB�A
occurrence_note (	B�A$
occurrence_resource_uri (	B�A"�
%ValidateAttestationOccurrenceResponsea
result (2Q.google.cloud.binaryauthorization.v1.ValidateAttestationOccurrenceResponse.Result
denial_reason (	"N
Result
RESULT_UNSPECIFIED 
VERIFIED
ATTESTATION_NOT_VERIFIABLE2�

BinauthzManagementServiceV1�
	GetPolicy5.google.cloud.binaryauthorization.v1.GetPolicyRequest+.google.cloud.binaryauthorization.v1.Policy"+�Aname���/v1/{name=projects/*/policy}�
UpdatePolicy8.google.cloud.binaryauthorization.v1.UpdatePolicyRequest+.google.cloud.binaryauthorization.v1.Policy"<�Apolicy���-#/v1/{policy.name=projects/*/policy}:policy�
CreateAttestor:.google.cloud.binaryauthorization.v1.CreateAttestorRequest-.google.cloud.binaryauthorization.v1.Attestor"Q�Aparent,attestor_id,attestor���-"!/v1/{parent=projects/*}/attestors:attestor�
GetAttestor7.google.cloud.binaryauthorization.v1.GetAttestorRequest-.google.cloud.binaryauthorization.v1.Attestor"0�Aname���#!/v1/{name=projects/*/attestors/*}�
UpdateAttestor:.google.cloud.binaryauthorization.v1.UpdateAttestorRequest-.google.cloud.binaryauthorization.v1.Attestor"G�Aattestor���6*/v1/{attestor.name=projects/*/attestors/*}:attestor�
ListAttestors9.google.cloud.binaryauthorization.v1.ListAttestorsRequest:.google.cloud.binaryauthorization.v1.ListAttestorsResponse"2�Aparent���#!/v1/{parent=projects/*}/attestors�
DeleteAttestor:.google.cloud.binaryauthorization.v1.DeleteAttestorRequest.google.protobuf.Empty"0�Aname���#*!/v1/{name=projects/*/attestors/*}V�A"binaryauthorization.googleapis.com�A.https://www.googleapis.com/auth/cloud-platform2�
SystemPolicyV1�
GetSystemPolicy;.google.cloud.binaryauthorization.v1.GetSystemPolicyRequest+.google.cloud.binaryauthorization.v1.Policy",�Aname���/v1/{name=locations/*/policy}V�A"binaryauthorization.googleapis.com�A.https://www.googleapis.com/auth/cloud-platform2�
ValidationHelperV1�
ValidateAttestationOccurrenceI.google.cloud.binaryauthorization.v1.ValidateAttestationOccurrenceRequestJ.google.cloud.binaryauthorization.v1.ValidateAttestationOccurrenceResponse"N���H"C/v1/{attestor=projects/*/attestors/*}:validateAttestationOccurrence:*V�A"binaryauthorization.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
5com.google.protos.google.cloud.binaryauthorization.v1P ZYcloud.google.com/go/binaryauthorization/apiv1/binaryauthorizationpb;binaryauthorizationpb��#Google.Cloud.BinaryAuthorization.V1�#Google\\Cloud\\BinaryAuthorization\\V1�&Google::Cloud::BinaryAuthorization::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

