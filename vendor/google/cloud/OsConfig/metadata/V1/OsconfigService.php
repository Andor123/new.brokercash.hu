<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/osconfig_service.proto

namespace GPBMetadata\Google\Cloud\Osconfig\V1;

class OsconfigService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchDeployments::initOnce();
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/osconfig/v1/osconfig_service.protogoogle.cloud.osconfig.v1google/api/resource.proto0google/cloud/osconfig/v1/patch_deployments.proto)google/cloud/osconfig/v1/patch_jobs.protogoogle/protobuf/empty.protogoogle/api/annotations.proto2�
OsConfigService�
ExecutePatchJob0.google.cloud.osconfig.v1.ExecutePatchJobRequest".google.cloud.osconfig.v1.PatchJob"4���.")/v1/{parent=projects/*}/patchJobs:execute:*�
GetPatchJob,.google.cloud.osconfig.v1.GetPatchJobRequest".google.cloud.osconfig.v1.PatchJob"0�Aname���#!/v1/{name=projects/*/patchJobs/*}�
CancelPatchJob/.google.cloud.osconfig.v1.CancelPatchJobRequest".google.cloud.osconfig.v1.PatchJob"3���-"(/v1/{name=projects/*/patchJobs/*}:cancel:*�
ListPatchJobs..google.cloud.osconfig.v1.ListPatchJobsRequest/.google.cloud.osconfig.v1.ListPatchJobsResponse"2�Aparent���#!/v1/{parent=projects/*}/patchJobs�
ListPatchJobInstanceDetails<.google.cloud.osconfig.v1.ListPatchJobInstanceDetailsRequest=.google.cloud.osconfig.v1.ListPatchJobInstanceDetailsResponse"D�Aparent���53/v1/{parent=projects/*/patchJobs/*}/instanceDetails�
CreatePatchDeployment6.google.cloud.osconfig.v1.CreatePatchDeploymentRequest).google.cloud.osconfig.v1.PatchDeployment"p�A+parent,patch_deployment,patch_deployment_id���<"(/v1/{parent=projects/*}/patchDeployments:patch_deployment�
GetPatchDeployment3.google.cloud.osconfig.v1.GetPatchDeploymentRequest).google.cloud.osconfig.v1.PatchDeployment"7�Aname���*(/v1/{name=projects/*/patchDeployments/*}�
ListPatchDeployments5.google.cloud.osconfig.v1.ListPatchDeploymentsRequest6.google.cloud.osconfig.v1.ListPatchDeploymentsResponse"9�Aparent���*(/v1/{parent=projects/*}/patchDeployments�
DeletePatchDeployment6.google.cloud.osconfig.v1.DeletePatchDeploymentRequest.google.protobuf.Empty"7�Aname���**(/v1/{name=projects/*/patchDeployments/*}�
UpdatePatchDeployment6.google.cloud.osconfig.v1.UpdatePatchDeploymentRequest).google.cloud.osconfig.v1.PatchDeployment"r�Apatch_deployment,update_mask���M29/v1/{patch_deployment.name=projects/*/patchDeployments/*}:patch_deployment�
PausePatchDeployment5.google.cloud.osconfig.v1.PausePatchDeploymentRequest).google.cloud.osconfig.v1.PatchDeployment"@�Aname���3"./v1/{name=projects/*/patchDeployments/*}:pause:*�
ResumePatchDeployment6.google.cloud.osconfig.v1.ResumePatchDeploymentRequest).google.cloud.osconfig.v1.PatchDeployment"A�Aname���4"//v1/{name=projects/*/patchDeployments/*}:resume:*K�Aosconfig.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.osconfig.v1BOsConfigProtoZ8cloud.google.com/go/osconfig/apiv1/osconfigpb;osconfigpb�Google.Cloud.OsConfig.V1�Google\\Cloud\\OsConfig\\V1�Google::Cloud::OsConfig::V1�A�
compute.googleapis.com/Instance4projects/{project}/zones/{zone}/instances/{instance}<projects/{project}/locations/{location}/instances/{instance}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

