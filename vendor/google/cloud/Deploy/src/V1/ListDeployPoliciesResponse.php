<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response object from `ListDeployPolicies`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.ListDeployPoliciesResponse</code>
 */
class ListDeployPoliciesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The `DeployPolicy` objects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.DeployPolicy deploy_policies = 1;</code>
     */
    private $deploy_policies;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Deploy\V1\DeployPolicy>|\Google\Protobuf\Internal\RepeatedField $deploy_policies
     *           The `DeployPolicy` objects.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * The `DeployPolicy` objects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.DeployPolicy deploy_policies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeployPolicies()
    {
        return $this->deploy_policies;
    }

    /**
     * The `DeployPolicy` objects.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.DeployPolicy deploy_policies = 1;</code>
     * @param array<\Google\Cloud\Deploy\V1\DeployPolicy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeployPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Deploy\V1\DeployPolicy::class);
        $this->deploy_policies = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
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

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

