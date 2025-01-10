<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DiscoveryBigQueryFilter;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Catch-all for all other tables not specified by other filters. Should
 * always be last, except for single-table configurations, which will only
 * have a TableReference target.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DiscoveryBigQueryFilter.AllOtherBigQueryTables</code>
 */
class AllOtherBigQueryTables extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

}


