<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/privilegedaccessmanager/v1/privilegedaccessmanager.proto

namespace Google\Cloud\PrivilegedAccessManager\V1\Entitlement;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines how a requester must provide a justification when requesting
 * access.
 *
 * Generated from protobuf message <code>google.cloud.privilegedaccessmanager.v1.Entitlement.RequesterJustificationConfig</code>
 */
class RequesterJustificationConfig extends \Google\Protobuf\Internal\Message
{
    protected $justification_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PrivilegedAccessManager\V1\Entitlement\RequesterJustificationConfig\NotMandatory $not_mandatory
     *           This option means the requester isn't required to provide a
     *           justification.
     *     @type \Google\Cloud\PrivilegedAccessManager\V1\Entitlement\RequesterJustificationConfig\Unstructured $unstructured
     *           This option means the requester must provide a string as
     *           justification. If this is selected, the server allows the requester
     *           to provide a justification but doesn't validate it.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Privilegedaccessmanager\V1\Privilegedaccessmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * This option means the requester isn't required to provide a
     * justification.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.Entitlement.RequesterJustificationConfig.NotMandatory not_mandatory = 1;</code>
     * @return \Google\Cloud\PrivilegedAccessManager\V1\Entitlement\RequesterJustificationConfig\NotMandatory|null
     */
    public function getNotMandatory()
    {
        return $this->readOneof(1);
    }

    public function hasNotMandatory()
    {
        return $this->hasOneof(1);
    }

    /**
     * This option means the requester isn't required to provide a
     * justification.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.Entitlement.RequesterJustificationConfig.NotMandatory not_mandatory = 1;</code>
     * @param \Google\Cloud\PrivilegedAccessManager\V1\Entitlement\RequesterJustificationConfig\NotMandatory $var
     * @return $this
     */
    public function setNotMandatory($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PrivilegedAccessManager\V1\Entitlement\RequesterJustificationConfig\NotMandatory::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * This option means the requester must provide a string as
     * justification. If this is selected, the server allows the requester
     * to provide a justification but doesn't validate it.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.Entitlement.RequesterJustificationConfig.Unstructured unstructured = 2;</code>
     * @return \Google\Cloud\PrivilegedAccessManager\V1\Entitlement\RequesterJustificationConfig\Unstructured|null
     */
    public function getUnstructured()
    {
        return $this->readOneof(2);
    }

    public function hasUnstructured()
    {
        return $this->hasOneof(2);
    }

    /**
     * This option means the requester must provide a string as
     * justification. If this is selected, the server allows the requester
     * to provide a justification but doesn't validate it.
     *
     * Generated from protobuf field <code>.google.cloud.privilegedaccessmanager.v1.Entitlement.RequesterJustificationConfig.Unstructured unstructured = 2;</code>
     * @param \Google\Cloud\PrivilegedAccessManager\V1\Entitlement\RequesterJustificationConfig\Unstructured $var
     * @return $this
     */
    public function setUnstructured($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PrivilegedAccessManager\V1\Entitlement\RequesterJustificationConfig\Unstructured::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getJustificationType()
    {
        return $this->whichOneof("justification_type");
    }

}


