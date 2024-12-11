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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/discoveryengine/v1/schema_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\DiscoveryEngine\V1\Client;

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
use Google\Cloud\DiscoveryEngine\V1\CreateSchemaRequest;
use Google\Cloud\DiscoveryEngine\V1\DeleteSchemaRequest;
use Google\Cloud\DiscoveryEngine\V1\GetSchemaRequest;
use Google\Cloud\DiscoveryEngine\V1\ListSchemasRequest;
use Google\Cloud\DiscoveryEngine\V1\Schema;
use Google\Cloud\DiscoveryEngine\V1\UpdateSchemaRequest;
use Google\LongRunning\Client\OperationsClient;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Service for managing [Schema][google.cloud.discoveryengine.v1.Schema]s.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<OperationResponse> createSchemaAsync(CreateSchemaRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> deleteSchemaAsync(DeleteSchemaRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Schema> getSchemaAsync(GetSchemaRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listSchemasAsync(ListSchemasRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<OperationResponse> updateSchemaAsync(UpdateSchemaRequest $request, array $optionalArgs = [])
 */
final class SchemaServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.discoveryengine.v1.SchemaService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'discoveryengine.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'discoveryengine.UNIVERSE_DOMAIN';

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
            'clientConfig' => __DIR__ . '/../resources/schema_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/schema_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/schema_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/schema_service_rest_client_config.php',
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
     * Formats a string containing the fully-qualified path to represent a data_store
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     *
     * @return string The formatted data_store resource.
     */
    public static function dataStoreName(string $project, string $location, string $dataStore): string
    {
        return self::getPathTemplate('dataStore')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_collection_data_store resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     * @param string $dataStore
     *
     * @return string The formatted project_location_collection_data_store resource.
     */
    public static function projectLocationCollectionDataStoreName(
        string $project,
        string $location,
        string $collection,
        string $dataStore
    ): string {
        return self::getPathTemplate('projectLocationCollectionDataStore')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
            'data_store' => $dataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_collection_data_store_schema resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collection
     * @param string $dataStore
     * @param string $schema
     *
     * @return string The formatted project_location_collection_data_store_schema resource.
     */
    public static function projectLocationCollectionDataStoreSchemaName(
        string $project,
        string $location,
        string $collection,
        string $dataStore,
        string $schema
    ): string {
        return self::getPathTemplate('projectLocationCollectionDataStoreSchema')->render([
            'project' => $project,
            'location' => $location,
            'collection' => $collection,
            'data_store' => $dataStore,
            'schema' => $schema,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_data_store resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     *
     * @return string The formatted project_location_data_store resource.
     */
    public static function projectLocationDataStoreName(string $project, string $location, string $dataStore): string
    {
        return self::getPathTemplate('projectLocationDataStore')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_data_store_schema resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $schema
     *
     * @return string The formatted project_location_data_store_schema resource.
     */
    public static function projectLocationDataStoreSchemaName(
        string $project,
        string $location,
        string $dataStore,
        string $schema
    ): string {
        return self::getPathTemplate('projectLocationDataStoreSchema')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'schema' => $schema,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a schema
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $dataStore
     * @param string $schema
     *
     * @return string The formatted schema resource.
     */
    public static function schemaName(string $project, string $location, string $dataStore, string $schema): string
    {
        return self::getPathTemplate('schema')->render([
            'project' => $project,
            'location' => $location,
            'data_store' => $dataStore,
            'schema' => $schema,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - dataStore: projects/{project}/locations/{location}/dataStores/{data_store}
     * - projectLocationCollectionDataStore: projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}
     * - projectLocationCollectionDataStoreSchema: projects/{project}/locations/{location}/collections/{collection}/dataStores/{data_store}/schemas/{schema}
     * - projectLocationDataStore: projects/{project}/locations/{location}/dataStores/{data_store}
     * - projectLocationDataStoreSchema: projects/{project}/locations/{location}/dataStores/{data_store}/schemas/{schema}
     * - schema: projects/{project}/locations/{location}/dataStores/{data_store}/schemas/{schema}
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
     *           as "<uri>:<port>". Default 'discoveryengine.googleapis.com:443'.
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
     * Creates a [Schema][google.cloud.discoveryengine.v1.Schema].
     *
     * The async variant is {@see SchemaServiceClient::createSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/create_schema.php
     *
     * @param CreateSchemaRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function createSchema(CreateSchemaRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateSchema', $request, $callOptions)->wait();
    }

    /**
     * Deletes a [Schema][google.cloud.discoveryengine.v1.Schema].
     *
     * The async variant is {@see SchemaServiceClient::deleteSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/delete_schema.php
     *
     * @param DeleteSchemaRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function deleteSchema(DeleteSchemaRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('DeleteSchema', $request, $callOptions)->wait();
    }

    /**
     * Gets a [Schema][google.cloud.discoveryengine.v1.Schema].
     *
     * The async variant is {@see SchemaServiceClient::getSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/get_schema.php
     *
     * @param GetSchemaRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Schema
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSchema(GetSchemaRequest $request, array $callOptions = []): Schema
    {
        return $this->startApiCall('GetSchema', $request, $callOptions)->wait();
    }

    /**
     * Gets a list of [Schema][google.cloud.discoveryengine.v1.Schema]s.
     *
     * The async variant is {@see SchemaServiceClient::listSchemasAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/list_schemas.php
     *
     * @param ListSchemasRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
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
    public function listSchemas(ListSchemasRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListSchemas', $request, $callOptions);
    }

    /**
     * Updates a [Schema][google.cloud.discoveryengine.v1.Schema].
     *
     * The async variant is {@see SchemaServiceClient::updateSchemaAsync()} .
     *
     * @example samples/V1/SchemaServiceClient/update_schema.php
     *
     * @param UpdateSchemaRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
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
    public function updateSchema(UpdateSchemaRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateSchema', $request, $callOptions)->wait();
    }
}
