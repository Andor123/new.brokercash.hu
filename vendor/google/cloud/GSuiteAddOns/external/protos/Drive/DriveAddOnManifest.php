<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/script/type/drive/drive_addon_manifest.proto

namespace Google\Apps\Script\Type\Drive;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Drive add-on manifest.
 *
 * Generated from protobuf message <code>google.apps.script.type.drive.DriveAddOnManifest</code>
 */
class DriveAddOnManifest extends \Google\Protobuf\Internal\Message
{
    /**
     * If present, this overrides the configuration from
     * `addOns.common.homepageTrigger`.
     *
     * Generated from protobuf field <code>.google.apps.script.type.HomepageExtensionPoint homepage_trigger = 1;</code>
     */
    protected $homepage_trigger = null;
    /**
     * Corresponds to behvior that should execute when items are selected
     * in relevant Drive view (e.g. the My Drive Doclist).
     *
     * Generated from protobuf field <code>.google.apps.script.type.drive.DriveExtensionPoint on_items_selected_trigger = 2;</code>
     */
    protected $on_items_selected_trigger = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Apps\Script\Type\HomepageExtensionPoint $homepage_trigger
     *           If present, this overrides the configuration from
     *           `addOns.common.homepageTrigger`.
     *     @type \Google\Apps\Script\Type\Drive\DriveExtensionPoint $on_items_selected_trigger
     *           Corresponds to behvior that should execute when items are selected
     *           in relevant Drive view (e.g. the My Drive Doclist).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Script\Type\Drive\DriveAddonManifest::initOnce();
        parent::__construct($data);
    }

    /**
     * If present, this overrides the configuration from
     * `addOns.common.homepageTrigger`.
     *
     * Generated from protobuf field <code>.google.apps.script.type.HomepageExtensionPoint homepage_trigger = 1;</code>
     * @return \Google\Apps\Script\Type\HomepageExtensionPoint|null
     */
    public function getHomepageTrigger()
    {
        return $this->homepage_trigger;
    }

    public function hasHomepageTrigger()
    {
        return isset($this->homepage_trigger);
    }

    public function clearHomepageTrigger()
    {
        unset($this->homepage_trigger);
    }

    /**
     * If present, this overrides the configuration from
     * `addOns.common.homepageTrigger`.
     *
     * Generated from protobuf field <code>.google.apps.script.type.HomepageExtensionPoint homepage_trigger = 1;</code>
     * @param \Google\Apps\Script\Type\HomepageExtensionPoint $var
     * @return $this
     */
    public function setHomepageTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\HomepageExtensionPoint::class);
        $this->homepage_trigger = $var;

        return $this;
    }

    /**
     * Corresponds to behvior that should execute when items are selected
     * in relevant Drive view (e.g. the My Drive Doclist).
     *
     * Generated from protobuf field <code>.google.apps.script.type.drive.DriveExtensionPoint on_items_selected_trigger = 2;</code>
     * @return \Google\Apps\Script\Type\Drive\DriveExtensionPoint|null
     */
    public function getOnItemsSelectedTrigger()
    {
        return $this->on_items_selected_trigger;
    }

    public function hasOnItemsSelectedTrigger()
    {
        return isset($this->on_items_selected_trigger);
    }

    public function clearOnItemsSelectedTrigger()
    {
        unset($this->on_items_selected_trigger);
    }

    /**
     * Corresponds to behvior that should execute when items are selected
     * in relevant Drive view (e.g. the My Drive Doclist).
     *
     * Generated from protobuf field <code>.google.apps.script.type.drive.DriveExtensionPoint on_items_selected_trigger = 2;</code>
     * @param \Google\Apps\Script\Type\Drive\DriveExtensionPoint $var
     * @return $this
     */
    public function setOnItemsSelectedTrigger($var)
    {
        GPBUtil::checkMessage($var, \Google\Apps\Script\Type\Drive\DriveExtensionPoint::class);
        $this->on_items_selected_trigger = $var;

        return $this;
    }

}

