<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/support/v2/attachment_service.proto

namespace GPBMetadata\Google\Cloud\Support\V2;

class AttachmentService
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
        \GPBMetadata\Google\Cloud\Support\V2\Attachment::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
0google/cloud/support/v2/attachment_service.protogoogle.cloud.support.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto(google/cloud/support/v2/attachment.proto"y
ListAttachmentsRequest8
parent (	B(�A�A"
 cloudsupport.googleapis.com/Case
	page_size (

page_token (	"l
ListAttachmentsResponse8
attachments (2#.google.cloud.support.v2.Attachment
next_page_token (	2�
CaseAttachmentService�
ListAttachments/.google.cloud.support.v2.ListAttachmentsRequest0.google.cloud.support.v2.ListAttachmentsResponse"p�Aparent���a+/v2/{parent=projects/*/cases/*}/attachmentsZ20/v2/{parent=organizations/*/cases/*}/attachmentsO�Acloudsupport.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.support.v2BAttachmentServiceProtoPZ5cloud.google.com/go/support/apiv2/supportpb;supportpb�Google.Cloud.Support.V2�Google\\Cloud\\Support\\V2�Google::Cloud::Support::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

