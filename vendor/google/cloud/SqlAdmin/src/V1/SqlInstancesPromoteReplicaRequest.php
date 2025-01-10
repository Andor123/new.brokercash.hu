<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_instances.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance promote replica request.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.SqlInstancesPromoteReplicaRequest</code>
 */
class SqlInstancesPromoteReplicaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud SQL read replica instance name.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     */
    protected $instance = '';
    /**
     * ID of the project that contains the read replica.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     */
    protected $project = '';
    /**
     * Set to true to invoke a replica failover to the designated DR
     * replica. As part of replica failover, the promote operation attempts
     * to add the original primary instance as a replica of the promoted
     * DR replica when the original primary instance comes back online.
     * If set to false or not specified, then the original primary
     * instance becomes an independent Cloud SQL primary instance.
     * Only applicable to MySQL.
     *
     * Generated from protobuf field <code>bool failover = 3;</code>
     */
    protected $failover = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Cloud SQL read replica instance name.
     *     @type string $project
     *           ID of the project that contains the read replica.
     *     @type bool $failover
     *           Set to true to invoke a replica failover to the designated DR
     *           replica. As part of replica failover, the promote operation attempts
     *           to add the original primary instance as a replica of the promoted
     *           DR replica when the original primary instance comes back online.
     *           If set to false or not specified, then the original primary
     *           instance becomes an independent Cloud SQL primary instance.
     *           Only applicable to MySQL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlInstances::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud SQL read replica instance name.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Cloud SQL read replica instance name.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * ID of the project that contains the read replica.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * ID of the project that contains the read replica.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Set to true to invoke a replica failover to the designated DR
     * replica. As part of replica failover, the promote operation attempts
     * to add the original primary instance as a replica of the promoted
     * DR replica when the original primary instance comes back online.
     * If set to false or not specified, then the original primary
     * instance becomes an independent Cloud SQL primary instance.
     * Only applicable to MySQL.
     *
     * Generated from protobuf field <code>bool failover = 3;</code>
     * @return bool
     */
    public function getFailover()
    {
        return $this->failover;
    }

    /**
     * Set to true to invoke a replica failover to the designated DR
     * replica. As part of replica failover, the promote operation attempts
     * to add the original primary instance as a replica of the promoted
     * DR replica when the original primary instance comes back online.
     * If set to false or not specified, then the original primary
     * instance becomes an independent Cloud SQL primary instance.
     * Only applicable to MySQL.
     *
     * Generated from protobuf field <code>bool failover = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFailover($var)
    {
        GPBUtil::checkBool($var);
        $this->failover = $var;

        return $this;
    }

}
