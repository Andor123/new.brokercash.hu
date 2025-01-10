<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/notebook.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Jupyter notebook IPYNB file, such as a [Colab Enterprise
 * notebook](https://cloud.google.com/colab/docs/introduction) file, that is
 * associated with a finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Notebook</code>
 */
class Notebook extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the notebook.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The source notebook service, for example, "Colab Enterprise".
     *
     * Generated from protobuf field <code>string service = 2;</code>
     */
    protected $service = '';
    /**
     * The user ID of the latest author to modify the notebook.
     *
     * Generated from protobuf field <code>string last_author = 3;</code>
     */
    protected $last_author = '';
    /**
     * The most recent time the notebook was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp notebook_update_time = 4;</code>
     */
    protected $notebook_update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the notebook.
     *     @type string $service
     *           The source notebook service, for example, "Colab Enterprise".
     *     @type string $last_author
     *           The user ID of the latest author to modify the notebook.
     *     @type \Google\Protobuf\Timestamp $notebook_update_time
     *           The most recent time the notebook was updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Notebook::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the notebook.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the notebook.
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
     * The source notebook service, for example, "Colab Enterprise".
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * The source notebook service, for example, "Colab Enterprise".
     *
     * Generated from protobuf field <code>string service = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * The user ID of the latest author to modify the notebook.
     *
     * Generated from protobuf field <code>string last_author = 3;</code>
     * @return string
     */
    public function getLastAuthor()
    {
        return $this->last_author;
    }

    /**
     * The user ID of the latest author to modify the notebook.
     *
     * Generated from protobuf field <code>string last_author = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLastAuthor($var)
    {
        GPBUtil::checkString($var, True);
        $this->last_author = $var;

        return $this;
    }

    /**
     * The most recent time the notebook was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp notebook_update_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNotebookUpdateTime()
    {
        return $this->notebook_update_time;
    }

    public function hasNotebookUpdateTime()
    {
        return isset($this->notebook_update_time);
    }

    public function clearNotebookUpdateTime()
    {
        unset($this->notebook_update_time);
    }

    /**
     * The most recent time the notebook was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp notebook_update_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNotebookUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->notebook_update_time = $var;

        return $this;
    }

}
