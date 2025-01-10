<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DataProfilePubSubCondition;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An expression, consisting of an operator and conditions.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubExpressions</code>
 */
class PubSubExpressions extends \Google\Protobuf\Internal\Message
{
    /**
     * The operator to apply to the collection of conditions.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubExpressions.PubSubLogicalOperator logical_operator = 1;</code>
     */
    protected $logical_operator = 0;
    /**
     * Conditions to apply to the expression.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubCondition conditions = 2;</code>
     */
    private $conditions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $logical_operator
     *           The operator to apply to the collection of conditions.
     *     @type array<\Google\Cloud\Dlp\V2\DataProfilePubSubCondition\PubSubCondition>|\Google\Protobuf\Internal\RepeatedField $conditions
     *           Conditions to apply to the expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The operator to apply to the collection of conditions.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubExpressions.PubSubLogicalOperator logical_operator = 1;</code>
     * @return int
     */
    public function getLogicalOperator()
    {
        return $this->logical_operator;
    }

    /**
     * The operator to apply to the collection of conditions.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubExpressions.PubSubLogicalOperator logical_operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLogicalOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\DataProfilePubSubCondition\PubSubExpressions\PubSubLogicalOperator::class);
        $this->logical_operator = $var;

        return $this;
    }

    /**
     * Conditions to apply to the expression.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubCondition conditions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Conditions to apply to the expression.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.DataProfilePubSubCondition.PubSubCondition conditions = 2;</code>
     * @param array<\Google\Cloud\Dlp\V2\DataProfilePubSubCondition\PubSubCondition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\DataProfilePubSubCondition\PubSubCondition::class);
        $this->conditions = $arr;

        return $this;
    }

}


