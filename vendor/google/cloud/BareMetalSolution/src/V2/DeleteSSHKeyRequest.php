<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/ssh_key.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for deleting an SSH key from a project.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.DeleteSSHKeyRequest</code>
 */
class DeleteSSHKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the SSH key to delete.
     * Currently, the only valid value for the location is "global".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the SSH key to delete.
     *                     Currently, the only valid value for the location is "global". Please see
     *                     {@see BareMetalSolutionClient::sshKeyName()} for help formatting this field.
     *
     * @return \Google\Cloud\BareMetalSolution\V2\DeleteSSHKeyRequest
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
     *           Required. The name of the SSH key to delete.
     *           Currently, the only valid value for the location is "global".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\SshKey::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the SSH key to delete.
     * Currently, the only valid value for the location is "global".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the SSH key to delete.
     * Currently, the only valid value for the location is "global".
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

