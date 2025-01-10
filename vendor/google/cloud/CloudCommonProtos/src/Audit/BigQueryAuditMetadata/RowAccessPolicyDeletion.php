<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/bigquery_audit_metadata.proto

namespace Google\Cloud\Audit\BigQueryAuditMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Row access policy deletion event.
 *
 * Generated from protobuf message <code>google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicyDeletion</code>
 */
class RowAccessPolicyDeletion extends \Google\Protobuf\Internal\Message
{
    /**
     * The row access policies that were deleted. At present, only populated
     * when a single policy is dropped.
     *
     * Generated from protobuf field <code>repeated .google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicy row_access_policies = 1;</code>
     */
    private $row_access_policies;
    /**
     * The job that deleted these row access policies.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 2;</code>
     */
    protected $job_name = '';
    /**
     * This field is set to true when a DROP ALL command has been executed, thus
     * removing all row access policies on the table.
     *
     * Generated from protobuf field <code>bool all_row_access_policies_dropped = 3;</code>
     */
    protected $all_row_access_policies_dropped = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicy>|\Google\Protobuf\Internal\RepeatedField $row_access_policies
     *           The row access policies that were deleted. At present, only populated
     *           when a single policy is dropped.
     *     @type string $job_name
     *           The job that deleted these row access policies.
     *           Format: `projects/<project_id>/jobs/<job_id>`.
     *     @type bool $all_row_access_policies_dropped
     *           This field is set to true when a DROP ALL command has been executed, thus
     *           removing all row access policies on the table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\BigqueryAuditMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * The row access policies that were deleted. At present, only populated
     * when a single policy is dropped.
     *
     * Generated from protobuf field <code>repeated .google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicy row_access_policies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRowAccessPolicies()
    {
        return $this->row_access_policies;
    }

    /**
     * The row access policies that were deleted. At present, only populated
     * when a single policy is dropped.
     *
     * Generated from protobuf field <code>repeated .google.cloud.audit.BigQueryAuditMetadata.RowAccessPolicy row_access_policies = 1;</code>
     * @param array<\Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRowAccessPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Audit\BigQueryAuditMetadata\RowAccessPolicy::class);
        $this->row_access_policies = $arr;

        return $this;
    }

    /**
     * The job that deleted these row access policies.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 2;</code>
     * @return string
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * The job that deleted these row access policies.
     * Format: `projects/<project_id>/jobs/<job_id>`.
     *
     * Generated from protobuf field <code>string job_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;

        return $this;
    }

    /**
     * This field is set to true when a DROP ALL command has been executed, thus
     * removing all row access policies on the table.
     *
     * Generated from protobuf field <code>bool all_row_access_policies_dropped = 3;</code>
     * @return bool
     */
    public function getAllRowAccessPoliciesDropped()
    {
        return $this->all_row_access_policies_dropped;
    }

    /**
     * This field is set to true when a DROP ALL command has been executed, thus
     * removing all row access policies on the table.
     *
     * Generated from protobuf field <code>bool all_row_access_policies_dropped = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllRowAccessPoliciesDropped($var)
    {
        GPBUtil::checkBool($var);
        $this->all_row_access_policies_dropped = $var;

        return $this;
    }

}


