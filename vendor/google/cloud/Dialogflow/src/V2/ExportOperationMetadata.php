<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/document.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata related to the Export Data Operations (e.g. ExportDocument).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ExportOperationMetadata</code>
 */
class ExportOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Storage file path of the exported data.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GcsDestination exported_gcs_destination = 1;</code>
     */
    private $exported_gcs_destination = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\GcsDestination $exported_gcs_destination
     *           Cloud Storage file path of the exported data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Storage file path of the exported data.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GcsDestination exported_gcs_destination = 1;</code>
     * @return \Google\Cloud\Dialogflow\V2\GcsDestination|null
     */
    public function getExportedGcsDestination()
    {
        return $this->exported_gcs_destination;
    }

    public function hasExportedGcsDestination()
    {
        return isset($this->exported_gcs_destination);
    }

    public function clearExportedGcsDestination()
    {
        unset($this->exported_gcs_destination);
    }

    /**
     * Cloud Storage file path of the exported data.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GcsDestination exported_gcs_destination = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\GcsDestination $var
     * @return $this
     */
    public function setExportedGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\GcsDestination::class);
        $this->exported_gcs_destination = $var;

        return $this;
    }

}

