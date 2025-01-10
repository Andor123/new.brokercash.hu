<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/discovery.proto

namespace GPBMetadata\Google\Cloud\Eventarc\V1;

class Discovery
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
�
(google/cloud/eventarc/v1/discovery.protogoogle.cloud.eventarc.v1google/api/resource.proto"�
Provider
name (	B�A
display_name (	B�A=
event_types (2#.google.cloud.eventarc.v1.EventTypeB�A:x�Au
 eventarc.googleapis.com/Provider<projects/{project}/locations/{location}/providers/{provider}*	providers2provider"�
	EventType
type (	B�A
description (	B�AO
filtering_attributes (2,.google.cloud.eventarc.v1.FilteringAttributeB�A
event_schema_uri (	B�A"�
FilteringAttribute
	attribute (	B�A
description (	B�A
required (B�A#
path_pattern_supported (B�ABj
com.google.cloud.eventarc.v1BDiscoveryProtoPZ8cloud.google.com/go/eventarc/apiv1/eventarcpb;eventarcpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

