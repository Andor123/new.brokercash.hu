<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/iam_binding.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a particular IAM binding, which captures a member's role addition,
 * removal, or state.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.IamBinding</code>
 */
class IamBinding extends \Google\Protobuf\Internal\Message
{
    /**
     * The action that was performed on a Binding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.IamBinding.Action action = 1;</code>
     */
    protected $action = 0;
    /**
     * Role that is assigned to "members".
     * For example, "roles/viewer", "roles/editor", or "roles/owner".
     *
     * Generated from protobuf field <code>string role = 2;</code>
     */
    protected $role = '';
    /**
     * A single identity requesting access for a Cloud Platform resource, for
     * example, "foo&#64;google.com".
     *
     * Generated from protobuf field <code>string member = 3;</code>
     */
    protected $member = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $action
     *           The action that was performed on a Binding.
     *     @type string $role
     *           Role that is assigned to "members".
     *           For example, "roles/viewer", "roles/editor", or "roles/owner".
     *     @type string $member
     *           A single identity requesting access for a Cloud Platform resource, for
     *           example, "foo&#64;google.com".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\IamBinding::initOnce();
        parent::__construct($data);
    }

    /**
     * The action that was performed on a Binding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.IamBinding.Action action = 1;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The action that was performed on a Binding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.IamBinding.Action action = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1\IamBinding\Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Role that is assigned to "members".
     * For example, "roles/viewer", "roles/editor", or "roles/owner".
     *
     * Generated from protobuf field <code>string role = 2;</code>
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Role that is assigned to "members".
     * For example, "roles/viewer", "roles/editor", or "roles/owner".
     *
     * Generated from protobuf field <code>string role = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->role = $var;

        return $this;
    }

    /**
     * A single identity requesting access for a Cloud Platform resource, for
     * example, "foo&#64;google.com".
     *
     * Generated from protobuf field <code>string member = 3;</code>
     * @return string
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * A single identity requesting access for a Cloud Platform resource, for
     * example, "foo&#64;google.com".
     *
     * Generated from protobuf field <code>string member = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMember($var)
    {
        GPBUtil::checkString($var, True);
        $this->member = $var;

        return $this;
    }

}

