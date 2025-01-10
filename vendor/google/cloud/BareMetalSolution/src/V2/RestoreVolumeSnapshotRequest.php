<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/volume_snapshot.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for restoring a volume snapshot.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.RestoreVolumeSnapshotRequest</code>
 */
class RestoreVolumeSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the snapshot which will be used to restore its parent
     * volume.
     *
     * Generated from protobuf field <code>string volume_snapshot = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $volume_snapshot = '';

    /**
     * @param string $volumeSnapshot Required. Name of the snapshot which will be used to restore its parent
     *                               volume. Please see
     *                               {@see BareMetalSolutionClient::volumeSnapshotName()} for help formatting this field.
     *
     * @return \Google\Cloud\BareMetalSolution\V2\RestoreVolumeSnapshotRequest
     *
     * @experimental
     */
    public static function build(string $volumeSnapshot): self
    {
        return (new self())
            ->setVolumeSnapshot($volumeSnapshot);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $volume_snapshot
     *           Required. Name of the snapshot which will be used to restore its parent
     *           volume.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\VolumeSnapshot::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the snapshot which will be used to restore its parent
     * volume.
     *
     * Generated from protobuf field <code>string volume_snapshot = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getVolumeSnapshot()
    {
        return $this->volume_snapshot;
    }

    /**
     * Required. Name of the snapshot which will be used to restore its parent
     * volume.
     *
     * Generated from protobuf field <code>string volume_snapshot = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setVolumeSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->volume_snapshot = $var;

        return $this;
    }

}

