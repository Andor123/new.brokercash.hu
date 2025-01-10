<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/marketingplatform/admin/v1alpha/marketingplatform_admin.proto

namespace Google\Ads\MarketingPlatform\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListAnalyticsAccountLinks RPC.
 *
 * Generated from protobuf message <code>google.marketingplatform.admin.v1alpha.ListAnalyticsAccountLinksRequest</code>
 */
class ListAnalyticsAccountLinksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent organization, which owns this collection of Analytics
     * account links. Format: organizations/{org_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of Analytics account links to return in one
     * call. The service may return fewer than this value.
     * If unspecified, at most 50 Analytics account links will be returned. The
     * maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous ListAnalyticsAccountLinks
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListAnalyticsAccountLinks` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent organization, which owns this collection of Analytics
     *                       account links. Format: organizations/{org_id}
     *                       Please see {@see MarketingplatformAdminServiceClient::organizationName()} for help formatting this field.
     *
     * @return \Google\Ads\MarketingPlatform\Admin\V1alpha\ListAnalyticsAccountLinksRequest
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
     *           Required. The parent organization, which owns this collection of Analytics
     *           account links. Format: organizations/{org_id}
     *     @type int $page_size
     *           Optional. The maximum number of Analytics account links to return in one
     *           call. The service may return fewer than this value.
     *           If unspecified, at most 50 Analytics account links will be returned. The
     *           maximum value is 1000; values above 1000 will be coerced to 1000.
     *     @type string $page_token
     *           Optional. A page token, received from a previous ListAnalyticsAccountLinks
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           `ListAnalyticsAccountLinks` must match the call that provided the page
     *           token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Marketingplatform\Admin\V1Alpha\MarketingplatformAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent organization, which owns this collection of Analytics
     * account links. Format: organizations/{org_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent organization, which owns this collection of Analytics
     * account links. Format: organizations/{org_id}
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
     * Optional. The maximum number of Analytics account links to return in one
     * call. The service may return fewer than this value.
     * If unspecified, at most 50 Analytics account links will be returned. The
     * maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of Analytics account links to return in one
     * call. The service may return fewer than this value.
     * If unspecified, at most 50 Analytics account links will be returned. The
     * maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A page token, received from a previous ListAnalyticsAccountLinks
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListAnalyticsAccountLinks` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous ListAnalyticsAccountLinks
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListAnalyticsAccountLinks` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
