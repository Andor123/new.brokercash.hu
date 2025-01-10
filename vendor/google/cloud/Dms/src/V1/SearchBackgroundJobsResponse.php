<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for 'SearchBackgroundJobs' request.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.SearchBackgroundJobsResponse</code>
 */
class SearchBackgroundJobsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of conversion workspace mapping rules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.BackgroundJobLogEntry jobs = 1;</code>
     */
    private $jobs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\CloudDms\V1\BackgroundJobLogEntry>|\Google\Protobuf\Internal\RepeatedField $jobs
     *           The list of conversion workspace mapping rules.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of conversion workspace mapping rules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.BackgroundJobLogEntry jobs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * The list of conversion workspace mapping rules.
     *
     * Generated from protobuf field <code>repeated .google.cloud.clouddms.v1.BackgroundJobLogEntry jobs = 1;</code>
     * @param array<\Google\Cloud\CloudDms\V1\BackgroundJobLogEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CloudDms\V1\BackgroundJobLogEntry::class);
        $this->jobs = $arr;

        return $this;
    }

}
