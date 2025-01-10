<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/slsa_provenance.proto

namespace Grafeas\V1\SlsaProvenance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Steps taken to build the artifact.
 * For a TaskRun, typically each container corresponds to one step in the
 * recipe.
 *
 * Generated from protobuf message <code>grafeas.v1.SlsaProvenance.SlsaRecipe</code>
 */
class SlsaRecipe extends \Google\Protobuf\Internal\Message
{
    /**
     * URI indicating what type of recipe was performed. It determines the
     * meaning of recipe.entryPoint, recipe.arguments, recipe.environment, and
     * materials.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Index in materials containing the recipe steps that are not implied by
     * recipe.type. For example, if the recipe type were "make", then this would
     * point to the source containing the Makefile, not the make program itself.
     * Set to -1 if the recipe doesn't come from a material, as zero is default
     * unset value for int64.
     *
     * Generated from protobuf field <code>int64 defined_in_material = 2;</code>
     */
    protected $defined_in_material = 0;
    /**
     * String identifying the entry point into the build.
     * This is often a path to a configuration file and/or a target label within
     * that file. The syntax and meaning are defined by recipe.type. For
     * example, if the recipe type were "make", then this would reference the
     * directory in which to run make as well as which target to use.
     *
     * Generated from protobuf field <code>string entry_point = 3;</code>
     */
    protected $entry_point = '';
    /**
     * Collection of all external inputs that influenced the build on top of
     * recipe.definedInMaterial and recipe.entryPoint. For example, if the
     * recipe type were "make", then this might be the flags passed to make
     * aside from the target, which is captured in recipe.entryPoint. Depending
     * on the recipe Type, the structure may be different.
     *
     * Generated from protobuf field <code>.google.protobuf.Any arguments = 4;</code>
     */
    protected $arguments = null;
    /**
     * Any other builder-controlled inputs necessary for correctly evaluating
     * the recipe. Usually only needed for reproducing the build but not
     * evaluated as part of policy. Depending on the recipe Type, the structure
     * may be different.
     *
     * Generated from protobuf field <code>.google.protobuf.Any environment = 5;</code>
     */
    protected $environment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           URI indicating what type of recipe was performed. It determines the
     *           meaning of recipe.entryPoint, recipe.arguments, recipe.environment, and
     *           materials.
     *     @type int|string $defined_in_material
     *           Index in materials containing the recipe steps that are not implied by
     *           recipe.type. For example, if the recipe type were "make", then this would
     *           point to the source containing the Makefile, not the make program itself.
     *           Set to -1 if the recipe doesn't come from a material, as zero is default
     *           unset value for int64.
     *     @type string $entry_point
     *           String identifying the entry point into the build.
     *           This is often a path to a configuration file and/or a target label within
     *           that file. The syntax and meaning are defined by recipe.type. For
     *           example, if the recipe type were "make", then this would reference the
     *           directory in which to run make as well as which target to use.
     *     @type \Google\Protobuf\Any $arguments
     *           Collection of all external inputs that influenced the build on top of
     *           recipe.definedInMaterial and recipe.entryPoint. For example, if the
     *           recipe type were "make", then this might be the flags passed to make
     *           aside from the target, which is captured in recipe.entryPoint. Depending
     *           on the recipe Type, the structure may be different.
     *     @type \Google\Protobuf\Any $environment
     *           Any other builder-controlled inputs necessary for correctly evaluating
     *           the recipe. Usually only needed for reproducing the build but not
     *           evaluated as part of policy. Depending on the recipe Type, the structure
     *           may be different.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\SlsaProvenance::initOnce();
        parent::__construct($data);
    }

    /**
     * URI indicating what type of recipe was performed. It determines the
     * meaning of recipe.entryPoint, recipe.arguments, recipe.environment, and
     * materials.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * URI indicating what type of recipe was performed. It determines the
     * meaning of recipe.entryPoint, recipe.arguments, recipe.environment, and
     * materials.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Index in materials containing the recipe steps that are not implied by
     * recipe.type. For example, if the recipe type were "make", then this would
     * point to the source containing the Makefile, not the make program itself.
     * Set to -1 if the recipe doesn't come from a material, as zero is default
     * unset value for int64.
     *
     * Generated from protobuf field <code>int64 defined_in_material = 2;</code>
     * @return int|string
     */
    public function getDefinedInMaterial()
    {
        return $this->defined_in_material;
    }

    /**
     * Index in materials containing the recipe steps that are not implied by
     * recipe.type. For example, if the recipe type were "make", then this would
     * point to the source containing the Makefile, not the make program itself.
     * Set to -1 if the recipe doesn't come from a material, as zero is default
     * unset value for int64.
     *
     * Generated from protobuf field <code>int64 defined_in_material = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDefinedInMaterial($var)
    {
        GPBUtil::checkInt64($var);
        $this->defined_in_material = $var;

        return $this;
    }

    /**
     * String identifying the entry point into the build.
     * This is often a path to a configuration file and/or a target label within
     * that file. The syntax and meaning are defined by recipe.type. For
     * example, if the recipe type were "make", then this would reference the
     * directory in which to run make as well as which target to use.
     *
     * Generated from protobuf field <code>string entry_point = 3;</code>
     * @return string
     */
    public function getEntryPoint()
    {
        return $this->entry_point;
    }

    /**
     * String identifying the entry point into the build.
     * This is often a path to a configuration file and/or a target label within
     * that file. The syntax and meaning are defined by recipe.type. For
     * example, if the recipe type were "make", then this would reference the
     * directory in which to run make as well as which target to use.
     *
     * Generated from protobuf field <code>string entry_point = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEntryPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->entry_point = $var;

        return $this;
    }

    /**
     * Collection of all external inputs that influenced the build on top of
     * recipe.definedInMaterial and recipe.entryPoint. For example, if the
     * recipe type were "make", then this might be the flags passed to make
     * aside from the target, which is captured in recipe.entryPoint. Depending
     * on the recipe Type, the structure may be different.
     *
     * Generated from protobuf field <code>.google.protobuf.Any arguments = 4;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    public function hasArguments()
    {
        return isset($this->arguments);
    }

    public function clearArguments()
    {
        unset($this->arguments);
    }

    /**
     * Collection of all external inputs that influenced the build on top of
     * recipe.definedInMaterial and recipe.entryPoint. For example, if the
     * recipe type were "make", then this might be the flags passed to make
     * aside from the target, which is captured in recipe.entryPoint. Depending
     * on the recipe Type, the structure may be different.
     *
     * Generated from protobuf field <code>.google.protobuf.Any arguments = 4;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setArguments($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->arguments = $var;

        return $this;
    }

    /**
     * Any other builder-controlled inputs necessary for correctly evaluating
     * the recipe. Usually only needed for reproducing the build but not
     * evaluated as part of policy. Depending on the recipe Type, the structure
     * may be different.
     *
     * Generated from protobuf field <code>.google.protobuf.Any environment = 5;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    public function clearEnvironment()
    {
        unset($this->environment);
    }

    /**
     * Any other builder-controlled inputs necessary for correctly evaluating
     * the recipe. Usually only needed for reproducing the build but not
     * evaluated as part of policy. Depending on the recipe Type, the structure
     * may be different.
     *
     * Generated from protobuf field <code>.google.protobuf.Any environment = 5;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->environment = $var;

        return $this;
    }

}

