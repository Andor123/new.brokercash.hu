<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies (some of) the contents of a single row/column/timestamp of a table.
 *
 * Generated from protobuf message <code>google.bigtable.v2.Cell</code>
 */
class Cell extends \Google\Protobuf\Internal\Message
{
    /**
     * The cell's stored timestamp, which also uniquely identifies it within
     * its column.
     * Values are always expressed in microseconds, but individual tables may set
     * a coarser granularity to further restrict the allowed values. For
     * example, a table which specifies millisecond granularity will only allow
     * values of `timestamp_micros` which are multiples of 1000.
     *
     * Generated from protobuf field <code>int64 timestamp_micros = 1;</code>
     */
    protected $timestamp_micros = 0;
    /**
     * The value stored in the cell.
     * May contain any byte string, including the empty string, up to 100MiB in
     * length.
     *
     * Generated from protobuf field <code>bytes value = 2;</code>
     */
    protected $value = '';
    /**
     * Labels applied to the cell by a [RowFilter][google.bigtable.v2.RowFilter].
     *
     * Generated from protobuf field <code>repeated string labels = 3;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $timestamp_micros
     *           The cell's stored timestamp, which also uniquely identifies it within
     *           its column.
     *           Values are always expressed in microseconds, but individual tables may set
     *           a coarser granularity to further restrict the allowed values. For
     *           example, a table which specifies millisecond granularity will only allow
     *           values of `timestamp_micros` which are multiples of 1000.
     *     @type string $value
     *           The value stored in the cell.
     *           May contain any byte string, including the empty string, up to 100MiB in
     *           length.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $labels
     *           Labels applied to the cell by a [RowFilter][google.bigtable.v2.RowFilter].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The cell's stored timestamp, which also uniquely identifies it within
     * its column.
     * Values are always expressed in microseconds, but individual tables may set
     * a coarser granularity to further restrict the allowed values. For
     * example, a table which specifies millisecond granularity will only allow
     * values of `timestamp_micros` which are multiples of 1000.
     *
     * Generated from protobuf field <code>int64 timestamp_micros = 1;</code>
     * @return int|string
     */
    public function getTimestampMicros()
    {
        return $this->timestamp_micros;
    }

    /**
     * The cell's stored timestamp, which also uniquely identifies it within
     * its column.
     * Values are always expressed in microseconds, but individual tables may set
     * a coarser granularity to further restrict the allowed values. For
     * example, a table which specifies millisecond granularity will only allow
     * values of `timestamp_micros` which are multiples of 1000.
     *
     * Generated from protobuf field <code>int64 timestamp_micros = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp_micros = $var;

        return $this;
    }

    /**
     * The value stored in the cell.
     * May contain any byte string, including the empty string, up to 100MiB in
     * length.
     *
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value stored in the cell.
     * May contain any byte string, including the empty string, up to 100MiB in
     * length.
     *
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

    /**
     * Labels applied to the cell by a [RowFilter][google.bigtable.v2.RowFilter].
     *
     * Generated from protobuf field <code>repeated string labels = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels applied to the cell by a [RowFilter][google.bigtable.v2.RowFilter].
     *
     * Generated from protobuf field <code>repeated string labels = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

