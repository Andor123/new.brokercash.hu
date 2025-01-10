<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_tiers.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Tiers list response.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.TiersListResponse</code>
 */
class TiersListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always `sql#tiersList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    protected $kind = '';
    /**
     * List of tiers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.Tier items = 2;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always `sql#tiersList`.
     *     @type array<\Google\Cloud\Sql\V1\Tier>|\Google\Protobuf\Internal\RepeatedField $items
     *           List of tiers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlTiers::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always `sql#tiersList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always `sql#tiersList`.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * List of tiers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.Tier items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * List of tiers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.Tier items = 2;</code>
     * @param array<\Google\Cloud\Sql\V1\Tier>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1\Tier::class);
        $this->items = $arr;

        return $this;
    }

}

