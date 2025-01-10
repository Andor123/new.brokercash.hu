<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace Google\Apps\Meet\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Developer Preview](https://developers.google.com/workspace/preview).
 * User who attended or is attending a conference.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.Participant</code>
 */
class Participant extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the participant.
     * Format: `conferenceRecords/{conference_record}/participants/{participant}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Time when the participant joined the meeting for the first
     * time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_start_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $earliest_start_time = null;
    /**
     * Output only. Time when the participant left the meeting for the last time.
     * This can be null if it is an active meeting.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $latest_end_time = null;
    protected $user;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Meet\V2beta\SignedinUser $signedin_user
     *           Signed-in user.
     *     @type \Google\Apps\Meet\V2beta\AnonymousUser $anonymous_user
     *           Anonymous user.
     *     @type \Google\Apps\Meet\V2beta\PhoneUser $phone_user
     *           User who calls in from their phone.
     *     @type string $name
     *           Output only. Resource name of the participant.
     *           Format: `conferenceRecords/{conference_record}/participants/{participant}`
     *     @type \Google\Protobuf\Timestamp $earliest_start_time
     *           Output only. Time when the participant joined the meeting for the first
     *           time.
     *     @type \Google\Protobuf\Timestamp $latest_end_time
     *           Output only. Time when the participant left the meeting for the last time.
     *           This can be null if it is an active meeting.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Signed-in user.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SignedinUser signedin_user = 4;</code>
     * @return \Google\Apps\Meet\V2beta\SignedinUser|null
     */
    public function getSignedinUser()
    {
        return $this->readOneof(4);
    }

    public function hasSignedinUser()
    {
        return $this->hasOneof(4);
    }

    /**
     * Signed-in user.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.SignedinUser signedin_user = 4;</code>
     * @param \Google\Apps\Meet\V2beta\SignedinUser $var
     * @return $this
     */
    public function setSignedinUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Meet\V2beta\SignedinUser::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Anonymous user.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.AnonymousUser anonymous_user = 5;</code>
     * @return \Google\Apps\Meet\V2beta\AnonymousUser|null
     */
    public function getAnonymousUser()
    {
        return $this->readOneof(5);
    }

    public function hasAnonymousUser()
    {
        return $this->hasOneof(5);
    }

    /**
     * Anonymous user.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.AnonymousUser anonymous_user = 5;</code>
     * @param \Google\Apps\Meet\V2beta\AnonymousUser $var
     * @return $this
     */
    public function setAnonymousUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Meet\V2beta\AnonymousUser::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * User who calls in from their phone.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.PhoneUser phone_user = 6;</code>
     * @return \Google\Apps\Meet\V2beta\PhoneUser|null
     */
    public function getPhoneUser()
    {
        return $this->readOneof(6);
    }

    public function hasPhoneUser()
    {
        return $this->hasOneof(6);
    }

    /**
     * User who calls in from their phone.
     *
     * Generated from protobuf field <code>.google.apps.meet.v2beta.PhoneUser phone_user = 6;</code>
     * @param \Google\Apps\Meet\V2beta\PhoneUser $var
     * @return $this
     */
    public function setPhoneUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Meet\V2beta\PhoneUser::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. Resource name of the participant.
     * Format: `conferenceRecords/{conference_record}/participants/{participant}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the participant.
     * Format: `conferenceRecords/{conference_record}/participants/{participant}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when the participant joined the meeting for the first
     * time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_start_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEarliestStartTime()
    {
        return $this->earliest_start_time;
    }

    public function hasEarliestStartTime()
    {
        return isset($this->earliest_start_time);
    }

    public function clearEarliestStartTime()
    {
        unset($this->earliest_start_time);
    }

    /**
     * Output only. Time when the participant joined the meeting for the first
     * time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_start_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEarliestStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->earliest_start_time = $var;

        return $this;
    }

    /**
     * Output only. Time when the participant left the meeting for the last time.
     * This can be null if it is an active meeting.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLatestEndTime()
    {
        return $this->latest_end_time;
    }

    public function hasLatestEndTime()
    {
        return isset($this->latest_end_time);
    }

    public function clearLatestEndTime()
    {
        unset($this->latest_end_time);
    }

    /**
     * Output only. Time when the participant left the meeting for the last time.
     * This can be null if it is an active meeting.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_end_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLatestEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->latest_end_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->whichOneof("user");
    }

}
