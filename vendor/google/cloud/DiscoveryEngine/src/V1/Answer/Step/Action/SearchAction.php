<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/answer.proto

namespace Google\Cloud\DiscoveryEngine\V1\Answer\Step\Action;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Search action.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Answer.Step.Action.SearchAction</code>
 */
class SearchAction extends \Google\Protobuf\Internal\Message
{
    /**
     * The query to search.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     */
    protected $query = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *           The query to search.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Answer::initOnce();
        parent::__construct($data);
    }

    /**
     * The query to search.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * The query to search.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

}

