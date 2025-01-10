<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [TestCases.ListTestCases][google.cloud.dialogflow.cx.v3.TestCases.ListTestCases].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ListTestCasesRequest</code>
 */
class ListTestCasesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to list all pages for.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of items to return in a single page. By default 20.
     * Note that when TestCaseView = FULL, the maximum page size allowed is 20.
     * When TestCaseView = BASIC, the maximum page size allowed is 500.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Specifies whether response should include all fields or just the metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ListTestCasesRequest.TestCaseView view = 4;</code>
     */
    protected $view = 0;

    /**
     * @param string $parent Required. The agent to list all pages for.
     *                       Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`. Please see
     *                       {@see TestCasesClient::agentName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\ListTestCasesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent to list all pages for.
     *           Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *     @type int $page_size
     *           The maximum number of items to return in a single page. By default 20.
     *           Note that when TestCaseView = FULL, the maximum page size allowed is 20.
     *           When TestCaseView = BASIC, the maximum page size allowed is 500.
     *     @type string $page_token
     *           The next_page_token value returned from a previous list request.
     *     @type int $view
     *           Specifies whether response should include all fields or just the metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to list all pages for.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The agent to list all pages for.
     * Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of items to return in a single page. By default 20.
     * Note that when TestCaseView = FULL, the maximum page size allowed is 20.
     * When TestCaseView = BASIC, the maximum page size allowed is 500.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return in a single page. By default 20.
     * Note that when TestCaseView = FULL, the maximum page size allowed is 20.
     * When TestCaseView = BASIC, the maximum page size allowed is 500.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Specifies whether response should include all fields or just the metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ListTestCasesRequest.TestCaseView view = 4;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Specifies whether response should include all fields or just the metadata.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.ListTestCasesRequest.TestCaseView view = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\ListTestCasesRequest\TestCaseView::class);
        $this->view = $var;

        return $this;
    }

}

