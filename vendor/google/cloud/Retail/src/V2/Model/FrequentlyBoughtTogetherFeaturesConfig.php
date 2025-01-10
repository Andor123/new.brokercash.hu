<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/model.proto

namespace Google\Cloud\Retail\V2\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional configs for the frequently-bought-together model type.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Model.FrequentlyBoughtTogetherFeaturesConfig</code>
 */
class FrequentlyBoughtTogetherFeaturesConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Specifies the context of the model when it is used in predict
     * requests. Can only be set for the `frequently-bought-together` type. If
     * it isn't specified, it defaults to
     * [MULTIPLE_CONTEXT_PRODUCTS][google.cloud.retail.v2.Model.ContextProductsType.MULTIPLE_CONTEXT_PRODUCTS].
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.ContextProductsType context_products_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $context_products_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $context_products_type
     *           Optional. Specifies the context of the model when it is used in predict
     *           requests. Can only be set for the `frequently-bought-together` type. If
     *           it isn't specified, it defaults to
     *           [MULTIPLE_CONTEXT_PRODUCTS][google.cloud.retail.v2.Model.ContextProductsType.MULTIPLE_CONTEXT_PRODUCTS].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Specifies the context of the model when it is used in predict
     * requests. Can only be set for the `frequently-bought-together` type. If
     * it isn't specified, it defaults to
     * [MULTIPLE_CONTEXT_PRODUCTS][google.cloud.retail.v2.Model.ContextProductsType.MULTIPLE_CONTEXT_PRODUCTS].
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.ContextProductsType context_products_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getContextProductsType()
    {
        return $this->context_products_type;
    }

    /**
     * Optional. Specifies the context of the model when it is used in predict
     * requests. Can only be set for the `frequently-bought-together` type. If
     * it isn't specified, it defaults to
     * [MULTIPLE_CONTEXT_PRODUCTS][google.cloud.retail.v2.Model.ContextProductsType.MULTIPLE_CONTEXT_PRODUCTS].
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Model.ContextProductsType context_products_type = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setContextProductsType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Retail\V2\Model\ContextProductsType::class);
        $this->context_products_type = $var;

        return $this;
    }

}

