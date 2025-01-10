<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a text type block.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock.LayoutTextBlock</code>
 */
class LayoutTextBlock extends \Google\Protobuf\Internal\Message
{
    /**
     * Text content stored in the block.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';
    /**
     * Type of the text in the block. Available options are: `paragraph`,
     * `subtitle`, `heading-1`, `heading-2`, `heading-3`, `heading-4`,
     * `heading-5`, `header`, `footer`.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * A text block could further have child blocks.
     * Repeated blocks support further hierarchies and nested blocks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock blocks = 3;</code>
     */
    private $blocks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Text content stored in the block.
     *     @type string $type
     *           Type of the text in the block. Available options are: `paragraph`,
     *           `subtitle`, `heading-1`, `heading-2`, `heading-3`, `heading-4`,
     *           `heading-5`, `header`, `footer`.
     *     @type array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock>|\Google\Protobuf\Internal\RepeatedField $blocks
     *           A text block could further have child blocks.
     *           Repeated blocks support further hierarchies and nested blocks.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Text content stored in the block.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Text content stored in the block.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Type of the text in the block. Available options are: `paragraph`,
     * `subtitle`, `heading-1`, `heading-2`, `heading-3`, `heading-4`,
     * `heading-5`, `header`, `footer`.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the text in the block. Available options are: `paragraph`,
     * `subtitle`, `heading-1`, `heading-2`, `heading-3`, `heading-4`,
     * `heading-5`, `header`, `footer`.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * A text block could further have child blocks.
     * Repeated blocks support further hierarchies and nested blocks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock blocks = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * A text block could further have child blocks.
     * Repeated blocks support further hierarchies and nested blocks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.documentai.v1.Document.DocumentLayout.DocumentLayoutBlock blocks = 3;</code>
     * @param array<\Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DocumentAI\V1\Document\DocumentLayout\DocumentLayoutBlock::class);
        $this->blocks = $arr;

        return $this;
    }

}


