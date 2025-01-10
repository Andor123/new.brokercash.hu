<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/experiment.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Experiments.StartExperiment][google.cloud.dialogflow.cx.v3.Experiments.StartExperiment].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.StartExperimentRequest</code>
 */
class StartExperimentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the experiment to start.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/environments/<Environment ID>/experiments/<Experiment ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Resource name of the experiment to start.
     *                     Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *                     ID>/environments/<Environment ID>/experiments/<Experiment ID>`. Please see
     *                     {@see ExperimentsClient::experimentName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\StartExperimentRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the experiment to start.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     *           ID>/environments/<Environment ID>/experiments/<Experiment ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the experiment to start.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/environments/<Environment ID>/experiments/<Experiment ID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the experiment to start.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
     * ID>/environments/<Environment ID>/experiments/<Experiment ID>`.
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

}
