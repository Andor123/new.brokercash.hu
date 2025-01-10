<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1\PreprocessingConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video cropping configuration for the input video. The cropped input video
 * is scaled to match the output resolution.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.PreprocessingConfig.Crop</code>
 */
class Crop extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of pixels to crop from the top. The default is 0.
     *
     * Generated from protobuf field <code>int32 top_pixels = 1;</code>
     */
    protected $top_pixels = 0;
    /**
     * The number of pixels to crop from the bottom. The default is 0.
     *
     * Generated from protobuf field <code>int32 bottom_pixels = 2;</code>
     */
    protected $bottom_pixels = 0;
    /**
     * The number of pixels to crop from the left. The default is 0.
     *
     * Generated from protobuf field <code>int32 left_pixels = 3;</code>
     */
    protected $left_pixels = 0;
    /**
     * The number of pixels to crop from the right. The default is 0.
     *
     * Generated from protobuf field <code>int32 right_pixels = 4;</code>
     */
    protected $right_pixels = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $top_pixels
     *           The number of pixels to crop from the top. The default is 0.
     *     @type int $bottom_pixels
     *           The number of pixels to crop from the bottom. The default is 0.
     *     @type int $left_pixels
     *           The number of pixels to crop from the left. The default is 0.
     *     @type int $right_pixels
     *           The number of pixels to crop from the right. The default is 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of pixels to crop from the top. The default is 0.
     *
     * Generated from protobuf field <code>int32 top_pixels = 1;</code>
     * @return int
     */
    public function getTopPixels()
    {
        return $this->top_pixels;
    }

    /**
     * The number of pixels to crop from the top. The default is 0.
     *
     * Generated from protobuf field <code>int32 top_pixels = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTopPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->top_pixels = $var;

        return $this;
    }

    /**
     * The number of pixels to crop from the bottom. The default is 0.
     *
     * Generated from protobuf field <code>int32 bottom_pixels = 2;</code>
     * @return int
     */
    public function getBottomPixels()
    {
        return $this->bottom_pixels;
    }

    /**
     * The number of pixels to crop from the bottom. The default is 0.
     *
     * Generated from protobuf field <code>int32 bottom_pixels = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBottomPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->bottom_pixels = $var;

        return $this;
    }

    /**
     * The number of pixels to crop from the left. The default is 0.
     *
     * Generated from protobuf field <code>int32 left_pixels = 3;</code>
     * @return int
     */
    public function getLeftPixels()
    {
        return $this->left_pixels;
    }

    /**
     * The number of pixels to crop from the left. The default is 0.
     *
     * Generated from protobuf field <code>int32 left_pixels = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLeftPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->left_pixels = $var;

        return $this;
    }

    /**
     * The number of pixels to crop from the right. The default is 0.
     *
     * Generated from protobuf field <code>int32 right_pixels = 4;</code>
     * @return int
     */
    public function getRightPixels()
    {
        return $this->right_pixels;
    }

    /**
     * The number of pixels to crop from the right. The default is 0.
     *
     * Generated from protobuf field <code>int32 right_pixels = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRightPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->right_pixels = $var;

        return $this;
    }

}

