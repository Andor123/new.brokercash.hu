<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/external_system.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of third party SIEM/SOAR fields within SCC.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ExternalSystem</code>
 */
class ExternalSystem extends \Google\Protobuf\Internal\Message
{
    /**
     * Full resource name of the external system, for example:
     * "organizations/1234/sources/5678/findings/123456/externalSystems/jira",
     * "folders/1234/sources/5678/findings/123456/externalSystems/jira",
     * "projects/1234/sources/5678/findings/123456/externalSystems/jira"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * References primary/secondary etc assignees in the external system.
     *
     * Generated from protobuf field <code>repeated string assignees = 2;</code>
     */
    private $assignees;
    /**
     * The identifier that's used to track the finding's corresponding case in the
     * external system.
     *
     * Generated from protobuf field <code>string external_uid = 3;</code>
     */
    protected $external_uid = '';
    /**
     * The most recent status of the finding's corresponding case, as reported by
     * the external system.
     *
     * Generated from protobuf field <code>string status = 4;</code>
     */
    protected $status = '';
    /**
     * The time when the case was last updated, as reported by the external
     * system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp external_system_update_time = 5;</code>
     */
    protected $external_system_update_time = null;
    /**
     * The link to the finding's corresponding case in the external system.
     *
     * Generated from protobuf field <code>string case_uri = 6;</code>
     */
    protected $case_uri = '';
    /**
     * The priority of the finding's corresponding case in the external system.
     *
     * Generated from protobuf field <code>string case_priority = 7;</code>
     */
    protected $case_priority = '';
    /**
     * The SLA of the finding's corresponding case in the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp case_sla = 9;</code>
     */
    protected $case_sla = null;
    /**
     * The time when the case was created, as reported by the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp case_create_time = 10;</code>
     */
    protected $case_create_time = null;
    /**
     * The time when the case was closed, as reported by the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp case_close_time = 11;</code>
     */
    protected $case_close_time = null;
    /**
     * Information about the ticket, if any, that is being used to track the
     * resolution of the issue that is identified by this finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ExternalSystem.TicketInfo ticket_info = 8;</code>
     */
    protected $ticket_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Full resource name of the external system, for example:
     *           "organizations/1234/sources/5678/findings/123456/externalSystems/jira",
     *           "folders/1234/sources/5678/findings/123456/externalSystems/jira",
     *           "projects/1234/sources/5678/findings/123456/externalSystems/jira"
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $assignees
     *           References primary/secondary etc assignees in the external system.
     *     @type string $external_uid
     *           The identifier that's used to track the finding's corresponding case in the
     *           external system.
     *     @type string $status
     *           The most recent status of the finding's corresponding case, as reported by
     *           the external system.
     *     @type \Google\Protobuf\Timestamp $external_system_update_time
     *           The time when the case was last updated, as reported by the external
     *           system.
     *     @type string $case_uri
     *           The link to the finding's corresponding case in the external system.
     *     @type string $case_priority
     *           The priority of the finding's corresponding case in the external system.
     *     @type \Google\Protobuf\Timestamp $case_sla
     *           The SLA of the finding's corresponding case in the external system.
     *     @type \Google\Protobuf\Timestamp $case_create_time
     *           The time when the case was created, as reported by the external system.
     *     @type \Google\Protobuf\Timestamp $case_close_time
     *           The time when the case was closed, as reported by the external system.
     *     @type \Google\Cloud\SecurityCenter\V1\ExternalSystem\TicketInfo $ticket_info
     *           Information about the ticket, if any, that is being used to track the
     *           resolution of the issue that is identified by this finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\ExternalSystem::initOnce();
        parent::__construct($data);
    }

    /**
     * Full resource name of the external system, for example:
     * "organizations/1234/sources/5678/findings/123456/externalSystems/jira",
     * "folders/1234/sources/5678/findings/123456/externalSystems/jira",
     * "projects/1234/sources/5678/findings/123456/externalSystems/jira"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Full resource name of the external system, for example:
     * "organizations/1234/sources/5678/findings/123456/externalSystems/jira",
     * "folders/1234/sources/5678/findings/123456/externalSystems/jira",
     * "projects/1234/sources/5678/findings/123456/externalSystems/jira"
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * References primary/secondary etc assignees in the external system.
     *
     * Generated from protobuf field <code>repeated string assignees = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssignees()
    {
        return $this->assignees;
    }

    /**
     * References primary/secondary etc assignees in the external system.
     *
     * Generated from protobuf field <code>repeated string assignees = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssignees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->assignees = $arr;

        return $this;
    }

    /**
     * The identifier that's used to track the finding's corresponding case in the
     * external system.
     *
     * Generated from protobuf field <code>string external_uid = 3;</code>
     * @return string
     */
    public function getExternalUid()
    {
        return $this->external_uid;
    }

    /**
     * The identifier that's used to track the finding's corresponding case in the
     * external system.
     *
     * Generated from protobuf field <code>string external_uid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_uid = $var;

        return $this;
    }

    /**
     * The most recent status of the finding's corresponding case, as reported by
     * the external system.
     *
     * Generated from protobuf field <code>string status = 4;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The most recent status of the finding's corresponding case, as reported by
     * the external system.
     *
     * Generated from protobuf field <code>string status = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * The time when the case was last updated, as reported by the external
     * system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp external_system_update_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExternalSystemUpdateTime()
    {
        return $this->external_system_update_time;
    }

    public function hasExternalSystemUpdateTime()
    {
        return isset($this->external_system_update_time);
    }

    public function clearExternalSystemUpdateTime()
    {
        unset($this->external_system_update_time);
    }

    /**
     * The time when the case was last updated, as reported by the external
     * system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp external_system_update_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExternalSystemUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->external_system_update_time = $var;

        return $this;
    }

    /**
     * The link to the finding's corresponding case in the external system.
     *
     * Generated from protobuf field <code>string case_uri = 6;</code>
     * @return string
     */
    public function getCaseUri()
    {
        return $this->case_uri;
    }

    /**
     * The link to the finding's corresponding case in the external system.
     *
     * Generated from protobuf field <code>string case_uri = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCaseUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->case_uri = $var;

        return $this;
    }

    /**
     * The priority of the finding's corresponding case in the external system.
     *
     * Generated from protobuf field <code>string case_priority = 7;</code>
     * @return string
     */
    public function getCasePriority()
    {
        return $this->case_priority;
    }

    /**
     * The priority of the finding's corresponding case in the external system.
     *
     * Generated from protobuf field <code>string case_priority = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCasePriority($var)
    {
        GPBUtil::checkString($var, True);
        $this->case_priority = $var;

        return $this;
    }

    /**
     * The SLA of the finding's corresponding case in the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp case_sla = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCaseSla()
    {
        return $this->case_sla;
    }

    public function hasCaseSla()
    {
        return isset($this->case_sla);
    }

    public function clearCaseSla()
    {
        unset($this->case_sla);
    }

    /**
     * The SLA of the finding's corresponding case in the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp case_sla = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCaseSla($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->case_sla = $var;

        return $this;
    }

    /**
     * The time when the case was created, as reported by the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp case_create_time = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCaseCreateTime()
    {
        return $this->case_create_time;
    }

    public function hasCaseCreateTime()
    {
        return isset($this->case_create_time);
    }

    public function clearCaseCreateTime()
    {
        unset($this->case_create_time);
    }

    /**
     * The time when the case was created, as reported by the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp case_create_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCaseCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->case_create_time = $var;

        return $this;
    }

    /**
     * The time when the case was closed, as reported by the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp case_close_time = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCaseCloseTime()
    {
        return $this->case_close_time;
    }

    public function hasCaseCloseTime()
    {
        return isset($this->case_close_time);
    }

    public function clearCaseCloseTime()
    {
        unset($this->case_close_time);
    }

    /**
     * The time when the case was closed, as reported by the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp case_close_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCaseCloseTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->case_close_time = $var;

        return $this;
    }

    /**
     * Information about the ticket, if any, that is being used to track the
     * resolution of the issue that is identified by this finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ExternalSystem.TicketInfo ticket_info = 8;</code>
     * @return \Google\Cloud\SecurityCenter\V1\ExternalSystem\TicketInfo|null
     */
    public function getTicketInfo()
    {
        return $this->ticket_info;
    }

    public function hasTicketInfo()
    {
        return isset($this->ticket_info);
    }

    public function clearTicketInfo()
    {
        unset($this->ticket_info);
    }

    /**
     * Information about the ticket, if any, that is being used to track the
     * resolution of the issue that is identified by this finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.ExternalSystem.TicketInfo ticket_info = 8;</code>
     * @param \Google\Cloud\SecurityCenter\V1\ExternalSystem\TicketInfo $var
     * @return $this
     */
    public function setTicketInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\ExternalSystem\TicketInfo::class);
        $this->ticket_info = $var;

        return $this;
    }

}
