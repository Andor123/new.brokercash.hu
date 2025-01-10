<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/contextual_addon.proto

namespace Google\Apps\Chat\V1\ContextualAddOnMarkup\Card;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A card action is
 * the action associated with the card. For an invoice card, a
 * typical action would be: delete invoice, email invoice or open the
 * invoice in browser.
 * Not supported by Google Chat apps.
 *
 * Generated from protobuf message <code>google.chat.v1.ContextualAddOnMarkup.Card.CardAction</code>
 */
class CardAction extends \Google\Protobuf\Internal\Message
{
    /**
     * The label used to be displayed in the action menu item.
     *
     * Generated from protobuf field <code>string action_label = 1;</code>
     */
    protected $action_label = '';
    /**
     * The onclick action for this action item.
     *
     * Generated from protobuf field <code>.google.chat.v1.WidgetMarkup.OnClick on_click = 2;</code>
     */
    protected $on_click = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action_label
     *           The label used to be displayed in the action menu item.
     *     @type \Google\Apps\Chat\V1\WidgetMarkup\OnClick $on_click
     *           The onclick action for this action item.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\ContextualAddon::initOnce();
        parent::__construct($data);
    }

    /**
     * The label used to be displayed in the action menu item.
     *
     * Generated from protobuf field <code>string action_label = 1;</code>
     * @return string
     */
    public function getActionLabel()
    {
        return $this->action_label;
    }

    /**
     * The label used to be displayed in the action menu item.
     *
     * Generated from protobuf field <code>string action_label = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setActionLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->action_label = $var;

        return $this;
    }

    /**
     * The onclick action for this action item.
     *
     * Generated from protobuf field <code>.google.chat.v1.WidgetMarkup.OnClick on_click = 2;</code>
     * @return \Google\Apps\Chat\V1\WidgetMarkup\OnClick|null
     */
    public function getOnClick()
    {
        return $this->on_click;
    }

    public function hasOnClick()
    {
        return isset($this->on_click);
    }

    public function clearOnClick()
    {
        unset($this->on_click);
    }

    /**
     * The onclick action for this action item.
     *
     * Generated from protobuf field <code>.google.chat.v1.WidgetMarkup.OnClick on_click = 2;</code>
     * @param \Google\Apps\Chat\V1\WidgetMarkup\OnClick $var
     * @return $this
     */
    public function setOnClick($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Chat\V1\WidgetMarkup\OnClick::class);
        $this->on_click = $var;

        return $this;
    }

}

