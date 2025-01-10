<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/kubernetes.proto

namespace Google\Cloud\SecurityCenter\V2\Kubernetes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Kubernetes subject.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.Kubernetes.Subject</code>
 */
class Subject extends \Google\Protobuf\Internal\Message
{
    /**
     * Authentication type for the subject.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Kubernetes.Subject.AuthType kind = 1;</code>
     */
    protected $kind = 0;
    /**
     * Namespace for the subject.
     *
     * Generated from protobuf field <code>string ns = 2;</code>
     */
    protected $ns = '';
    /**
     * Name for the subject.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kind
     *           Authentication type for the subject.
     *     @type string $ns
     *           Namespace for the subject.
     *     @type string $name
     *           Name for the subject.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Kubernetes::initOnce();
        parent::__construct($data);
    }

    /**
     * Authentication type for the subject.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Kubernetes.Subject.AuthType kind = 1;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Authentication type for the subject.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Kubernetes.Subject.AuthType kind = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V2\Kubernetes\Subject\AuthType::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Namespace for the subject.
     *
     * Generated from protobuf field <code>string ns = 2;</code>
     * @return string
     */
    public function getNs()
    {
        return $this->ns;
    }

    /**
     * Namespace for the subject.
     *
     * Generated from protobuf field <code>string ns = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNs($var)
    {
        GPBUtil::checkString($var, True);
        $this->ns = $var;

        return $this;
    }

    /**
     * Name for the subject.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name for the subject.
     *
     * Generated from protobuf field <code>string name = 3;</code>
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


