<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/outputs.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encoding of a text stream. For example, closed captions or subtitles.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.TextStream</code>
 */
class TextStream extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The codec for this text stream.
     * Supported text codecs:
     * - `cea608`
     * - `cea708`
     *
     * Generated from protobuf field <code>string codec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $codec = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $codec
     *           Required. The codec for this text stream.
     *           Supported text codecs:
     *           - `cea608`
     *           - `cea708`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Outputs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The codec for this text stream.
     * Supported text codecs:
     * - `cea608`
     * - `cea708`
     *
     * Generated from protobuf field <code>string codec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * Required. The codec for this text stream.
     * Supported text codecs:
     * - `cea608`
     * - `cea708`
     *
     * Generated from protobuf field <code>string codec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->codec = $var;

        return $this;
    }

}

