<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Index
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DeployedIndexRef::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EncryptionSpec::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/aiplatform/v1/index.protogoogle.cloud.aiplatform.v1google/api/resource.proto3google/cloud/aiplatform/v1/deployed_index_ref.proto0google/cloud/aiplatform/v1/encryption_spec.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
Index
name (	B�A
display_name (	B�A
description (	 
metadata_schema_uri (	B�A(
metadata (2.google.protobuf.ValueK
deployed_indexes (2,.google.cloud.aiplatform.v1.DeployedIndexRefB�A
etag (	=
labels	 (2-.google.cloud.aiplatform.v1.Index.LabelsEntry4
create_time
 (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A@
index_stats (2&.google.cloud.aiplatform.v1.IndexStatsB�AU
index_update_method (23.google.cloud.aiplatform.v1.Index.IndexUpdateMethodB�AH
encryption_spec (2*.google.cloud.aiplatform.v1.EncryptionSpecB�A
satisfies_pzs (B�A
satisfies_pzi (B�A-
LabelsEntry
key (	
value (	:8"]
IndexUpdateMethod#
INDEX_UPDATE_METHOD_UNSPECIFIED 
BATCH_UPDATE
STREAM_UPDATE:]�AZ
aiplatform.googleapis.com/Index7projects/{project}/locations/{location}/indexes/{index}"�
IndexDatapoint
datapoint_id (	B�A
feature_vector (B�AY
sparse_embedding (2:.google.cloud.aiplatform.v1.IndexDatapoint.SparseEmbeddingB�AN
	restricts (26.google.cloud.aiplatform.v1.IndexDatapoint.RestrictionB�A]
numeric_restricts (2=.google.cloud.aiplatform.v1.IndexDatapoint.NumericRestrictionB�AQ
crowding_tag (26.google.cloud.aiplatform.v1.IndexDatapoint.CrowdingTagB�A?
SparseEmbedding
values (B�A

dimensions (B�AG
Restriction
	namespace (	

allow_list (	
	deny_list (	�
NumericRestriction
	value_int (H 
value_float (H 
value_double (H 
	namespace (	R
op (2F.google.cloud.aiplatform.v1.IndexDatapoint.NumericRestriction.Operator"x
Operator
OPERATOR_UNSPECIFIED 
LESS

LESS_EQUAL	
EQUAL
GREATER_EQUAL
GREATER
	NOT_EQUALB
Value)
CrowdingTag
crowding_attribute (	"f

IndexStats
vectors_count (B�A!
sparse_vectors_count (B�A
shards_count (B�AB�
com.google.cloud.aiplatform.v1B
IndexProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

