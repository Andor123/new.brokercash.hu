<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orgpolicy/v2/orgpolicy.proto

namespace Google\Cloud\OrgPolicy\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response returned from the [ListCustomConstraints]
 * [google.cloud.orgpolicy.v2.OrgPolicy.ListCustomConstraints] method. It will
 * be empty if no custom constraints are set on the organization resource.
 *
 * Generated from protobuf message <code>google.cloud.orgpolicy.v2.ListCustomConstraintsResponse</code>
 */
class ListCustomConstraintsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All custom constraints that exist on the organization resource. It will be
     * empty if no custom constraints are set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.orgpolicy.v2.CustomConstraint custom_constraints = 1;</code>
     */
    private $custom_constraints;
    /**
     * Page token used to retrieve the next page. This is currently not used, but
     * the server may at any point start supplying a valid token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\OrgPolicy\V2\CustomConstraint>|\Google\Protobuf\Internal\RepeatedField $custom_constraints
     *           All custom constraints that exist on the organization resource. It will be
     *           empty if no custom constraints are set.
     *     @type string $next_page_token
     *           Page token used to retrieve the next page. This is currently not used, but
     *           the server may at any point start supplying a valid token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orgpolicy\V2\Orgpolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * All custom constraints that exist on the organization resource. It will be
     * empty if no custom constraints are set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.orgpolicy.v2.CustomConstraint custom_constraints = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomConstraints()
    {
        return $this->custom_constraints;
    }

    /**
     * All custom constraints that exist on the organization resource. It will be
     * empty if no custom constraints are set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.orgpolicy.v2.CustomConstraint custom_constraints = 1;</code>
     * @param array<\Google\Cloud\OrgPolicy\V2\CustomConstraint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomConstraints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OrgPolicy\V2\CustomConstraint::class);
        $this->custom_constraints = $arr;

        return $this;
    }

    /**
     * Page token used to retrieve the next page. This is currently not used, but
     * the server may at any point start supplying a valid token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Page token used to retrieve the next page. This is currently not used, but
     * the server may at any point start supplying a valid token.
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

