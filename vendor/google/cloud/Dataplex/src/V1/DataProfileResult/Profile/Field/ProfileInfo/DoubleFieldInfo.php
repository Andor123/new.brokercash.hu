<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_profile.proto

namespace Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The profile information for a double type field.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.DoubleFieldInfo</code>
 */
class DoubleFieldInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Average of non-null values in the scanned data. NaN, if the field
     * has a NaN.
     *
     * Generated from protobuf field <code>double average = 1;</code>
     */
    protected $average = 0.0;
    /**
     * Standard deviation of non-null values in the scanned data. NaN, if
     * the field has a NaN.
     *
     * Generated from protobuf field <code>double standard_deviation = 3;</code>
     */
    protected $standard_deviation = 0.0;
    /**
     * Minimum of non-null values in the scanned data. NaN, if the field
     * has a NaN.
     *
     * Generated from protobuf field <code>double min = 4;</code>
     */
    protected $min = 0.0;
    /**
     * A quartile divides the number of data points into four parts, or
     * quarters, of more-or-less equal size. Three main quartiles used
     * are: The first quartile (Q1) splits off the lowest 25% of data from
     * the highest 75%. It is also known as the lower or 25th empirical
     * quartile, as 25% of the data is below this point. The second
     * quartile (Q2) is the median of a data set. So, 50% of the data lies
     * below this point. The third quartile (Q3) splits off the highest
     * 25% of data from the lowest 75%. It is known as the upper or 75th
     * empirical quartile, as 75% of the data lies below this point.
     * Here, the quartiles is provided as an ordered list of quartile
     * values for the scanned data, occurring in order Q1, median, Q3.
     *
     * Generated from protobuf field <code>repeated double quartiles = 6;</code>
     */
    private $quartiles;
    /**
     * Maximum of non-null values in the scanned data. NaN, if the field
     * has a NaN.
     *
     * Generated from protobuf field <code>double max = 5;</code>
     */
    protected $max = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $average
     *           Average of non-null values in the scanned data. NaN, if the field
     *           has a NaN.
     *     @type float $standard_deviation
     *           Standard deviation of non-null values in the scanned data. NaN, if
     *           the field has a NaN.
     *     @type float $min
     *           Minimum of non-null values in the scanned data. NaN, if the field
     *           has a NaN.
     *     @type array<float>|\Google\Protobuf\Internal\RepeatedField $quartiles
     *           A quartile divides the number of data points into four parts, or
     *           quarters, of more-or-less equal size. Three main quartiles used
     *           are: The first quartile (Q1) splits off the lowest 25% of data from
     *           the highest 75%. It is also known as the lower or 25th empirical
     *           quartile, as 25% of the data is below this point. The second
     *           quartile (Q2) is the median of a data set. So, 50% of the data lies
     *           below this point. The third quartile (Q3) splits off the highest
     *           25% of data from the lowest 75%. It is known as the upper or 75th
     *           empirical quartile, as 75% of the data lies below this point.
     *           Here, the quartiles is provided as an ordered list of quartile
     *           values for the scanned data, occurring in order Q1, median, Q3.
     *     @type float $max
     *           Maximum of non-null values in the scanned data. NaN, if the field
     *           has a NaN.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Average of non-null values in the scanned data. NaN, if the field
     * has a NaN.
     *
     * Generated from protobuf field <code>double average = 1;</code>
     * @return float
     */
    public function getAverage()
    {
        return $this->average;
    }

    /**
     * Average of non-null values in the scanned data. NaN, if the field
     * has a NaN.
     *
     * Generated from protobuf field <code>double average = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setAverage($var)
    {
        GPBUtil::checkDouble($var);
        $this->average = $var;

        return $this;
    }

    /**
     * Standard deviation of non-null values in the scanned data. NaN, if
     * the field has a NaN.
     *
     * Generated from protobuf field <code>double standard_deviation = 3;</code>
     * @return float
     */
    public function getStandardDeviation()
    {
        return $this->standard_deviation;
    }

    /**
     * Standard deviation of non-null values in the scanned data. NaN, if
     * the field has a NaN.
     *
     * Generated from protobuf field <code>double standard_deviation = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setStandardDeviation($var)
    {
        GPBUtil::checkDouble($var);
        $this->standard_deviation = $var;

        return $this;
    }

    /**
     * Minimum of non-null values in the scanned data. NaN, if the field
     * has a NaN.
     *
     * Generated from protobuf field <code>double min = 4;</code>
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Minimum of non-null values in the scanned data. NaN, if the field
     * has a NaN.
     *
     * Generated from protobuf field <code>double min = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkDouble($var);
        $this->min = $var;

        return $this;
    }

    /**
     * A quartile divides the number of data points into four parts, or
     * quarters, of more-or-less equal size. Three main quartiles used
     * are: The first quartile (Q1) splits off the lowest 25% of data from
     * the highest 75%. It is also known as the lower or 25th empirical
     * quartile, as 25% of the data is below this point. The second
     * quartile (Q2) is the median of a data set. So, 50% of the data lies
     * below this point. The third quartile (Q3) splits off the highest
     * 25% of data from the lowest 75%. It is known as the upper or 75th
     * empirical quartile, as 75% of the data lies below this point.
     * Here, the quartiles is provided as an ordered list of quartile
     * values for the scanned data, occurring in order Q1, median, Q3.
     *
     * Generated from protobuf field <code>repeated double quartiles = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuartiles()
    {
        return $this->quartiles;
    }

    /**
     * A quartile divides the number of data points into four parts, or
     * quarters, of more-or-less equal size. Three main quartiles used
     * are: The first quartile (Q1) splits off the lowest 25% of data from
     * the highest 75%. It is also known as the lower or 25th empirical
     * quartile, as 25% of the data is below this point. The second
     * quartile (Q2) is the median of a data set. So, 50% of the data lies
     * below this point. The third quartile (Q3) splits off the highest
     * 25% of data from the lowest 75%. It is known as the upper or 75th
     * empirical quartile, as 75% of the data lies below this point.
     * Here, the quartiles is provided as an ordered list of quartile
     * values for the scanned data, occurring in order Q1, median, Q3.
     *
     * Generated from protobuf field <code>repeated double quartiles = 6;</code>
     * @param array<float>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuartiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->quartiles = $arr;

        return $this;
    }

    /**
     * Maximum of non-null values in the scanned data. NaN, if the field
     * has a NaN.
     *
     * Generated from protobuf field <code>double max = 5;</code>
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Maximum of non-null values in the scanned data. NaN, if the field
     * has a NaN.
     *
     * Generated from protobuf field <code>double max = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->max = $var;

        return $this;
    }

}

