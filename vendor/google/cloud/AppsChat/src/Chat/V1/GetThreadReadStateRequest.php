<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/thread_read_state.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GetThreadReadStateRequest API.
 *
 * Generated from protobuf message <code>google.chat.v1.GetThreadReadStateRequest</code>
 */
class GetThreadReadStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the thread read state to retrieve.
     * Only supports getting read state for the calling user.
     * To refer to the calling user, set one of the following:
     * - The `me` alias. For example,
     * `users/me/spaces/{space}/threads/{thread}/threadReadState`.
     * - Their Workspace email address. For example,
     * `users/user&#64;example.com/spaces/{space}/threads/{thread}/threadReadState`.
     * - Their user id. For example,
     * `users/123456789/spaces/{space}/threads/{thread}/threadReadState`.
     * Format: users/{user}/spaces/{space}/threads/{thread}/threadReadState
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Resource name of the thread read state to retrieve.
     *
     *                     Only supports getting read state for the calling user.
     *
     *                     To refer to the calling user, set one of the following:
     *
     *                     - The `me` alias. For example,
     *                     `users/me/spaces/{space}/threads/{thread}/threadReadState`.
     *
     *                     - Their Workspace email address. For example,
     *                     `users/user&#64;example.com/spaces/{space}/threads/{thread}/threadReadState`.
     *
     *                     - Their user id. For example,
     *                     `users/123456789/spaces/{space}/threads/{thread}/threadReadState`.
     *
     *                     Format: users/{user}/spaces/{space}/threads/{thread}/threadReadState
     *                     Please see {@see ChatServiceClient::threadReadStateName()} for help formatting this field.
     *
     * @return \Google\Apps\Chat\V1\GetThreadReadStateRequest
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
     *           Required. Resource name of the thread read state to retrieve.
     *           Only supports getting read state for the calling user.
     *           To refer to the calling user, set one of the following:
     *           - The `me` alias. For example,
     *           `users/me/spaces/{space}/threads/{thread}/threadReadState`.
     *           - Their Workspace email address. For example,
     *           `users/user&#64;example.com/spaces/{space}/threads/{thread}/threadReadState`.
     *           - Their user id. For example,
     *           `users/123456789/spaces/{space}/threads/{thread}/threadReadState`.
     *           Format: users/{user}/spaces/{space}/threads/{thread}/threadReadState
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\ThreadReadState::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the thread read state to retrieve.
     * Only supports getting read state for the calling user.
     * To refer to the calling user, set one of the following:
     * - The `me` alias. For example,
     * `users/me/spaces/{space}/threads/{thread}/threadReadState`.
     * - Their Workspace email address. For example,
     * `users/user&#64;example.com/spaces/{space}/threads/{thread}/threadReadState`.
     * - Their user id. For example,
     * `users/123456789/spaces/{space}/threads/{thread}/threadReadState`.
     * Format: users/{user}/spaces/{space}/threads/{thread}/threadReadState
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the thread read state to retrieve.
     * Only supports getting read state for the calling user.
     * To refer to the calling user, set one of the following:
     * - The `me` alias. For example,
     * `users/me/spaces/{space}/threads/{thread}/threadReadState`.
     * - Their Workspace email address. For example,
     * `users/user&#64;example.com/spaces/{space}/threads/{thread}/threadReadState`.
     * - Their user id. For example,
     * `users/123456789/spaces/{space}/threads/{thread}/threadReadState`.
     * Format: users/{user}/spaces/{space}/threads/{thread}/threadReadState
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

}
