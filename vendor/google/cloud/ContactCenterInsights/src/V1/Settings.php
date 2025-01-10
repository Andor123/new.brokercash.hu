<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The settings resource.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.Settings</code>
 */
class Settings extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the settings resource.
     * Format:
     * projects/{project}/locations/{location}/settings
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Output only. The time at which the settings was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time at which the settings were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * A language code to be applied to each transcript segment unless the segment
     * already specifies a language code. Language code defaults to "en-US" if it
     * is neither specified on the segment nor here.
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     */
    protected $language_code = '';
    /**
     * The default TTL for newly-created conversations. If a conversation has a
     * specified expiration, that value will be used instead. Changing this
     * value will not change the expiration of existing conversations.
     * Conversations with no expire time persist until they are deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration conversation_ttl = 5;</code>
     */
    protected $conversation_ttl = null;
    /**
     * A map that maps a notification trigger to a Pub/Sub topic. Each time a
     * specified trigger occurs, Insights will notify the corresponding Pub/Sub
     * topic.
     * Keys are notification triggers. Supported keys are:
     * * "all-triggers": Notify each time any of the supported triggers occurs.
     * * "create-analysis": Notify each time an analysis is created.
     * * "create-conversation": Notify each time a conversation is created.
     * * "export-insights-data": Notify each time an export is complete.
     * * "update-conversation": Notify each time a conversation is updated via
     * UpdateConversation.
     * Values are Pub/Sub topics. The format of each Pub/Sub topic is:
     * projects/{project}/topics/{topic}
     *
     * Generated from protobuf field <code>map<string, string> pubsub_notification_settings = 6;</code>
     */
    private $pubsub_notification_settings;
    /**
     * Default analysis settings.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Settings.AnalysisConfig analysis_config = 7;</code>
     */
    protected $analysis_config = null;
    /**
     * Default DLP redaction resources to be applied while ingesting
     * conversations.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.RedactionConfig redaction_config = 10;</code>
     */
    protected $redaction_config = null;
    /**
     * Optional. Default Speech-to-Text resources to be used while ingesting audio
     * files. Optional, CCAI Insights will create a default if not provided.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SpeechConfig speech_config = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $speech_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name of the settings resource.
     *           Format:
     *           projects/{project}/locations/{location}/settings
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the settings was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which the settings were last updated.
     *     @type string $language_code
     *           A language code to be applied to each transcript segment unless the segment
     *           already specifies a language code. Language code defaults to "en-US" if it
     *           is neither specified on the segment nor here.
     *     @type \Google\Protobuf\Duration $conversation_ttl
     *           The default TTL for newly-created conversations. If a conversation has a
     *           specified expiration, that value will be used instead. Changing this
     *           value will not change the expiration of existing conversations.
     *           Conversations with no expire time persist until they are deleted.
     *     @type array|\Google\Protobuf\Internal\MapField $pubsub_notification_settings
     *           A map that maps a notification trigger to a Pub/Sub topic. Each time a
     *           specified trigger occurs, Insights will notify the corresponding Pub/Sub
     *           topic.
     *           Keys are notification triggers. Supported keys are:
     *           * "all-triggers": Notify each time any of the supported triggers occurs.
     *           * "create-analysis": Notify each time an analysis is created.
     *           * "create-conversation": Notify each time a conversation is created.
     *           * "export-insights-data": Notify each time an export is complete.
     *           * "update-conversation": Notify each time a conversation is updated via
     *           UpdateConversation.
     *           Values are Pub/Sub topics. The format of each Pub/Sub topic is:
     *           projects/{project}/topics/{topic}
     *     @type \Google\Cloud\ContactCenterInsights\V1\Settings\AnalysisConfig $analysis_config
     *           Default analysis settings.
     *     @type \Google\Cloud\ContactCenterInsights\V1\RedactionConfig $redaction_config
     *           Default DLP redaction resources to be applied while ingesting
     *           conversations.
     *     @type \Google\Cloud\ContactCenterInsights\V1\SpeechConfig $speech_config
     *           Optional. Default Speech-to-Text resources to be used while ingesting audio
     *           files. Optional, CCAI Insights will create a default if not provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the settings resource.
     * Format:
     * projects/{project}/locations/{location}/settings
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name of the settings resource.
     * Format:
     * projects/{project}/locations/{location}/settings
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Output only. The time at which the settings was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which the settings was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which the settings were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which the settings were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * A language code to be applied to each transcript segment unless the segment
     * already specifies a language code. Language code defaults to "en-US" if it
     * is neither specified on the segment nor here.
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * A language code to be applied to each transcript segment unless the segment
     * already specifies a language code. Language code defaults to "en-US" if it
     * is neither specified on the segment nor here.
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * The default TTL for newly-created conversations. If a conversation has a
     * specified expiration, that value will be used instead. Changing this
     * value will not change the expiration of existing conversations.
     * Conversations with no expire time persist until they are deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration conversation_ttl = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getConversationTtl()
    {
        return $this->conversation_ttl;
    }

    public function hasConversationTtl()
    {
        return isset($this->conversation_ttl);
    }

    public function clearConversationTtl()
    {
        unset($this->conversation_ttl);
    }

    /**
     * The default TTL for newly-created conversations. If a conversation has a
     * specified expiration, that value will be used instead. Changing this
     * value will not change the expiration of existing conversations.
     * Conversations with no expire time persist until they are deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration conversation_ttl = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setConversationTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->conversation_ttl = $var;

        return $this;
    }

    /**
     * A map that maps a notification trigger to a Pub/Sub topic. Each time a
     * specified trigger occurs, Insights will notify the corresponding Pub/Sub
     * topic.
     * Keys are notification triggers. Supported keys are:
     * * "all-triggers": Notify each time any of the supported triggers occurs.
     * * "create-analysis": Notify each time an analysis is created.
     * * "create-conversation": Notify each time a conversation is created.
     * * "export-insights-data": Notify each time an export is complete.
     * * "update-conversation": Notify each time a conversation is updated via
     * UpdateConversation.
     * Values are Pub/Sub topics. The format of each Pub/Sub topic is:
     * projects/{project}/topics/{topic}
     *
     * Generated from protobuf field <code>map<string, string> pubsub_notification_settings = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPubsubNotificationSettings()
    {
        return $this->pubsub_notification_settings;
    }

    /**
     * A map that maps a notification trigger to a Pub/Sub topic. Each time a
     * specified trigger occurs, Insights will notify the corresponding Pub/Sub
     * topic.
     * Keys are notification triggers. Supported keys are:
     * * "all-triggers": Notify each time any of the supported triggers occurs.
     * * "create-analysis": Notify each time an analysis is created.
     * * "create-conversation": Notify each time a conversation is created.
     * * "export-insights-data": Notify each time an export is complete.
     * * "update-conversation": Notify each time a conversation is updated via
     * UpdateConversation.
     * Values are Pub/Sub topics. The format of each Pub/Sub topic is:
     * projects/{project}/topics/{topic}
     *
     * Generated from protobuf field <code>map<string, string> pubsub_notification_settings = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPubsubNotificationSettings($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pubsub_notification_settings = $arr;

        return $this;
    }

    /**
     * Default analysis settings.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Settings.AnalysisConfig analysis_config = 7;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\Settings\AnalysisConfig|null
     */
    public function getAnalysisConfig()
    {
        return $this->analysis_config;
    }

    public function hasAnalysisConfig()
    {
        return isset($this->analysis_config);
    }

    public function clearAnalysisConfig()
    {
        unset($this->analysis_config);
    }

    /**
     * Default analysis settings.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Settings.AnalysisConfig analysis_config = 7;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\Settings\AnalysisConfig $var
     * @return $this
     */
    public function setAnalysisConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\Settings\AnalysisConfig::class);
        $this->analysis_config = $var;

        return $this;
    }

    /**
     * Default DLP redaction resources to be applied while ingesting
     * conversations.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.RedactionConfig redaction_config = 10;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\RedactionConfig|null
     */
    public function getRedactionConfig()
    {
        return $this->redaction_config;
    }

    public function hasRedactionConfig()
    {
        return isset($this->redaction_config);
    }

    public function clearRedactionConfig()
    {
        unset($this->redaction_config);
    }

    /**
     * Default DLP redaction resources to be applied while ingesting
     * conversations.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.RedactionConfig redaction_config = 10;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\RedactionConfig $var
     * @return $this
     */
    public function setRedactionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\RedactionConfig::class);
        $this->redaction_config = $var;

        return $this;
    }

    /**
     * Optional. Default Speech-to-Text resources to be used while ingesting audio
     * files. Optional, CCAI Insights will create a default if not provided.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SpeechConfig speech_config = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\SpeechConfig|null
     */
    public function getSpeechConfig()
    {
        return $this->speech_config;
    }

    public function hasSpeechConfig()
    {
        return isset($this->speech_config);
    }

    public function clearSpeechConfig()
    {
        unset($this->speech_config);
    }

    /**
     * Optional. Default Speech-to-Text resources to be used while ingesting audio
     * files. Optional, CCAI Insights will create a default if not provided.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SpeechConfig speech_config = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\SpeechConfig $var
     * @return $this
     */
    public function setSpeechConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\SpeechConfig::class);
        $this->speech_config = $var;

        return $this;
    }

}

