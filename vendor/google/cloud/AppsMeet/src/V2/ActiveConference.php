<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2/resource.proto

namespace Google\Apps\Meet\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Active conference.
 *
 * Generated from protobuf message <code>google.apps.meet.v2.ActiveConference</code>
 */
class ActiveConference extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Reference to 'ConferenceRecord' resource.
     * Format: `conferenceRecords/{conference_record}` where `{conference_record}`
     * is a unique ID for each instance of a call within a space.
     *
     * Generated from protobuf field <code>string conference_record = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $conference_record = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $conference_record
     *           Output only. Reference to 'ConferenceRecord' resource.
     *           Format: `conferenceRecords/{conference_record}` where `{conference_record}`
     *           is a unique ID for each instance of a call within a space.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Reference to 'ConferenceRecord' resource.
     * Format: `conferenceRecords/{conference_record}` where `{conference_record}`
     * is a unique ID for each instance of a call within a space.
     *
     * Generated from protobuf field <code>string conference_record = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getConferenceRecord()
    {
        return $this->conference_record;
    }

    /**
     * Output only. Reference to 'ConferenceRecord' resource.
     * Format: `conferenceRecords/{conference_record}` where `{conference_record}`
     * is a unique ID for each instance of a call within a space.
     *
     * Generated from protobuf field <code>string conference_record = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setConferenceRecord($var)
    {
        GPBUtil::checkString($var, True);
        $this->conference_record = $var;

        return $this;
    }

}
