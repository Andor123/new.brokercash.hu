<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to create an Event Threat Detection custom module.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.CreateEventThreatDetectionCustomModuleRequest</code>
 */
class CreateEventThreatDetectionCustomModuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new custom module's parent.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings`.
     *   * `folders/{folder}/eventThreatDetectionSettings`.
     *   * `projects/{project}/eventThreatDetectionSettings`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The module to create. The
     * event_threat_detection_custom_module.name will be ignored and server
     * generated.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.EventThreatDetectionCustomModule event_threat_detection_custom_module = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $event_threat_detection_custom_module = null;

    /**
     * @param string                                                           $parent                           Required. The new custom module's parent.
     *
     *                                                                                                           Its format is:
     *
     *                                                                                                           * `organizations/{organization}/eventThreatDetectionSettings`.
     *                                                                                                           * `folders/{folder}/eventThreatDetectionSettings`.
     *                                                                                                           * `projects/{project}/eventThreatDetectionSettings`. Please see
     *                                                                                                           {@see SecurityCenterClient::eventThreatDetectionSettingsName()} for help formatting this field.
     * @param \Google\Cloud\SecurityCenter\V1\EventThreatDetectionCustomModule $eventThreatDetectionCustomModule Required. The module to create. The
     *                                                                                                           event_threat_detection_custom_module.name will be ignored and server
     *                                                                                                           generated.
     *
     * @return \Google\Cloud\SecurityCenter\V1\CreateEventThreatDetectionCustomModuleRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\SecurityCenter\V1\EventThreatDetectionCustomModule $eventThreatDetectionCustomModule): self
    {
        return (new self())
            ->setParent($parent)
            ->setEventThreatDetectionCustomModule($eventThreatDetectionCustomModule);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The new custom module's parent.
     *           Its format is:
     *             * `organizations/{organization}/eventThreatDetectionSettings`.
     *             * `folders/{folder}/eventThreatDetectionSettings`.
     *             * `projects/{project}/eventThreatDetectionSettings`.
     *     @type \Google\Cloud\SecurityCenter\V1\EventThreatDetectionCustomModule $event_threat_detection_custom_module
     *           Required. The module to create. The
     *           event_threat_detection_custom_module.name will be ignored and server
     *           generated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new custom module's parent.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings`.
     *   * `folders/{folder}/eventThreatDetectionSettings`.
     *   * `projects/{project}/eventThreatDetectionSettings`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The new custom module's parent.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings`.
     *   * `folders/{folder}/eventThreatDetectionSettings`.
     *   * `projects/{project}/eventThreatDetectionSettings`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The module to create. The
     * event_threat_detection_custom_module.name will be ignored and server
     * generated.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.EventThreatDetectionCustomModule event_threat_detection_custom_module = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V1\EventThreatDetectionCustomModule|null
     */
    public function getEventThreatDetectionCustomModule()
    {
        return $this->event_threat_detection_custom_module;
    }

    public function hasEventThreatDetectionCustomModule()
    {
        return isset($this->event_threat_detection_custom_module);
    }

    public function clearEventThreatDetectionCustomModule()
    {
        unset($this->event_threat_detection_custom_module);
    }

    /**
     * Required. The module to create. The
     * event_threat_detection_custom_module.name will be ignored and server
     * generated.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.EventThreatDetectionCustomModule event_threat_detection_custom_module = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V1\EventThreatDetectionCustomModule $var
     * @return $this
     */
    public function setEventThreatDetectionCustomModule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\EventThreatDetectionCustomModule::class);
        $this->event_threat_detection_custom_module = $var;

        return $this;
    }

}

