<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Common config settings for resources of Compute Engine cluster
 * instances, applicable to all instances in the cluster.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.GceClusterConfig</code>
 */
class GceClusterConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The Compute Engine zone where the Dataproc cluster will be
     * located. If omitted, the service will pick a zone in the cluster's Compute
     * Engine region. On a get request, zone will always be present.
     * A full URL, partial URI, or short name are valid. Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/zones/[zone]`
     * * `projects/[project_id]/zones/[zone]`
     * * `[zone]`
     *
     * Generated from protobuf field <code>string zone_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $zone_uri = '';
    /**
     * Optional. The Compute Engine network to be used for machine
     * communications. Cannot be specified with subnetwork_uri. If neither
     * `network_uri` nor `subnetwork_uri` is specified, the "default" network of
     * the project is used, if it exists. Cannot be a "Custom Subnet Network" (see
     * [Using Subnetworks](https://cloud.google.com/compute/docs/subnetworks) for
     * more information).
     * A full URL, partial URI, or short name are valid. Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/global/networks/default`
     * * `projects/[project_id]/global/networks/default`
     * * `default`
     *
     * Generated from protobuf field <code>string network_uri = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $network_uri = '';
    /**
     * Optional. The Compute Engine subnetwork to be used for machine
     * communications. Cannot be specified with network_uri.
     * A full URL, partial URI, or short name are valid. Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/regions/[region]/subnetworks/sub0`
     * * `projects/[project_id]/regions/[region]/subnetworks/sub0`
     * * `sub0`
     *
     * Generated from protobuf field <code>string subnetwork_uri = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $subnetwork_uri = '';
    /**
     * Optional. This setting applies to subnetwork-enabled networks. It is set to
     * `true` by default in clusters created with image versions 2.2.x.
     * When set to `true`:
     * * All cluster VMs have internal IP addresses.
     * * [Google Private Access]
     * (https://cloud.google.com/vpc/docs/private-google-access)
     * must be enabled to access Dataproc and other Google Cloud APIs.
     * * Off-cluster dependencies must be configured to be accessible
     * without external IP addresses.
     * When set to `false`:
     * * Cluster VMs are not restricted to internal IP addresses.
     * * Ephemeral external IP addresses are assigned to each cluster VM.
     *
     * Generated from protobuf field <code>optional bool internal_ip_only = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $internal_ip_only = null;
    /**
     * Optional. The type of IPv6 access for a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GceClusterConfig.PrivateIpv6GoogleAccess private_ipv6_google_access = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $private_ipv6_google_access = 0;
    /**
     * Optional. The [Dataproc service
     * account](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/service-accounts#service_accounts_in_dataproc)
     * (also see [VM Data Plane
     * identity](https://cloud.google.com/dataproc/docs/concepts/iam/dataproc-principals#vm_service_account_data_plane_identity))
     * used by Dataproc cluster VM instances to access Google Cloud Platform
     * services.
     * If not specified, the
     * [Compute Engine default service
     * account](https://cloud.google.com/compute/docs/access/service-accounts#default_service_account)
     * is used.
     *
     * Generated from protobuf field <code>string service_account = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service_account = '';
    /**
     * Optional. The URIs of service account scopes to be included in
     * Compute Engine instances. The following base set of scopes is always
     * included:
     * * https://www.googleapis.com/auth/cloud.useraccounts.readonly
     * * https://www.googleapis.com/auth/devstorage.read_write
     * * https://www.googleapis.com/auth/logging.write
     * If no scopes are specified, the following defaults are also provided:
     * * https://www.googleapis.com/auth/bigquery
     * * https://www.googleapis.com/auth/bigtable.admin.table
     * * https://www.googleapis.com/auth/bigtable.data
     * * https://www.googleapis.com/auth/devstorage.full_control
     *
     * Generated from protobuf field <code>repeated string service_account_scopes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $service_account_scopes;
    /**
     * The Compute Engine network tags to add to all instances (see [Tagging
     * instances](https://cloud.google.com/vpc/docs/add-remove-network-tags)).
     *
     * Generated from protobuf field <code>repeated string tags = 4;</code>
     */
    private $tags;
    /**
     * Optional. The Compute Engine metadata entries to add to all instances (see
     * [Project and instance
     * metadata](https://cloud.google.com/compute/docs/storing-retrieving-metadata#project_and_instance_metadata)).
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $metadata;
    /**
     * Optional. Reservation Affinity for consuming Zonal reservation.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ReservationAffinity reservation_affinity = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $reservation_affinity = null;
    /**
     * Optional. Node Group Affinity for sole-tenant clusters.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.NodeGroupAffinity node_group_affinity = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $node_group_affinity = null;
    /**
     * Optional. Shielded Instance Config for clusters using [Compute Engine
     * Shielded
     * VMs](https://cloud.google.com/security/shielded-cloud/shielded-vm).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ShieldedInstanceConfig shielded_instance_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $shielded_instance_config = null;
    /**
     * Optional. Confidential Instance Config for clusters using [Confidential
     * VMs](https://cloud.google.com/compute/confidential-vm/docs).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ConfidentialInstanceConfig confidential_instance_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $confidential_instance_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $zone_uri
     *           Optional. The Compute Engine zone where the Dataproc cluster will be
     *           located. If omitted, the service will pick a zone in the cluster's Compute
     *           Engine region. On a get request, zone will always be present.
     *           A full URL, partial URI, or short name are valid. Examples:
     *           * `https://www.googleapis.com/compute/v1/projects/[project_id]/zones/[zone]`
     *           * `projects/[project_id]/zones/[zone]`
     *           * `[zone]`
     *     @type string $network_uri
     *           Optional. The Compute Engine network to be used for machine
     *           communications. Cannot be specified with subnetwork_uri. If neither
     *           `network_uri` nor `subnetwork_uri` is specified, the "default" network of
     *           the project is used, if it exists. Cannot be a "Custom Subnet Network" (see
     *           [Using Subnetworks](https://cloud.google.com/compute/docs/subnetworks) for
     *           more information).
     *           A full URL, partial URI, or short name are valid. Examples:
     *           * `https://www.googleapis.com/compute/v1/projects/[project_id]/global/networks/default`
     *           * `projects/[project_id]/global/networks/default`
     *           * `default`
     *     @type string $subnetwork_uri
     *           Optional. The Compute Engine subnetwork to be used for machine
     *           communications. Cannot be specified with network_uri.
     *           A full URL, partial URI, or short name are valid. Examples:
     *           * `https://www.googleapis.com/compute/v1/projects/[project_id]/regions/[region]/subnetworks/sub0`
     *           * `projects/[project_id]/regions/[region]/subnetworks/sub0`
     *           * `sub0`
     *     @type bool $internal_ip_only
     *           Optional. This setting applies to subnetwork-enabled networks. It is set to
     *           `true` by default in clusters created with image versions 2.2.x.
     *           When set to `true`:
     *           * All cluster VMs have internal IP addresses.
     *           * [Google Private Access]
     *           (https://cloud.google.com/vpc/docs/private-google-access)
     *           must be enabled to access Dataproc and other Google Cloud APIs.
     *           * Off-cluster dependencies must be configured to be accessible
     *           without external IP addresses.
     *           When set to `false`:
     *           * Cluster VMs are not restricted to internal IP addresses.
     *           * Ephemeral external IP addresses are assigned to each cluster VM.
     *     @type int $private_ipv6_google_access
     *           Optional. The type of IPv6 access for a cluster.
     *     @type string $service_account
     *           Optional. The [Dataproc service
     *           account](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/service-accounts#service_accounts_in_dataproc)
     *           (also see [VM Data Plane
     *           identity](https://cloud.google.com/dataproc/docs/concepts/iam/dataproc-principals#vm_service_account_data_plane_identity))
     *           used by Dataproc cluster VM instances to access Google Cloud Platform
     *           services.
     *           If not specified, the
     *           [Compute Engine default service
     *           account](https://cloud.google.com/compute/docs/access/service-accounts#default_service_account)
     *           is used.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $service_account_scopes
     *           Optional. The URIs of service account scopes to be included in
     *           Compute Engine instances. The following base set of scopes is always
     *           included:
     *           * https://www.googleapis.com/auth/cloud.useraccounts.readonly
     *           * https://www.googleapis.com/auth/devstorage.read_write
     *           * https://www.googleapis.com/auth/logging.write
     *           If no scopes are specified, the following defaults are also provided:
     *           * https://www.googleapis.com/auth/bigquery
     *           * https://www.googleapis.com/auth/bigtable.admin.table
     *           * https://www.googleapis.com/auth/bigtable.data
     *           * https://www.googleapis.com/auth/devstorage.full_control
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $tags
     *           The Compute Engine network tags to add to all instances (see [Tagging
     *           instances](https://cloud.google.com/vpc/docs/add-remove-network-tags)).
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Optional. The Compute Engine metadata entries to add to all instances (see
     *           [Project and instance
     *           metadata](https://cloud.google.com/compute/docs/storing-retrieving-metadata#project_and_instance_metadata)).
     *     @type \Google\Cloud\Dataproc\V1\ReservationAffinity $reservation_affinity
     *           Optional. Reservation Affinity for consuming Zonal reservation.
     *     @type \Google\Cloud\Dataproc\V1\NodeGroupAffinity $node_group_affinity
     *           Optional. Node Group Affinity for sole-tenant clusters.
     *     @type \Google\Cloud\Dataproc\V1\ShieldedInstanceConfig $shielded_instance_config
     *           Optional. Shielded Instance Config for clusters using [Compute Engine
     *           Shielded
     *           VMs](https://cloud.google.com/security/shielded-cloud/shielded-vm).
     *     @type \Google\Cloud\Dataproc\V1\ConfidentialInstanceConfig $confidential_instance_config
     *           Optional. Confidential Instance Config for clusters using [Confidential
     *           VMs](https://cloud.google.com/compute/confidential-vm/docs).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The Compute Engine zone where the Dataproc cluster will be
     * located. If omitted, the service will pick a zone in the cluster's Compute
     * Engine region. On a get request, zone will always be present.
     * A full URL, partial URI, or short name are valid. Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/zones/[zone]`
     * * `projects/[project_id]/zones/[zone]`
     * * `[zone]`
     *
     * Generated from protobuf field <code>string zone_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getZoneUri()
    {
        return $this->zone_uri;
    }

    /**
     * Optional. The Compute Engine zone where the Dataproc cluster will be
     * located. If omitted, the service will pick a zone in the cluster's Compute
     * Engine region. On a get request, zone will always be present.
     * A full URL, partial URI, or short name are valid. Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/zones/[zone]`
     * * `projects/[project_id]/zones/[zone]`
     * * `[zone]`
     *
     * Generated from protobuf field <code>string zone_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setZoneUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone_uri = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine network to be used for machine
     * communications. Cannot be specified with subnetwork_uri. If neither
     * `network_uri` nor `subnetwork_uri` is specified, the "default" network of
     * the project is used, if it exists. Cannot be a "Custom Subnet Network" (see
     * [Using Subnetworks](https://cloud.google.com/compute/docs/subnetworks) for
     * more information).
     * A full URL, partial URI, or short name are valid. Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/global/networks/default`
     * * `projects/[project_id]/global/networks/default`
     * * `default`
     *
     * Generated from protobuf field <code>string network_uri = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNetworkUri()
    {
        return $this->network_uri;
    }

    /**
     * Optional. The Compute Engine network to be used for machine
     * communications. Cannot be specified with subnetwork_uri. If neither
     * `network_uri` nor `subnetwork_uri` is specified, the "default" network of
     * the project is used, if it exists. Cannot be a "Custom Subnet Network" (see
     * [Using Subnetworks](https://cloud.google.com/compute/docs/subnetworks) for
     * more information).
     * A full URL, partial URI, or short name are valid. Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/global/networks/default`
     * * `projects/[project_id]/global/networks/default`
     * * `default`
     *
     * Generated from protobuf field <code>string network_uri = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_uri = $var;

        return $this;
    }

    /**
     * Optional. The Compute Engine subnetwork to be used for machine
     * communications. Cannot be specified with network_uri.
     * A full URL, partial URI, or short name are valid. Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/regions/[region]/subnetworks/sub0`
     * * `projects/[project_id]/regions/[region]/subnetworks/sub0`
     * * `sub0`
     *
     * Generated from protobuf field <code>string subnetwork_uri = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSubnetworkUri()
    {
        return $this->subnetwork_uri;
    }

    /**
     * Optional. The Compute Engine subnetwork to be used for machine
     * communications. Cannot be specified with network_uri.
     * A full URL, partial URI, or short name are valid. Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/regions/[region]/subnetworks/sub0`
     * * `projects/[project_id]/regions/[region]/subnetworks/sub0`
     * * `sub0`
     *
     * Generated from protobuf field <code>string subnetwork_uri = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnetwork_uri = $var;

        return $this;
    }

    /**
     * Optional. This setting applies to subnetwork-enabled networks. It is set to
     * `true` by default in clusters created with image versions 2.2.x.
     * When set to `true`:
     * * All cluster VMs have internal IP addresses.
     * * [Google Private Access]
     * (https://cloud.google.com/vpc/docs/private-google-access)
     * must be enabled to access Dataproc and other Google Cloud APIs.
     * * Off-cluster dependencies must be configured to be accessible
     * without external IP addresses.
     * When set to `false`:
     * * Cluster VMs are not restricted to internal IP addresses.
     * * Ephemeral external IP addresses are assigned to each cluster VM.
     *
     * Generated from protobuf field <code>optional bool internal_ip_only = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getInternalIpOnly()
    {
        return isset($this->internal_ip_only) ? $this->internal_ip_only : false;
    }

    public function hasInternalIpOnly()
    {
        return isset($this->internal_ip_only);
    }

    public function clearInternalIpOnly()
    {
        unset($this->internal_ip_only);
    }

    /**
     * Optional. This setting applies to subnetwork-enabled networks. It is set to
     * `true` by default in clusters created with image versions 2.2.x.
     * When set to `true`:
     * * All cluster VMs have internal IP addresses.
     * * [Google Private Access]
     * (https://cloud.google.com/vpc/docs/private-google-access)
     * must be enabled to access Dataproc and other Google Cloud APIs.
     * * Off-cluster dependencies must be configured to be accessible
     * without external IP addresses.
     * When set to `false`:
     * * Cluster VMs are not restricted to internal IP addresses.
     * * Ephemeral external IP addresses are assigned to each cluster VM.
     *
     * Generated from protobuf field <code>optional bool internal_ip_only = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setInternalIpOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->internal_ip_only = $var;

        return $this;
    }

    /**
     * Optional. The type of IPv6 access for a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GceClusterConfig.PrivateIpv6GoogleAccess private_ipv6_google_access = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPrivateIpv6GoogleAccess()
    {
        return $this->private_ipv6_google_access;
    }

    /**
     * Optional. The type of IPv6 access for a cluster.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.GceClusterConfig.PrivateIpv6GoogleAccess private_ipv6_google_access = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPrivateIpv6GoogleAccess($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1\GceClusterConfig\PrivateIpv6GoogleAccess::class);
        $this->private_ipv6_google_access = $var;

        return $this;
    }

    /**
     * Optional. The [Dataproc service
     * account](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/service-accounts#service_accounts_in_dataproc)
     * (also see [VM Data Plane
     * identity](https://cloud.google.com/dataproc/docs/concepts/iam/dataproc-principals#vm_service_account_data_plane_identity))
     * used by Dataproc cluster VM instances to access Google Cloud Platform
     * services.
     * If not specified, the
     * [Compute Engine default service
     * account](https://cloud.google.com/compute/docs/access/service-accounts#default_service_account)
     * is used.
     *
     * Generated from protobuf field <code>string service_account = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Optional. The [Dataproc service
     * account](https://cloud.google.com/dataproc/docs/concepts/configuring-clusters/service-accounts#service_accounts_in_dataproc)
     * (also see [VM Data Plane
     * identity](https://cloud.google.com/dataproc/docs/concepts/iam/dataproc-principals#vm_service_account_data_plane_identity))
     * used by Dataproc cluster VM instances to access Google Cloud Platform
     * services.
     * If not specified, the
     * [Compute Engine default service
     * account](https://cloud.google.com/compute/docs/access/service-accounts#default_service_account)
     * is used.
     *
     * Generated from protobuf field <code>string service_account = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Optional. The URIs of service account scopes to be included in
     * Compute Engine instances. The following base set of scopes is always
     * included:
     * * https://www.googleapis.com/auth/cloud.useraccounts.readonly
     * * https://www.googleapis.com/auth/devstorage.read_write
     * * https://www.googleapis.com/auth/logging.write
     * If no scopes are specified, the following defaults are also provided:
     * * https://www.googleapis.com/auth/bigquery
     * * https://www.googleapis.com/auth/bigtable.admin.table
     * * https://www.googleapis.com/auth/bigtable.data
     * * https://www.googleapis.com/auth/devstorage.full_control
     *
     * Generated from protobuf field <code>repeated string service_account_scopes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAccountScopes()
    {
        return $this->service_account_scopes;
    }

    /**
     * Optional. The URIs of service account scopes to be included in
     * Compute Engine instances. The following base set of scopes is always
     * included:
     * * https://www.googleapis.com/auth/cloud.useraccounts.readonly
     * * https://www.googleapis.com/auth/devstorage.read_write
     * * https://www.googleapis.com/auth/logging.write
     * If no scopes are specified, the following defaults are also provided:
     * * https://www.googleapis.com/auth/bigquery
     * * https://www.googleapis.com/auth/bigtable.admin.table
     * * https://www.googleapis.com/auth/bigtable.data
     * * https://www.googleapis.com/auth/devstorage.full_control
     *
     * Generated from protobuf field <code>repeated string service_account_scopes = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAccountScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->service_account_scopes = $arr;

        return $this;
    }

    /**
     * The Compute Engine network tags to add to all instances (see [Tagging
     * instances](https://cloud.google.com/vpc/docs/add-remove-network-tags)).
     *
     * Generated from protobuf field <code>repeated string tags = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * The Compute Engine network tags to add to all instances (see [Tagging
     * instances](https://cloud.google.com/vpc/docs/add-remove-network-tags)).
     *
     * Generated from protobuf field <code>repeated string tags = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Optional. The Compute Engine metadata entries to add to all instances (see
     * [Project and instance
     * metadata](https://cloud.google.com/compute/docs/storing-retrieving-metadata#project_and_instance_metadata)).
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Optional. The Compute Engine metadata entries to add to all instances (see
     * [Project and instance
     * metadata](https://cloud.google.com/compute/docs/storing-retrieving-metadata#project_and_instance_metadata)).
     *
     * Generated from protobuf field <code>map<string, string> metadata = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Optional. Reservation Affinity for consuming Zonal reservation.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ReservationAffinity reservation_affinity = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\ReservationAffinity|null
     */
    public function getReservationAffinity()
    {
        return $this->reservation_affinity;
    }

    public function hasReservationAffinity()
    {
        return isset($this->reservation_affinity);
    }

    public function clearReservationAffinity()
    {
        unset($this->reservation_affinity);
    }

    /**
     * Optional. Reservation Affinity for consuming Zonal reservation.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ReservationAffinity reservation_affinity = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\ReservationAffinity $var
     * @return $this
     */
    public function setReservationAffinity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\ReservationAffinity::class);
        $this->reservation_affinity = $var;

        return $this;
    }

    /**
     * Optional. Node Group Affinity for sole-tenant clusters.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.NodeGroupAffinity node_group_affinity = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\NodeGroupAffinity|null
     */
    public function getNodeGroupAffinity()
    {
        return $this->node_group_affinity;
    }

    public function hasNodeGroupAffinity()
    {
        return isset($this->node_group_affinity);
    }

    public function clearNodeGroupAffinity()
    {
        unset($this->node_group_affinity);
    }

    /**
     * Optional. Node Group Affinity for sole-tenant clusters.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.NodeGroupAffinity node_group_affinity = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\NodeGroupAffinity $var
     * @return $this
     */
    public function setNodeGroupAffinity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\NodeGroupAffinity::class);
        $this->node_group_affinity = $var;

        return $this;
    }

    /**
     * Optional. Shielded Instance Config for clusters using [Compute Engine
     * Shielded
     * VMs](https://cloud.google.com/security/shielded-cloud/shielded-vm).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ShieldedInstanceConfig shielded_instance_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\ShieldedInstanceConfig|null
     */
    public function getShieldedInstanceConfig()
    {
        return $this->shielded_instance_config;
    }

    public function hasShieldedInstanceConfig()
    {
        return isset($this->shielded_instance_config);
    }

    public function clearShieldedInstanceConfig()
    {
        unset($this->shielded_instance_config);
    }

    /**
     * Optional. Shielded Instance Config for clusters using [Compute Engine
     * Shielded
     * VMs](https://cloud.google.com/security/shielded-cloud/shielded-vm).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ShieldedInstanceConfig shielded_instance_config = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\ShieldedInstanceConfig $var
     * @return $this
     */
    public function setShieldedInstanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\ShieldedInstanceConfig::class);
        $this->shielded_instance_config = $var;

        return $this;
    }

    /**
     * Optional. Confidential Instance Config for clusters using [Confidential
     * VMs](https://cloud.google.com/compute/confidential-vm/docs).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ConfidentialInstanceConfig confidential_instance_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\ConfidentialInstanceConfig|null
     */
    public function getConfidentialInstanceConfig()
    {
        return $this->confidential_instance_config;
    }

    public function hasConfidentialInstanceConfig()
    {
        return isset($this->confidential_instance_config);
    }

    public function clearConfidentialInstanceConfig()
    {
        unset($this->confidential_instance_config);
    }

    /**
     * Optional. Confidential Instance Config for clusters using [Confidential
     * VMs](https://cloud.google.com/compute/confidential-vm/docs).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ConfidentialInstanceConfig confidential_instance_config = 15 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\ConfidentialInstanceConfig $var
     * @return $this
     */
    public function setConfidentialInstanceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\ConfidentialInstanceConfig::class);
        $this->confidential_instance_config = $var;

        return $this;
    }

}

