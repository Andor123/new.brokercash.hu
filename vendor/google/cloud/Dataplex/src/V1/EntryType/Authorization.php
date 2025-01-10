<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1\EntryType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authorization for an Entry Type.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.EntryType.Authorization</code>
 */
class Authorization extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The IAM permission grantable on the Entry Group to allow
     * access to instantiate Entries of Dataplex owned Entry Types, only
     * settable for Dataplex owned Types.
     *
     * Generated from protobuf field <code>string alternate_use_permission = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $alternate_use_permission = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $alternate_use_permission
     *           Immutable. The IAM permission grantable on the Entry Group to allow
     *           access to instantiate Entries of Dataplex owned Entry Types, only
     *           settable for Dataplex owned Types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The IAM permission grantable on the Entry Group to allow
     * access to instantiate Entries of Dataplex owned Entry Types, only
     * settable for Dataplex owned Types.
     *
     * Generated from protobuf field <code>string alternate_use_permission = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getAlternateUsePermission()
    {
        return $this->alternate_use_permission;
    }

    /**
     * Immutable. The IAM permission grantable on the Entry Group to allow
     * access to instantiate Entries of Dataplex owned Entry Types, only
     * settable for Dataplex owned Types.
     *
     * Generated from protobuf field <code>string alternate_use_permission = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setAlternateUsePermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->alternate_use_permission = $var;

        return $this;
    }

}

