<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Logprobs Result
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.LogprobsResult</code>
 */
class LogprobsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Length = total number of decoding steps.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.LogprobsResult.TopCandidates top_candidates = 1;</code>
     */
    private $top_candidates;
    /**
     * Length = total number of decoding steps.
     * The chosen candidates may or may not be in top_candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.LogprobsResult.Candidate chosen_candidates = 2;</code>
     */
    private $chosen_candidates;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\LogprobsResult\TopCandidates>|\Google\Protobuf\Internal\RepeatedField $top_candidates
     *           Length = total number of decoding steps.
     *     @type array<\Google\Cloud\AIPlatform\V1\LogprobsResult\Candidate>|\Google\Protobuf\Internal\RepeatedField $chosen_candidates
     *           Length = total number of decoding steps.
     *           The chosen candidates may or may not be in top_candidates.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Length = total number of decoding steps.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.LogprobsResult.TopCandidates top_candidates = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopCandidates()
    {
        return $this->top_candidates;
    }

    /**
     * Length = total number of decoding steps.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.LogprobsResult.TopCandidates top_candidates = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\LogprobsResult\TopCandidates>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopCandidates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\LogprobsResult\TopCandidates::class);
        $this->top_candidates = $arr;

        return $this;
    }

    /**
     * Length = total number of decoding steps.
     * The chosen candidates may or may not be in top_candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.LogprobsResult.Candidate chosen_candidates = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChosenCandidates()
    {
        return $this->chosen_candidates;
    }

    /**
     * Length = total number of decoding steps.
     * The chosen candidates may or may not be in top_candidates.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.LogprobsResult.Candidate chosen_candidates = 2;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\LogprobsResult\Candidate>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChosenCandidates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\LogprobsResult\Candidate::class);
        $this->chosen_candidates = $arr;

        return $this;
    }

}
