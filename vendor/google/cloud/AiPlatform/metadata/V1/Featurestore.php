<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Featurestore
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EncryptionSpec::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/aiplatform/v1/featurestore.protogoogle.cloud.aiplatform.v1google/api/resource.proto0google/cloud/aiplatform/v1/encryption_spec.protogoogle/protobuf/timestamp.proto"�
Featurestore
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
etag (	B�AI
labels (24.google.cloud.aiplatform.v1.Featurestore.LabelsEntryB�A`
online_serving_config (2<.google.cloud.aiplatform.v1.Featurestore.OnlineServingConfigB�AB
state (2..google.cloud.aiplatform.v1.Featurestore.StateB�A$
online_storage_ttl_days (B�AH
encryption_spec
 (2*.google.cloud.aiplatform.v1.EncryptionSpecB�A
satisfies_pzs (B�A
satisfies_pzi (B�A�
OnlineServingConfig
fixed_node_count (U
scaling (2D.google.cloud.aiplatform.v1.Featurestore.OnlineServingConfig.Scalingc
Scaling
min_node_count (B�A
max_node_count (#
cpu_utilization_target (B�A-
LabelsEntry
key (	
value (	:8"8
State
STATE_UNSPECIFIED 

STABLE
UPDATING:q�An
&aiplatform.googleapis.com/FeaturestoreDprojects/{project}/locations/{location}/featurestores/{featurestore}B�
com.google.cloud.aiplatform.v1BFeaturestoreProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

