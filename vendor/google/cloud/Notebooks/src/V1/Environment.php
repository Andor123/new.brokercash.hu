<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1/environment.proto

namespace Google\Cloud\Notebooks\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Definition of a software environment that is used to start a notebook
 * instance.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1.Environment</code>
 */
class Environment extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of this environment.
     * Format:
     * `projects/{project_id}/locations/{location}/environments/{environment_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Display name of this environment for the UI.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * A brief description of this environment.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * Path to a Bash script that automatically runs after a notebook instance
     * fully boots up. The path must be a URL or
     * Cloud Storage path. Example: `"gs://path-to-file/file-name"`
     *
     * Generated from protobuf field <code>string post_startup_script = 8;</code>
     */
    protected $post_startup_script = '';
    /**
     * Output only. The time at which this environment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    protected $image_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of this environment.
     *           Format:
     *           `projects/{project_id}/locations/{location}/environments/{environment_id}`
     *     @type string $display_name
     *           Display name of this environment for the UI.
     *     @type string $description
     *           A brief description of this environment.
     *     @type \Google\Cloud\Notebooks\V1\VmImage $vm_image
     *           Use a Compute Engine VM image to start the notebook instance.
     *     @type \Google\Cloud\Notebooks\V1\ContainerImage $container_image
     *           Use a container image to start the notebook instance.
     *     @type string $post_startup_script
     *           Path to a Bash script that automatically runs after a notebook instance
     *           fully boots up. The path must be a URL or
     *           Cloud Storage path. Example: `"gs://path-to-file/file-name"`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this environment was created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of this environment.
     * Format:
     * `projects/{project_id}/locations/{location}/environments/{environment_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of this environment.
     * Format:
     * `projects/{project_id}/locations/{location}/environments/{environment_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Display name of this environment for the UI.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name of this environment for the UI.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * A brief description of this environment.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A brief description of this environment.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Use a Compute Engine VM image to start the notebook instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.VmImage vm_image = 6;</code>
     * @return \Google\Cloud\Notebooks\V1\VmImage|null
     */
    public function getVmImage()
    {
        return $this->readOneof(6);
    }

    public function hasVmImage()
    {
        return $this->hasOneof(6);
    }

    /**
     * Use a Compute Engine VM image to start the notebook instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.VmImage vm_image = 6;</code>
     * @param \Google\Cloud\Notebooks\V1\VmImage $var
     * @return $this
     */
    public function setVmImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V1\VmImage::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Use a container image to start the notebook instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.ContainerImage container_image = 7;</code>
     * @return \Google\Cloud\Notebooks\V1\ContainerImage|null
     */
    public function getContainerImage()
    {
        return $this->readOneof(7);
    }

    public function hasContainerImage()
    {
        return $this->hasOneof(7);
    }

    /**
     * Use a container image to start the notebook instance.
     *
     * Generated from protobuf field <code>.google.cloud.notebooks.v1.ContainerImage container_image = 7;</code>
     * @param \Google\Cloud\Notebooks\V1\ContainerImage $var
     * @return $this
     */
    public function setContainerImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Notebooks\V1\ContainerImage::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Path to a Bash script that automatically runs after a notebook instance
     * fully boots up. The path must be a URL or
     * Cloud Storage path. Example: `"gs://path-to-file/file-name"`
     *
     * Generated from protobuf field <code>string post_startup_script = 8;</code>
     * @return string
     */
    public function getPostStartupScript()
    {
        return $this->post_startup_script;
    }

    /**
     * Path to a Bash script that automatically runs after a notebook instance
     * fully boots up. The path must be a URL or
     * Cloud Storage path. Example: `"gs://path-to-file/file-name"`
     *
     * Generated from protobuf field <code>string post_startup_script = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPostStartupScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->post_startup_script = $var;

        return $this;
    }

    /**
     * Output only. The time at which this environment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this environment was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageType()
    {
        return $this->whichOneof("image_type");
    }

}

