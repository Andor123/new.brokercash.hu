<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/service.proto

namespace Google\Cloud\SecretManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [SecretManagerService.ListSecrets][google.cloud.secretmanager.v1.SecretManagerService.ListSecrets].
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.ListSecretsResponse</code>
 */
class ListSecretsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of [Secrets][google.cloud.secretmanager.v1.Secret] sorted in
     * reverse by create_time (newest first).
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1.Secret secrets = 1;</code>
     */
    private $secrets;
    /**
     * A token to retrieve the next page of results. Pass this value in
     * [ListSecretsRequest.page_token][google.cloud.secretmanager.v1.ListSecretsRequest.page_token]
     * to retrieve the next page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * The total number of [Secrets][google.cloud.secretmanager.v1.Secret] but 0
     * when the
     * [ListSecretsRequest.filter][google.cloud.secretmanager.v1.ListSecretsRequest.filter]
     * field is set.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     */
    private $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\SecretManager\V1\Secret>|\Google\Protobuf\Internal\RepeatedField $secrets
     *           The list of [Secrets][google.cloud.secretmanager.v1.Secret] sorted in
     *           reverse by create_time (newest first).
     *     @type string $next_page_token
     *           A token to retrieve the next page of results. Pass this value in
     *           [ListSecretsRequest.page_token][google.cloud.secretmanager.v1.ListSecretsRequest.page_token]
     *           to retrieve the next page.
     *     @type int $total_size
     *           The total number of [Secrets][google.cloud.secretmanager.v1.Secret] but 0
     *           when the
     *           [ListSecretsRequest.filter][google.cloud.secretmanager.v1.ListSecretsRequest.filter]
     *           field is set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of [Secrets][google.cloud.secretmanager.v1.Secret] sorted in
     * reverse by create_time (newest first).
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1.Secret secrets = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecrets()
    {
        return $this->secrets;
    }

    /**
     * The list of [Secrets][google.cloud.secretmanager.v1.Secret] sorted in
     * reverse by create_time (newest first).
     *
     * Generated from protobuf field <code>repeated .google.cloud.secretmanager.v1.Secret secrets = 1;</code>
     * @param array<\Google\Cloud\SecretManager\V1\Secret>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecrets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecretManager\V1\Secret::class);
        $this->secrets = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results. Pass this value in
     * [ListSecretsRequest.page_token][google.cloud.secretmanager.v1.ListSecretsRequest.page_token]
     * to retrieve the next page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results. Pass this value in
     * [ListSecretsRequest.page_token][google.cloud.secretmanager.v1.ListSecretsRequest.page_token]
     * to retrieve the next page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * The total number of [Secrets][google.cloud.secretmanager.v1.Secret] but 0
     * when the
     * [ListSecretsRequest.filter][google.cloud.secretmanager.v1.ListSecretsRequest.filter]
     * field is set.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @return int
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * The total number of [Secrets][google.cloud.secretmanager.v1.Secret] but 0
     * when the
     * [ListSecretsRequest.filter][google.cloud.secretmanager.v1.ListSecretsRequest.filter]
     * field is set.
     *
     * Generated from protobuf field <code>int32 total_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_size = $var;

        return $this;
    }

}

