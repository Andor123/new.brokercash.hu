<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to get a conversation.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.GetConversationRequest</code>
 */
class GetConversationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the conversation to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The level of details of the conversation. Default is `FULL`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationView view = 2;</code>
     */
    protected $view = 0;

    /**
     * @param string $name Required. The name of the conversation to get. Please see
     *                     {@see ContactCenterInsightsClient::conversationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\GetConversationRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the conversation to get.
     *     @type int $view
     *           The level of details of the conversation. Default is `FULL`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the conversation to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the conversation to get.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The level of details of the conversation. Default is `FULL`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationView view = 2;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The level of details of the conversation. Default is `FULL`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationView view = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\ConversationView::class);
        $this->view = $var;

        return $this;
    }

}

