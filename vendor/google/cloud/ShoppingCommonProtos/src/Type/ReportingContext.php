<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/type/types.proto

namespace Google\Shopping\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Reporting contexts that your account and product issues apply to.
 * Reporting contexts are groups of surfaces and formats for product results on
 * Google. They can represent the entire destination (for example, [Shopping
 * ads](https://support.google.com/merchants/answer/6149970)) or a subset of
 * formats within a destination (for example, [Demand Gen
 * ads](https://support.google.com/merchants/answer/13389785)).
 *
 * Generated from protobuf message <code>google.shopping.type.ReportingContext</code>
 */
class ReportingContext extends \Google\Protobuf\Internal\Message
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
        \GPBMetadata\Google\Shopping\Type\Types::initOnce();
        parent::__construct($data);
    }

}
