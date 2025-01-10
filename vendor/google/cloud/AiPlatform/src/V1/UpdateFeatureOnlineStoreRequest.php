<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_online_store_admin_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeatureOnlineStoreAdminService.UpdateFeatureOnlineStore][google.cloud.aiplatform.v1.FeatureOnlineStoreAdminService.UpdateFeatureOnlineStore].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateFeatureOnlineStoreRequest</code>
 */
class UpdateFeatureOnlineStoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The FeatureOnlineStore's `name` field is used to identify the
     * FeatureOnlineStore to be updated. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore feature_online_store = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $feature_online_store = null;
    /**
     * Field mask is used to specify the fields to be overwritten in the
     * FeatureOnlineStore resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then only the non-empty fields present in the
     * request will be overwritten. Set the update_mask to `*` to override all
     * fields.
     * Updatable fields:
     *   * `labels`
     *   * `description`
     *   * `bigtable`
     *   * `bigtable.auto_scaling`
     *   * `bigtable.enable_multi_region_replica`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\AIPlatform\V1\FeatureOnlineStore $featureOnlineStore Required. The FeatureOnlineStore's `name` field is used to identify the
     *                                                                           FeatureOnlineStore to be updated. Format:
     *                                                                           `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     * @param \Google\Protobuf\FieldMask                     $updateMask         Field mask is used to specify the fields to be overwritten in the
     *                                                                           FeatureOnlineStore resource by the update.
     *                                                                           The fields specified in the update_mask are relative to the resource, not
     *                                                                           the full request. A field will be overwritten if it is in the mask. If the
     *                                                                           user does not provide a mask then only the non-empty fields present in the
     *                                                                           request will be overwritten. Set the update_mask to `*` to override all
     *                                                                           fields.
     *
     *                                                                           Updatable fields:
     *
     *                                                                           * `labels`
     *                                                                           * `description`
     *                                                                           * `bigtable`
     *                                                                           * `bigtable.auto_scaling`
     *                                                                           * `bigtable.enable_multi_region_replica`
     *
     * @return \Google\Cloud\AIPlatform\V1\UpdateFeatureOnlineStoreRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\AIPlatform\V1\FeatureOnlineStore $featureOnlineStore, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setFeatureOnlineStore($featureOnlineStore)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\FeatureOnlineStore $feature_online_store
     *           Required. The FeatureOnlineStore's `name` field is used to identify the
     *           FeatureOnlineStore to be updated. Format:
     *           `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Field mask is used to specify the fields to be overwritten in the
     *           FeatureOnlineStore resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then only the non-empty fields present in the
     *           request will be overwritten. Set the update_mask to `*` to override all
     *           fields.
     *           Updatable fields:
     *             * `labels`
     *             * `description`
     *             * `bigtable`
     *             * `bigtable.auto_scaling`
     *             * `bigtable.enable_multi_region_replica`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureOnlineStoreAdminService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The FeatureOnlineStore's `name` field is used to identify the
     * FeatureOnlineStore to be updated. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore feature_online_store = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\FeatureOnlineStore|null
     */
    public function getFeatureOnlineStore()
    {
        return $this->feature_online_store;
    }

    public function hasFeatureOnlineStore()
    {
        return isset($this->feature_online_store);
    }

    public function clearFeatureOnlineStore()
    {
        unset($this->feature_online_store);
    }

    /**
     * Required. The FeatureOnlineStore's `name` field is used to identify the
     * FeatureOnlineStore to be updated. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}`
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.FeatureOnlineStore feature_online_store = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureOnlineStore $var
     * @return $this
     */
    public function setFeatureOnlineStore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\FeatureOnlineStore::class);
        $this->feature_online_store = $var;

        return $this;
    }

    /**
     * Field mask is used to specify the fields to be overwritten in the
     * FeatureOnlineStore resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then only the non-empty fields present in the
     * request will be overwritten. Set the update_mask to `*` to override all
     * fields.
     * Updatable fields:
     *   * `labels`
     *   * `description`
     *   * `bigtable`
     *   * `bigtable.auto_scaling`
     *   * `bigtable.enable_multi_region_replica`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Field mask is used to specify the fields to be overwritten in the
     * FeatureOnlineStore resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then only the non-empty fields present in the
     * request will be overwritten. Set the update_mask to `*` to override all
     * fields.
     * Updatable fields:
     *   * `labels`
     *   * `description`
     *   * `bigtable`
     *   * `bigtable.auto_scaling`
     *   * `bigtable.enable_multi_region_replica`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
