<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/process.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an operating system process.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Process</code>
 */
class Process extends \Google\Protobuf\Internal\Message
{
    /**
     * The process name, as displayed in utilities like `top` and `ps`. This name
     * can be accessed through `/proc/[pid]/comm` and changed with
     * `prctl(PR_SET_NAME)`.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     */
    protected $name = '';
    /**
     * File information for the process executable.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.File binary = 3;</code>
     */
    protected $binary = null;
    /**
     * File information for libraries loaded by the process.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.File libraries = 4;</code>
     */
    private $libraries;
    /**
     * When the process represents the invocation of a script, `binary` provides
     * information about the interpreter, while `script` provides information
     * about the script file provided to the interpreter.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.File script = 5;</code>
     */
    protected $script = null;
    /**
     * Process arguments as JSON encoded strings.
     *
     * Generated from protobuf field <code>repeated string args = 6;</code>
     */
    private $args;
    /**
     * True if `args` is incomplete.
     *
     * Generated from protobuf field <code>bool arguments_truncated = 7;</code>
     */
    protected $arguments_truncated = false;
    /**
     * Process environment variables.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.EnvironmentVariable env_variables = 8;</code>
     */
    private $env_variables;
    /**
     * True if `env_variables` is incomplete.
     *
     * Generated from protobuf field <code>bool env_variables_truncated = 9;</code>
     */
    protected $env_variables_truncated = false;
    /**
     * The process ID.
     *
     * Generated from protobuf field <code>int64 pid = 10;</code>
     */
    protected $pid = 0;
    /**
     * The parent process ID.
     *
     * Generated from protobuf field <code>int64 parent_pid = 11;</code>
     */
    protected $parent_pid = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The process name, as displayed in utilities like `top` and `ps`. This name
     *           can be accessed through `/proc/[pid]/comm` and changed with
     *           `prctl(PR_SET_NAME)`.
     *     @type \Google\Cloud\SecurityCenter\V1\File $binary
     *           File information for the process executable.
     *     @type array<\Google\Cloud\SecurityCenter\V1\File>|\Google\Protobuf\Internal\RepeatedField $libraries
     *           File information for libraries loaded by the process.
     *     @type \Google\Cloud\SecurityCenter\V1\File $script
     *           When the process represents the invocation of a script, `binary` provides
     *           information about the interpreter, while `script` provides information
     *           about the script file provided to the interpreter.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $args
     *           Process arguments as JSON encoded strings.
     *     @type bool $arguments_truncated
     *           True if `args` is incomplete.
     *     @type array<\Google\Cloud\SecurityCenter\V1\EnvironmentVariable>|\Google\Protobuf\Internal\RepeatedField $env_variables
     *           Process environment variables.
     *     @type bool $env_variables_truncated
     *           True if `env_variables` is incomplete.
     *     @type int|string $pid
     *           The process ID.
     *     @type int|string $parent_pid
     *           The parent process ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Process::initOnce();
        parent::__construct($data);
    }

    /**
     * The process name, as displayed in utilities like `top` and `ps`. This name
     * can be accessed through `/proc/[pid]/comm` and changed with
     * `prctl(PR_SET_NAME)`.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The process name, as displayed in utilities like `top` and `ps`. This name
     * can be accessed through `/proc/[pid]/comm` and changed with
     * `prctl(PR_SET_NAME)`.
     *
     * Generated from protobuf field <code>string name = 12;</code>
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
     * File information for the process executable.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.File binary = 3;</code>
     * @return \Google\Cloud\SecurityCenter\V1\File|null
     */
    public function getBinary()
    {
        return $this->binary;
    }

    public function hasBinary()
    {
        return isset($this->binary);
    }

    public function clearBinary()
    {
        unset($this->binary);
    }

    /**
     * File information for the process executable.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.File binary = 3;</code>
     * @param \Google\Cloud\SecurityCenter\V1\File $var
     * @return $this
     */
    public function setBinary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\File::class);
        $this->binary = $var;

        return $this;
    }

    /**
     * File information for libraries loaded by the process.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.File libraries = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLibraries()
    {
        return $this->libraries;
    }

    /**
     * File information for libraries loaded by the process.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.File libraries = 4;</code>
     * @param array<\Google\Cloud\SecurityCenter\V1\File>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLibraries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\File::class);
        $this->libraries = $arr;

        return $this;
    }

    /**
     * When the process represents the invocation of a script, `binary` provides
     * information about the interpreter, while `script` provides information
     * about the script file provided to the interpreter.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.File script = 5;</code>
     * @return \Google\Cloud\SecurityCenter\V1\File|null
     */
    public function getScript()
    {
        return $this->script;
    }

    public function hasScript()
    {
        return isset($this->script);
    }

    public function clearScript()
    {
        unset($this->script);
    }

    /**
     * When the process represents the invocation of a script, `binary` provides
     * information about the interpreter, while `script` provides information
     * about the script file provided to the interpreter.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.File script = 5;</code>
     * @param \Google\Cloud\SecurityCenter\V1\File $var
     * @return $this
     */
    public function setScript($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\File::class);
        $this->script = $var;

        return $this;
    }

    /**
     * Process arguments as JSON encoded strings.
     *
     * Generated from protobuf field <code>repeated string args = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Process arguments as JSON encoded strings.
     *
     * Generated from protobuf field <code>repeated string args = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * True if `args` is incomplete.
     *
     * Generated from protobuf field <code>bool arguments_truncated = 7;</code>
     * @return bool
     */
    public function getArgumentsTruncated()
    {
        return $this->arguments_truncated;
    }

    /**
     * True if `args` is incomplete.
     *
     * Generated from protobuf field <code>bool arguments_truncated = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setArgumentsTruncated($var)
    {
        GPBUtil::checkBool($var);
        $this->arguments_truncated = $var;

        return $this;
    }

    /**
     * Process environment variables.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.EnvironmentVariable env_variables = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnvVariables()
    {
        return $this->env_variables;
    }

    /**
     * Process environment variables.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.EnvironmentVariable env_variables = 8;</code>
     * @param array<\Google\Cloud\SecurityCenter\V1\EnvironmentVariable>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnvVariables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\EnvironmentVariable::class);
        $this->env_variables = $arr;

        return $this;
    }

    /**
     * True if `env_variables` is incomplete.
     *
     * Generated from protobuf field <code>bool env_variables_truncated = 9;</code>
     * @return bool
     */
    public function getEnvVariablesTruncated()
    {
        return $this->env_variables_truncated;
    }

    /**
     * True if `env_variables` is incomplete.
     *
     * Generated from protobuf field <code>bool env_variables_truncated = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnvVariablesTruncated($var)
    {
        GPBUtil::checkBool($var);
        $this->env_variables_truncated = $var;

        return $this;
    }

    /**
     * The process ID.
     *
     * Generated from protobuf field <code>int64 pid = 10;</code>
     * @return int|string
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * The process ID.
     *
     * Generated from protobuf field <code>int64 pid = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPid($var)
    {
        GPBUtil::checkInt64($var);
        $this->pid = $var;

        return $this;
    }

    /**
     * The parent process ID.
     *
     * Generated from protobuf field <code>int64 parent_pid = 11;</code>
     * @return int|string
     */
    public function getParentPid()
    {
        return $this->parent_pid;
    }

    /**
     * The parent process ID.
     *
     * Generated from protobuf field <code>int64 parent_pid = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setParentPid($var)
    {
        GPBUtil::checkInt64($var);
        $this->parent_pid = $var;

        return $this;
    }

}
