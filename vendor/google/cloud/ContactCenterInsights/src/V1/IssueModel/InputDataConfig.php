<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\IssueModel;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configs for the input data used to create the issue model.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.IssueModel.InputDataConfig</code>
 */
class InputDataConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Medium of conversations used in training data. This field is being
     * deprecated. To specify the medium to be used in training a new issue
     * model, set the `medium` field on `filter`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Medium medium = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $medium = 0;
    /**
     * Output only. Number of conversations used in training. Output only.
     *
     * Generated from protobuf field <code>int64 training_conversations_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $training_conversations_count = 0;
    /**
     * A filter to reduce the conversations used for training the model to a
     * specific subset.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    protected $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $medium
     *           Medium of conversations used in training data. This field is being
     *           deprecated. To specify the medium to be used in training a new issue
     *           model, set the `medium` field on `filter`.
     *     @type int|string $training_conversations_count
     *           Output only. Number of conversations used in training. Output only.
     *     @type string $filter
     *           A filter to reduce the conversations used for training the model to a
     *           specific subset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Medium of conversations used in training data. This field is being
     * deprecated. To specify the medium to be used in training a new issue
     * model, set the `medium` field on `filter`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Medium medium = 1 [deprecated = true];</code>
     * @return int
     * @deprecated
     */
    public function getMedium()
    {
        @trigger_error('medium is deprecated.', E_USER_DEPRECATED);
        return $this->medium;
    }

    /**
     * Medium of conversations used in training data. This field is being
     * deprecated. To specify the medium to be used in training a new issue
     * model, set the `medium` field on `filter`.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Medium medium = 1 [deprecated = true];</code>
     * @param int $var
     * @return $this
     * @deprecated
     */
    public function setMedium($var)
    {
        @trigger_error('medium is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\Conversation\Medium::class);
        $this->medium = $var;

        return $this;
    }

    /**
     * Output only. Number of conversations used in training. Output only.
     *
     * Generated from protobuf field <code>int64 training_conversations_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getTrainingConversationsCount()
    {
        return $this->training_conversations_count;
    }

    /**
     * Output only. Number of conversations used in training. Output only.
     *
     * Generated from protobuf field <code>int64 training_conversations_count = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTrainingConversationsCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->training_conversations_count = $var;

        return $this;
    }

    /**
     * A filter to reduce the conversations used for training the model to a
     * specific subset.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter to reduce the conversations used for training the model to a
     * specific subset.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

