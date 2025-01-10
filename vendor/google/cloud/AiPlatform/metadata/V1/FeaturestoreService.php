<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class FeaturestoreService
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
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EntityType::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Feature::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureSelector::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Featurestore::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Operation::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Interval::initOnce();
        $pool->internalAddGeneratedFile(
            '
�q
5google/cloud/aiplatform/v1/featurestore_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/aiplatform/v1/entity_type.proto(google/cloud/aiplatform/v1/feature.proto1google/cloud/aiplatform/v1/feature_selector.proto-google/cloud/aiplatform/v1/featurestore.proto#google/cloud/aiplatform/v1/io.proto*google/cloud/aiplatform/v1/operation.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/type/interval.proto"�
CreateFeaturestoreRequest>
parent (	B.�A�A(&aiplatform.googleapis.com/FeaturestoreC
featurestore (2(.google.cloud.aiplatform.v1.FeaturestoreB�A
featurestore_id (	B�A"V
GetFeaturestoreRequest<
name (	B.�A�A(
&aiplatform.googleapis.com/Featurestore"�
ListFeaturestoresRequest>
parent (	B.�A�A(&aiplatform.googleapis.com/Featurestore
filter (	
	page_size (

page_token (	
order_by (	-
	read_mask (2.google.protobuf.FieldMask"u
ListFeaturestoresResponse?
featurestores (2(.google.cloud.aiplatform.v1.Featurestore
next_page_token (	"�
UpdateFeaturestoreRequestC
featurestore (2(.google.cloud.aiplatform.v1.FeaturestoreB�A/
update_mask (2.google.protobuf.FieldMask"h
DeleteFeaturestoreRequest<
name (	B.�A�A(
&aiplatform.googleapis.com/Featurestore
force ("�
ImportFeatureValuesRequest=
avro_source (2&.google.cloud.aiplatform.v1.AvroSourceH E
bigquery_source (2*.google.cloud.aiplatform.v1.BigQuerySourceH ;

csv_source (2%.google.cloud.aiplatform.v1.CsvSourceH 
feature_time_field (	H2
feature_time (2.google.protobuf.TimestampHA
entity_type (	B,�A�A&
$aiplatform.googleapis.com/EntityType
entity_id_field (	^
feature_specs (2B.google.cloud.aiplatform.v1.ImportFeatureValuesRequest.FeatureSpecB�A
disable_online_serving	 (
worker_count ("
disable_ingestion_analysis (4
FeatureSpec
id (	B�A
source_field (	B
sourceB
feature_time_source"�
ImportFeatureValuesResponse
imported_entity_count ($
imported_feature_value_count (
invalid_row_count (.
&timestamp_outside_retention_rows_count ("�
BatchReadFeatureValuesRequestC
csv_read_instances (2%.google.cloud.aiplatform.v1.CsvSourceH M
bigquery_read_instances (2*.google.cloud.aiplatform.v1.BigQuerySourceH D
featurestore (	B.�A�A(
&aiplatform.googleapis.com/FeaturestoreM
destination (23.google.cloud.aiplatform.v1.FeatureValueDestinationB�Ag
pass_through_fields (2J.google.cloud.aiplatform.v1.BatchReadFeatureValuesRequest.PassThroughFieldh
entity_type_specs (2H.google.cloud.aiplatform.v1.BatchReadFeatureValuesRequest.EntityTypeSpecB�A3

start_time (2.google.protobuf.TimestampB�A+
PassThroughField

field_name (	B�A�
EntityTypeSpec
entity_type_id (	B�AJ
feature_selector (2+.google.cloud.aiplatform.v1.FeatureSelectorB�AG
settings (25.google.cloud.aiplatform.v1.DestinationFeatureSettingB
read_option"�
ExportFeatureValuesRequest`
snapshot_export (2E.google.cloud.aiplatform.v1.ExportFeatureValuesRequest.SnapshotExportH X
full_export (2A.google.cloud.aiplatform.v1.ExportFeatureValuesRequest.FullExportH A
entity_type (	B,�A�A&
$aiplatform.googleapis.com/EntityTypeM
destination (23.google.cloud.aiplatform.v1.FeatureValueDestinationB�AJ
feature_selector (2+.google.cloud.aiplatform.v1.FeatureSelectorB�AG
settings (25.google.cloud.aiplatform.v1.DestinationFeatureSettings
SnapshotExport1
snapshot_time (2.google.protobuf.Timestamp.

start_time (2.google.protobuf.Timestampj

FullExport.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.TimestampB
mode"O
DestinationFeatureSetting

feature_id (	B�A
destination_field (	"�
FeatureValueDestinationO
bigquery_destination (2/.google.cloud.aiplatform.v1.BigQueryDestinationH O
tfrecord_destination (2/.google.cloud.aiplatform.v1.TFRecordDestinationH E
csv_destination (2*.google.cloud.aiplatform.v1.CsvDestinationH B
destination"
ExportFeatureValuesResponse" 
BatchReadFeatureValuesResponse"�
CreateEntityTypeRequest>
parent (	B.�A�A(
&aiplatform.googleapis.com/Featurestore;
entity_type (2&.google.cloud.aiplatform.v1.EntityType
entity_type_id (	B�A"R
GetEntityTypeRequest:
name (	B,�A�A&
$aiplatform.googleapis.com/EntityType"�
ListEntityTypesRequest<
parent (	B,�A�A&$aiplatform.googleapis.com/EntityType
filter (	
	page_size (

page_token (	
order_by (	-
	read_mask (2.google.protobuf.FieldMask"p
ListEntityTypesResponse<
entity_types (2&.google.cloud.aiplatform.v1.EntityType
next_page_token (	"�
UpdateEntityTypeRequest@
entity_type (2&.google.cloud.aiplatform.v1.EntityTypeB�A/
update_mask (2.google.protobuf.FieldMask"d
DeleteEntityTypeRequest:
name (	B,�A�A&
$aiplatform.googleapis.com/EntityType
force ("�
CreateFeatureRequest9
parent (	B)�A�A#!aiplatform.googleapis.com/Feature9
feature (2#.google.cloud.aiplatform.v1.FeatureB�A

feature_id (	B�A"�
BatchCreateFeaturesRequest<
parent (	B,�A�A&
$aiplatform.googleapis.com/EntityTypeG
requests (20.google.cloud.aiplatform.v1.CreateFeatureRequestB�A"T
BatchCreateFeaturesResponse5
features (2#.google.cloud.aiplatform.v1.Feature"L
GetFeatureRequest7
name (	B)�A�A#
!aiplatform.googleapis.com/Feature"�
ListFeaturesRequest9
parent (	B)�A�A#!aiplatform.googleapis.com/Feature
filter (	
	page_size (

page_token (	
order_by (	-
	read_mask (2.google.protobuf.FieldMask
latest_stats_count ("f
ListFeaturesResponse5
features (2#.google.cloud.aiplatform.v1.Feature
next_page_token (	"�
SearchFeaturesRequest;
location (	B)�A�A#
!locations.googleapis.com/Location
query (	
	page_size (

page_token (	"h
SearchFeaturesResponse5
features (2#.google.cloud.aiplatform.v1.Feature
next_page_token (	"�
UpdateFeatureRequest9
feature (2#.google.cloud.aiplatform.v1.FeatureB�A/
update_mask (2.google.protobuf.FieldMask"O
DeleteFeatureRequest7
name (	B)�A�A#
!aiplatform.googleapis.com/Feature"u
#CreateFeaturestoreOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"u
#UpdateFeaturestoreOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"�
$ImportFeatureValuesOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata
imported_entity_count ($
imported_feature_value_count (
source_uris (	
invalid_row_count (.
&timestamp_outside_retention_rows_count (
blocking_operation_ids ("v
$ExportFeatureValuesOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"y
\'BatchReadFeatureValuesOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"v
$DeleteFeatureValuesOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"s
!CreateEntityTypeOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"p
CreateFeatureOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"v
$BatchCreateFeaturesOperationMetadataN
generic_metadata (24.google.cloud.aiplatform.v1.GenericOperationMetadata"�
DeleteFeatureValuesRequest\\
select_entity (2C.google.cloud.aiplatform.v1.DeleteFeatureValuesRequest.SelectEntityH y
select_time_range_and_feature (2P.google.cloud.aiplatform.v1.DeleteFeatureValuesRequest.SelectTimeRangeAndFeatureH A
entity_type (	B,�A�A&
$aiplatform.googleapis.com/EntityType]
SelectEntityM
entity_id_selector (2,.google.cloud.aiplatform.v1.EntityIdSelectorB�A�
SelectTimeRangeAndFeature.

time_range (2.google.type.IntervalB�AJ
feature_selector (2+.google.cloud.aiplatform.v1.FeatureSelectorB�A"
skip_online_storage_delete (B
DeleteOption"�
DeleteFeatureValuesResponse]
select_entity (2D.google.cloud.aiplatform.v1.DeleteFeatureValuesResponse.SelectEntityH z
select_time_range_and_feature (2Q.google.cloud.aiplatform.v1.DeleteFeatureValuesResponse.SelectTimeRangeAndFeatureH m
SelectEntity0
(offline_storage_deleted_entity_row_count (+
#online_storage_deleted_entity_count (�
SelectTimeRangeAndFeature
impacted_feature_count (1
)offline_storage_modified_entity_row_count (,
$online_storage_modified_entity_count (B

response"{
EntityIdSelector;

csv_source (2%.google.cloud.aiplatform.v1.CsvSourceH 
entity_id_field (	B
EntityIdsSource2�)
FeaturestoreService�
CreateFeaturestore5.google.cloud.aiplatform.v1.CreateFeaturestoreRequest.google.longrunning.Operation"��A3
Featurestore#CreateFeaturestoreOperationMetadata�Aparent,featurestore�A#parent,featurestore,featurestore_id���A"1/v1/{parent=projects/*/locations/*}/featurestores:featurestore�
GetFeaturestore2.google.cloud.aiplatform.v1.GetFeaturestoreRequest(.google.cloud.aiplatform.v1.Featurestore"@�Aname���31/v1/{name=projects/*/locations/*/featurestores/*}�
ListFeaturestores4.google.cloud.aiplatform.v1.ListFeaturestoresRequest5.google.cloud.aiplatform.v1.ListFeaturestoresResponse"B�Aparent���31/v1/{parent=projects/*/locations/*}/featurestores�
UpdateFeaturestore5.google.cloud.aiplatform.v1.UpdateFeaturestoreRequest.google.longrunning.Operation"��A3
Featurestore#UpdateFeaturestoreOperationMetadata�Afeaturestore,update_mask���N2>/v1/{featurestore.name=projects/*/locations/*/featurestores/*}:featurestore�
DeleteFeaturestore5.google.cloud.aiplatform.v1.DeleteFeaturestoreRequest.google.longrunning.Operation"��A0
google.protobuf.EmptyDeleteOperationMetadata�Aname�A
name,force���3*1/v1/{name=projects/*/locations/*/featurestores/*}�
CreateEntityType3.google.cloud.aiplatform.v1.CreateEntityTypeRequest.google.longrunning.Operation"��A/

EntityType!CreateEntityTypeOperationMetadata�Aparent,entity_type�A!parent,entity_type,entity_type_id���N"?/v1/{parent=projects/*/locations/*/featurestores/*}/entityTypes:entity_type�
GetEntityType0.google.cloud.aiplatform.v1.GetEntityTypeRequest&.google.cloud.aiplatform.v1.EntityType"N�Aname���A?/v1/{name=projects/*/locations/*/featurestores/*/entityTypes/*}�
ListEntityTypes2.google.cloud.aiplatform.v1.ListEntityTypesRequest3.google.cloud.aiplatform.v1.ListEntityTypesResponse"P�Aparent���A?/v1/{parent=projects/*/locations/*/featurestores/*}/entityTypes�
UpdateEntityType3.google.cloud.aiplatform.v1.UpdateEntityTypeRequest&.google.cloud.aiplatform.v1.EntityType"z�Aentity_type,update_mask���Z2K/v1/{entity_type.name=projects/*/locations/*/featurestores/*/entityTypes/*}:entity_type�
DeleteEntityType3.google.cloud.aiplatform.v1.DeleteEntityTypeRequest.google.longrunning.Operation"��A0
google.protobuf.EmptyDeleteOperationMetadata�Aname�A
name,force���A*?/v1/{name=projects/*/locations/*/featurestores/*/entityTypes/*}�
CreateFeature0.google.cloud.aiplatform.v1.CreateFeatureRequest.google.longrunning.Operation"��A)
FeatureCreateFeatureOperationMetadata�Aparent,feature�Aparent,feature,feature_id���U"J/v1/{parent=projects/*/locations/*/featurestores/*/entityTypes/*}/features:feature�
BatchCreateFeatures6.google.cloud.aiplatform.v1.BatchCreateFeaturesRequest.google.longrunning.Operation"��AC
BatchCreateFeaturesResponse$BatchCreateFeaturesOperationMetadata�Aparent,requests���["V/v1/{parent=projects/*/locations/*/featurestores/*/entityTypes/*}/features:batchCreate:*�

GetFeature-.google.cloud.aiplatform.v1.GetFeatureRequest#.google.cloud.aiplatform.v1.Feature"Y�Aname���LJ/v1/{name=projects/*/locations/*/featurestores/*/entityTypes/*/features/*}�
ListFeatures/.google.cloud.aiplatform.v1.ListFeaturesRequest0.google.cloud.aiplatform.v1.ListFeaturesResponse"[�Aparent���LJ/v1/{parent=projects/*/locations/*/featurestores/*/entityTypes/*}/features�
UpdateFeature0.google.cloud.aiplatform.v1.UpdateFeatureRequest#.google.cloud.aiplatform.v1.Feature"y�Afeature,update_mask���]2R/v1/{feature.name=projects/*/locations/*/featurestores/*/entityTypes/*/features/*}:feature�
DeleteFeature0.google.cloud.aiplatform.v1.DeleteFeatureRequest.google.longrunning.Operation"��A0
google.protobuf.EmptyDeleteOperationMetadata�Aname���L*J/v1/{name=projects/*/locations/*/featurestores/*/entityTypes/*/features/*}�
ImportFeatureValues6.google.cloud.aiplatform.v1.ImportFeatureValuesRequest.google.longrunning.Operation"��AC
ImportFeatureValuesResponse$ImportFeatureValuesOperationMetadata�Aentity_type���_"Z/v1/{entity_type=projects/*/locations/*/featurestores/*/entityTypes/*}:importFeatureValues:*�
BatchReadFeatureValues9.google.cloud.aiplatform.v1.BatchReadFeatureValuesRequest.google.longrunning.Operation"��AI
BatchReadFeatureValuesResponse\'BatchReadFeatureValuesOperationMetadata�Afeaturestore���U"P/v1/{featurestore=projects/*/locations/*/featurestores/*}:batchReadFeatureValues:*�
ExportFeatureValues6.google.cloud.aiplatform.v1.ExportFeatureValuesRequest.google.longrunning.Operation"��AC
ExportFeatureValuesResponse$ExportFeatureValuesOperationMetadata�Aentity_type���_"Z/v1/{entity_type=projects/*/locations/*/featurestores/*/entityTypes/*}:exportFeatureValues:*�
DeleteFeatureValues6.google.cloud.aiplatform.v1.DeleteFeatureValuesRequest.google.longrunning.Operation"��AC
DeleteFeatureValuesResponse$DeleteFeatureValuesOperationMetadata�Aentity_type���_"Z/v1/{entity_type=projects/*/locations/*/featurestores/*/entityTypes/*}:deleteFeatureValues:*�
SearchFeatures1.google.cloud.aiplatform.v1.SearchFeaturesRequest2.google.cloud.aiplatform.v1.SearchFeaturesResponse"f�Alocation�Alocation,query���DB/v1/{location=projects/*/locations/*}/featurestores:searchFeaturesM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BFeaturestoreServiceProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

