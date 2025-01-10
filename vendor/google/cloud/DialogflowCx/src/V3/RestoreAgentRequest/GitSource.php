<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/agent.proto

namespace Google\Cloud\Dialogflow\Cx\V3\RestoreAgentRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for restoring from a git branch
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.RestoreAgentRequest.GitSource</code>
 */
class GitSource extends \Google\Protobuf\Internal\Message
{
    /**
     * tracking branch for the git pull
     *
     * Generated from protobuf field <code>string tracking_branch = 1;</code>
     */
    protected $tracking_branch = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tracking_branch
     *           tracking branch for the git pull
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * tracking branch for the git pull
     *
     * Generated from protobuf field <code>string tracking_branch = 1;</code>
     * @return string
     */
    public function getTrackingBranch()
    {
        return $this->tracking_branch;
    }

    /**
     * tracking branch for the git pull
     *
     * Generated from protobuf field <code>string tracking_branch = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingBranch($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_branch = $var;

        return $this;
    }

}

