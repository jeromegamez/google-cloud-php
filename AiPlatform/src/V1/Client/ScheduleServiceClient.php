<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1/schedule_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\AIPlatform\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\AIPlatform\V1\CreateScheduleRequest;
use Google\Cloud\AIPlatform\V1\DeleteScheduleRequest;
use Google\Cloud\AIPlatform\V1\GetScheduleRequest;
use Google\Cloud\AIPlatform\V1\ListSchedulesRequest;
use Google\Cloud\AIPlatform\V1\PauseScheduleRequest;
use Google\Cloud\AIPlatform\V1\ResumeScheduleRequest;
use Google\Cloud\AIPlatform\V1\Schedule;
use Google\Cloud\AIPlatform\V1\UpdateScheduleRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: A service for creating and managing Vertex AI's Schedule resources to
 * periodically launch shceudled runs to make API calls.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<Schedule> createScheduleAsync(CreateScheduleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteScheduleAsync(DeleteScheduleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Schedule> getScheduleAsync(GetScheduleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listSchedulesAsync(ListSchedulesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> pauseScheduleAsync(PauseScheduleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> resumeScheduleAsync(ResumeScheduleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Schedule> updateScheduleAsync(UpdateScheduleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Location> getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Policy> setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TestIamPermissionsResponse> testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 */
final class ScheduleServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.aiplatform.v1.ScheduleService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'aiplatform.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'aiplatform.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/schedule_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/schedule_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/schedule_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/schedule_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Create the default operation client for the service.
     *
     * @param array $options ClientOptions for the client.
     *
     * @return OperationsClient
     */
    private function createOperationsClient(array $options)
    {
        // Unset client-specific configuration options
        unset($options['serviceName'], $options['clientConfig'], $options['descriptorsConfigPath']);

        if (isset($options['operationsClient'])) {
            return $options['operationsClient'];
        }

        return new OperationsClient($options);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a artifact
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     * @param string $artifact
     *
     * @return string The formatted artifact resource.
     */
    public static function artifactName(
        string $project,
        string $location,
        string $metadataStore,
        string $artifact
    ): string {
        return self::getPathTemplate('artifact')->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
            'artifact' => $artifact,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a context
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     * @param string $context
     *
     * @return string The formatted context resource.
     */
    public static function contextName(
        string $project,
        string $location,
        string $metadataStore,
        string $context
    ): string {
        return self::getPathTemplate('context')->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
            'context' => $context,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a custom_job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $customJob
     *
     * @return string The formatted custom_job resource.
     */
    public static function customJobName(string $project, string $location, string $customJob): string
    {
        return self::getPathTemplate('customJob')->render([
            'project' => $project,
            'location' => $location,
            'custom_job' => $customJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a execution
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     * @param string $execution
     *
     * @return string The formatted execution resource.
     */
    public static function executionName(
        string $project,
        string $location,
        string $metadataStore,
        string $execution
    ): string {
        return self::getPathTemplate('execution')->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
            'execution' => $execution,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(string $project, string $location): string
    {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * metadata_store resource.
     *
     * @param string $project
     * @param string $location
     * @param string $metadataStore
     *
     * @return string The formatted metadata_store resource.
     */
    public static function metadataStoreName(string $project, string $location, string $metadataStore): string
    {
        return self::getPathTemplate('metadataStore')->render([
            'project' => $project,
            'location' => $location,
            'metadata_store' => $metadataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a network
     * resource.
     *
     * @param string $project
     * @param string $network
     *
     * @return string The formatted network resource.
     */
    public static function networkName(string $project, string $network): string
    {
        return self::getPathTemplate('network')->render([
            'project' => $project,
            'network' => $network,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * notebook_execution_job resource.
     *
     * @param string $project
     * @param string $location
     * @param string $notebookExecutionJob
     *
     * @return string The formatted notebook_execution_job resource.
     */
    public static function notebookExecutionJobName(
        string $project,
        string $location,
        string $notebookExecutionJob
    ): string {
        return self::getPathTemplate('notebookExecutionJob')->render([
            'project' => $project,
            'location' => $location,
            'notebook_execution_job' => $notebookExecutionJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * notebook_runtime_template resource.
     *
     * @param string $project
     * @param string $location
     * @param string $notebookRuntimeTemplate
     *
     * @return string The formatted notebook_runtime_template resource.
     */
    public static function notebookRuntimeTemplateName(
        string $project,
        string $location,
        string $notebookRuntimeTemplate
    ): string {
        return self::getPathTemplate('notebookRuntimeTemplate')->render([
            'project' => $project,
            'location' => $location,
            'notebook_runtime_template' => $notebookRuntimeTemplate,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a pipeline_job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $pipelineJob
     *
     * @return string The formatted pipeline_job resource.
     */
    public static function pipelineJobName(string $project, string $location, string $pipelineJob): string
    {
        return self::getPathTemplate('pipelineJob')->render([
            'project' => $project,
            'location' => $location,
            'pipeline_job' => $pipelineJob,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a reservation
     * resource.
     *
     * @param string $projectIdOrNumber
     * @param string $zone
     * @param string $reservationName
     *
     * @return string The formatted reservation resource.
     */
    public static function reservationName(string $projectIdOrNumber, string $zone, string $reservationName): string
    {
        return self::getPathTemplate('reservation')->render([
            'project_id_or_number' => $projectIdOrNumber,
            'zone' => $zone,
            'reservation_name' => $reservationName,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a schedule
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $schedule
     *
     * @return string The formatted schedule resource.
     */
    public static function scheduleName(string $project, string $location, string $schedule): string
    {
        return self::getPathTemplate('schedule')->render([
            'project' => $project,
            'location' => $location,
            'schedule' => $schedule,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a subnetwork
     * resource.
     *
     * @param string $project
     * @param string $region
     * @param string $subnetwork
     *
     * @return string The formatted subnetwork resource.
     */
    public static function subnetworkName(string $project, string $region, string $subnetwork): string
    {
        return self::getPathTemplate('subnetwork')->render([
            'project' => $project,
            'region' => $region,
            'subnetwork' => $subnetwork,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - artifact: projects/{project}/locations/{location}/metadataStores/{metadata_store}/artifacts/{artifact}
     * - context: projects/{project}/locations/{location}/metadataStores/{metadata_store}/contexts/{context}
     * - customJob: projects/{project}/locations/{location}/customJobs/{custom_job}
     * - execution: projects/{project}/locations/{location}/metadataStores/{metadata_store}/executions/{execution}
     * - location: projects/{project}/locations/{location}
     * - metadataStore: projects/{project}/locations/{location}/metadataStores/{metadata_store}
     * - network: projects/{project}/global/networks/{network}
     * - notebookExecutionJob: projects/{project}/locations/{location}/notebookExecutionJobs/{notebook_execution_job}
     * - notebookRuntimeTemplate: projects/{project}/locations/{location}/notebookRuntimeTemplates/{notebook_runtime_template}
     * - pipelineJob: projects/{project}/locations/{location}/pipelineJobs/{pipeline_job}
     * - reservation: projects/{project_id_or_number}/zones/{zone}/reservations/{reservation_name}
     * - schedule: projects/{project}/locations/{location}/schedules/{schedule}
     * - subnetwork: projects/{project}/regions/{region}/subnetworks/{subnetwork}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, ?string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'aiplatform.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a Schedule.
     *
     * The async variant is {@see ScheduleServiceClient::createScheduleAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/create_schedule.php
     *
     * @param CreateScheduleRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Schedule
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createSchedule(CreateScheduleRequest $request, array $callOptions = []): Schedule
    {
        return $this->startApiCall('CreateSchedule', $request, $callOptions)->wait();
    }

    /**
     * Deletes a Schedule.
     *
     * The async variant is {@see ScheduleServiceClient::deleteScheduleAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/delete_schedule.php
     *
     * @param DeleteScheduleRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteSchedule(DeleteScheduleRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteSchedule', $request, $callOptions)->wait();
    }

    /**
     * Gets a Schedule.
     *
     * The async variant is {@see ScheduleServiceClient::getScheduleAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/get_schedule.php
     *
     * @param GetScheduleRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Schedule
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSchedule(GetScheduleRequest $request, array $callOptions = []): Schedule
    {
        return $this->startApiCall('GetSchedule', $request, $callOptions)->wait();
    }

    /**
     * Lists Schedules in a Location.
     *
     * The async variant is {@see ScheduleServiceClient::listSchedulesAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/list_schedules.php
     *
     * @param ListSchedulesRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listSchedules(ListSchedulesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListSchedules', $request, $callOptions);
    }

    /**
     * Pauses a Schedule. Will mark
     * [Schedule.state][google.cloud.aiplatform.v1.Schedule.state] to 'PAUSED'. If
     * the schedule is paused, no new runs will be created. Already created runs
     * will NOT be paused or canceled.
     *
     * The async variant is {@see ScheduleServiceClient::pauseScheduleAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/pause_schedule.php
     *
     * @param PauseScheduleRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function pauseSchedule(PauseScheduleRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('PauseSchedule', $request, $callOptions)->wait();
    }

    /**
     * Resumes a paused Schedule to start scheduling new runs. Will mark
     * [Schedule.state][google.cloud.aiplatform.v1.Schedule.state] to 'ACTIVE'.
     * Only paused Schedule can be resumed.
     *
     * When the Schedule is resumed, new runs will be scheduled starting from the
     * next execution time after the current time based on the time_specification
     * in the Schedule. If
     * [Schedule.catch_up][google.cloud.aiplatform.v1.Schedule.catch_up] is set up
     * true, all missed runs will be scheduled for backfill first.
     *
     * The async variant is {@see ScheduleServiceClient::resumeScheduleAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/resume_schedule.php
     *
     * @param ResumeScheduleRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function resumeSchedule(ResumeScheduleRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('ResumeSchedule', $request, $callOptions)->wait();
    }

    /**
     * Updates an active or paused Schedule.
     *
     * When the Schedule is updated, new runs will be scheduled starting from the
     * updated next execution time after the update time based on the
     * time_specification in the updated Schedule. All unstarted runs before the
     * update time will be skipped while already created runs will NOT be paused
     * or canceled.
     *
     * The async variant is {@see ScheduleServiceClient::updateScheduleAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/update_schedule.php
     *
     * @param UpdateScheduleRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Schedule
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateSchedule(UpdateScheduleRequest $request, array $callOptions = []): Schedule
    {
        return $this->startApiCall('UpdateSchedule', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see ScheduleServiceClient::getLocationAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see ScheduleServiceClient::listLocationsAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }

    /**
     * Gets the access control policy for a resource. Returns an empty policy
    if the resource exists and does not have a policy set.
     *
     * The async variant is {@see ScheduleServiceClient::getIamPolicyAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/get_iam_policy.php
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Sets the access control policy on the specified resource. Replaces
    any existing policy.

    Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED`
    errors.
     *
     * The async variant is {@see ScheduleServiceClient::setIamPolicyAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/set_iam_policy.php
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource. If the
    resource does not exist, this will return an empty set of
    permissions, not a `NOT_FOUND` error.

    Note: This operation is designed to be used for building
    permission-aware UIs and command-line tools, not for authorization
    checking. This operation may "fail open" without warning.
     *
     * The async variant is {@see ScheduleServiceClient::testIamPermissionsAsync()} .
     *
     * @example samples/V1/ScheduleServiceClient/test_iam_permissions.php
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(
        TestIamPermissionsRequest $request,
        array $callOptions = []
    ): TestIamPermissionsResponse {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }
}
