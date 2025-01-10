<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/build.proto

namespace Google\Cloud\Run\V2\SubmitBuildRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Build the source using Buildpacks.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.SubmitBuildRequest.BuildpacksBuild</code>
 */
class BuildpacksBuild extends \Google\Protobuf\Internal\Message
{
    /**
     * The runtime name, e.g. 'go113'. Leave blank for generic builds.
     *
     * Generated from protobuf field <code>string runtime = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $runtime = '';
    /**
     * Optional. Name of the function target if the source is a function source.
     * Required for function builds.
     *
     * Generated from protobuf field <code>string function_target = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $function_target = '';
    /**
     * Optional. cache_image_uri is the GCR/AR URL where the cache image will be
     * stored. cache_image_uri is optional and omitting it will disable caching.
     * This URL must be stable across builds. It is used to derive a
     * build-specific temporary URL by substituting the tag with the build ID.
     * The build will clean up the temporary image on a best-effort basis.
     *
     * Generated from protobuf field <code>string cache_image_uri = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $cache_image_uri = '';
    /**
     * Optional. The base image used to opt into automatic base image updates.
     *
     * Generated from protobuf field <code>string base_image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $base_image = '';
    /**
     * Optional. User-provided build-time environment variables.
     *
     * Generated from protobuf field <code>map<string, string> environment_variables = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $environment_variables;
    /**
     * Optional. Whether or not the application container will be enrolled in
     * automatic base image updates. When true, the application will be built on
     * a scratch base image, so the base layers can be appended at run time.
     *
     * Generated from protobuf field <code>bool enable_automatic_updates = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_automatic_updates = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $runtime
     *           The runtime name, e.g. 'go113'. Leave blank for generic builds.
     *     @type string $function_target
     *           Optional. Name of the function target if the source is a function source.
     *           Required for function builds.
     *     @type string $cache_image_uri
     *           Optional. cache_image_uri is the GCR/AR URL where the cache image will be
     *           stored. cache_image_uri is optional and omitting it will disable caching.
     *           This URL must be stable across builds. It is used to derive a
     *           build-specific temporary URL by substituting the tag with the build ID.
     *           The build will clean up the temporary image on a best-effort basis.
     *     @type string $base_image
     *           Optional. The base image used to opt into automatic base image updates.
     *     @type array|\Google\Protobuf\Internal\MapField $environment_variables
     *           Optional. User-provided build-time environment variables.
     *     @type bool $enable_automatic_updates
     *           Optional. Whether or not the application container will be enrolled in
     *           automatic base image updates. When true, the application will be built on
     *           a scratch base image, so the base layers can be appended at run time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\Build::initOnce();
        parent::__construct($data);
    }

    /**
     * The runtime name, e.g. 'go113'. Leave blank for generic builds.
     *
     * Generated from protobuf field <code>string runtime = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getRuntime()
    {
        @trigger_error('runtime is deprecated.', E_USER_DEPRECATED);
        return $this->runtime;
    }

    /**
     * The runtime name, e.g. 'go113'. Leave blank for generic builds.
     *
     * Generated from protobuf field <code>string runtime = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setRuntime($var)
    {
        @trigger_error('runtime is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->runtime = $var;

        return $this;
    }

    /**
     * Optional. Name of the function target if the source is a function source.
     * Required for function builds.
     *
     * Generated from protobuf field <code>string function_target = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFunctionTarget()
    {
        return $this->function_target;
    }

    /**
     * Optional. Name of the function target if the source is a function source.
     * Required for function builds.
     *
     * Generated from protobuf field <code>string function_target = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFunctionTarget($var)
    {
        GPBUtil::checkString($var, True);
        $this->function_target = $var;

        return $this;
    }

    /**
     * Optional. cache_image_uri is the GCR/AR URL where the cache image will be
     * stored. cache_image_uri is optional and omitting it will disable caching.
     * This URL must be stable across builds. It is used to derive a
     * build-specific temporary URL by substituting the tag with the build ID.
     * The build will clean up the temporary image on a best-effort basis.
     *
     * Generated from protobuf field <code>string cache_image_uri = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCacheImageUri()
    {
        return $this->cache_image_uri;
    }

    /**
     * Optional. cache_image_uri is the GCR/AR URL where the cache image will be
     * stored. cache_image_uri is optional and omitting it will disable caching.
     * This URL must be stable across builds. It is used to derive a
     * build-specific temporary URL by substituting the tag with the build ID.
     * The build will clean up the temporary image on a best-effort basis.
     *
     * Generated from protobuf field <code>string cache_image_uri = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCacheImageUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->cache_image_uri = $var;

        return $this;
    }

    /**
     * Optional. The base image used to opt into automatic base image updates.
     *
     * Generated from protobuf field <code>string base_image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getBaseImage()
    {
        return $this->base_image;
    }

    /**
     * Optional. The base image used to opt into automatic base image updates.
     *
     * Generated from protobuf field <code>string base_image = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setBaseImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_image = $var;

        return $this;
    }

    /**
     * Optional. User-provided build-time environment variables.
     *
     * Generated from protobuf field <code>map<string, string> environment_variables = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnvironmentVariables()
    {
        return $this->environment_variables;
    }

    /**
     * Optional. User-provided build-time environment variables.
     *
     * Generated from protobuf field <code>map<string, string> environment_variables = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnvironmentVariables($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->environment_variables = $arr;

        return $this;
    }

    /**
     * Optional. Whether or not the application container will be enrolled in
     * automatic base image updates. When true, the application will be built on
     * a scratch base image, so the base layers can be appended at run time.
     *
     * Generated from protobuf field <code>bool enable_automatic_updates = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableAutomaticUpdates()
    {
        return $this->enable_automatic_updates;
    }

    /**
     * Optional. Whether or not the application container will be enrolled in
     * automatic base image updates. When true, the application will be built on
     * a scratch base image, so the base layers can be appended at run time.
     *
     * Generated from protobuf field <code>bool enable_automatic_updates = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableAutomaticUpdates($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_automatic_updates = $var;

        return $this;
    }

}

