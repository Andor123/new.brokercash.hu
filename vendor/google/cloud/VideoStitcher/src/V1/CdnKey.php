<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/cdn_keys.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a CDN key. Used by the Video Stitcher
 * to sign URIs for fetching video manifests and signing
 * media segments for playback.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.CdnKey</code>
 */
class CdnKey extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the CDN key, in the form of
     * `projects/{project}/locations/{location}/cdnKeys/{id}`.
     * The name is ignored when creating a CDN key.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The hostname this key applies to.
     *
     * Generated from protobuf field <code>string hostname = 4;</code>
     */
    protected $hostname = '';
    protected $cdn_key_config;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\Stitcher\V1\GoogleCdnKey $google_cdn_key
     *           The configuration for a Google Cloud CDN key.
     *     @type \Google\Cloud\Video\Stitcher\V1\AkamaiCdnKey $akamai_cdn_key
     *           The configuration for an Akamai CDN key.
     *     @type \Google\Cloud\Video\Stitcher\V1\MediaCdnKey $media_cdn_key
     *           The configuration for a Media CDN key.
     *     @type string $name
     *           The resource name of the CDN key, in the form of
     *           `projects/{project}/locations/{location}/cdnKeys/{id}`.
     *           The name is ignored when creating a CDN key.
     *     @type string $hostname
     *           The hostname this key applies to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\CdnKeys::initOnce();
        parent::__construct($data);
    }

    /**
     * The configuration for a Google Cloud CDN key.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.GoogleCdnKey google_cdn_key = 5;</code>
     * @return \Google\Cloud\Video\Stitcher\V1\GoogleCdnKey|null
     */
    public function getGoogleCdnKey()
    {
        return $this->readOneof(5);
    }

    public function hasGoogleCdnKey()
    {
        return $this->hasOneof(5);
    }

    /**
     * The configuration for a Google Cloud CDN key.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.GoogleCdnKey google_cdn_key = 5;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\GoogleCdnKey $var
     * @return $this
     */
    public function setGoogleCdnKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\GoogleCdnKey::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The configuration for an Akamai CDN key.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.AkamaiCdnKey akamai_cdn_key = 6;</code>
     * @return \Google\Cloud\Video\Stitcher\V1\AkamaiCdnKey|null
     */
    public function getAkamaiCdnKey()
    {
        return $this->readOneof(6);
    }

    public function hasAkamaiCdnKey()
    {
        return $this->hasOneof(6);
    }

    /**
     * The configuration for an Akamai CDN key.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.AkamaiCdnKey akamai_cdn_key = 6;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\AkamaiCdnKey $var
     * @return $this
     */
    public function setAkamaiCdnKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\AkamaiCdnKey::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The configuration for a Media CDN key.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.MediaCdnKey media_cdn_key = 8;</code>
     * @return \Google\Cloud\Video\Stitcher\V1\MediaCdnKey|null
     */
    public function getMediaCdnKey()
    {
        return $this->readOneof(8);
    }

    public function hasMediaCdnKey()
    {
        return $this->hasOneof(8);
    }

    /**
     * The configuration for a Media CDN key.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.MediaCdnKey media_cdn_key = 8;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\MediaCdnKey $var
     * @return $this
     */
    public function setMediaCdnKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\MediaCdnKey::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * The resource name of the CDN key, in the form of
     * `projects/{project}/locations/{location}/cdnKeys/{id}`.
     * The name is ignored when creating a CDN key.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the CDN key, in the form of
     * `projects/{project}/locations/{location}/cdnKeys/{id}`.
     * The name is ignored when creating a CDN key.
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
     * The hostname this key applies to.
     *
     * Generated from protobuf field <code>string hostname = 4;</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * The hostname this key applies to.
     *
     * Generated from protobuf field <code>string hostname = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->hostname = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getCdnKeyConfig()
    {
        return $this->whichOneof("cdn_key_config");
    }

}

