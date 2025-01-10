<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Firestore.Rollback][google.firestore.v1.Firestore.Rollback].
 *
 * Generated from protobuf message <code>google.firestore.v1.RollbackRequest</code>
 */
class RollbackRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $database = '';
    /**
     * Required. The transaction to roll back.
     *
     * Generated from protobuf field <code>bytes transaction = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $transaction = '';

    /**
     * @param string $database    Required. The database name. In the format:
     *                            `projects/{project_id}/databases/{database_id}`.
     * @param string $transaction Required. The transaction to roll back.
     *
     * @return \Google\Cloud\Firestore\V1\RollbackRequest
     *
     * @experimental
     */
    public static function build(string $database, string $transaction): self
    {
        return (new self())
            ->setDatabase($database)
            ->setTransaction($transaction);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Required. The database name. In the format:
     *           `projects/{project_id}/databases/{database_id}`.
     *     @type string $transaction
     *           Required. The transaction to roll back.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required. The database name. In the format:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * Required. The transaction to roll back.
     *
     * Generated from protobuf field <code>bytes transaction = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Required. The transaction to roll back.
     *
     * Generated from protobuf field <code>bytes transaction = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;

        return $this;
    }

}

