<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for listing the instances details for a patch job.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ListPatchJobInstanceDetailsResponse</code>
 */
class ListPatchJobInstanceDetailsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of instance status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.PatchJobInstanceDetails patch_job_instance_details = 1;</code>
     */
    private $patch_job_instance_details;
    /**
     * A pagination token that can be used to get the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\OsConfig\V1\PatchJobInstanceDetails>|\Google\Protobuf\Internal\RepeatedField $patch_job_instance_details
     *           A list of instance status.
     *     @type string $next_page_token
     *           A pagination token that can be used to get the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of instance status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.PatchJobInstanceDetails patch_job_instance_details = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatchJobInstanceDetails()
    {
        return $this->patch_job_instance_details;
    }

    /**
     * A list of instance status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.PatchJobInstanceDetails patch_job_instance_details = 1;</code>
     * @param array<\Google\Cloud\OsConfig\V1\PatchJobInstanceDetails>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatchJobInstanceDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsConfig\V1\PatchJobInstanceDetails::class);
        $this->patch_job_instance_details = $arr;

        return $this;
    }

    /**
     * A pagination token that can be used to get the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A pagination token that can be used to get the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
