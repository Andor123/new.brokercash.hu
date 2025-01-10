<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/cloudcontrolspartner/v1beta/partner_permissions.proto

namespace GPBMetadata\Google\Cloud\Cloudcontrolspartner\V1Beta;

class PartnerPermissions
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/cloud/cloudcontrolspartner/v1beta/partner_permissions.proto(google.cloud.cloudcontrolspartner.v1betagoogle/api/resource.proto"�
PartnerPermissions
name (	B�Ad
partner_permissions (2G.google.cloud.cloudcontrolspartner.v1beta.PartnerPermissions.Permission"�

Permission
PERMISSION_UNSPECIFIED 1
-ACCESS_TRANSPARENCY_AND_EMERGENCY_ACCESS_LOGS 
ASSURED_WORKLOADS_MONITORING
ACCESS_APPROVAL_REQUESTS+
\'ASSURED_WORKLOADS_EKM_CONNECTION_STATUS0
,ACCESS_TRANSPARENCY_LOGS_SUPPORT_CASE_VIEWER:��A�
6cloudcontrolspartner.googleapis.com/PartnerPermissionsnorganizations/{organization}/locations/{location}/customers/{customer}/workloads/{workload}/partnerPermissions"l
GetPartnerPermissionsRequestL
name (	B>�A�A8
6cloudcontrolspartner.googleapis.com/PartnerPermissionsB�
,com.google.cloud.cloudcontrolspartner.v1betaBPartnerPermissionsProtoPZ`cloud.google.com/go/cloudcontrolspartner/apiv1beta/cloudcontrolspartnerpb;cloudcontrolspartnerpb�(Google.Cloud.CloudControlsPartner.V1Beta�(Google\\Cloud\\CloudControlsPartner\\V1beta�+Google::Cloud::CloudControlsPartner::V1betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

