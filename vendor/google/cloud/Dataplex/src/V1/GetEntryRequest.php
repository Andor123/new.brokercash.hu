<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.dataplex.v1.GetEntryRequest</code>
 */
class GetEntryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Entry:
     * `projects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. View for controlling which parts of an entry are to be returned.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $view = 0;
    /**
     * Optional. Limits the aspects returned to the provided aspect types.
     * Only works if the CUSTOM view is selected.
     *
     * Generated from protobuf field <code>repeated string aspect_types = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $aspect_types;
    /**
     * Optional. Limits the aspects returned to those associated with the provided
     * paths within the Entry. Only works if the CUSTOM view is selected.
     *
     * Generated from protobuf field <code>repeated string paths = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $paths;

    /**
     * @param string $name Required. The resource name of the Entry:
     *                     `projects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}`. Please see
     *                     {@see CatalogServiceClient::entryName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dataplex\V1\GetEntryRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Entry:
     *           `projects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}`.
     *     @type int $view
     *           Optional. View for controlling which parts of an entry are to be returned.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $aspect_types
     *           Optional. Limits the aspects returned to the provided aspect types.
     *           Only works if the CUSTOM view is selected.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $paths
     *           Optional. Limits the aspects returned to those associated with the provided
     *           paths within the Entry. Only works if the CUSTOM view is selected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Entry:
     * `projects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Entry:
     * `projects/{project}/locations/{location}/entryGroups/{entry_group}/entries/{entry}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. View for controlling which parts of an entry are to be returned.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Optional. View for controlling which parts of an entry are to be returned.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.EntryView view = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\EntryView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Optional. Limits the aspects returned to the provided aspect types.
     * Only works if the CUSTOM view is selected.
     *
     * Generated from protobuf field <code>repeated string aspect_types = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAspectTypes()
    {
        return $this->aspect_types;
    }

    /**
     * Optional. Limits the aspects returned to the provided aspect types.
     * Only works if the CUSTOM view is selected.
     *
     * Generated from protobuf field <code>repeated string aspect_types = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAspectTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->aspect_types = $arr;

        return $this;
    }

    /**
     * Optional. Limits the aspects returned to those associated with the provided
     * paths within the Entry. Only works if the CUSTOM view is selected.
     *
     * Generated from protobuf field <code>repeated string paths = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * Optional. Limits the aspects returned to those associated with the provided
     * paths within the Entry. Only works if the CUSTOM view is selected.
     *
     * Generated from protobuf field <code>repeated string paths = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->paths = $arr;

        return $this;
    }

}

