<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/site_search_engine_service.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [SiteSearchEngineService.EnableAdvancedSiteSearch][google.cloud.discoveryengine.v1.SiteSearchEngineService.EnableAdvancedSiteSearch]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.EnableAdvancedSiteSearchRequest</code>
 */
class EnableAdvancedSiteSearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of the
     * [SiteSearchEngine][google.cloud.discoveryengine.v1.SiteSearchEngine], such
     * as
     * `projects/{project}/locations/{location}/dataStores/{data_store_id}/siteSearchEngine`.
     *
     * Generated from protobuf field <code>string site_search_engine = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $site_search_engine = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $site_search_engine
     *           Required. Full resource name of the
     *           [SiteSearchEngine][google.cloud.discoveryengine.v1.SiteSearchEngine], such
     *           as
     *           `projects/{project}/locations/{location}/dataStores/{data_store_id}/siteSearchEngine`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SiteSearchEngineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of the
     * [SiteSearchEngine][google.cloud.discoveryengine.v1.SiteSearchEngine], such
     * as
     * `projects/{project}/locations/{location}/dataStores/{data_store_id}/siteSearchEngine`.
     *
     * Generated from protobuf field <code>string site_search_engine = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSiteSearchEngine()
    {
        return $this->site_search_engine;
    }

    /**
     * Required. Full resource name of the
     * [SiteSearchEngine][google.cloud.discoveryengine.v1.SiteSearchEngine], such
     * as
     * `projects/{project}/locations/{location}/dataStores/{data_store_id}/siteSearchEngine`.
     *
     * Generated from protobuf field <code>string site_search_engine = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSiteSearchEngine($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_search_engine = $var;

        return $this;
    }

}

