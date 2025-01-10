<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Guest OS runtime information.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.GuestRuntimeDetails</code>
 */
class GuestRuntimeDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Running background services.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningServiceList services = 1;</code>
     */
    protected $services = null;
    /**
     * Running processes.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningProcessList processes = 2;</code>
     */
    protected $processes = null;
    /**
     * Runtime network information (connections, ports).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RuntimeNetworkInfo network = 3;</code>
     */
    protected $network = null;
    /**
     * Last time the OS was booted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_boot_time = 4;</code>
     */
    protected $last_boot_time = null;
    /**
     * Domain, e.g. c.stratozone-development.internal.
     *
     * Generated from protobuf field <code>string domain = 5;</code>
     */
    protected $domain = '';
    /**
     * Machine name.
     *
     * Generated from protobuf field <code>string machine_name = 6;</code>
     */
    protected $machine_name = '';
    /**
     * Installed applications information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.GuestInstalledApplicationList installed_apps = 7;</code>
     */
    protected $installed_apps = null;
    /**
     * Open files information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.OpenFileList open_file_list = 8;</code>
     */
    protected $open_file_list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\MigrationCenter\V1\RunningServiceList $services
     *           Running background services.
     *     @type \Google\Cloud\MigrationCenter\V1\RunningProcessList $processes
     *           Running processes.
     *     @type \Google\Cloud\MigrationCenter\V1\RuntimeNetworkInfo $network
     *           Runtime network information (connections, ports).
     *     @type \Google\Protobuf\Timestamp $last_boot_time
     *           Last time the OS was booted.
     *     @type string $domain
     *           Domain, e.g. c.stratozone-development.internal.
     *     @type string $machine_name
     *           Machine name.
     *     @type \Google\Cloud\MigrationCenter\V1\GuestInstalledApplicationList $installed_apps
     *           Installed applications information.
     *     @type \Google\Cloud\MigrationCenter\V1\OpenFileList $open_file_list
     *           Open files information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Running background services.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningServiceList services = 1;</code>
     * @return \Google\Cloud\MigrationCenter\V1\RunningServiceList|null
     */
    public function getServices()
    {
        return $this->services;
    }

    public function hasServices()
    {
        return isset($this->services);
    }

    public function clearServices()
    {
        unset($this->services);
    }

    /**
     * Running background services.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningServiceList services = 1;</code>
     * @param \Google\Cloud\MigrationCenter\V1\RunningServiceList $var
     * @return $this
     */
    public function setServices($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\RunningServiceList::class);
        $this->services = $var;

        return $this;
    }

    /**
     * Running processes.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningProcessList processes = 2;</code>
     * @return \Google\Cloud\MigrationCenter\V1\RunningProcessList|null
     */
    public function getProcesses()
    {
        return $this->processes;
    }

    public function hasProcesses()
    {
        return isset($this->processes);
    }

    public function clearProcesses()
    {
        unset($this->processes);
    }

    /**
     * Running processes.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RunningProcessList processes = 2;</code>
     * @param \Google\Cloud\MigrationCenter\V1\RunningProcessList $var
     * @return $this
     */
    public function setProcesses($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\RunningProcessList::class);
        $this->processes = $var;

        return $this;
    }

    /**
     * Runtime network information (connections, ports).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RuntimeNetworkInfo network = 3;</code>
     * @return \Google\Cloud\MigrationCenter\V1\RuntimeNetworkInfo|null
     */
    public function getNetwork()
    {
        return $this->network;
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * Runtime network information (connections, ports).
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.RuntimeNetworkInfo network = 3;</code>
     * @param \Google\Cloud\MigrationCenter\V1\RuntimeNetworkInfo $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\RuntimeNetworkInfo::class);
        $this->network = $var;

        return $this;
    }

    /**
     * Last time the OS was booted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_boot_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastBootTime()
    {
        return $this->last_boot_time;
    }

    public function hasLastBootTime()
    {
        return isset($this->last_boot_time);
    }

    public function clearLastBootTime()
    {
        unset($this->last_boot_time);
    }

    /**
     * Last time the OS was booted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_boot_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastBootTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_boot_time = $var;

        return $this;
    }

    /**
     * Domain, e.g. c.stratozone-development.internal.
     *
     * Generated from protobuf field <code>string domain = 5;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Domain, e.g. c.stratozone-development.internal.
     *
     * Generated from protobuf field <code>string domain = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Machine name.
     *
     * Generated from protobuf field <code>string machine_name = 6;</code>
     * @return string
     */
    public function getMachineName()
    {
        return $this->machine_name;
    }

    /**
     * Machine name.
     *
     * Generated from protobuf field <code>string machine_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setMachineName($var)
    {
        GPBUtil::checkString($var, True);
        $this->machine_name = $var;

        return $this;
    }

    /**
     * Installed applications information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.GuestInstalledApplicationList installed_apps = 7;</code>
     * @return \Google\Cloud\MigrationCenter\V1\GuestInstalledApplicationList|null
     */
    public function getInstalledApps()
    {
        return $this->installed_apps;
    }

    public function hasInstalledApps()
    {
        return isset($this->installed_apps);
    }

    public function clearInstalledApps()
    {
        unset($this->installed_apps);
    }

    /**
     * Installed applications information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.GuestInstalledApplicationList installed_apps = 7;</code>
     * @param \Google\Cloud\MigrationCenter\V1\GuestInstalledApplicationList $var
     * @return $this
     */
    public function setInstalledApps($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\GuestInstalledApplicationList::class);
        $this->installed_apps = $var;

        return $this;
    }

    /**
     * Open files information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.OpenFileList open_file_list = 8;</code>
     * @return \Google\Cloud\MigrationCenter\V1\OpenFileList|null
     */
    public function getOpenFileList()
    {
        return $this->open_file_list;
    }

    public function hasOpenFileList()
    {
        return isset($this->open_file_list);
    }

    public function clearOpenFileList()
    {
        unset($this->open_file_list);
    }

    /**
     * Open files information.
     *
     * Generated from protobuf field <code>.google.cloud.migrationcenter.v1.OpenFileList open_file_list = 8;</code>
     * @param \Google\Cloud\MigrationCenter\V1\OpenFileList $var
     * @return $this
     */
    public function setOpenFileList($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\MigrationCenter\V1\OpenFileList::class);
        $this->open_file_list = $var;

        return $this;
    }

}
