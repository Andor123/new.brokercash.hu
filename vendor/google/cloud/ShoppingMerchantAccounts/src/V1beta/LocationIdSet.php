<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/shippingsettings.proto

namespace Google\Shopping\Merchant\Accounts\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of location ID sets. Must be non-empty. Can only be set if all
 * other fields are not set.
 *
 * Generated from protobuf message <code>google.shopping.merchant.accounts.v1beta.LocationIdSet</code>
 */
class LocationIdSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A non-empty list of
     * [location
     * IDs](https://developers.google.com/adwords/api/docs/appendix/geotargeting).
     * They must all be of the same location type (For
     * example, state).
     *
     * Generated from protobuf field <code>repeated string location_ids = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $location_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $location_ids
     *           Required. A non-empty list of
     *           [location
     *           IDs](https://developers.google.com/adwords/api/docs/appendix/geotargeting).
     *           They must all be of the same location type (For
     *           example, state).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Accounts\V1Beta\Shippingsettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A non-empty list of
     * [location
     * IDs](https://developers.google.com/adwords/api/docs/appendix/geotargeting).
     * They must all be of the same location type (For
     * example, state).
     *
     * Generated from protobuf field <code>repeated string location_ids = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocationIds()
    {
        return $this->location_ids;
    }

    /**
     * Required. A non-empty list of
     * [location
     * IDs](https://developers.google.com/adwords/api/docs/appendix/geotargeting).
     * They must all be of the same location type (For
     * example, state).
     *
     * Generated from protobuf field <code>repeated string location_ids = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocationIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->location_ids = $arr;

        return $this;
    }

}

