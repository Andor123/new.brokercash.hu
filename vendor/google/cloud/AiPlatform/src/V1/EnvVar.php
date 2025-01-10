<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/env_var.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an environment variable present in a Container or Python Module.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.EnvVar</code>
 */
class EnvVar extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the environment variable. Must be a valid C identifier.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. Variables that reference a $(VAR_NAME) are expanded
     * using the previous defined environment variables in the container and
     * any service environment variables. If a variable cannot be resolved,
     * the reference in the input string will be unchanged. The $(VAR_NAME)
     * syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped
     * references will never be expanded, regardless of whether the variable
     * exists or not.
     *
     * Generated from protobuf field <code>string value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the environment variable. Must be a valid C identifier.
     *     @type string $value
     *           Required. Variables that reference a $(VAR_NAME) are expanded
     *           using the previous defined environment variables in the container and
     *           any service environment variables. If a variable cannot be resolved,
     *           the reference in the input string will be unchanged. The $(VAR_NAME)
     *           syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped
     *           references will never be expanded, regardless of whether the variable
     *           exists or not.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\EnvVar::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the environment variable. Must be a valid C identifier.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the environment variable. Must be a valid C identifier.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Variables that reference a $(VAR_NAME) are expanded
     * using the previous defined environment variables in the container and
     * any service environment variables. If a variable cannot be resolved,
     * the reference in the input string will be unchanged. The $(VAR_NAME)
     * syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped
     * references will never be expanded, regardless of whether the variable
     * exists or not.
     *
     * Generated from protobuf field <code>string value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Required. Variables that reference a $(VAR_NAME) are expanded
     * using the previous defined environment variables in the container and
     * any service environment variables. If a variable cannot be resolved,
     * the reference in the input string will be unchanged. The $(VAR_NAME)
     * syntax can be escaped with a double $$, ie: $$(VAR_NAME). Escaped
     * references will never be expanded, regardless of whether the variable
     * exists or not.
     *
     * Generated from protobuf field <code>string value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
