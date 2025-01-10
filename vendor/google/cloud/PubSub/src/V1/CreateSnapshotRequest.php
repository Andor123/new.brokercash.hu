<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `CreateSnapshot` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.CreateSnapshotRequest</code>
 */
class CreateSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. User-provided name for this snapshot. If the name is not provided
     * in the request, the server will assign a random name for this snapshot on
     * the same project as the subscription. Note that for REST API requests, you
     * must specify a name.  See the [resource name
     * rules](https://cloud.google.com/pubsub/docs/pubsub-basics#resource_names).
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The subscription whose backlog the snapshot retains.
     * Specifically, the created snapshot is guaranteed to retain:
     *  (a) The existing backlog on the subscription. More precisely, this is
     *      defined as the messages in the subscription's backlog that are
     *      unacknowledged upon the successful completion of the
     *      `CreateSnapshot` request; as well as:
     *  (b) Any messages published to the subscription's topic following the
     *      successful completion of the CreateSnapshot request.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $subscription = '';
    /**
     * Optional. See [Creating and managing
     * labels](https://cloud.google.com/pubsub/docs/labels).
     *
     * Generated from protobuf field <code>map<string, string> labels = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * @param string $name         Required. User-provided name for this snapshot. If the name is not provided
     *                             in the request, the server will assign a random name for this snapshot on
     *                             the same project as the subscription. Note that for REST API requests, you
     *                             must specify a name.  See the [resource name
     *                             rules](https://cloud.google.com/pubsub/docs/pubsub-basics#resource_names).
     *                             Format is `projects/{project}/snapshots/{snap}`. Please see
     *                             {@see SubscriberClient::snapshotName()} for help formatting this field.
     * @param string $subscription Required. The subscription whose backlog the snapshot retains.
     *                             Specifically, the created snapshot is guaranteed to retain:
     *                             (a) The existing backlog on the subscription. More precisely, this is
     *                             defined as the messages in the subscription's backlog that are
     *                             unacknowledged upon the successful completion of the
     *                             `CreateSnapshot` request; as well as:
     *                             (b) Any messages published to the subscription's topic following the
     *                             successful completion of the CreateSnapshot request.
     *                             Format is `projects/{project}/subscriptions/{sub}`. Please see
     *                             {@see SubscriberClient::subscriptionName()} for help formatting this field.
     *
     * @return \Google\Cloud\PubSub\V1\CreateSnapshotRequest
     *
     * @experimental
     */
    public static function build(string $name, string $subscription): self
    {
        return (new self())
            ->setName($name)
            ->setSubscription($subscription);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. User-provided name for this snapshot. If the name is not provided
     *           in the request, the server will assign a random name for this snapshot on
     *           the same project as the subscription. Note that for REST API requests, you
     *           must specify a name.  See the [resource name
     *           rules](https://cloud.google.com/pubsub/docs/pubsub-basics#resource_names).
     *           Format is `projects/{project}/snapshots/{snap}`.
     *     @type string $subscription
     *           Required. The subscription whose backlog the snapshot retains.
     *           Specifically, the created snapshot is guaranteed to retain:
     *            (a) The existing backlog on the subscription. More precisely, this is
     *                defined as the messages in the subscription's backlog that are
     *                unacknowledged upon the successful completion of the
     *                `CreateSnapshot` request; as well as:
     *            (b) Any messages published to the subscription's topic following the
     *                successful completion of the CreateSnapshot request.
     *           Format is `projects/{project}/subscriptions/{sub}`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. See [Creating and managing
     *           labels](https://cloud.google.com/pubsub/docs/labels).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. User-provided name for this snapshot. If the name is not provided
     * in the request, the server will assign a random name for this snapshot on
     * the same project as the subscription. Note that for REST API requests, you
     * must specify a name.  See the [resource name
     * rules](https://cloud.google.com/pubsub/docs/pubsub-basics#resource_names).
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. User-provided name for this snapshot. If the name is not provided
     * in the request, the server will assign a random name for this snapshot on
     * the same project as the subscription. Note that for REST API requests, you
     * must specify a name.  See the [resource name
     * rules](https://cloud.google.com/pubsub/docs/pubsub-basics#resource_names).
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The subscription whose backlog the snapshot retains.
     * Specifically, the created snapshot is guaranteed to retain:
     *  (a) The existing backlog on the subscription. More precisely, this is
     *      defined as the messages in the subscription's backlog that are
     *      unacknowledged upon the successful completion of the
     *      `CreateSnapshot` request; as well as:
     *  (b) Any messages published to the subscription's topic following the
     *      successful completion of the CreateSnapshot request.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Required. The subscription whose backlog the snapshot retains.
     * Specifically, the created snapshot is guaranteed to retain:
     *  (a) The existing backlog on the subscription. More precisely, this is
     *      defined as the messages in the subscription's backlog that are
     *      unacknowledged upon the successful completion of the
     *      `CreateSnapshot` request; as well as:
     *  (b) Any messages published to the subscription's topic following the
     *      successful completion of the CreateSnapshot request.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * Optional. See [Creating and managing
     * labels](https://cloud.google.com/pubsub/docs/labels).
     *
     * Generated from protobuf field <code>map<string, string> labels = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. See [Creating and managing
     * labels](https://cloud.google.com/pubsub/docs/labels).
     *
     * Generated from protobuf field <code>map<string, string> labels = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

