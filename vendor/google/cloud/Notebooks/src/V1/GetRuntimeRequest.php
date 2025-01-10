<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/managed_service.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for getting a Managed Notebook Runtime.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.GetRuntimeRequest</code>
 */
class GetRuntimeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Format:
     *                     `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
     *                     Please see {@see ManagedNotebookServiceClient::runtimeName()} for help formatting this field.
     *
     * @return \Google\Cloud\Notebooks\V1\GetRuntimeRequest
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
     *           Required. Format:
     *           `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\ManagedService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Format:
     * `projects/{project_id}/locations/{location}/runtimes/{runtime_id}`
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

