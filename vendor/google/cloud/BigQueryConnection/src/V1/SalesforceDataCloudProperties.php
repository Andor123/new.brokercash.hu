<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Connection properties specific to Salesforce DataCloud. This is intended for
 * use only by Salesforce partner projects.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.SalesforceDataCloudProperties</code>
 */
class SalesforceDataCloudProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL to the user's Salesforce DataCloud instance.
     *
     * Generated from protobuf field <code>string instance_uri = 1;</code>
     */
    protected $instance_uri = '';
    /**
     * Output only. A unique Google-owned and Google-generated service account
     * identity for the connection.
     *
     * Generated from protobuf field <code>string identity = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $identity = '';
    /**
     * The ID of the user's Salesforce tenant.
     *
     * Generated from protobuf field <code>string tenant_id = 3;</code>
     */
    protected $tenant_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_uri
     *           The URL to the user's Salesforce DataCloud instance.
     *     @type string $identity
     *           Output only. A unique Google-owned and Google-generated service account
     *           identity for the connection.
     *     @type string $tenant_id
     *           The ID of the user's Salesforce tenant.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL to the user's Salesforce DataCloud instance.
     *
     * Generated from protobuf field <code>string instance_uri = 1;</code>
     * @return string
     */
    public function getInstanceUri()
    {
        return $this->instance_uri;
    }

    /**
     * The URL to the user's Salesforce DataCloud instance.
     *
     * Generated from protobuf field <code>string instance_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_uri = $var;

        return $this;
    }

    /**
     * Output only. A unique Google-owned and Google-generated service account
     * identity for the connection.
     *
     * Generated from protobuf field <code>string identity = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Output only. A unique Google-owned and Google-generated service account
     * identity for the connection.
     *
     * Generated from protobuf field <code>string identity = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * The ID of the user's Salesforce tenant.
     *
     * Generated from protobuf field <code>string tenant_id = 3;</code>
     * @return string
     */
    public function getTenantId()
    {
        return $this->tenant_id;
    }

    /**
     * The ID of the user's Salesforce tenant.
     *
     * Generated from protobuf field <code>string tenant_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTenantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant_id = $var;

        return $this;
    }

}
