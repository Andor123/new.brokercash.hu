<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/domain.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A domain that a user has been authorized to administer. To authorize use
 * of a domain, verify ownership via
 * [Search Console](https://search.google.com/search-console/welcome).
 *
 * Generated from protobuf message <code>google.appengine.v1.AuthorizedDomain</code>
 */
class AuthorizedDomain extends \Google\Protobuf\Internal\Message
{
    /**
     * Full path to the `AuthorizedDomain` resource in the API. Example:
     * `apps/myapp/authorizedDomains/example.com`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Fully qualified domain name of the domain authorized for use. Example:
     * `example.com`.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Full path to the `AuthorizedDomain` resource in the API. Example:
     *           `apps/myapp/authorizedDomains/example.com`.
     *           &#64;OutputOnly
     *     @type string $id
     *           Fully qualified domain name of the domain authorized for use. Example:
     *           `example.com`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Domain::initOnce();
        parent::__construct($data);
    }

    /**
     * Full path to the `AuthorizedDomain` resource in the API. Example:
     * `apps/myapp/authorizedDomains/example.com`.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Full path to the `AuthorizedDomain` resource in the API. Example:
     * `apps/myapp/authorizedDomains/example.com`.
     * &#64;OutputOnly
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
     * Fully qualified domain name of the domain authorized for use. Example:
     * `example.com`.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Fully qualified domain name of the domain authorized for use. Example:
     * `example.com`.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}
