<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/types.proto

namespace Google\Cloud\Bigtable\Admin\V2\Type\Aggregate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Computes the max of the input values.
 * Allowed input: `Int64`
 * State: same as input
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Type.Aggregate.Max</code>
 */
class Max extends \Google\Protobuf\Internal\Message
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
        \GPBMetadata\Google\Bigtable\Admin\V2\Types::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Max::class, \Google\Cloud\Bigtable\Admin\V2\Type_Aggregate_Max::class);

