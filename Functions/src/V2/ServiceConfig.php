<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v2/functions.proto

namespace Google\Cloud\Functions\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the Service being deployed.
 * Currently Supported : Cloud Run (fully managed).
 *
 * Generated from protobuf message <code>google.cloud.functions.v2.ServiceConfig</code>
 */
class ServiceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the service associated with a Function.
     * The format of this field is
     * `projects/{project}/locations/{region}/services/{service}`
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $service = '';
    /**
     * The function execution timeout. Execution is considered failed and
     * can be terminated if the function is not completed at the end of the
     * timeout period. Defaults to 60 seconds.
     *
     * Generated from protobuf field <code>int32 timeout_seconds = 2;</code>
     */
    private $timeout_seconds = 0;
    /**
     * The amount of memory available for a function.
     * Defaults to 256M. Supported units are k, M, G, Mi, Gi. If no unit is
     * supplied the value is interpreted as bytes.
     * See
     * https://github.com/kubernetes/kubernetes/blob/master/staging/src/k8s.io/apimachinery/pkg/api/resource/quantity.go
     * a full description.
     *
     * Generated from protobuf field <code>string available_memory = 13;</code>
     */
    private $available_memory = '';
    /**
     * The number of CPUs used in a single container instance.
     * Default value is calculated from available memory.
     * Supports the same values as Cloud Run, see
     * https://cloud.google.com/run/docs/reference/rest/v1/Container#resourcerequirements
     * Example: "1" indicates 1 vCPU
     *
     * Generated from protobuf field <code>string available_cpu = 22;</code>
     */
    private $available_cpu = '';
    /**
     * Environment variables that shall be available during function execution.
     *
     * Generated from protobuf field <code>map<string, string> environment_variables = 4;</code>
     */
    private $environment_variables;
    /**
     * The limit on the maximum number of function instances that may coexist at a
     * given time.
     * In some cases, such as rapid traffic surges, Cloud Functions may, for a
     * short period of time, create more instances than the specified max
     * instances limit. If your function cannot tolerate this temporary behavior,
     * you may want to factor in a safety margin and set a lower max instances
     * value than your function can tolerate.
     * See the [Max
     * Instances](https://cloud.google.com/functions/docs/max-instances) Guide for
     * more details.
     *
     * Generated from protobuf field <code>int32 max_instance_count = 5;</code>
     */
    private $max_instance_count = 0;
    /**
     * The limit on the minimum number of function instances that may coexist at a
     * given time.
     * Function instances are kept in idle state for a short period after they
     * finished executing the request to reduce cold start time for subsequent
     * requests. Setting a minimum instance count will ensure that the given
     * number of instances are kept running in idle state always. This can help
     * with cold start times when jump in incoming request count occurs after the
     * idle instance would have been stopped in the default case.
     *
     * Generated from protobuf field <code>int32 min_instance_count = 12;</code>
     */
    private $min_instance_count = 0;
    /**
     * The Serverless VPC Access connector that this cloud function can connect
     * to. The format of this field is `projects/&#42;&#47;locations/&#42;&#47;connectors/&#42;`.
     *
     * Generated from protobuf field <code>string vpc_connector = 6 [(.google.api.resource_reference) = {</code>
     */
    private $vpc_connector = '';
    /**
     * The egress settings for the connector, controlling what traffic is diverted
     * through it.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig.VpcConnectorEgressSettings vpc_connector_egress_settings = 7;</code>
     */
    private $vpc_connector_egress_settings = 0;
    /**
     * The ingress settings for the function, controlling what traffic can reach
     * it.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig.IngressSettings ingress_settings = 8;</code>
     */
    private $ingress_settings = 0;
    /**
     * Output only. URI of the Service deployed.
     *
     * Generated from protobuf field <code>string uri = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uri = '';
    /**
     * The email of the service's service account. If empty, defaults to
     * `{project_number}-compute&#64;developer.gserviceaccount.com`.
     *
     * Generated from protobuf field <code>string service_account_email = 10;</code>
     */
    private $service_account_email = '';
    /**
     * Whether 100% of traffic is routed to the latest revision.
     * On CreateFunction and UpdateFunction, when set to true, the revision being
     * deployed will serve 100% of traffic, ignoring any traffic split settings,
     * if any. On GetFunction, true will be returned if the latest revision is
     * serving 100% of traffic.
     *
     * Generated from protobuf field <code>bool all_traffic_on_latest_revision = 16;</code>
     */
    private $all_traffic_on_latest_revision = false;
    /**
     * Secret environment variables configuration.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.SecretEnvVar secret_environment_variables = 17;</code>
     */
    private $secret_environment_variables;
    /**
     * Secret volumes configuration.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.SecretVolume secret_volumes = 19;</code>
     */
    private $secret_volumes;
    /**
     * Output only. The name of service revision.
     *
     * Generated from protobuf field <code>string revision = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $revision = '';
    /**
     * Sets the maximum number of concurrent requests that each instance
     * can receive. Defaults to 1.
     *
     * Generated from protobuf field <code>int32 max_instance_request_concurrency = 20;</code>
     */
    private $max_instance_request_concurrency = 0;
    /**
     * Security level configure whether the function only accepts https.
     * This configuration is only applicable to 1st Gen functions with Http
     * trigger. By default https is optional for 1st Gen functions; 2nd Gen
     * functions are https ONLY.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig.SecurityLevel security_level = 21;</code>
     */
    private $security_level = 0;
    /**
     * Optional. The binary authorization policy to be checked when deploying the
     * Cloud Run service.
     *
     * Generated from protobuf field <code>string binary_authorization_policy = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $binary_authorization_policy = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Output only. Name of the service associated with a Function.
     *           The format of this field is
     *           `projects/{project}/locations/{region}/services/{service}`
     *     @type int $timeout_seconds
     *           The function execution timeout. Execution is considered failed and
     *           can be terminated if the function is not completed at the end of the
     *           timeout period. Defaults to 60 seconds.
     *     @type string $available_memory
     *           The amount of memory available for a function.
     *           Defaults to 256M. Supported units are k, M, G, Mi, Gi. If no unit is
     *           supplied the value is interpreted as bytes.
     *           See
     *           https://github.com/kubernetes/kubernetes/blob/master/staging/src/k8s.io/apimachinery/pkg/api/resource/quantity.go
     *           a full description.
     *     @type string $available_cpu
     *           The number of CPUs used in a single container instance.
     *           Default value is calculated from available memory.
     *           Supports the same values as Cloud Run, see
     *           https://cloud.google.com/run/docs/reference/rest/v1/Container#resourcerequirements
     *           Example: "1" indicates 1 vCPU
     *     @type array|\Google\Protobuf\Internal\MapField $environment_variables
     *           Environment variables that shall be available during function execution.
     *     @type int $max_instance_count
     *           The limit on the maximum number of function instances that may coexist at a
     *           given time.
     *           In some cases, such as rapid traffic surges, Cloud Functions may, for a
     *           short period of time, create more instances than the specified max
     *           instances limit. If your function cannot tolerate this temporary behavior,
     *           you may want to factor in a safety margin and set a lower max instances
     *           value than your function can tolerate.
     *           See the [Max
     *           Instances](https://cloud.google.com/functions/docs/max-instances) Guide for
     *           more details.
     *     @type int $min_instance_count
     *           The limit on the minimum number of function instances that may coexist at a
     *           given time.
     *           Function instances are kept in idle state for a short period after they
     *           finished executing the request to reduce cold start time for subsequent
     *           requests. Setting a minimum instance count will ensure that the given
     *           number of instances are kept running in idle state always. This can help
     *           with cold start times when jump in incoming request count occurs after the
     *           idle instance would have been stopped in the default case.
     *     @type string $vpc_connector
     *           The Serverless VPC Access connector that this cloud function can connect
     *           to. The format of this field is `projects/&#42;&#47;locations/&#42;&#47;connectors/&#42;`.
     *     @type int $vpc_connector_egress_settings
     *           The egress settings for the connector, controlling what traffic is diverted
     *           through it.
     *     @type int $ingress_settings
     *           The ingress settings for the function, controlling what traffic can reach
     *           it.
     *     @type string $uri
     *           Output only. URI of the Service deployed.
     *     @type string $service_account_email
     *           The email of the service's service account. If empty, defaults to
     *           `{project_number}-compute&#64;developer.gserviceaccount.com`.
     *     @type bool $all_traffic_on_latest_revision
     *           Whether 100% of traffic is routed to the latest revision.
     *           On CreateFunction and UpdateFunction, when set to true, the revision being
     *           deployed will serve 100% of traffic, ignoring any traffic split settings,
     *           if any. On GetFunction, true will be returned if the latest revision is
     *           serving 100% of traffic.
     *     @type array<\Google\Cloud\Functions\V2\SecretEnvVar>|\Google\Protobuf\Internal\RepeatedField $secret_environment_variables
     *           Secret environment variables configuration.
     *     @type array<\Google\Cloud\Functions\V2\SecretVolume>|\Google\Protobuf\Internal\RepeatedField $secret_volumes
     *           Secret volumes configuration.
     *     @type string $revision
     *           Output only. The name of service revision.
     *     @type int $max_instance_request_concurrency
     *           Sets the maximum number of concurrent requests that each instance
     *           can receive. Defaults to 1.
     *     @type int $security_level
     *           Security level configure whether the function only accepts https.
     *           This configuration is only applicable to 1st Gen functions with Http
     *           trigger. By default https is optional for 1st Gen functions; 2nd Gen
     *           functions are https ONLY.
     *     @type string $binary_authorization_policy
     *           Optional. The binary authorization policy to be checked when deploying the
     *           Cloud Run service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V2\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the service associated with a Function.
     * The format of this field is
     * `projects/{project}/locations/{region}/services/{service}`
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Output only. Name of the service associated with a Function.
     * The format of this field is
     * `projects/{project}/locations/{region}/services/{service}`
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * The function execution timeout. Execution is considered failed and
     * can be terminated if the function is not completed at the end of the
     * timeout period. Defaults to 60 seconds.
     *
     * Generated from protobuf field <code>int32 timeout_seconds = 2;</code>
     * @return int
     */
    public function getTimeoutSeconds()
    {
        return $this->timeout_seconds;
    }

    /**
     * The function execution timeout. Execution is considered failed and
     * can be terminated if the function is not completed at the end of the
     * timeout period. Defaults to 60 seconds.
     *
     * Generated from protobuf field <code>int32 timeout_seconds = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeoutSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->timeout_seconds = $var;

        return $this;
    }

    /**
     * The amount of memory available for a function.
     * Defaults to 256M. Supported units are k, M, G, Mi, Gi. If no unit is
     * supplied the value is interpreted as bytes.
     * See
     * https://github.com/kubernetes/kubernetes/blob/master/staging/src/k8s.io/apimachinery/pkg/api/resource/quantity.go
     * a full description.
     *
     * Generated from protobuf field <code>string available_memory = 13;</code>
     * @return string
     */
    public function getAvailableMemory()
    {
        return $this->available_memory;
    }

    /**
     * The amount of memory available for a function.
     * Defaults to 256M. Supported units are k, M, G, Mi, Gi. If no unit is
     * supplied the value is interpreted as bytes.
     * See
     * https://github.com/kubernetes/kubernetes/blob/master/staging/src/k8s.io/apimachinery/pkg/api/resource/quantity.go
     * a full description.
     *
     * Generated from protobuf field <code>string available_memory = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setAvailableMemory($var)
    {
        GPBUtil::checkString($var, True);
        $this->available_memory = $var;

        return $this;
    }

    /**
     * The number of CPUs used in a single container instance.
     * Default value is calculated from available memory.
     * Supports the same values as Cloud Run, see
     * https://cloud.google.com/run/docs/reference/rest/v1/Container#resourcerequirements
     * Example: "1" indicates 1 vCPU
     *
     * Generated from protobuf field <code>string available_cpu = 22;</code>
     * @return string
     */
    public function getAvailableCpu()
    {
        return $this->available_cpu;
    }

    /**
     * The number of CPUs used in a single container instance.
     * Default value is calculated from available memory.
     * Supports the same values as Cloud Run, see
     * https://cloud.google.com/run/docs/reference/rest/v1/Container#resourcerequirements
     * Example: "1" indicates 1 vCPU
     *
     * Generated from protobuf field <code>string available_cpu = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setAvailableCpu($var)
    {
        GPBUtil::checkString($var, True);
        $this->available_cpu = $var;

        return $this;
    }

    /**
     * Environment variables that shall be available during function execution.
     *
     * Generated from protobuf field <code>map<string, string> environment_variables = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnvironmentVariables()
    {
        return $this->environment_variables;
    }

    /**
     * Environment variables that shall be available during function execution.
     *
     * Generated from protobuf field <code>map<string, string> environment_variables = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnvironmentVariables($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->environment_variables = $arr;

        return $this;
    }

    /**
     * The limit on the maximum number of function instances that may coexist at a
     * given time.
     * In some cases, such as rapid traffic surges, Cloud Functions may, for a
     * short period of time, create more instances than the specified max
     * instances limit. If your function cannot tolerate this temporary behavior,
     * you may want to factor in a safety margin and set a lower max instances
     * value than your function can tolerate.
     * See the [Max
     * Instances](https://cloud.google.com/functions/docs/max-instances) Guide for
     * more details.
     *
     * Generated from protobuf field <code>int32 max_instance_count = 5;</code>
     * @return int
     */
    public function getMaxInstanceCount()
    {
        return $this->max_instance_count;
    }

    /**
     * The limit on the maximum number of function instances that may coexist at a
     * given time.
     * In some cases, such as rapid traffic surges, Cloud Functions may, for a
     * short period of time, create more instances than the specified max
     * instances limit. If your function cannot tolerate this temporary behavior,
     * you may want to factor in a safety margin and set a lower max instances
     * value than your function can tolerate.
     * See the [Max
     * Instances](https://cloud.google.com/functions/docs/max-instances) Guide for
     * more details.
     *
     * Generated from protobuf field <code>int32 max_instance_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxInstanceCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_instance_count = $var;

        return $this;
    }

    /**
     * The limit on the minimum number of function instances that may coexist at a
     * given time.
     * Function instances are kept in idle state for a short period after they
     * finished executing the request to reduce cold start time for subsequent
     * requests. Setting a minimum instance count will ensure that the given
     * number of instances are kept running in idle state always. This can help
     * with cold start times when jump in incoming request count occurs after the
     * idle instance would have been stopped in the default case.
     *
     * Generated from protobuf field <code>int32 min_instance_count = 12;</code>
     * @return int
     */
    public function getMinInstanceCount()
    {
        return $this->min_instance_count;
    }

    /**
     * The limit on the minimum number of function instances that may coexist at a
     * given time.
     * Function instances are kept in idle state for a short period after they
     * finished executing the request to reduce cold start time for subsequent
     * requests. Setting a minimum instance count will ensure that the given
     * number of instances are kept running in idle state always. This can help
     * with cold start times when jump in incoming request count occurs after the
     * idle instance would have been stopped in the default case.
     *
     * Generated from protobuf field <code>int32 min_instance_count = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setMinInstanceCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_instance_count = $var;

        return $this;
    }

    /**
     * The Serverless VPC Access connector that this cloud function can connect
     * to. The format of this field is `projects/&#42;&#47;locations/&#42;&#47;connectors/&#42;`.
     *
     * Generated from protobuf field <code>string vpc_connector = 6 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getVpcConnector()
    {
        return $this->vpc_connector;
    }

    /**
     * The Serverless VPC Access connector that this cloud function can connect
     * to. The format of this field is `projects/&#42;&#47;locations/&#42;&#47;connectors/&#42;`.
     *
     * Generated from protobuf field <code>string vpc_connector = 6 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setVpcConnector($var)
    {
        GPBUtil::checkString($var, True);
        $this->vpc_connector = $var;

        return $this;
    }

    /**
     * The egress settings for the connector, controlling what traffic is diverted
     * through it.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig.VpcConnectorEgressSettings vpc_connector_egress_settings = 7;</code>
     * @return int
     */
    public function getVpcConnectorEgressSettings()
    {
        return $this->vpc_connector_egress_settings;
    }

    /**
     * The egress settings for the connector, controlling what traffic is diverted
     * through it.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig.VpcConnectorEgressSettings vpc_connector_egress_settings = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setVpcConnectorEgressSettings($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Functions\V2\ServiceConfig\VpcConnectorEgressSettings::class);
        $this->vpc_connector_egress_settings = $var;

        return $this;
    }

    /**
     * The ingress settings for the function, controlling what traffic can reach
     * it.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig.IngressSettings ingress_settings = 8;</code>
     * @return int
     */
    public function getIngressSettings()
    {
        return $this->ingress_settings;
    }

    /**
     * The ingress settings for the function, controlling what traffic can reach
     * it.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig.IngressSettings ingress_settings = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setIngressSettings($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Functions\V2\ServiceConfig\IngressSettings::class);
        $this->ingress_settings = $var;

        return $this;
    }

    /**
     * Output only. URI of the Service deployed.
     *
     * Generated from protobuf field <code>string uri = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Output only. URI of the Service deployed.
     *
     * Generated from protobuf field <code>string uri = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * The email of the service's service account. If empty, defaults to
     * `{project_number}-compute&#64;developer.gserviceaccount.com`.
     *
     * Generated from protobuf field <code>string service_account_email = 10;</code>
     * @return string
     */
    public function getServiceAccountEmail()
    {
        return $this->service_account_email;
    }

    /**
     * The email of the service's service account. If empty, defaults to
     * `{project_number}-compute&#64;developer.gserviceaccount.com`.
     *
     * Generated from protobuf field <code>string service_account_email = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_email = $var;

        return $this;
    }

    /**
     * Whether 100% of traffic is routed to the latest revision.
     * On CreateFunction and UpdateFunction, when set to true, the revision being
     * deployed will serve 100% of traffic, ignoring any traffic split settings,
     * if any. On GetFunction, true will be returned if the latest revision is
     * serving 100% of traffic.
     *
     * Generated from protobuf field <code>bool all_traffic_on_latest_revision = 16;</code>
     * @return bool
     */
    public function getAllTrafficOnLatestRevision()
    {
        return $this->all_traffic_on_latest_revision;
    }

    /**
     * Whether 100% of traffic is routed to the latest revision.
     * On CreateFunction and UpdateFunction, when set to true, the revision being
     * deployed will serve 100% of traffic, ignoring any traffic split settings,
     * if any. On GetFunction, true will be returned if the latest revision is
     * serving 100% of traffic.
     *
     * Generated from protobuf field <code>bool all_traffic_on_latest_revision = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllTrafficOnLatestRevision($var)
    {
        GPBUtil::checkBool($var);
        $this->all_traffic_on_latest_revision = $var;

        return $this;
    }

    /**
     * Secret environment variables configuration.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.SecretEnvVar secret_environment_variables = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecretEnvironmentVariables()
    {
        return $this->secret_environment_variables;
    }

    /**
     * Secret environment variables configuration.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.SecretEnvVar secret_environment_variables = 17;</code>
     * @param array<\Google\Cloud\Functions\V2\SecretEnvVar>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecretEnvironmentVariables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Functions\V2\SecretEnvVar::class);
        $this->secret_environment_variables = $arr;

        return $this;
    }

    /**
     * Secret volumes configuration.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.SecretVolume secret_volumes = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecretVolumes()
    {
        return $this->secret_volumes;
    }

    /**
     * Secret volumes configuration.
     *
     * Generated from protobuf field <code>repeated .google.cloud.functions.v2.SecretVolume secret_volumes = 19;</code>
     * @param array<\Google\Cloud\Functions\V2\SecretVolume>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecretVolumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Functions\V2\SecretVolume::class);
        $this->secret_volumes = $arr;

        return $this;
    }

    /**
     * Output only. The name of service revision.
     *
     * Generated from protobuf field <code>string revision = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Output only. The name of service revision.
     *
     * Generated from protobuf field <code>string revision = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkString($var, True);
        $this->revision = $var;

        return $this;
    }

    /**
     * Sets the maximum number of concurrent requests that each instance
     * can receive. Defaults to 1.
     *
     * Generated from protobuf field <code>int32 max_instance_request_concurrency = 20;</code>
     * @return int
     */
    public function getMaxInstanceRequestConcurrency()
    {
        return $this->max_instance_request_concurrency;
    }

    /**
     * Sets the maximum number of concurrent requests that each instance
     * can receive. Defaults to 1.
     *
     * Generated from protobuf field <code>int32 max_instance_request_concurrency = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxInstanceRequestConcurrency($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_instance_request_concurrency = $var;

        return $this;
    }

    /**
     * Security level configure whether the function only accepts https.
     * This configuration is only applicable to 1st Gen functions with Http
     * trigger. By default https is optional for 1st Gen functions; 2nd Gen
     * functions are https ONLY.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig.SecurityLevel security_level = 21;</code>
     * @return int
     */
    public function getSecurityLevel()
    {
        return $this->security_level;
    }

    /**
     * Security level configure whether the function only accepts https.
     * This configuration is only applicable to 1st Gen functions with Http
     * trigger. By default https is optional for 1st Gen functions; 2nd Gen
     * functions are https ONLY.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v2.ServiceConfig.SecurityLevel security_level = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setSecurityLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Functions\V2\ServiceConfig\SecurityLevel::class);
        $this->security_level = $var;

        return $this;
    }

    /**
     * Optional. The binary authorization policy to be checked when deploying the
     * Cloud Run service.
     *
     * Generated from protobuf field <code>string binary_authorization_policy = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getBinaryAuthorizationPolicy()
    {
        return $this->binary_authorization_policy;
    }

    /**
     * Optional. The binary authorization policy to be checked when deploying the
     * Cloud Run service.
     *
     * Generated from protobuf field <code>string binary_authorization_policy = 23 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setBinaryAuthorizationPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->binary_authorization_policy = $var;

        return $this;
    }

}

