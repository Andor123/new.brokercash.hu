<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/webhook.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the language information of the request.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.LanguageInfo</code>
 */
class LanguageInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The language code specified in the original
     * [request][google.cloud.dialogflow.cx.v3.QueryInput.language_code].
     *
     * Generated from protobuf field <code>string input_language_code = 1;</code>
     */
    protected $input_language_code = '';
    /**
     * The language code detected for this request based on the user
     * conversation.
     *
     * Generated from protobuf field <code>string resolved_language_code = 2;</code>
     */
    protected $resolved_language_code = '';
    /**
     * The confidence score of the detected language between 0 and 1.
     *
     * Generated from protobuf field <code>float confidence_score = 3;</code>
     */
    protected $confidence_score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $input_language_code
     *           The language code specified in the original
     *           [request][google.cloud.dialogflow.cx.v3.QueryInput.language_code].
     *     @type string $resolved_language_code
     *           The language code detected for this request based on the user
     *           conversation.
     *     @type float $confidence_score
     *           The confidence score of the detected language between 0 and 1.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Webhook::initOnce();
        parent::__construct($data);
    }

    /**
     * The language code specified in the original
     * [request][google.cloud.dialogflow.cx.v3.QueryInput.language_code].
     *
     * Generated from protobuf field <code>string input_language_code = 1;</code>
     * @return string
     */
    public function getInputLanguageCode()
    {
        return $this->input_language_code;
    }

    /**
     * The language code specified in the original
     * [request][google.cloud.dialogflow.cx.v3.QueryInput.language_code].
     *
     * Generated from protobuf field <code>string input_language_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInputLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_language_code = $var;

        return $this;
    }

    /**
     * The language code detected for this request based on the user
     * conversation.
     *
     * Generated from protobuf field <code>string resolved_language_code = 2;</code>
     * @return string
     */
    public function getResolvedLanguageCode()
    {
        return $this->resolved_language_code;
    }

    /**
     * The language code detected for this request based on the user
     * conversation.
     *
     * Generated from protobuf field <code>string resolved_language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResolvedLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->resolved_language_code = $var;

        return $this;
    }

    /**
     * The confidence score of the detected language between 0 and 1.
     *
     * Generated from protobuf field <code>float confidence_score = 3;</code>
     * @return float
     */
    public function getConfidenceScore()
    {
        return $this->confidence_score;
    }

    /**
     * The confidence score of the detected language between 0 and 1.
     *
     * Generated from protobuf field <code>float confidence_score = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidenceScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence_score = $var;

        return $this;
    }

}
