<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MySQL database profile.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.MysqlProfile</code>
 */
class MysqlProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Hostname for the MySQL connection.
     *
     * Generated from protobuf field <code>string hostname = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $hostname = '';
    /**
     * Port for the MySQL connection, default value is 3306.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     */
    protected $port = 0;
    /**
     * Required. Username for the MySQL connection.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $username = '';
    /**
     * Required. Input only. Password for the MySQL connection.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    protected $password = '';
    /**
     * SSL configuration for the MySQL connection.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlSslConfig ssl_config = 5;</code>
     */
    protected $ssl_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hostname
     *           Required. Hostname for the MySQL connection.
     *     @type int $port
     *           Port for the MySQL connection, default value is 3306.
     *     @type string $username
     *           Required. Username for the MySQL connection.
     *     @type string $password
     *           Required. Input only. Password for the MySQL connection.
     *     @type \Google\Cloud\Datastream\V1\MysqlSslConfig $ssl_config
     *           SSL configuration for the MySQL connection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Hostname for the MySQL connection.
     *
     * Generated from protobuf field <code>string hostname = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Required. Hostname for the MySQL connection.
     *
     * Generated from protobuf field <code>string hostname = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Port for the MySQL connection, default value is 3306.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Port for the MySQL connection, default value is 3306.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Required. Username for the MySQL connection.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Required. Username for the MySQL connection.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Required. Input only. Password for the MySQL connection.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Required. Input only. Password for the MySQL connection.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * SSL configuration for the MySQL connection.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlSslConfig ssl_config = 5;</code>
     * @return \Google\Cloud\Datastream\V1\MysqlSslConfig|null
     */
    public function getSslConfig()
    {
        return $this->ssl_config;
    }

    public function hasSslConfig()
    {
        return isset($this->ssl_config);
    }

    public function clearSslConfig()
    {
        unset($this->ssl_config);
    }

    /**
     * SSL configuration for the MySQL connection.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlSslConfig ssl_config = 5;</code>
     * @param \Google\Cloud\Datastream\V1\MysqlSslConfig $var
     * @return $this
     */
    public function setSslConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\MysqlSslConfig::class);
        $this->ssl_config = $var;

        return $this;
    }

}
