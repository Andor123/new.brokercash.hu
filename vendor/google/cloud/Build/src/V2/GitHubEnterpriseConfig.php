<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v2/repositories.proto

namespace Google\Cloud\Build\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for connections to an instance of GitHub Enterprise.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v2.GitHubEnterpriseConfig</code>
 */
class GitHubEnterpriseConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The URI of the GitHub Enterprise host this connection is for.
     *
     * Generated from protobuf field <code>string host_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $host_uri = '';
    /**
     * Required. API Key used for authentication of webhook events.
     *
     * Generated from protobuf field <code>string api_key = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $api_key = '';
    /**
     * Id of the GitHub App created from the manifest.
     *
     * Generated from protobuf field <code>int64 app_id = 2;</code>
     */
    protected $app_id = 0;
    /**
     * The URL-friendly name of the GitHub App.
     *
     * Generated from protobuf field <code>string app_slug = 13;</code>
     */
    protected $app_slug = '';
    /**
     * SecretManager resource containing the private key of the GitHub App,
     * formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string private_key_secret_version = 4 [(.google.api.resource_reference) = {</code>
     */
    protected $private_key_secret_version = '';
    /**
     * SecretManager resource containing the webhook secret of the GitHub App,
     * formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string webhook_secret_secret_version = 5 [(.google.api.resource_reference) = {</code>
     */
    protected $webhook_secret_secret_version = '';
    /**
     * ID of the installation of the GitHub App.
     *
     * Generated from protobuf field <code>int64 app_installation_id = 9;</code>
     */
    protected $app_installation_id = 0;
    /**
     * Configuration for using Service Directory to privately connect to a GitHub
     * Enterprise server. This should only be set if the GitHub Enterprise server
     * is hosted on-premises and not reachable by public internet. If this field
     * is left empty, calls to the GitHub Enterprise server will be made over the
     * public internet.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.ServiceDirectoryConfig service_directory_config = 10;</code>
     */
    protected $service_directory_config = null;
    /**
     * SSL certificate to use for requests to GitHub Enterprise.
     *
     * Generated from protobuf field <code>string ssl_ca = 11;</code>
     */
    protected $ssl_ca = '';
    /**
     * Output only. GitHub Enterprise version installed at the host_uri.
     *
     * Generated from protobuf field <code>string server_version = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $server_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $host_uri
     *           Required. The URI of the GitHub Enterprise host this connection is for.
     *     @type string $api_key
     *           Required. API Key used for authentication of webhook events.
     *     @type int|string $app_id
     *           Id of the GitHub App created from the manifest.
     *     @type string $app_slug
     *           The URL-friendly name of the GitHub App.
     *     @type string $private_key_secret_version
     *           SecretManager resource containing the private key of the GitHub App,
     *           formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *     @type string $webhook_secret_secret_version
     *           SecretManager resource containing the webhook secret of the GitHub App,
     *           formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *     @type int|string $app_installation_id
     *           ID of the installation of the GitHub App.
     *     @type \Google\Cloud\Build\V2\ServiceDirectoryConfig $service_directory_config
     *           Configuration for using Service Directory to privately connect to a GitHub
     *           Enterprise server. This should only be set if the GitHub Enterprise server
     *           is hosted on-premises and not reachable by public internet. If this field
     *           is left empty, calls to the GitHub Enterprise server will be made over the
     *           public internet.
     *     @type string $ssl_ca
     *           SSL certificate to use for requests to GitHub Enterprise.
     *     @type string $server_version
     *           Output only. GitHub Enterprise version installed at the host_uri.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V2\Repositories::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The URI of the GitHub Enterprise host this connection is for.
     *
     * Generated from protobuf field <code>string host_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHostUri()
    {
        return $this->host_uri;
    }

    /**
     * Required. The URI of the GitHub Enterprise host this connection is for.
     *
     * Generated from protobuf field <code>string host_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHostUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->host_uri = $var;

        return $this;
    }

    /**
     * Required. API Key used for authentication of webhook events.
     *
     * Generated from protobuf field <code>string api_key = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * Required. API Key used for authentication of webhook events.
     *
     * Generated from protobuf field <code>string api_key = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setApiKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_key = $var;

        return $this;
    }

    /**
     * Id of the GitHub App created from the manifest.
     *
     * Generated from protobuf field <code>int64 app_id = 2;</code>
     * @return int|string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Id of the GitHub App created from the manifest.
     *
     * Generated from protobuf field <code>int64 app_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkInt64($var);
        $this->app_id = $var;

        return $this;
    }

    /**
     * The URL-friendly name of the GitHub App.
     *
     * Generated from protobuf field <code>string app_slug = 13;</code>
     * @return string
     */
    public function getAppSlug()
    {
        return $this->app_slug;
    }

    /**
     * The URL-friendly name of the GitHub App.
     *
     * Generated from protobuf field <code>string app_slug = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setAppSlug($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_slug = $var;

        return $this;
    }

    /**
     * SecretManager resource containing the private key of the GitHub App,
     * formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string private_key_secret_version = 4 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPrivateKeySecretVersion()
    {
        return $this->private_key_secret_version;
    }

    /**
     * SecretManager resource containing the private key of the GitHub App,
     * formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string private_key_secret_version = 4 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKeySecretVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_key_secret_version = $var;

        return $this;
    }

    /**
     * SecretManager resource containing the webhook secret of the GitHub App,
     * formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string webhook_secret_secret_version = 5 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWebhookSecretSecretVersion()
    {
        return $this->webhook_secret_secret_version;
    }

    /**
     * SecretManager resource containing the webhook secret of the GitHub App,
     * formatted as `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string webhook_secret_secret_version = 5 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWebhookSecretSecretVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->webhook_secret_secret_version = $var;

        return $this;
    }

    /**
     * ID of the installation of the GitHub App.
     *
     * Generated from protobuf field <code>int64 app_installation_id = 9;</code>
     * @return int|string
     */
    public function getAppInstallationId()
    {
        return $this->app_installation_id;
    }

    /**
     * ID of the installation of the GitHub App.
     *
     * Generated from protobuf field <code>int64 app_installation_id = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAppInstallationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->app_installation_id = $var;

        return $this;
    }

    /**
     * Configuration for using Service Directory to privately connect to a GitHub
     * Enterprise server. This should only be set if the GitHub Enterprise server
     * is hosted on-premises and not reachable by public internet. If this field
     * is left empty, calls to the GitHub Enterprise server will be made over the
     * public internet.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.ServiceDirectoryConfig service_directory_config = 10;</code>
     * @return \Google\Cloud\Build\V2\ServiceDirectoryConfig|null
     */
    public function getServiceDirectoryConfig()
    {
        return $this->service_directory_config;
    }

    public function hasServiceDirectoryConfig()
    {
        return isset($this->service_directory_config);
    }

    public function clearServiceDirectoryConfig()
    {
        unset($this->service_directory_config);
    }

    /**
     * Configuration for using Service Directory to privately connect to a GitHub
     * Enterprise server. This should only be set if the GitHub Enterprise server
     * is hosted on-premises and not reachable by public internet. If this field
     * is left empty, calls to the GitHub Enterprise server will be made over the
     * public internet.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v2.ServiceDirectoryConfig service_directory_config = 10;</code>
     * @param \Google\Cloud\Build\V2\ServiceDirectoryConfig $var
     * @return $this
     */
    public function setServiceDirectoryConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V2\ServiceDirectoryConfig::class);
        $this->service_directory_config = $var;

        return $this;
    }

    /**
     * SSL certificate to use for requests to GitHub Enterprise.
     *
     * Generated from protobuf field <code>string ssl_ca = 11;</code>
     * @return string
     */
    public function getSslCa()
    {
        return $this->ssl_ca;
    }

    /**
     * SSL certificate to use for requests to GitHub Enterprise.
     *
     * Generated from protobuf field <code>string ssl_ca = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setSslCa($var)
    {
        GPBUtil::checkString($var, True);
        $this->ssl_ca = $var;

        return $this;
    }

    /**
     * Output only. GitHub Enterprise version installed at the host_uri.
     *
     * Generated from protobuf field <code>string server_version = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServerVersion()
    {
        return $this->server_version;
    }

    /**
     * Output only. GitHub Enterprise version installed at the host_uri.
     *
     * Generated from protobuf field <code>string server_version = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServerVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_version = $var;

        return $this;
    }

}

