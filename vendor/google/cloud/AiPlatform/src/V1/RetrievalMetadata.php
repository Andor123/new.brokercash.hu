<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata related to retrieval in the grounding flow.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.RetrievalMetadata</code>
 */
class RetrievalMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Score indicating how likely information from google search could
     * help answer the prompt. The score is in the range `[0, 1]`, where 0 is the
     * least likely and 1 is the most likely. This score is only populated when
     * google search grounding and dynamic retrieval is enabled. It will be
     * compared to the threshold to determine whether to trigger google search.
     *
     * Generated from protobuf field <code>float google_search_dynamic_retrieval_score = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $google_search_dynamic_retrieval_score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $google_search_dynamic_retrieval_score
     *           Optional. Score indicating how likely information from google search could
     *           help answer the prompt. The score is in the range `[0, 1]`, where 0 is the
     *           least likely and 1 is the most likely. This score is only populated when
     *           google search grounding and dynamic retrieval is enabled. It will be
     *           compared to the threshold to determine whether to trigger google search.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Score indicating how likely information from google search could
     * help answer the prompt. The score is in the range `[0, 1]`, where 0 is the
     * least likely and 1 is the most likely. This score is only populated when
     * google search grounding and dynamic retrieval is enabled. It will be
     * compared to the threshold to determine whether to trigger google search.
     *
     * Generated from protobuf field <code>float google_search_dynamic_retrieval_score = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getGoogleSearchDynamicRetrievalScore()
    {
        return $this->google_search_dynamic_retrieval_score;
    }

    /**
     * Optional. Score indicating how likely information from google search could
     * help answer the prompt. The score is in the range `[0, 1]`, where 0 is the
     * least likely and 1 is the most likely. This score is only populated when
     * google search grounding and dynamic retrieval is enabled. It will be
     * compared to the threshold to determine whether to trigger google search.
     *
     * Generated from protobuf field <code>float google_search_dynamic_retrieval_score = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setGoogleSearchDynamicRetrievalScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->google_search_dynamic_retrieval_score = $var;

        return $this;
    }

}

