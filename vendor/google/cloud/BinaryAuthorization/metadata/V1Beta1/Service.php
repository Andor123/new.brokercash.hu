<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/service.proto

namespace GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1;

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
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1\Resources::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/cloud/binaryauthorization/v1beta1/service.proto(google.cloud.binaryauthorization.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto8google/cloud/binaryauthorization/v1beta1/resources.protogoogle/protobuf/empty.proto"S
GetPolicyRequest?
name (	B1�A�A+
)binaryauthorization.googleapis.com/Policy"\\
UpdatePolicyRequestE
policy (20.google.cloud.binaryauthorization.v1beta1.PolicyB�A"�
CreateAttestorRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
attestor_id (	B�AI
attestor (22.google.cloud.binaryauthorization.v1beta1.AttestorB�A"W
GetAttestorRequestA
name (	B3�A�A-
+binaryauthorization.googleapis.com/Attestor"b
UpdateAttestorRequestI
attestor (22.google.cloud.binaryauthorization.v1beta1.AttestorB�A"�
ListAttestorsRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (

page_token (	"w
ListAttestorsResponseE
	attestors (22.google.cloud.binaryauthorization.v1beta1.Attestor
next_page_token (	"Z
DeleteAttestorRequestA
name (	B3�A�A-
+binaryauthorization.googleapis.com/Attestor"Y
GetSystemPolicyRequest?
name (	B1�A�A+
)binaryauthorization.googleapis.com/Policy2�
 BinauthzManagementServiceV1Beta1�
	GetPolicy:.google.cloud.binaryauthorization.v1beta1.GetPolicyRequest0.google.cloud.binaryauthorization.v1beta1.Policy"0�Aname���#!/v1beta1/{name=projects/*/policy}�
UpdatePolicy=.google.cloud.binaryauthorization.v1beta1.UpdatePolicyRequest0.google.cloud.binaryauthorization.v1beta1.Policy"A�Apolicy���2(/v1beta1/{policy.name=projects/*/policy}:policy�
CreateAttestor?.google.cloud.binaryauthorization.v1beta1.CreateAttestorRequest2.google.cloud.binaryauthorization.v1beta1.Attestor"V�Aparent,attestor_id,attestor���2"&/v1beta1/{parent=projects/*}/attestors:attestor�
GetAttestor<.google.cloud.binaryauthorization.v1beta1.GetAttestorRequest2.google.cloud.binaryauthorization.v1beta1.Attestor"5�Aname���(&/v1beta1/{name=projects/*/attestors/*}�
UpdateAttestor?.google.cloud.binaryauthorization.v1beta1.UpdateAttestorRequest2.google.cloud.binaryauthorization.v1beta1.Attestor"L�Aattestor���;//v1beta1/{attestor.name=projects/*/attestors/*}:attestor�
ListAttestors>.google.cloud.binaryauthorization.v1beta1.ListAttestorsRequest?.google.cloud.binaryauthorization.v1beta1.ListAttestorsResponse"7�Aparent���(&/v1beta1/{parent=projects/*}/attestors�
DeleteAttestor?.google.cloud.binaryauthorization.v1beta1.DeleteAttestorRequest.google.protobuf.Empty"5�Aname���(*&/v1beta1/{name=projects/*/attestors/*}V�A"binaryauthorization.googleapis.com�A.https://www.googleapis.com/auth/cloud-platform2�
SystemPolicyV1Beta1�
GetSystemPolicy@.google.cloud.binaryauthorization.v1beta1.GetSystemPolicyRequest0.google.cloud.binaryauthorization.v1beta1.Policy"1�Aname���$"/v1beta1/{name=locations/*/policy}V�A"binaryauthorization.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
,com.google.cloud.binaryauthorization.v1beta1BBinaryAuthorizationServiceProtoPZ^cloud.google.com/go/binaryauthorization/apiv1beta1/binaryauthorizationpb;binaryauthorizationpb��(Google.Cloud.BinaryAuthorization.V1Beta1�(Google\\Cloud\\BinaryAuthorization\\V1beta1�+Google::Cloud::BinaryAuthorization::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

