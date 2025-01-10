<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/content.proto

namespace Google\Cloud\AIPlatform\V1\GroundingChunk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Chunk from the web.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GroundingChunk.Web</code>
 */
class Web extends \Google\Protobuf\Internal\Message
{
    /**
     * URI reference of the chunk.
     *
     * Generated from protobuf field <code>optional string uri = 1;</code>
     */
    protected $uri = null;
    /**
     * Title of the chunk.
     *
     * Generated from protobuf field <code>optional string title = 2;</code>
     */
    protected $title = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           URI reference of the chunk.
     *     @type string $title
     *           Title of the chunk.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Content::initOnce();
        parent::__construct($data);
    }

    /**
     * URI reference of the chunk.
     *
     * Generated from protobuf field <code>optional string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return isset($this->uri) ? $this->uri : '';
    }

    public function hasUri()
    {
        return isset($this->uri);
    }

    public function clearUri()
    {
        unset($this->uri);
    }

    /**
     * URI reference of the chunk.
     *
     * Generated from protobuf field <code>optional string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Title of the chunk.
     *
     * Generated from protobuf field <code>optional string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return isset($this->title) ? $this->title : '';
    }

    public function hasTitle()
    {
        return isset($this->title);
    }

    public function clearTitle()
    {
        unset($this->title);
    }

    /**
     * Title of the chunk.
     *
     * Generated from protobuf field <code>optional string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

}


