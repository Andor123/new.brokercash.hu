<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/session_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to delete a session template.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.DeleteSessionTemplateRequest</code>
 */
class DeleteSessionTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the session template resource to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the session template resource to delete. Please see
     *                     {@see SessionTemplateControllerClient::sessionTemplateName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataproc\V1\DeleteSessionTemplateRequest
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
     *           Required. The name of the session template resource to delete.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\SessionTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the session template resource to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the session template resource to delete.
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
