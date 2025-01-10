<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/export_config.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class ExportConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/cloud/retail/v2/export_config.protogoogle.cloud.retail.v2google/api/resource.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
OutputConfigN
gcs_destination (23.google.cloud.retail.v2.OutputConfig.GcsDestinationH X
bigquery_destination (28.google.cloud.retail.v2.OutputConfig.BigQueryDestinationH 0
GcsDestination
output_uri_prefix (	B�Ae
BigQueryDestination

dataset_id (	B�A
table_id_prefix (	B�A

table_type (	B�AB
destination"9
ExportErrorsConfig

gcs_prefix (	H B
destination"�
ExportAnalyticsMetricsRequest
catalog (	B�A@
output_config (2$.google.cloud.retail.v2.OutputConfigB�A
filter (	"r
ExportMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp"�
ExportAnalyticsMetricsResponse)
error_samples (2.google.rpc.StatusA
errors_config (2*.google.cloud.retail.v2.ExportErrorsConfig;
output_result (2$.google.cloud.retail.v2.OutputResult"�
OutputResultE
bigquery_result (2,.google.cloud.retail.v2.BigQueryOutputResult;

gcs_result (2\'.google.cloud.retail.v2.GcsOutputResult"<
BigQueryOutputResult

dataset_id (	
table_id (	"%
GcsOutputResult

output_uri (	B�
com.google.cloud.retail.v2BExportConfigProtoPZ2cloud.google.com/go/retail/apiv2/retailpb;retailpb�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

