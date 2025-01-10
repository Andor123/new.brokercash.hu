<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/evaluation_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec for coherence instance.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CoherenceInstance</code>
 */
class CoherenceInstance extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Output of the evaluated model.
     *
     * Generated from protobuf field <code>optional string prediction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $prediction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $prediction
     *           Required. Output of the evaluated model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EvaluationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Output of the evaluated model.
     *
     * Generated from protobuf field <code>optional string prediction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPrediction()
    {
        return isset($this->prediction) ? $this->prediction : '';
    }

    public function hasPrediction()
    {
        return isset($this->prediction);
    }

    public function clearPrediction()
    {
        unset($this->prediction);
    }

    /**
     * Required. Output of the evaluated model.
     *
     * Generated from protobuf field <code>optional string prediction = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPrediction($var)
    {
        GPBUtil::checkString($var, True);
        $this->prediction = $var;

        return $this;
    }

}
