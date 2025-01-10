<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/widgets.proto

namespace Google\Apps\Chat\V1\WidgetMarkup\FormAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List of string parameters to supply when the action method is invoked.
 * For example, consider three snooze buttons: snooze now, snooze one day,
 * snooze next week. You might use `action method = snooze()`, passing the
 * snooze type and snooze time in the list of string parameters.
 *
 * Generated from protobuf message <code>google.chat.v1.WidgetMarkup.FormAction.ActionParameter</code>
 */
class ActionParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the parameter for the action script.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    protected $key = '';
    /**
     * The value of the parameter.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           The name of the parameter for the action script.
     *     @type string $value
     *           The value of the parameter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Widgets::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the parameter for the action script.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The name of the parameter for the action script.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The value of the parameter.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value of the parameter.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}


