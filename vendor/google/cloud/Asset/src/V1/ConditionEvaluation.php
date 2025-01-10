<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The condition evaluation.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.ConditionEvaluation</code>
 */
class ConditionEvaluation extends \Google\Protobuf\Internal\Message
{
    /**
     * The evaluation result.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.ConditionEvaluation.EvaluationValue evaluation_value = 1;</code>
     */
    protected $evaluation_value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $evaluation_value
     *           The evaluation result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * The evaluation result.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.ConditionEvaluation.EvaluationValue evaluation_value = 1;</code>
     * @return int
     */
    public function getEvaluationValue()
    {
        return $this->evaluation_value;
    }

    /**
     * The evaluation result.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.ConditionEvaluation.EvaluationValue evaluation_value = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEvaluationValue($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Asset\V1\ConditionEvaluation\EvaluationValue::class);
        $this->evaluation_value = $var;

        return $this;
    }

}
