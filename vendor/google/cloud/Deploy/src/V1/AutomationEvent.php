<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/automation_payload.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payload proto for "clouddeploy.googleapis.com/automation"
 * Platform Log event that describes the Automation related events.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.AutomationEvent</code>
 */
class AutomationEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Debug message for when there is an update on the AutomationRun.
     * Provides further details about the resource creation or state change.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    protected $message = '';
    /**
     * The name of the `AutomationRun`.
     *
     * Generated from protobuf field <code>string automation = 2;</code>
     */
    protected $automation = '';
    /**
     * Unique identifier of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string pipeline_uid = 3;</code>
     */
    protected $pipeline_uid = '';
    /**
     * Type of this notification, e.g. for a Pub/Sub failure.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 4;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           Debug message for when there is an update on the AutomationRun.
     *           Provides further details about the resource creation or state change.
     *     @type string $automation
     *           The name of the `AutomationRun`.
     *     @type string $pipeline_uid
     *           Unique identifier of the `DeliveryPipeline`.
     *     @type int $type
     *           Type of this notification, e.g. for a Pub/Sub failure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\AutomationPayload::initOnce();
        parent::__construct($data);
    }

    /**
     * Debug message for when there is an update on the AutomationRun.
     * Provides further details about the resource creation or state change.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Debug message for when there is an update on the AutomationRun.
     * Provides further details about the resource creation or state change.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * The name of the `AutomationRun`.
     *
     * Generated from protobuf field <code>string automation = 2;</code>
     * @return string
     */
    public function getAutomation()
    {
        return $this->automation;
    }

    /**
     * The name of the `AutomationRun`.
     *
     * Generated from protobuf field <code>string automation = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAutomation($var)
    {
        GPBUtil::checkString($var, True);
        $this->automation = $var;

        return $this;
    }

    /**
     * Unique identifier of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string pipeline_uid = 3;</code>
     * @return string
     */
    public function getPipelineUid()
    {
        return $this->pipeline_uid;
    }

    /**
     * Unique identifier of the `DeliveryPipeline`.
     *
     * Generated from protobuf field <code>string pipeline_uid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPipelineUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->pipeline_uid = $var;

        return $this;
    }

    /**
     * Type of this notification, e.g. for a Pub/Sub failure.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of this notification, e.g. for a Pub/Sub failure.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.Type type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Deploy\V1\Type::class);
        $this->type = $var;

        return $this;
    }

}

