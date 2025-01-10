<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/import_config.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class ImportConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Completion::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Document::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\UserEvent::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        $pool->internalAddGeneratedFile(
            '
�4
3google/cloud/discoveryengine/v1/import_config.protogoogle.cloud.discoveryengine.v1google/api/resource.proto0google/cloud/discoveryengine/v1/completion.proto.google/cloud/discoveryengine/v1/document.proto0google/cloud/discoveryengine/v1/user_event.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/type/date.proto"9
	GcsSource

input_uris (	B�A
data_schema (	"�
BigQuerySource+
partition_date (2.google.type.DateH 

project_id (	

dataset_id (	B�A
table_id (	B�A
gcs_staging_dir (	
data_schema (	B
	partition"�
SpannerSource

project_id (	
instance_id (	B�A
database_id (	B�A
table_id (	B�A
enable_data_boost ("�
BigtableOptions
key_field_name (	P
families (2>.google.cloud.discoveryengine.v1.BigtableOptions.FamiliesEntry�
BigtableColumnFamily

field_name (	K
encoding (29.google.cloud.discoveryengine.v1.BigtableOptions.EncodingC
type (25.google.cloud.discoveryengine.v1.BigtableOptions.TypeP
columns (2?.google.cloud.discoveryengine.v1.BigtableOptions.BigtableColumn�
BigtableColumn
	qualifier (B�A

field_name (	K
encoding (29.google.cloud.discoveryengine.v1.BigtableOptions.EncodingC
type (25.google.cloud.discoveryengine.v1.BigtableOptions.Typev
FamiliesEntry
key (	T
value (2E.google.cloud.discoveryengine.v1.BigtableOptions.BigtableColumnFamily:8"z
Type
TYPE_UNSPECIFIED 

STRING

NUMBER
INTEGER
VAR_INTEGER
BIG_NUMERIC
BOOLEAN
JSON":
Encoding
ENCODING_UNSPECIFIED 
TEXT

BINARY"�
BigtableSource

project_id (	
instance_id (	B�A
table_id (	B�AO
bigtable_options (20.google.cloud.discoveryengine.v1.BigtableOptionsB�A"�
FhirStoreSource?

fhir_store (	B+�A�A%
#healthcare.googleapis.com/FhirStore
gcs_staging_dir (	
resource_types (	"�
CloudSqlSource

project_id (	
instance_id (	B�A
database_id (	B�A
table_id (	B�A
gcs_staging_dir (	
offload ("�
AlloyDbSource

project_id (	
location_id (	B�A

cluster_id (	B�A
database_id (	B�A
table_id (	B�A
gcs_staging_dir (	"t
FirestoreSource

project_id (	
database_id (	B�A
collection_id (	B�A
gcs_staging_dir (	"8
ImportErrorConfig

gcs_prefix (	H B
destination"�
ImportUserEventsRequest^
inline_source (2E.google.cloud.discoveryengine.v1.ImportUserEventsRequest.InlineSourceH @

gcs_source (2*.google.cloud.discoveryengine.v1.GcsSourceH J
bigquery_source (2/.google.cloud.discoveryengine.v1.BigQuerySourceH @
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfigT
InlineSourceD
user_events (2*.google.cloud.discoveryengine.v1.UserEventB�AB
source"�
ImportUserEventsResponse)
error_samples (2.google.rpc.StatusH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfig
joined_events_count (
unjoined_events_count ("�
ImportUserEventsMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp
success_count (
failure_count ("�
ImportDocumentsMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp
success_count (
failure_count (
total_count ("�	
ImportDocumentsRequest]
inline_source (2D.google.cloud.discoveryengine.v1.ImportDocumentsRequest.InlineSourceH @

gcs_source (2*.google.cloud.discoveryengine.v1.GcsSourceH J
bigquery_source (2/.google.cloud.discoveryengine.v1.BigQuerySourceH M
fhir_store_source
 (20.google.cloud.discoveryengine.v1.FhirStoreSourceH H
spanner_source (2..google.cloud.discoveryengine.v1.SpannerSourceH K
cloud_sql_source (2/.google.cloud.discoveryengine.v1.CloudSqlSourceH L
firestore_source (20.google.cloud.discoveryengine.v1.FirestoreSourceH I
alloy_db_source (2..google.cloud.discoveryengine.v1.AlloyDbSourceH J
bigtable_source (2/.google.cloud.discoveryengine.v1.BigtableSourceH =
parent (	B-�A�A\'
%discoveryengine.googleapis.com/BranchH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfigg
reconciliation_mode (2J.google.cloud.discoveryengine.v1.ImportDocumentsRequest.ReconciliationMode/
update_mask (2.google.protobuf.FieldMask
auto_generate_ids (
id_field	 (	Q
InlineSourceA
	documents (2).google.cloud.discoveryengine.v1.DocumentB�A"T
ReconciliationMode#
RECONCILIATION_MODE_UNSPECIFIED 
INCREMENTAL
FULLB
source"�
ImportDocumentsResponse)
error_samples (2.google.rpc.StatusH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfig"�
&ImportSuggestionDenyListEntriesRequestm
inline_source (2T.google.cloud.discoveryengine.v1.ImportSuggestionDenyListEntriesRequest.InlineSourceH @

gcs_source (2*.google.cloud.discoveryengine.v1.GcsSourceH @
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore^
InlineSourceN
entries (28.google.cloud.discoveryengine.v1.SuggestionDenyListEntryB�AB
source"�
\'ImportSuggestionDenyListEntriesResponse)
error_samples (2.google.rpc.Status
imported_entries_count (
failed_entries_count ("�
\'ImportSuggestionDenyListEntriesMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp"�
"ImportCompletionSuggestionsRequesti
inline_source (2P.google.cloud.discoveryengine.v1.ImportCompletionSuggestionsRequest.InlineSourceH @

gcs_source (2*.google.cloud.discoveryengine.v1.GcsSourceH J
bigquery_source (2/.google.cloud.discoveryengine.v1.BigQuerySourceH @
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfig_
InlineSourceO
suggestions (25.google.cloud.discoveryengine.v1.CompletionSuggestionB�AB
source"�
#ImportCompletionSuggestionsResponse)
error_samples (2.google.rpc.StatusH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfig"�
#ImportCompletionSuggestionsMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp
success_count (
failure_count (B�
#com.google.cloud.discoveryengine.v1BImportConfigProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

