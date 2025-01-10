<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to create a conversation.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.CreateConversationRequest</code>
 */
class CreateConversationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the conversation.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The conversation resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation conversation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $conversation = null;
    /**
     * A unique ID for the new conversation. This ID will become the final
     * component of the conversation's resource name. If no ID is specified, a
     * server-generated ID will be used.
     * This value should be 4-64 characters and must match the regular
     * expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`
     *
     * Generated from protobuf field <code>string conversation_id = 3;</code>
     */
    protected $conversation_id = '';

    /**
     * @param string                                              $parent         Required. The parent resource of the conversation. Please see
     *                                                                            {@see ContactCenterInsightsClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\ContactCenterInsights\V1\Conversation $conversation   Required. The conversation resource to create.
     * @param string                                              $conversationId A unique ID for the new conversation. This ID will become the final
     *                                                                            component of the conversation's resource name. If no ID is specified, a
     *                                                                            server-generated ID will be used.
     *
     *                                                                            This value should be 4-64 characters and must match the regular
     *                                                                            expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\CreateConversationRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ContactCenterInsights\V1\Conversation $conversation, string $conversationId): self
    {
        return (new self())
            ->setParent($parent)
            ->setConversation($conversation)
            ->setConversationId($conversationId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the conversation.
     *     @type \Google\Cloud\ContactCenterInsights\V1\Conversation $conversation
     *           Required. The conversation resource to create.
     *     @type string $conversation_id
     *           A unique ID for the new conversation. This ID will become the final
     *           component of the conversation's resource name. If no ID is specified, a
     *           server-generated ID will be used.
     *           This value should be 4-64 characters and must match the regular
     *           expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the conversation.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the conversation.
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
     * Required. The conversation resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation conversation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\Conversation|null
     */
    public function getConversation()
    {
        return $this->conversation;
    }

    public function hasConversation()
    {
        return isset($this->conversation);
    }

    public function clearConversation()
    {
        unset($this->conversation);
    }

    /**
     * Required. The conversation resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation conversation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\Conversation $var
     * @return $this
     */
    public function setConversation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\Conversation::class);
        $this->conversation = $var;

        return $this;
    }

    /**
     * A unique ID for the new conversation. This ID will become the final
     * component of the conversation's resource name. If no ID is specified, a
     * server-generated ID will be used.
     * This value should be 4-64 characters and must match the regular
     * expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`
     *
     * Generated from protobuf field <code>string conversation_id = 3;</code>
     * @return string
     */
    public function getConversationId()
    {
        return $this->conversation_id;
    }

    /**
     * A unique ID for the new conversation. This ID will become the final
     * component of the conversation's resource name. If no ID is specified, a
     * server-generated ID will be used.
     * This value should be 4-64 characters and must match the regular
     * expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`
     *
     * Generated from protobuf field <code>string conversation_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConversationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversation_id = $var;

        return $this;
    }

}
