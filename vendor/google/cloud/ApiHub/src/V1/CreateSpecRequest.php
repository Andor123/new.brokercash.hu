<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [CreateSpec][google.cloud.apihub.v1.ApiHub.CreateSpec] method's request.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.CreateSpecRequest</code>
 */
class CreateSpecRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource for Spec.
     * Format:
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The ID to use for the spec, which will become the final component
     * of the spec's resource name. This field is optional.
     * * If provided, the same will be used. The service will throw an error if
     * the specified id is already used by another spec in the API
     * resource.
     * * If not provided, a system generated id will be used.
     * This value should be 4-500 characters, and valid characters
     * are /[a-z][A-Z][0-9]-_/.
     *
     * Generated from protobuf field <code>string spec_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $spec_id = '';
    /**
     * Required. The spec to create.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Spec spec = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $spec = null;

    /**
     * @param string                       $parent Required. The parent resource for Spec.
     *                                             Format:
     *                                             `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
     *                                             Please see {@see ApiHubClient::versionName()} for help formatting this field.
     * @param \Google\Cloud\ApiHub\V1\Spec $spec   Required. The spec to create.
     * @param string                       $specId Optional. The ID to use for the spec, which will become the final component
     *                                             of the spec's resource name. This field is optional.
     *
     *                                             * If provided, the same will be used. The service will throw an error if
     *                                             the specified id is already used by another spec in the API
     *                                             resource.
     *                                             * If not provided, a system generated id will be used.
     *
     *                                             This value should be 4-500 characters, and valid characters
     *                                             are /[a-z][A-Z][0-9]-_/.
     *
     * @return \Google\Cloud\ApiHub\V1\CreateSpecRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ApiHub\V1\Spec $spec, string $specId): self
    {
        return (new self())
            ->setParent($parent)
            ->setSpec($spec)
            ->setSpecId($specId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource for Spec.
     *           Format:
     *           `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
     *     @type string $spec_id
     *           Optional. The ID to use for the spec, which will become the final component
     *           of the spec's resource name. This field is optional.
     *           * If provided, the same will be used. The service will throw an error if
     *           the specified id is already used by another spec in the API
     *           resource.
     *           * If not provided, a system generated id will be used.
     *           This value should be 4-500 characters, and valid characters
     *           are /[a-z][A-Z][0-9]-_/.
     *     @type \Google\Cloud\ApiHub\V1\Spec $spec
     *           Required. The spec to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource for Spec.
     * Format:
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource for Spec.
     * Format:
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}`
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
     * Optional. The ID to use for the spec, which will become the final component
     * of the spec's resource name. This field is optional.
     * * If provided, the same will be used. The service will throw an error if
     * the specified id is already used by another spec in the API
     * resource.
     * * If not provided, a system generated id will be used.
     * This value should be 4-500 characters, and valid characters
     * are /[a-z][A-Z][0-9]-_/.
     *
     * Generated from protobuf field <code>string spec_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSpecId()
    {
        return $this->spec_id;
    }

    /**
     * Optional. The ID to use for the spec, which will become the final component
     * of the spec's resource name. This field is optional.
     * * If provided, the same will be used. The service will throw an error if
     * the specified id is already used by another spec in the API
     * resource.
     * * If not provided, a system generated id will be used.
     * This value should be 4-500 characters, and valid characters
     * are /[a-z][A-Z][0-9]-_/.
     *
     * Generated from protobuf field <code>string spec_id = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSpecId($var)
    {
        GPBUtil::checkString($var, True);
        $this->spec_id = $var;

        return $this;
    }

    /**
     * Required. The spec to create.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Spec spec = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApiHub\V1\Spec|null
     */
    public function getSpec()
    {
        return $this->spec;
    }

    public function hasSpec()
    {
        return isset($this->spec);
    }

    public function clearSpec()
    {
        unset($this->spec);
    }

    /**
     * Required. The spec to create.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Spec spec = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApiHub\V1\Spec $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Spec::class);
        $this->spec = $var;

        return $this;
    }

}

