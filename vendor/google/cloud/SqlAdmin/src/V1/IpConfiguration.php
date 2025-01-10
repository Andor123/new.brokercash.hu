<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IP Management configuration.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.IpConfiguration</code>
 */
class IpConfiguration extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     */
    protected $ipv4_enabled = null;
    /**
     * The resource link for the VPC network from which the Cloud SQL instance is
     * accessible for private IP. For example,
     * `/projects/myProject/global/networks/default`. This setting can
     * be updated, but it cannot be removed after it is set.
     *
     * Generated from protobuf field <code>string private_network = 2;</code>
     */
    protected $private_network = '';
    /**
     * Use `ssl_mode` instead.
     * Whether SSL/TLS connections over IP are enforced.
     * If set to false, then allow both non-SSL/non-TLS and SSL/TLS connections.
     * For SSL/TLS connections, the client certificate won't be verified. If
     * set to true, then only allow connections encrypted with SSL/TLS and with
     * valid client certificates. If you want to enforce SSL/TLS without enforcing
     * the requirement for valid client certificates, then use the `ssl_mode` flag
     * instead of the `require_ssl` flag.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     */
    protected $require_ssl = null;
    /**
     * The list of external networks that are allowed to connect to the instance
     * using the IP. In 'CIDR' notation, also known as 'slash' notation (for
     * example: `157.197.200.0/24`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.AclEntry authorized_networks = 4;</code>
     */
    private $authorized_networks;
    /**
     * The name of the allocated ip range for the private ip Cloud SQL instance.
     * For example: "google-managed-services-default". If set, the instance ip
     * will be created in the allocated range. The range name must comply with
     * [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     * must be 1-63 characters long and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])?.`
     *
     * Generated from protobuf field <code>string allocated_ip_range = 6;</code>
     */
    protected $allocated_ip_range = '';
    /**
     * Controls connectivity to private IP instances from Google services,
     * such as BigQuery.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_private_path_for_google_cloud_services = 7;</code>
     */
    protected $enable_private_path_for_google_cloud_services = null;
    /**
     * Specify how SSL/TLS is enforced in database connections. If you must use
     * the `require_ssl` flag for backward compatibility, then only the following
     * value pairs are valid:
     * For PostgreSQL and MySQL:
     * * `ssl_mode=ALLOW_UNENCRYPTED_AND_ENCRYPTED` and `require_ssl=false`
     * * `ssl_mode=ENCRYPTED_ONLY` and `require_ssl=false`
     * * `ssl_mode=TRUSTED_CLIENT_CERTIFICATE_REQUIRED` and `require_ssl=true`
     * For SQL Server:
     * * `ssl_mode=ALLOW_UNENCRYPTED_AND_ENCRYPTED` and `require_ssl=false`
     * * `ssl_mode=ENCRYPTED_ONLY` and `require_ssl=true`
     * The value of `ssl_mode` has priority over the value of `require_ssl`.
     * For example, for the pair `ssl_mode=ENCRYPTED_ONLY` and
     * `require_ssl=false`, `ssl_mode=ENCRYPTED_ONLY` means accept only SSL
     * connections, while `require_ssl=false` means accept both non-SSL
     * and SSL connections. In this case, MySQL and PostgreSQL databases respect
     * `ssl_mode` and accepts only SSL connections.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.IpConfiguration.SslMode ssl_mode = 8;</code>
     */
    protected $ssl_mode = 0;
    /**
     * PSC settings for this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1.PscConfig psc_config = 9;</code>
     */
    protected $psc_config = null;
    /**
     * Specify what type of CA is used for the server certificate.
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1.IpConfiguration.CaMode server_ca_mode = 10;</code>
     */
    protected $server_ca_mode = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\BoolValue $ipv4_enabled
     *           Whether the instance is assigned a public IP address or not.
     *     @type string $private_network
     *           The resource link for the VPC network from which the Cloud SQL instance is
     *           accessible for private IP. For example,
     *           `/projects/myProject/global/networks/default`. This setting can
     *           be updated, but it cannot be removed after it is set.
     *     @type \Google\Protobuf\BoolValue $require_ssl
     *           Use `ssl_mode` instead.
     *           Whether SSL/TLS connections over IP are enforced.
     *           If set to false, then allow both non-SSL/non-TLS and SSL/TLS connections.
     *           For SSL/TLS connections, the client certificate won't be verified. If
     *           set to true, then only allow connections encrypted with SSL/TLS and with
     *           valid client certificates. If you want to enforce SSL/TLS without enforcing
     *           the requirement for valid client certificates, then use the `ssl_mode` flag
     *           instead of the `require_ssl` flag.
     *     @type array<\Google\Cloud\Sql\V1\AclEntry>|\Google\Protobuf\Internal\RepeatedField $authorized_networks
     *           The list of external networks that are allowed to connect to the instance
     *           using the IP. In 'CIDR' notation, also known as 'slash' notation (for
     *           example: `157.197.200.0/24`).
     *     @type string $allocated_ip_range
     *           The name of the allocated ip range for the private ip Cloud SQL instance.
     *           For example: "google-managed-services-default". If set, the instance ip
     *           will be created in the allocated range. The range name must comply with
     *           [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     *           must be 1-63 characters long and match the regular expression
     *           `[a-z]([-a-z0-9]*[a-z0-9])?.`
     *     @type \Google\Protobuf\BoolValue $enable_private_path_for_google_cloud_services
     *           Controls connectivity to private IP instances from Google services,
     *           such as BigQuery.
     *     @type int $ssl_mode
     *           Specify how SSL/TLS is enforced in database connections. If you must use
     *           the `require_ssl` flag for backward compatibility, then only the following
     *           value pairs are valid:
     *           For PostgreSQL and MySQL:
     *           * `ssl_mode=ALLOW_UNENCRYPTED_AND_ENCRYPTED` and `require_ssl=false`
     *           * `ssl_mode=ENCRYPTED_ONLY` and `require_ssl=false`
     *           * `ssl_mode=TRUSTED_CLIENT_CERTIFICATE_REQUIRED` and `require_ssl=true`
     *           For SQL Server:
     *           * `ssl_mode=ALLOW_UNENCRYPTED_AND_ENCRYPTED` and `require_ssl=false`
     *           * `ssl_mode=ENCRYPTED_ONLY` and `require_ssl=true`
     *           The value of `ssl_mode` has priority over the value of `require_ssl`.
     *           For example, for the pair `ssl_mode=ENCRYPTED_ONLY` and
     *           `require_ssl=false`, `ssl_mode=ENCRYPTED_ONLY` means accept only SSL
     *           connections, while `require_ssl=false` means accept both non-SSL
     *           and SSL connections. In this case, MySQL and PostgreSQL databases respect
     *           `ssl_mode` and accepts only SSL connections.
     *     @type \Google\Cloud\Sql\V1\PscConfig $psc_config
     *           PSC settings for this instance.
     *     @type int $server_ca_mode
     *           Specify what type of CA is used for the server certificate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getIpv4Enabled()
    {
        return $this->ipv4_enabled;
    }

    public function hasIpv4Enabled()
    {
        return isset($this->ipv4_enabled);
    }

    public function clearIpv4Enabled()
    {
        unset($this->ipv4_enabled);
    }

    /**
     * Returns the unboxed value from <code>getIpv4Enabled()</code>

     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     * @return bool|null
     */
    public function getIpv4EnabledUnwrapped()
    {
        return $this->readWrapperValue("ipv4_enabled");
    }

    /**
     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIpv4Enabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->ipv4_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the instance is assigned a public IP address or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue ipv4_enabled = 1;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setIpv4EnabledUnwrapped($var)
    {
        $this->writeWrapperValue("ipv4_enabled", $var);
        return $this;}

    /**
     * The resource link for the VPC network from which the Cloud SQL instance is
     * accessible for private IP. For example,
     * `/projects/myProject/global/networks/default`. This setting can
     * be updated, but it cannot be removed after it is set.
     *
     * Generated from protobuf field <code>string private_network = 2;</code>
     * @return string
     */
    public function getPrivateNetwork()
    {
        return $this->private_network;
    }

    /**
     * The resource link for the VPC network from which the Cloud SQL instance is
     * accessible for private IP. For example,
     * `/projects/myProject/global/networks/default`. This setting can
     * be updated, but it cannot be removed after it is set.
     *
     * Generated from protobuf field <code>string private_network = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_network = $var;

        return $this;
    }

    /**
     * Use `ssl_mode` instead.
     * Whether SSL/TLS connections over IP are enforced.
     * If set to false, then allow both non-SSL/non-TLS and SSL/TLS connections.
     * For SSL/TLS connections, the client certificate won't be verified. If
     * set to true, then only allow connections encrypted with SSL/TLS and with
     * valid client certificates. If you want to enforce SSL/TLS without enforcing
     * the requirement for valid client certificates, then use the `ssl_mode` flag
     * instead of the `require_ssl` flag.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getRequireSsl()
    {
        return $this->require_ssl;
    }

    public function hasRequireSsl()
    {
        return isset($this->require_ssl);
    }

    public function clearRequireSsl()
    {
        unset($this->require_ssl);
    }

    /**
     * Returns the unboxed value from <code>getRequireSsl()</code>

     * Use `ssl_mode` instead.
     * Whether SSL/TLS connections over IP are enforced.
     * If set to false, then allow both non-SSL/non-TLS and SSL/TLS connections.
     * For SSL/TLS connections, the client certificate won't be verified. If
     * set to true, then only allow connections encrypted with SSL/TLS and with
     * valid client certificates. If you want to enforce SSL/TLS without enforcing
     * the requirement for valid client certificates, then use the `ssl_mode` flag
     * instead of the `require_ssl` flag.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     * @return bool|null
     */
    public function getRequireSslUnwrapped()
    {
        return $this->readWrapperValue("require_ssl");
    }

    /**
     * Use `ssl_mode` instead.
     * Whether SSL/TLS connections over IP are enforced.
     * If set to false, then allow both non-SSL/non-TLS and SSL/TLS connections.
     * For SSL/TLS connections, the client certificate won't be verified. If
     * set to true, then only allow connections encrypted with SSL/TLS and with
     * valid client certificates. If you want to enforce SSL/TLS without enforcing
     * the requirement for valid client certificates, then use the `ssl_mode` flag
     * instead of the `require_ssl` flag.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setRequireSsl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->require_ssl = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Use `ssl_mode` instead.
     * Whether SSL/TLS connections over IP are enforced.
     * If set to false, then allow both non-SSL/non-TLS and SSL/TLS connections.
     * For SSL/TLS connections, the client certificate won't be verified. If
     * set to true, then only allow connections encrypted with SSL/TLS and with
     * valid client certificates. If you want to enforce SSL/TLS without enforcing
     * the requirement for valid client certificates, then use the `ssl_mode` flag
     * instead of the `require_ssl` flag.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue require_ssl = 3;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setRequireSslUnwrapped($var)
    {
        $this->writeWrapperValue("require_ssl", $var);
        return $this;}

    /**
     * The list of external networks that are allowed to connect to the instance
     * using the IP. In 'CIDR' notation, also known as 'slash' notation (for
     * example: `157.197.200.0/24`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.AclEntry authorized_networks = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthorizedNetworks()
    {
        return $this->authorized_networks;
    }

    /**
     * The list of external networks that are allowed to connect to the instance
     * using the IP. In 'CIDR' notation, also known as 'slash' notation (for
     * example: `157.197.200.0/24`).
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1.AclEntry authorized_networks = 4;</code>
     * @param array<\Google\Cloud\Sql\V1\AclEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthorizedNetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1\AclEntry::class);
        $this->authorized_networks = $arr;

        return $this;
    }

    /**
     * The name of the allocated ip range for the private ip Cloud SQL instance.
     * For example: "google-managed-services-default". If set, the instance ip
     * will be created in the allocated range. The range name must comply with
     * [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     * must be 1-63 characters long and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])?.`
     *
     * Generated from protobuf field <code>string allocated_ip_range = 6;</code>
     * @return string
     */
    public function getAllocatedIpRange()
    {
        return $this->allocated_ip_range;
    }

    /**
     * The name of the allocated ip range for the private ip Cloud SQL instance.
     * For example: "google-managed-services-default". If set, the instance ip
     * will be created in the allocated range. The range name must comply with
     * [RFC 1035](https://tools.ietf.org/html/rfc1035). Specifically, the name
     * must be 1-63 characters long and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])?.`
     *
     * Generated from protobuf field <code>string allocated_ip_range = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAllocatedIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->allocated_ip_range = $var;

        return $this;
    }

    /**
     * Controls connectivity to private IP instances from Google services,
     * such as BigQuery.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_private_path_for_google_cloud_services = 7;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getEnablePrivatePathForGoogleCloudServices()
    {
        return $this->enable_private_path_for_google_cloud_services;
    }

    public function hasEnablePrivatePathForGoogleCloudServices()
    {
        return isset($this->enable_private_path_for_google_cloud_services);
    }

    public function clearEnablePrivatePathForGoogleCloudServices()
    {
        unset($this->enable_private_path_for_google_cloud_services);
    }

    /**
     * Returns the unboxed value from <code>getEnablePrivatePathForGoogleCloudServices()</code>

     * Controls connectivity to private IP instances from Google services,
     * such as BigQuery.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_private_path_for_google_cloud_services = 7;</code>
     * @return bool|null
     */
    public function getEnablePrivatePathForGoogleCloudServicesUnwrapped()
    {
        return $this->readWrapperValue("enable_private_path_for_google_cloud_services");
    }

    /**
     * Controls connectivity to private IP instances from Google services,
     * such as BigQuery.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_private_path_for_google_cloud_services = 7;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnablePrivatePathForGoogleCloudServices($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enable_private_path_for_google_cloud_services = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Controls connectivity to private IP instances from Google services,
     * such as BigQuery.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enable_private_path_for_google_cloud_services = 7;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setEnablePrivatePathForGoogleCloudServicesUnwrapped($var)
    {
        $this->writeWrapperValue("enable_private_path_for_google_cloud_services", $var);
        return $this;}

    /**
     * Specify how SSL/TLS is enforced in database connections. If you must use
     * the `require_ssl` flag for backward compatibility, then only the following
     * value pairs are valid:
     * For PostgreSQL and MySQL:
     * * `ssl_mode=ALLOW_UNENCRYPTED_AND_ENCRYPTED` and `require_ssl=false`
     * * `ssl_mode=ENCRYPTED_ONLY` and `require_ssl=false`
     * * `ssl_mode=TRUSTED_CLIENT_CERTIFICATE_REQUIRED` and `require_ssl=true`
     * For SQL Server:
     * * `ssl_mode=ALLOW_UNENCRYPTED_AND_ENCRYPTED` and `require_ssl=false`
     * * `ssl_mode=ENCRYPTED_ONLY` and `require_ssl=true`
     * The value of `ssl_mode` has priority over the value of `require_ssl`.
     * For example, for the pair `ssl_mode=ENCRYPTED_ONLY` and
     * `require_ssl=false`, `ssl_mode=ENCRYPTED_ONLY` means accept only SSL
     * connections, while `require_ssl=false` means accept both non-SSL
     * and SSL connections. In this case, MySQL and PostgreSQL databases respect
     * `ssl_mode` and accepts only SSL connections.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.IpConfiguration.SslMode ssl_mode = 8;</code>
     * @return int
     */
    public function getSslMode()
    {
        return $this->ssl_mode;
    }

    /**
     * Specify how SSL/TLS is enforced in database connections. If you must use
     * the `require_ssl` flag for backward compatibility, then only the following
     * value pairs are valid:
     * For PostgreSQL and MySQL:
     * * `ssl_mode=ALLOW_UNENCRYPTED_AND_ENCRYPTED` and `require_ssl=false`
     * * `ssl_mode=ENCRYPTED_ONLY` and `require_ssl=false`
     * * `ssl_mode=TRUSTED_CLIENT_CERTIFICATE_REQUIRED` and `require_ssl=true`
     * For SQL Server:
     * * `ssl_mode=ALLOW_UNENCRYPTED_AND_ENCRYPTED` and `require_ssl=false`
     * * `ssl_mode=ENCRYPTED_ONLY` and `require_ssl=true`
     * The value of `ssl_mode` has priority over the value of `require_ssl`.
     * For example, for the pair `ssl_mode=ENCRYPTED_ONLY` and
     * `require_ssl=false`, `ssl_mode=ENCRYPTED_ONLY` means accept only SSL
     * connections, while `require_ssl=false` means accept both non-SSL
     * and SSL connections. In this case, MySQL and PostgreSQL databases respect
     * `ssl_mode` and accepts only SSL connections.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1.IpConfiguration.SslMode ssl_mode = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSslMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\IpConfiguration\SslMode::class);
        $this->ssl_mode = $var;

        return $this;
    }

    /**
     * PSC settings for this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1.PscConfig psc_config = 9;</code>
     * @return \Google\Cloud\Sql\V1\PscConfig|null
     */
    public function getPscConfig()
    {
        return $this->psc_config;
    }

    public function hasPscConfig()
    {
        return isset($this->psc_config);
    }

    public function clearPscConfig()
    {
        unset($this->psc_config);
    }

    /**
     * PSC settings for this instance.
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1.PscConfig psc_config = 9;</code>
     * @param \Google\Cloud\Sql\V1\PscConfig $var
     * @return $this
     */
    public function setPscConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Sql\V1\PscConfig::class);
        $this->psc_config = $var;

        return $this;
    }

    /**
     * Specify what type of CA is used for the server certificate.
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1.IpConfiguration.CaMode server_ca_mode = 10;</code>
     * @return int
     */
    public function getServerCaMode()
    {
        return isset($this->server_ca_mode) ? $this->server_ca_mode : 0;
    }

    public function hasServerCaMode()
    {
        return isset($this->server_ca_mode);
    }

    public function clearServerCaMode()
    {
        unset($this->server_ca_mode);
    }

    /**
     * Specify what type of CA is used for the server certificate.
     *
     * Generated from protobuf field <code>optional .google.cloud.sql.v1.IpConfiguration.CaMode server_ca_mode = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setServerCaMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1\IpConfiguration\CaMode::class);
        $this->server_ca_mode = $var;

        return $this;
    }

}
