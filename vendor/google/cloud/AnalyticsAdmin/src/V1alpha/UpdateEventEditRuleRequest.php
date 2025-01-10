<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateEventEditRule RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateEventEditRuleRequest</code>
 */
class UpdateEventEditRuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The EventEditRule to update.
     * The resource's `name` field is used to identify the EventEditRule to be
     * updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EventEditRule event_edit_rule = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $event_edit_rule = null;
    /**
     * Required. The list of fields to be updated. Field names must be in snake
     * case (e.g., "field_to_update"). Omitted fields will not be updated. To
     * replace the entire entity, use one path with the string "*" to match all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Analytics\Admin\V1alpha\EventEditRule $eventEditRule Required. The EventEditRule to update.
     *                                                                     The resource's `name` field is used to identify the EventEditRule to be
     *                                                                     updated.
     * @param \Google\Protobuf\FieldMask                    $updateMask    Required. The list of fields to be updated. Field names must be in snake
     *                                                                     case (e.g., "field_to_update"). Omitted fields will not be updated. To
     *                                                                     replace the entire entity, use one path with the string "*" to match all
     *                                                                     fields.
     *
     * @return \Google\Analytics\Admin\V1alpha\UpdateEventEditRuleRequest
     *
     * @experimental
     */
    public static function build(\Google\Analytics\Admin\V1alpha\EventEditRule $eventEditRule, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setEventEditRule($eventEditRule)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\EventEditRule $event_edit_rule
     *           Required. The EventEditRule to update.
     *           The resource's `name` field is used to identify the EventEditRule to be
     *           updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated. Field names must be in snake
     *           case (e.g., "field_to_update"). Omitted fields will not be updated. To
     *           replace the entire entity, use one path with the string "*" to match all
     *           fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The EventEditRule to update.
     * The resource's `name` field is used to identify the EventEditRule to be
     * updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EventEditRule event_edit_rule = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\EventEditRule|null
     */
    public function getEventEditRule()
    {
        return $this->event_edit_rule;
    }

    public function hasEventEditRule()
    {
        return isset($this->event_edit_rule);
    }

    public function clearEventEditRule()
    {
        unset($this->event_edit_rule);
    }

    /**
     * Required. The EventEditRule to update.
     * The resource's `name` field is used to identify the EventEditRule to be
     * updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.EventEditRule event_edit_rule = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\EventEditRule $var
     * @return $this
     */
    public function setEventEditRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\EventEditRule::class);
        $this->event_edit_rule = $var;

        return $this;
    }

    /**
     * Required. The list of fields to be updated. Field names must be in snake
     * case (e.g., "field_to_update"). Omitted fields will not be updated. To
     * replace the entire entity, use one path with the string "*" to match all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields to be updated. Field names must be in snake
     * case (e.g., "field_to_update"). Omitted fields will not be updated. To
     * replace the entire entity, use one path with the string "*" to match all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

