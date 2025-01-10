<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2\Rule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Replaces a term in the query. Multiple replacement candidates can be
 * specified. All `query_terms` will be replaced with the replacement term.
 * Example: Replace "gShoe" with "google shoe".
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Rule.ReplacementAction</code>
 */
class ReplacementAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Terms from the search query.
     * Will be replaced by replacement term.
     * Can specify up to 100 terms.
     *
     * Generated from protobuf field <code>repeated string query_terms = 2;</code>
     */
    private $query_terms;
    /**
     * Term that will be used for replacement.
     *
     * Generated from protobuf field <code>string replacement_term = 3;</code>
     */
    protected $replacement_term = '';
    /**
     * Will be [deprecated = true] post migration;
     *
     * Generated from protobuf field <code>string term = 1;</code>
     */
    protected $term = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $query_terms
     *           Terms from the search query.
     *           Will be replaced by replacement term.
     *           Can specify up to 100 terms.
     *     @type string $replacement_term
     *           Term that will be used for replacement.
     *     @type string $term
     *           Will be [deprecated = true] post migration;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Terms from the search query.
     * Will be replaced by replacement term.
     * Can specify up to 100 terms.
     *
     * Generated from protobuf field <code>repeated string query_terms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryTerms()
    {
        return $this->query_terms;
    }

    /**
     * Terms from the search query.
     * Will be replaced by replacement term.
     * Can specify up to 100 terms.
     *
     * Generated from protobuf field <code>repeated string query_terms = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryTerms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->query_terms = $arr;

        return $this;
    }

    /**
     * Term that will be used for replacement.
     *
     * Generated from protobuf field <code>string replacement_term = 3;</code>
     * @return string
     */
    public function getReplacementTerm()
    {
        return $this->replacement_term;
    }

    /**
     * Term that will be used for replacement.
     *
     * Generated from protobuf field <code>string replacement_term = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReplacementTerm($var)
    {
        GPBUtil::checkString($var, True);
        $this->replacement_term = $var;

        return $this;
    }

    /**
     * Will be [deprecated = true] post migration;
     *
     * Generated from protobuf field <code>string term = 1;</code>
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Will be [deprecated = true] post migration;
     *
     * Generated from protobuf field <code>string term = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTerm($var)
    {
        GPBUtil::checkString($var, True);
        $this->term = $var;

        return $this;
    }

}

