<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/custom_tuning_model.proto

namespace Google\Cloud\DiscoveryEngine\V1\CustomTuningModel;

use UnexpectedValueException;

/**
 * The state of the model.
 *
 * Protobuf type <code>google.cloud.discoveryengine.v1.CustomTuningModel.ModelState</code>
 */
class ModelState
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>MODEL_STATE_UNSPECIFIED = 0;</code>
     */
    const MODEL_STATE_UNSPECIFIED = 0;
    /**
     * The model is in a paused training state.
     *
     * Generated from protobuf enum <code>TRAINING_PAUSED = 1;</code>
     */
    const TRAINING_PAUSED = 1;
    /**
     * The model is currently training.
     *
     * Generated from protobuf enum <code>TRAINING = 2;</code>
     */
    const TRAINING = 2;
    /**
     * The model has successfully completed training.
     *
     * Generated from protobuf enum <code>TRAINING_COMPLETE = 3;</code>
     */
    const TRAINING_COMPLETE = 3;
    /**
     * The model is ready for serving.
     *
     * Generated from protobuf enum <code>READY_FOR_SERVING = 4;</code>
     */
    const READY_FOR_SERVING = 4;
    /**
     * The model training failed.
     *
     * Generated from protobuf enum <code>TRAINING_FAILED = 5;</code>
     */
    const TRAINING_FAILED = 5;
    /**
     * The model training finished successfully but metrics did not improve.
     *
     * Generated from protobuf enum <code>NO_IMPROVEMENT = 6;</code>
     */
    const NO_IMPROVEMENT = 6;
    /**
     * Input data validation failed. Model training didn't start.
     *
     * Generated from protobuf enum <code>INPUT_VALIDATION_FAILED = 7;</code>
     */
    const INPUT_VALIDATION_FAILED = 7;

    private static $valueToName = [
        self::MODEL_STATE_UNSPECIFIED => 'MODEL_STATE_UNSPECIFIED',
        self::TRAINING_PAUSED => 'TRAINING_PAUSED',
        self::TRAINING => 'TRAINING',
        self::TRAINING_COMPLETE => 'TRAINING_COMPLETE',
        self::READY_FOR_SERVING => 'READY_FOR_SERVING',
        self::TRAINING_FAILED => 'TRAINING_FAILED',
        self::NO_IMPROVEMENT => 'NO_IMPROVEMENT',
        self::INPUT_VALIDATION_FAILED => 'INPUT_VALIDATION_FAILED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


