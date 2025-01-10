<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/document_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class DocumentService
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
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Document::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ImportConfig::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\PurgeConfig::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�)
6google/cloud/discoveryengine/v1/document_service.protogoogle.cloud.discoveryengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto.google/cloud/discoveryengine/v1/document.proto3google/cloud/discoveryengine/v1/import_config.proto2google/cloud/discoveryengine/v1/purge_config.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"S
GetDocumentRequest=
name (	B/�A�A)
\'discoveryengine.googleapis.com/Document"|
ListDocumentsRequest=
parent (	B-�A�A\'
%discoveryengine.googleapis.com/Branch
	page_size (

page_token (	"n
ListDocumentsResponse<
	documents (2).google.cloud.discoveryengine.v1.Document
next_page_token (	"�
CreateDocumentRequest=
parent (	B-�A�A\'
%discoveryengine.googleapis.com/Branch@
document (2).google.cloud.discoveryengine.v1.DocumentB�A
document_id (	B�A"�
UpdateDocumentRequest@
document (2).google.cloud.discoveryengine.v1.DocumentB�A
allow_missing (/
update_mask (2.google.protobuf.FieldMask"V
DeleteDocumentRequest=
name (	B/�A�A)
\'discoveryengine.googleapis.com/Document"�
 BatchGetDocumentsMetadataRequest=
parent (	B-�A�A\'
%discoveryengine.googleapis.com/Branch_
matcher (2I.google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataRequest.MatcherB�A
UrisMatcher
uris (	{
Matchere
uris_matcher (2M.google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataRequest.UrisMatcherH B	
matcher"�
!BatchGetDocumentsMetadataResponseo
documents_metadata (2S.google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataResponse.DocumentMetadata�
DocumentMetadataw
matcher_value (2`.google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataResponse.DocumentMetadata.MatcherValueW
state (2H.google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataResponse.State7
last_refreshed_time (2.google.protobuf.Timestamp
data_ingestion_source (	.
MatcherValue
uri (	H B
matcher_value"U
State
STATE_UNSPECIFIED 
INDEXED
NOT_IN_TARGET_SITE
NOT_IN_INDEX2�
DocumentService�
GetDocument3.google.cloud.discoveryengine.v1.GetDocumentRequest).google.cloud.discoveryengine.v1.Document"��Aname����E/v1/{name=projects/*/locations/*/dataStores/*/branches/*/documents/*}ZUS/v1/{name=projects/*/locations/*/collections/*/dataStores/*/branches/*/documents/*}�
ListDocuments5.google.cloud.discoveryengine.v1.ListDocumentsRequest6.google.cloud.discoveryengine.v1.ListDocumentsResponse"��Aparent����E/v1/{parent=projects/*/locations/*/dataStores/*/branches/*}/documentsZUS/v1/{parent=projects/*/locations/*/collections/*/dataStores/*/branches/*}/documents�
CreateDocument6.google.cloud.discoveryengine.v1.CreateDocumentRequest).google.cloud.discoveryengine.v1.Document"��Aparent,document,document_id����"E/v1/{parent=projects/*/locations/*/dataStores/*/branches/*}/documents:documentZ_"S/v1/{parent=projects/*/locations/*/collections/*/dataStores/*/branches/*}/documents:document�
UpdateDocument6.google.cloud.discoveryengine.v1.UpdateDocumentRequest).google.cloud.discoveryengine.v1.Document"��Adocument,update_mask����2N/v1/{document.name=projects/*/locations/*/dataStores/*/branches/*/documents/*}:documentZh2\\/v1/{document.name=projects/*/locations/*/collections/*/dataStores/*/branches/*/documents/*}:document�
DeleteDocument6.google.cloud.discoveryengine.v1.DeleteDocumentRequest.google.protobuf.Empty"��Aname����*E/v1/{name=projects/*/locations/*/dataStores/*/branches/*/documents/*}ZU*S/v1/{name=projects/*/locations/*/collections/*/dataStores/*/branches/*/documents/*}�
ImportDocuments7.google.cloud.discoveryengine.v1.ImportDocumentsRequest.google.longrunning.Operation"��Ar
7google.cloud.discoveryengine.v1.ImportDocumentsResponse7google.cloud.discoveryengine.v1.ImportDocumentsMetadata����"L/v1/{parent=projects/*/locations/*/dataStores/*/branches/*}/documents:import:*Z_"Z/v1/{parent=projects/*/locations/*/collections/*/dataStores/*/branches/*}/documents:import:*�
PurgeDocuments6.google.cloud.discoveryengine.v1.PurgeDocumentsRequest.google.longrunning.Operation"��Ap
6google.cloud.discoveryengine.v1.PurgeDocumentsResponse6google.cloud.discoveryengine.v1.PurgeDocumentsMetadata����"K/v1/{parent=projects/*/locations/*/dataStores/*/branches/*}/documents:purge:*Z^"Y/v1/{parent=projects/*/locations/*/collections/*/dataStores/*/branches/*}/documents:purge:*�
BatchGetDocumentsMetadataA.google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataRequestB.google.cloud.discoveryengine.v1.BatchGetDocumentsMetadataResponse"��Aparent����U/v1/{parent=projects/*/locations/*/dataStores/*/branches/*}/batchGetDocumentsMetadataZec/v1/{parent=projects/*/locations/*/collections/*/dataStores/*/branches/*}/batchGetDocumentsMetadataR�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.discoveryengine.v1BDocumentServiceProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

