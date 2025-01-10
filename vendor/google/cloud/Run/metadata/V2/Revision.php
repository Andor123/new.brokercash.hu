<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/revision.proto

namespace GPBMetadata\Google\Cloud\Run\V2;

class Revision
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
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Routing::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\Condition::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\Status::initOnce();
        \GPBMetadata\Google\Cloud\Run\V2\VendorSettings::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
"google/cloud/run/v2/revision.protogoogle.cloud.run.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/launch_stage.protogoogle/api/resource.protogoogle/api/routing.proto#google/cloud/run/v2/condition.proto!google/cloud/run/v2/k8s.min.proto google/cloud/run/v2/status.proto)google/cloud/run/v2/vendor_settings.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.proto"G
GetRevisionRequest1
name (	B#�A�A
run.googleapis.com/Revision"�
ListRevisionsRequest3
parent (	B#�A�Arun.googleapis.com/Revision
	page_size (

page_token (	
show_deleted ("b
ListRevisionsResponse0
	revisions (2.google.cloud.run.v2.Revision
next_page_token (	"o
DeleteRevisionRequest1
name (	B#�A�A
run.googleapis.com/Revision
validate_only (
etag (	"�
Revision
name (	B�A
uid (	B�A

generation (B�A>
labels (2).google.cloud.run.v2.Revision.LabelsEntryB�AH
annotations (2..google.cloud.run.v2.Revision.AnnotationsEntryB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A4
expire_time	 (2.google.protobuf.TimestampB�A-
launch_stage
 (2.google.api.LaunchStage3
service (	B"�A�A
run.googleapis.com/Service5
scaling (2$.google.cloud.run.v2.RevisionScaling2

vpc_access (2.google.cloud.run.v2.VpcAccess(
 max_instance_request_concurrency" (*
timeout (2.google.protobuf.Duration
service_account (	2

containers (2.google.cloud.run.v2.Container,
volumes (2.google.cloud.run.v2.VolumeH
execution_environment (2).google.cloud.run.v2.ExecutionEnvironment>
encryption_key (	B&�A#
!cloudkms.googleapis.com/CryptoKey6
service_mesh (2 .google.cloud.run.v2.ServiceMesh\\
 encryption_key_revocation_action (22.google.cloud.run.v2.EncryptionKeyRevocationActionC
 encryption_key_shutdown_duration (2.google.protobuf.Duration
reconciling (B�A7

conditions (2.google.cloud.run.v2.ConditionB�A 
observed_generation  (B�A
log_uri! (	B�A
satisfies_pzs% (B�A
session_affinity& (G
scaling_status\' (2*.google.cloud.run.v2.RevisionScalingStatusB�A8
node_selector( (2!.google.cloud.run.v2.NodeSelector
etagc (	B�A-
LabelsEntry
key (	
value (	:82
AnnotationsEntry
key (	
value (	:8:t�Aq
run.googleapis.com/RevisionOprojects/{project}/locations/{location}/services/{service}/revisions/{revision}R2�
	Revisions�
GetRevision\'.google.cloud.run.v2.GetRevisionRequest.google.cloud.run.v2.Revision"{�Aname���:8/v2/{name=projects/*/locations/*/services/*/revisions/*}���.,
name$projects/*/locations/{location=*}/**�
ListRevisions).google.cloud.run.v2.ListRevisionsRequest*.google.cloud.run.v2.ListRevisionsResponse"�Aparent���:8/v2/{parent=projects/*/locations/*/services/*}/revisions���0.
parent$projects/*/locations/{location=*}/**�
DeleteRevision*.google.cloud.run.v2.DeleteRevisionRequest.google.longrunning.Operation"��A
RevisionRevision�Aname���:*8/v2/{name=projects/*/locations/*/services/*/revisions/*}���.,
name$projects/*/locations/{location=*}/**F�Arun.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBU
com.google.cloud.run.v2BRevisionProtoPZ)cloud.google.com/go/run/apiv2/runpb;runpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

