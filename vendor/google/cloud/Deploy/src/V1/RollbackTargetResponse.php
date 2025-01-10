<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response object from `RollbackTarget`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.RollbackTargetResponse</code>
 */
class RollbackTargetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The config of the rollback `Rollout` created or will be created.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RollbackTargetConfig rollback_config = 1;</code>
     */
    protected $rollback_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Deploy\V1\RollbackTargetConfig $rollback_config
     *           The config of the rollback `Rollout` created or will be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * The config of the rollback `Rollout` created or will be created.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RollbackTargetConfig rollback_config = 1;</code>
     * @return \Google\Cloud\Deploy\V1\RollbackTargetConfig|null
     */
    public function getRollbackConfig()
    {
        return $this->rollback_config;
    }

    public function hasRollbackConfig()
    {
        return isset($this->rollback_config);
    }

    public function clearRollbackConfig()
    {
        unset($this->rollback_config);
    }

    /**
     * The config of the rollback `Rollout` created or will be created.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.RollbackTargetConfig rollback_config = 1;</code>
     * @param \Google\Cloud\Deploy\V1\RollbackTargetConfig $var
     * @return $this
     */
    public function setRollbackConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\RollbackTargetConfig::class);
        $this->rollback_config = $var;

        return $this;
    }

}

