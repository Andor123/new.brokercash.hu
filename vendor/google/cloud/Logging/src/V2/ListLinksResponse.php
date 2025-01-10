<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response from ListLinks.
 *
 * Generated from protobuf message <code>google.logging.v2.ListLinksResponse</code>
 */
class ListLinksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of links.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.Link links = 1;</code>
     */
    private $links;
    /**
     * If there might be more results than those appearing in this response, then
     * `nextPageToken` is included. To get the next set of results, call the same
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Logging\V2\Link>|\Google\Protobuf\Internal\RepeatedField $links
     *           A list of links.
     *     @type string $next_page_token
     *           If there might be more results than those appearing in this response, then
     *           `nextPageToken` is included. To get the next set of results, call the same
     *           method again using the value of `nextPageToken` as `pageToken`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of links.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.Link links = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * A list of links.
     *
     * Generated from protobuf field <code>repeated .google.logging.v2.Link links = 1;</code>
     * @param array<\Google\Cloud\Logging\V2\Link>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Logging\V2\Link::class);
        $this->links = $arr;

        return $this;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `nextPageToken` is included. To get the next set of results, call the same
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `nextPageToken` is included. To get the next set of results, call the same
     * method again using the value of `nextPageToken` as `pageToken`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

