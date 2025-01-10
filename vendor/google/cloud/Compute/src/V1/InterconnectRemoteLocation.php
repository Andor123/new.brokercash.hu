<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Cross-Cloud Interconnect Remote Location resource. You can use this resource to find remote location details about an Interconnect attachment (VLAN).
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectRemoteLocation</code>
 */
class InterconnectRemoteLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The postal address of the Point of Presence, each line in the address is separated by a newline character.
     *
     * Generated from protobuf field <code>optional string address = 462920692;</code>
     */
    private $address = null;
    /**
     * [Output Only] Subset of fields from InterconnectAttachment's |configurationConstraints| field that apply to all attachments for this remote location.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectAttachmentConfigurationConstraints attachment_configuration_constraints = 326825041;</code>
     */
    private $attachment_configuration_constraints = null;
    /**
     * [Output Only] Metropolitan area designator that indicates which city an interconnect is located. For example: "Chicago, IL", "Amsterdam, Netherlands".
     *
     * Generated from protobuf field <code>optional string city = 3053931;</code>
     */
    private $city = null;
    /**
     * [Output Only] Constraints on the parameters for creating Cross-Cloud Interconnect and associated InterconnectAttachments.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectRemoteLocationConstraints constraints = 3909174;</code>
     */
    private $constraints = null;
    /**
     * [Output Only] Continent for this location, which can take one of the following values: - AFRICA - ASIA_PAC - EUROPE - NORTH_AMERICA - SOUTH_AMERICA
     * Check the Continent enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string continent = 133442996;</code>
     */
    private $continent = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * [Output Only] An optional description of the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * [Output Only] The name of the provider for this facility (e.g., EQUINIX).
     *
     * Generated from protobuf field <code>optional string facility_provider = 533303309;</code>
     */
    private $facility_provider = null;
    /**
     * [Output Only] A provider-assigned Identifier for this facility (e.g., Ashburn-DC1).
     *
     * Generated from protobuf field <code>optional string facility_provider_facility_id = 87269125;</code>
     */
    private $facility_provider_facility_id = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#interconnectRemoteLocation for interconnect remote locations.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * [Output Only] Link Aggregation Control Protocol (LACP) constraints, which can take one of the following values: LACP_SUPPORTED, LACP_UNSUPPORTED
     * Check the Lacp enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string lacp = 3313826;</code>
     */
    private $lacp = null;
    /**
     * [Output Only] The maximum number of 100 Gbps ports supported in a link aggregation group (LAG). When linkType is 100 Gbps, requestedLinkCount cannot exceed max_lag_size_100_gbps.
     *
     * Generated from protobuf field <code>optional int32 max_lag_size100_gbps = 245219253;</code>
     */
    private $max_lag_size100_gbps = null;
    /**
     * [Output Only] The maximum number of 10 Gbps ports supported in a link aggregation group (LAG). When linkType is 10 Gbps, requestedLinkCount cannot exceed max_lag_size_10_gbps.
     *
     * Generated from protobuf field <code>optional int32 max_lag_size10_gbps = 294007573;</code>
     */
    private $max_lag_size10_gbps = null;
    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * [Output Only] The peeringdb identifier for this facility (corresponding with a netfac type in peeringdb).
     *
     * Generated from protobuf field <code>optional string peeringdb_facility_id = 536567094;</code>
     */
    private $peeringdb_facility_id = null;
    /**
     * [Output Only] Permitted connections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectRemoteLocationPermittedConnections permitted_connections = 442063278;</code>
     */
    private $permitted_connections;
    /**
     * [Output Only] Indicates the service provider present at the remote location. Example values: "Amazon Web Services", "Microsoft Azure".
     *
     * Generated from protobuf field <code>optional string remote_service = 391954364;</code>
     */
    private $remote_service = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] The status of this InterconnectRemoteLocation, which can take one of the following values: - CLOSED: The InterconnectRemoteLocation is closed and is unavailable for provisioning new Cross-Cloud Interconnects. - AVAILABLE: The InterconnectRemoteLocation is available for provisioning new Cross-Cloud Interconnects.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $address
     *           [Output Only] The postal address of the Point of Presence, each line in the address is separated by a newline character.
     *     @type \Google\Cloud\Compute\V1\InterconnectAttachmentConfigurationConstraints $attachment_configuration_constraints
     *           [Output Only] Subset of fields from InterconnectAttachment's |configurationConstraints| field that apply to all attachments for this remote location.
     *     @type string $city
     *           [Output Only] Metropolitan area designator that indicates which city an interconnect is located. For example: "Chicago, IL", "Amsterdam, Netherlands".
     *     @type \Google\Cloud\Compute\V1\InterconnectRemoteLocationConstraints $constraints
     *           [Output Only] Constraints on the parameters for creating Cross-Cloud Interconnect and associated InterconnectAttachments.
     *     @type string $continent
     *           [Output Only] Continent for this location, which can take one of the following values: - AFRICA - ASIA_PAC - EUROPE - NORTH_AMERICA - SOUTH_AMERICA
     *           Check the Continent enum for the list of possible values.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           [Output Only] An optional description of the resource.
     *     @type string $facility_provider
     *           [Output Only] The name of the provider for this facility (e.g., EQUINIX).
     *     @type string $facility_provider_facility_id
     *           [Output Only] A provider-assigned Identifier for this facility (e.g., Ashburn-DC1).
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#interconnectRemoteLocation for interconnect remote locations.
     *     @type string $lacp
     *           [Output Only] Link Aggregation Control Protocol (LACP) constraints, which can take one of the following values: LACP_SUPPORTED, LACP_UNSUPPORTED
     *           Check the Lacp enum for the list of possible values.
     *     @type int $max_lag_size100_gbps
     *           [Output Only] The maximum number of 100 Gbps ports supported in a link aggregation group (LAG). When linkType is 100 Gbps, requestedLinkCount cannot exceed max_lag_size_100_gbps.
     *     @type int $max_lag_size10_gbps
     *           [Output Only] The maximum number of 10 Gbps ports supported in a link aggregation group (LAG). When linkType is 10 Gbps, requestedLinkCount cannot exceed max_lag_size_10_gbps.
     *     @type string $name
     *           [Output Only] Name of the resource.
     *     @type string $peeringdb_facility_id
     *           [Output Only] The peeringdb identifier for this facility (corresponding with a netfac type in peeringdb).
     *     @type array<\Google\Cloud\Compute\V1\InterconnectRemoteLocationPermittedConnections>|\Google\Protobuf\Internal\RepeatedField $permitted_connections
     *           [Output Only] Permitted connections.
     *     @type string $remote_service
     *           [Output Only] Indicates the service provider present at the remote location. Example values: "Amazon Web Services", "Microsoft Azure".
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $status
     *           [Output Only] The status of this InterconnectRemoteLocation, which can take one of the following values: - CLOSED: The InterconnectRemoteLocation is closed and is unavailable for provisioning new Cross-Cloud Interconnects. - AVAILABLE: The InterconnectRemoteLocation is available for provisioning new Cross-Cloud Interconnects.
     *           Check the Status enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The postal address of the Point of Presence, each line in the address is separated by a newline character.
     *
     * Generated from protobuf field <code>optional string address = 462920692;</code>
     * @return string
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : '';
    }

    public function hasAddress()
    {
        return isset($this->address);
    }

    public function clearAddress()
    {
        unset($this->address);
    }

    /**
     * [Output Only] The postal address of the Point of Presence, each line in the address is separated by a newline character.
     *
     * Generated from protobuf field <code>optional string address = 462920692;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * [Output Only] Subset of fields from InterconnectAttachment's |configurationConstraints| field that apply to all attachments for this remote location.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectAttachmentConfigurationConstraints attachment_configuration_constraints = 326825041;</code>
     * @return \Google\Cloud\Compute\V1\InterconnectAttachmentConfigurationConstraints|null
     */
    public function getAttachmentConfigurationConstraints()
    {
        return $this->attachment_configuration_constraints;
    }

    public function hasAttachmentConfigurationConstraints()
    {
        return isset($this->attachment_configuration_constraints);
    }

    public function clearAttachmentConfigurationConstraints()
    {
        unset($this->attachment_configuration_constraints);
    }

    /**
     * [Output Only] Subset of fields from InterconnectAttachment's |configurationConstraints| field that apply to all attachments for this remote location.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectAttachmentConfigurationConstraints attachment_configuration_constraints = 326825041;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectAttachmentConfigurationConstraints $var
     * @return $this
     */
    public function setAttachmentConfigurationConstraints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InterconnectAttachmentConfigurationConstraints::class);
        $this->attachment_configuration_constraints = $var;

        return $this;
    }

    /**
     * [Output Only] Metropolitan area designator that indicates which city an interconnect is located. For example: "Chicago, IL", "Amsterdam, Netherlands".
     *
     * Generated from protobuf field <code>optional string city = 3053931;</code>
     * @return string
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : '';
    }

    public function hasCity()
    {
        return isset($this->city);
    }

    public function clearCity()
    {
        unset($this->city);
    }

    /**
     * [Output Only] Metropolitan area designator that indicates which city an interconnect is located. For example: "Chicago, IL", "Amsterdam, Netherlands".
     *
     * Generated from protobuf field <code>optional string city = 3053931;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * [Output Only] Constraints on the parameters for creating Cross-Cloud Interconnect and associated InterconnectAttachments.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectRemoteLocationConstraints constraints = 3909174;</code>
     * @return \Google\Cloud\Compute\V1\InterconnectRemoteLocationConstraints|null
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    public function hasConstraints()
    {
        return isset($this->constraints);
    }

    public function clearConstraints()
    {
        unset($this->constraints);
    }

    /**
     * [Output Only] Constraints on the parameters for creating Cross-Cloud Interconnect and associated InterconnectAttachments.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InterconnectRemoteLocationConstraints constraints = 3909174;</code>
     * @param \Google\Cloud\Compute\V1\InterconnectRemoteLocationConstraints $var
     * @return $this
     */
    public function setConstraints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InterconnectRemoteLocationConstraints::class);
        $this->constraints = $var;

        return $this;
    }

    /**
     * [Output Only] Continent for this location, which can take one of the following values: - AFRICA - ASIA_PAC - EUROPE - NORTH_AMERICA - SOUTH_AMERICA
     * Check the Continent enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string continent = 133442996;</code>
     * @return string
     */
    public function getContinent()
    {
        return isset($this->continent) ? $this->continent : '';
    }

    public function hasContinent()
    {
        return isset($this->continent);
    }

    public function clearContinent()
    {
        unset($this->continent);
    }

    /**
     * [Output Only] Continent for this location, which can take one of the following values: - AFRICA - ASIA_PAC - EUROPE - NORTH_AMERICA - SOUTH_AMERICA
     * Check the Continent enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string continent = 133442996;</code>
     * @param string $var
     * @return $this
     */
    public function setContinent($var)
    {
        GPBUtil::checkString($var, True);
        $this->continent = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * [Output Only] An optional description of the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * [Output Only] An optional description of the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] The name of the provider for this facility (e.g., EQUINIX).
     *
     * Generated from protobuf field <code>optional string facility_provider = 533303309;</code>
     * @return string
     */
    public function getFacilityProvider()
    {
        return isset($this->facility_provider) ? $this->facility_provider : '';
    }

    public function hasFacilityProvider()
    {
        return isset($this->facility_provider);
    }

    public function clearFacilityProvider()
    {
        unset($this->facility_provider);
    }

    /**
     * [Output Only] The name of the provider for this facility (e.g., EQUINIX).
     *
     * Generated from protobuf field <code>optional string facility_provider = 533303309;</code>
     * @param string $var
     * @return $this
     */
    public function setFacilityProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->facility_provider = $var;

        return $this;
    }

    /**
     * [Output Only] A provider-assigned Identifier for this facility (e.g., Ashburn-DC1).
     *
     * Generated from protobuf field <code>optional string facility_provider_facility_id = 87269125;</code>
     * @return string
     */
    public function getFacilityProviderFacilityId()
    {
        return isset($this->facility_provider_facility_id) ? $this->facility_provider_facility_id : '';
    }

    public function hasFacilityProviderFacilityId()
    {
        return isset($this->facility_provider_facility_id);
    }

    public function clearFacilityProviderFacilityId()
    {
        unset($this->facility_provider_facility_id);
    }

    /**
     * [Output Only] A provider-assigned Identifier for this facility (e.g., Ashburn-DC1).
     *
     * Generated from protobuf field <code>optional string facility_provider_facility_id = 87269125;</code>
     * @param string $var
     * @return $this
     */
    public function setFacilityProviderFacilityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->facility_provider_facility_id = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#interconnectRemoteLocation for interconnect remote locations.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#interconnectRemoteLocation for interconnect remote locations.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * [Output Only] Link Aggregation Control Protocol (LACP) constraints, which can take one of the following values: LACP_SUPPORTED, LACP_UNSUPPORTED
     * Check the Lacp enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string lacp = 3313826;</code>
     * @return string
     */
    public function getLacp()
    {
        return isset($this->lacp) ? $this->lacp : '';
    }

    public function hasLacp()
    {
        return isset($this->lacp);
    }

    public function clearLacp()
    {
        unset($this->lacp);
    }

    /**
     * [Output Only] Link Aggregation Control Protocol (LACP) constraints, which can take one of the following values: LACP_SUPPORTED, LACP_UNSUPPORTED
     * Check the Lacp enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string lacp = 3313826;</code>
     * @param string $var
     * @return $this
     */
    public function setLacp($var)
    {
        GPBUtil::checkString($var, True);
        $this->lacp = $var;

        return $this;
    }

    /**
     * [Output Only] The maximum number of 100 Gbps ports supported in a link aggregation group (LAG). When linkType is 100 Gbps, requestedLinkCount cannot exceed max_lag_size_100_gbps.
     *
     * Generated from protobuf field <code>optional int32 max_lag_size100_gbps = 245219253;</code>
     * @return int
     */
    public function getMaxLagSize100Gbps()
    {
        return isset($this->max_lag_size100_gbps) ? $this->max_lag_size100_gbps : 0;
    }

    public function hasMaxLagSize100Gbps()
    {
        return isset($this->max_lag_size100_gbps);
    }

    public function clearMaxLagSize100Gbps()
    {
        unset($this->max_lag_size100_gbps);
    }

    /**
     * [Output Only] The maximum number of 100 Gbps ports supported in a link aggregation group (LAG). When linkType is 100 Gbps, requestedLinkCount cannot exceed max_lag_size_100_gbps.
     *
     * Generated from protobuf field <code>optional int32 max_lag_size100_gbps = 245219253;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxLagSize100Gbps($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_lag_size100_gbps = $var;

        return $this;
    }

    /**
     * [Output Only] The maximum number of 10 Gbps ports supported in a link aggregation group (LAG). When linkType is 10 Gbps, requestedLinkCount cannot exceed max_lag_size_10_gbps.
     *
     * Generated from protobuf field <code>optional int32 max_lag_size10_gbps = 294007573;</code>
     * @return int
     */
    public function getMaxLagSize10Gbps()
    {
        return isset($this->max_lag_size10_gbps) ? $this->max_lag_size10_gbps : 0;
    }

    public function hasMaxLagSize10Gbps()
    {
        return isset($this->max_lag_size10_gbps);
    }

    public function clearMaxLagSize10Gbps()
    {
        unset($this->max_lag_size10_gbps);
    }

    /**
     * [Output Only] The maximum number of 10 Gbps ports supported in a link aggregation group (LAG). When linkType is 10 Gbps, requestedLinkCount cannot exceed max_lag_size_10_gbps.
     *
     * Generated from protobuf field <code>optional int32 max_lag_size10_gbps = 294007573;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxLagSize10Gbps($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_lag_size10_gbps = $var;

        return $this;
    }

    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * [Output Only] The peeringdb identifier for this facility (corresponding with a netfac type in peeringdb).
     *
     * Generated from protobuf field <code>optional string peeringdb_facility_id = 536567094;</code>
     * @return string
     */
    public function getPeeringdbFacilityId()
    {
        return isset($this->peeringdb_facility_id) ? $this->peeringdb_facility_id : '';
    }

    public function hasPeeringdbFacilityId()
    {
        return isset($this->peeringdb_facility_id);
    }

    public function clearPeeringdbFacilityId()
    {
        unset($this->peeringdb_facility_id);
    }

    /**
     * [Output Only] The peeringdb identifier for this facility (corresponding with a netfac type in peeringdb).
     *
     * Generated from protobuf field <code>optional string peeringdb_facility_id = 536567094;</code>
     * @param string $var
     * @return $this
     */
    public function setPeeringdbFacilityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->peeringdb_facility_id = $var;

        return $this;
    }

    /**
     * [Output Only] Permitted connections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectRemoteLocationPermittedConnections permitted_connections = 442063278;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermittedConnections()
    {
        return $this->permitted_connections;
    }

    /**
     * [Output Only] Permitted connections.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.InterconnectRemoteLocationPermittedConnections permitted_connections = 442063278;</code>
     * @param array<\Google\Cloud\Compute\V1\InterconnectRemoteLocationPermittedConnections>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPermittedConnections($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\InterconnectRemoteLocationPermittedConnections::class);
        $this->permitted_connections = $arr;

        return $this;
    }

    /**
     * [Output Only] Indicates the service provider present at the remote location. Example values: "Amazon Web Services", "Microsoft Azure".
     *
     * Generated from protobuf field <code>optional string remote_service = 391954364;</code>
     * @return string
     */
    public function getRemoteService()
    {
        return isset($this->remote_service) ? $this->remote_service : '';
    }

    public function hasRemoteService()
    {
        return isset($this->remote_service);
    }

    public function clearRemoteService()
    {
        unset($this->remote_service);
    }

    /**
     * [Output Only] Indicates the service provider present at the remote location. Example values: "Amazon Web Services", "Microsoft Azure".
     *
     * Generated from protobuf field <code>optional string remote_service = 391954364;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteService($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_service = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] The status of this InterconnectRemoteLocation, which can take one of the following values: - CLOSED: The InterconnectRemoteLocation is closed and is unavailable for provisioning new Cross-Cloud Interconnects. - AVAILABLE: The InterconnectRemoteLocation is available for provisioning new Cross-Cloud Interconnects.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] The status of this InterconnectRemoteLocation, which can take one of the following values: - CLOSED: The InterconnectRemoteLocation is closed and is unavailable for provisioning new Cross-Cloud Interconnects. - AVAILABLE: The InterconnectRemoteLocation is available for provisioning new Cross-Cloud Interconnects.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

}

