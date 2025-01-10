<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Description of a group of similar error events.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.ErrorGroup</code>
 */
class ErrorGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * The group resource name.
     * Written as `projects/{projectID}/groups/{group_id}` or
     * `projects/{projectID}/locations/{location}/groups/{group_id}`
     * Examples: `projects/my-project-123/groups/my-group`,
     * `projects/my-project-123/locations/us-central1/groups/my-group`
     * In the group resource name, the `group_id` is a unique identifier for a
     * particular error group. The identifier is derived from key parts of the
     * error-log content and is treated as Service Data. For information about
     * how Service Data is handled, see [Google Cloud Privacy
     * Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     * For a list of supported locations, see [Supported
     * Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     * the default when unspecified.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * An opaque identifier of the group. This field is assigned by the Error
     * Reporting system and always populated.
     * In the group resource name, the `group_id` is a unique identifier for a
     * particular error group. The identifier is derived from key parts of the
     * error-log content and is treated as Service Data. For information about
     * how Service Data is handled, see [Google Cloud Privacy
     * Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     *
     * Generated from protobuf field <code>string group_id = 2;</code>
     */
    private $group_id = '';
    /**
     * Associated tracking issues.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.TrackingIssue tracking_issues = 3;</code>
     */
    private $tracking_issues;
    /**
     * Error group's resolution status.
     * An unspecified resolution status will be interpreted as OPEN
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ResolutionStatus resolution_status = 5;</code>
     */
    private $resolution_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The group resource name.
     *           Written as `projects/{projectID}/groups/{group_id}` or
     *           `projects/{projectID}/locations/{location}/groups/{group_id}`
     *           Examples: `projects/my-project-123/groups/my-group`,
     *           `projects/my-project-123/locations/us-central1/groups/my-group`
     *           In the group resource name, the `group_id` is a unique identifier for a
     *           particular error group. The identifier is derived from key parts of the
     *           error-log content and is treated as Service Data. For information about
     *           how Service Data is handled, see [Google Cloud Privacy
     *           Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     *           For a list of supported locations, see [Supported
     *           Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     *           the default when unspecified.
     *     @type string $group_id
     *           An opaque identifier of the group. This field is assigned by the Error
     *           Reporting system and always populated.
     *           In the group resource name, the `group_id` is a unique identifier for a
     *           particular error group. The identifier is derived from key parts of the
     *           error-log content and is treated as Service Data. For information about
     *           how Service Data is handled, see [Google Cloud Privacy
     *           Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     *     @type array<\Google\Cloud\ErrorReporting\V1beta1\TrackingIssue>|\Google\Protobuf\Internal\RepeatedField $tracking_issues
     *           Associated tracking issues.
     *     @type int $resolution_status
     *           Error group's resolution status.
     *           An unspecified resolution status will be interpreted as OPEN
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The group resource name.
     * Written as `projects/{projectID}/groups/{group_id}` or
     * `projects/{projectID}/locations/{location}/groups/{group_id}`
     * Examples: `projects/my-project-123/groups/my-group`,
     * `projects/my-project-123/locations/us-central1/groups/my-group`
     * In the group resource name, the `group_id` is a unique identifier for a
     * particular error group. The identifier is derived from key parts of the
     * error-log content and is treated as Service Data. For information about
     * how Service Data is handled, see [Google Cloud Privacy
     * Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     * For a list of supported locations, see [Supported
     * Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     * the default when unspecified.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The group resource name.
     * Written as `projects/{projectID}/groups/{group_id}` or
     * `projects/{projectID}/locations/{location}/groups/{group_id}`
     * Examples: `projects/my-project-123/groups/my-group`,
     * `projects/my-project-123/locations/us-central1/groups/my-group`
     * In the group resource name, the `group_id` is a unique identifier for a
     * particular error group. The identifier is derived from key parts of the
     * error-log content and is treated as Service Data. For information about
     * how Service Data is handled, see [Google Cloud Privacy
     * Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     * For a list of supported locations, see [Supported
     * Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     * the default when unspecified.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * An opaque identifier of the group. This field is assigned by the Error
     * Reporting system and always populated.
     * In the group resource name, the `group_id` is a unique identifier for a
     * particular error group. The identifier is derived from key parts of the
     * error-log content and is treated as Service Data. For information about
     * how Service Data is handled, see [Google Cloud Privacy
     * Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     *
     * Generated from protobuf field <code>string group_id = 2;</code>
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * An opaque identifier of the group. This field is assigned by the Error
     * Reporting system and always populated.
     * In the group resource name, the `group_id` is a unique identifier for a
     * particular error group. The identifier is derived from key parts of the
     * error-log content and is treated as Service Data. For information about
     * how Service Data is handled, see [Google Cloud Privacy
     * Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     *
     * Generated from protobuf field <code>string group_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_id = $var;

        return $this;
    }

    /**
     * Associated tracking issues.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.TrackingIssue tracking_issues = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrackingIssues()
    {
        return $this->tracking_issues;
    }

    /**
     * Associated tracking issues.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouderrorreporting.v1beta1.TrackingIssue tracking_issues = 3;</code>
     * @param array<\Google\Cloud\ErrorReporting\V1beta1\TrackingIssue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrackingIssues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ErrorReporting\V1beta1\TrackingIssue::class);
        $this->tracking_issues = $arr;

        return $this;
    }

    /**
     * Error group's resolution status.
     * An unspecified resolution status will be interpreted as OPEN
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ResolutionStatus resolution_status = 5;</code>
     * @return int
     */
    public function getResolutionStatus()
    {
        return $this->resolution_status;
    }

    /**
     * Error group's resolution status.
     * An unspecified resolution status will be interpreted as OPEN
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ResolutionStatus resolution_status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setResolutionStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ErrorReporting\V1beta1\ResolutionStatus::class);
        $this->resolution_status = $var;

        return $this;
    }

}
