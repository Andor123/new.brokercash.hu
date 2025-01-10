<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/service_controller.proto

namespace Google\Cloud\ServiceControl\V1\CheckResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `ConsumerInfo` provides information about the consumer.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.CheckResponse.ConsumerInfo</code>
 */
class ConsumerInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google cloud project number, e.g. 1234567890. A value of 0 indicates
     * no project number is found.
     * NOTE: This field is deprecated after we support flexible consumer
     * id. New code should not depend on this field anymore.
     *
     * Generated from protobuf field <code>int64 project_number = 1;</code>
     */
    protected $project_number = 0;
    /**
     * The type of the consumer which should have been defined in
     * [Google Resource Manager](https://cloud.google.com/resource-manager/).
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.CheckResponse.ConsumerInfo.ConsumerType type = 2;</code>
     */
    protected $type = 0;
    /**
     * The consumer identity number, can be Google cloud project number, folder
     * number or organization number e.g. 1234567890. A value of 0 indicates no
     * consumer number is found.
     *
     * Generated from protobuf field <code>int64 consumer_number = 3;</code>
     */
    protected $consumer_number = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $project_number
     *           The Google cloud project number, e.g. 1234567890. A value of 0 indicates
     *           no project number is found.
     *           NOTE: This field is deprecated after we support flexible consumer
     *           id. New code should not depend on this field anymore.
     *     @type int $type
     *           The type of the consumer which should have been defined in
     *           [Google Resource Manager](https://cloud.google.com/resource-manager/).
     *     @type int|string $consumer_number
     *           The consumer identity number, can be Google cloud project number, folder
     *           number or organization number e.g. 1234567890. A value of 0 indicates no
     *           consumer number is found.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\ServiceController::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google cloud project number, e.g. 1234567890. A value of 0 indicates
     * no project number is found.
     * NOTE: This field is deprecated after we support flexible consumer
     * id. New code should not depend on this field anymore.
     *
     * Generated from protobuf field <code>int64 project_number = 1;</code>
     * @return int|string
     */
    public function getProjectNumber()
    {
        return $this->project_number;
    }

    /**
     * The Google cloud project number, e.g. 1234567890. A value of 0 indicates
     * no project number is found.
     * NOTE: This field is deprecated after we support flexible consumer
     * id. New code should not depend on this field anymore.
     *
     * Generated from protobuf field <code>int64 project_number = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProjectNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->project_number = $var;

        return $this;
    }

    /**
     * The type of the consumer which should have been defined in
     * [Google Resource Manager](https://cloud.google.com/resource-manager/).
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.CheckResponse.ConsumerInfo.ConsumerType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the consumer which should have been defined in
     * [Google Resource Manager](https://cloud.google.com/resource-manager/).
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.CheckResponse.ConsumerInfo.ConsumerType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ServiceControl\V1\CheckResponse\ConsumerInfo\ConsumerType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The consumer identity number, can be Google cloud project number, folder
     * number or organization number e.g. 1234567890. A value of 0 indicates no
     * consumer number is found.
     *
     * Generated from protobuf field <code>int64 consumer_number = 3;</code>
     * @return int|string
     */
    public function getConsumerNumber()
    {
        return $this->consumer_number;
    }

    /**
     * The consumer identity number, can be Google cloud project number, folder
     * number or organization number e.g. 1234567890. A value of 0 indicates no
     * consumer number is found.
     *
     * Generated from protobuf field <code>int64 consumer_number = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConsumerNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->consumer_number = $var;

        return $this;
    }

}


