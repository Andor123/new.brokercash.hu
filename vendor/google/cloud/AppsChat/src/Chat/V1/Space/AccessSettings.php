<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space.proto

namespace Google\Apps\Chat\V1\Space;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the [access
 * setting](https://support.google.com/chat/answer/11971020) of the space.
 *
 * Generated from protobuf message <code>google.chat.v1.Space.AccessSettings</code>
 */
class AccessSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Indicates the access state of the space.
     *
     * Generated from protobuf field <code>.google.chat.v1.Space.AccessSettings.AccessState access_state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $access_state = 0;
    /**
     * Optional. The resource name of the [target
     * audience](https://support.google.com/a/answer/9934697) who can discover
     * the space, join the space, and preview the messages in the space. If
     * unset, only users or Google Groups who have been individually invited or
     * added to the space can access it. For details, see [Make a space
     * discoverable to a target
     * audience](https://developers.google.com/workspace/chat/space-target-audience).
     * Format: `audiences/{audience}`
     * To use the default target audience for the Google Workspace organization,
     * set to `audiences/default`.
     * This field is not populated when using the `chat.bot` scope with [app
     * authentication](https://developers.google.com/workspace/chat/authenticate-authorize-chat-app).
     *
     * Generated from protobuf field <code>string audience = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $audience = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $access_state
     *           Output only. Indicates the access state of the space.
     *     @type string $audience
     *           Optional. The resource name of the [target
     *           audience](https://support.google.com/a/answer/9934697) who can discover
     *           the space, join the space, and preview the messages in the space. If
     *           unset, only users or Google Groups who have been individually invited or
     *           added to the space can access it. For details, see [Make a space
     *           discoverable to a target
     *           audience](https://developers.google.com/workspace/chat/space-target-audience).
     *           Format: `audiences/{audience}`
     *           To use the default target audience for the Google Workspace organization,
     *           set to `audiences/default`.
     *           This field is not populated when using the `chat.bot` scope with [app
     *           authentication](https://developers.google.com/workspace/chat/authenticate-authorize-chat-app).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\Space::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Indicates the access state of the space.
     *
     * Generated from protobuf field <code>.google.chat.v1.Space.AccessSettings.AccessState access_state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAccessState()
    {
        return $this->access_state;
    }

    /**
     * Output only. Indicates the access state of the space.
     *
     * Generated from protobuf field <code>.google.chat.v1.Space.AccessSettings.AccessState access_state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAccessState($var)
    {
        GPBUtil::checkEnum($var, \Google\Apps\Chat\V1\Space\AccessSettings\AccessState::class);
        $this->access_state = $var;

        return $this;
    }

    /**
     * Optional. The resource name of the [target
     * audience](https://support.google.com/a/answer/9934697) who can discover
     * the space, join the space, and preview the messages in the space. If
     * unset, only users or Google Groups who have been individually invited or
     * added to the space can access it. For details, see [Make a space
     * discoverable to a target
     * audience](https://developers.google.com/workspace/chat/space-target-audience).
     * Format: `audiences/{audience}`
     * To use the default target audience for the Google Workspace organization,
     * set to `audiences/default`.
     * This field is not populated when using the `chat.bot` scope with [app
     * authentication](https://developers.google.com/workspace/chat/authenticate-authorize-chat-app).
     *
     * Generated from protobuf field <code>string audience = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Optional. The resource name of the [target
     * audience](https://support.google.com/a/answer/9934697) who can discover
     * the space, join the space, and preview the messages in the space. If
     * unset, only users or Google Groups who have been individually invited or
     * added to the space can access it. For details, see [Make a space
     * discoverable to a target
     * audience](https://developers.google.com/workspace/chat/space-target-audience).
     * Format: `audiences/{audience}`
     * To use the default target audience for the Google Workspace organization,
     * set to `audiences/default`.
     * This field is not populated when using the `chat.bot` scope with [app
     * authentication](https://developers.google.com/workspace/chat/authenticate-authorize-chat-app).
     *
     * Generated from protobuf field <code>string audience = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkString($var, True);
        $this->audience = $var;

        return $this;
    }

}

