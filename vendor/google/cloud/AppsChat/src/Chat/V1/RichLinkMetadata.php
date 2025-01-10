<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/annotation.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rich link to a resource.
 *
 * Generated from protobuf message <code>google.chat.v1.RichLinkMetadata</code>
 */
class RichLinkMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The URI of this link.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    protected $uri = '';
    /**
     * The rich link type.
     *
     * Generated from protobuf field <code>.google.chat.v1.RichLinkMetadata.RichLinkType rich_link_type = 2;</code>
     */
    protected $rich_link_type = 0;
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           The URI of this link.
     *     @type int $rich_link_type
     *           The rich link type.
     *     @type \Google\Apps\Chat\V1\DriveLinkData $drive_link_data
     *           Data for a drive link.
     *     @type \Google\Apps\Chat\V1\ChatSpaceLinkData $chat_space_link_data
     *           Data for a chat space link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Annotation::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI of this link.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The URI of this link.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
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
     * The rich link type.
     *
     * Generated from protobuf field <code>.google.chat.v1.RichLinkMetadata.RichLinkType rich_link_type = 2;</code>
     * @return int
     */
    public function getRichLinkType()
    {
        return $this->rich_link_type;
    }

    /**
     * The rich link type.
     *
     * Generated from protobuf field <code>.google.chat.v1.RichLinkMetadata.RichLinkType rich_link_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRichLinkType($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Chat\V1\RichLinkMetadata\RichLinkType::class);
        $this->rich_link_type = $var;

        return $this;
    }

    /**
     * Data for a drive link.
     *
     * Generated from protobuf field <code>.google.chat.v1.DriveLinkData drive_link_data = 3;</code>
     * @return \Google\Apps\Chat\V1\DriveLinkData|null
     */
    public function getDriveLinkData()
    {
        return $this->readOneof(3);
    }

    public function hasDriveLinkData()
    {
        return $this->hasOneof(3);
    }

    /**
     * Data for a drive link.
     *
     * Generated from protobuf field <code>.google.chat.v1.DriveLinkData drive_link_data = 3;</code>
     * @param \Google\Apps\Chat\V1\DriveLinkData $var
     * @return $this
     */
    public function setDriveLinkData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\DriveLinkData::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Data for a chat space link.
     *
     * Generated from protobuf field <code>.google.chat.v1.ChatSpaceLinkData chat_space_link_data = 4;</code>
     * @return \Google\Apps\Chat\V1\ChatSpaceLinkData|null
     */
    public function getChatSpaceLinkData()
    {
        return $this->readOneof(4);
    }

    public function hasChatSpaceLinkData()
    {
        return $this->hasOneof(4);
    }

    /**
     * Data for a chat space link.
     *
     * Generated from protobuf field <code>.google.chat.v1.ChatSpaceLinkData chat_space_link_data = 4;</code>
     * @param \Google\Apps\Chat\V1\ChatSpaceLinkData $var
     * @return $this
     */
    public function setChatSpaceLinkData($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\ChatSpaceLinkData::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}
