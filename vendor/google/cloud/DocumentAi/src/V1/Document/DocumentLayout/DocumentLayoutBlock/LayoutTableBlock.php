<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a table type block.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableBlock</code>
 */
class LayoutTableBlock extends \Google\Protobuf\Internal\Message
{
    /**
     * Header rows at the top of the table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableRow header_rows = 1;</code>
     */
    private $header_rows;
    /**
     * Body rows containing main table content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableRow body_rows = 2;</code>
     */
    private $body_rows;
    /**
     * Table caption/title.
     *
     * Generated from protobuf field <code>string caption = 3;</code>
     */
    protected $caption = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock\LayoutTableRow>|\Google\Protobuf\Internal\RepeatedField $header_rows
     *           Header rows at the top of the table.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock\LayoutTableRow>|\Google\Protobuf\Internal\RepeatedField $body_rows
     *           Body rows containing main table content.
     *     @type string $caption
     *           Table caption/title.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Header rows at the top of the table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableRow header_rows = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaderRows()
    {
        return $this->header_rows;
    }

    /**
     * Header rows at the top of the table.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableRow header_rows = 1;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock\LayoutTableRow>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaderRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock\LayoutTableRow::class);
        $this->header_rows = $arr;

        return $this;
    }

    /**
     * Body rows containing main table content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableRow body_rows = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBodyRows()
    {
        return $this->body_rows;
    }

    /**
     * Body rows containing main table content.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTableRow body_rows = 2;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock\LayoutTableRow>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBodyRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock\LayoutTableRow::class);
        $this->body_rows = $arr;

        return $this;
    }

    /**
     * Table caption/title.
     *
     * Generated from protobuf field <code>string caption = 3;</code>
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Table caption/title.
     *
     * Generated from protobuf field <code>string caption = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCaption($var)
    {
        GPBUtil::checkString($var, True);
        $this->caption = $var;

        return $this;
    }

}

