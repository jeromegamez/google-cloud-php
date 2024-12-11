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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/bigquery/storage/v1/storage.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\BigQuery\Storage\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\BidiStream;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\BigQuery\Storage\V1\BatchCommitWriteStreamsRequest;
use Google\Cloud\BigQuery\Storage\V1\BatchCommitWriteStreamsResponse;
use Google\Cloud\BigQuery\Storage\V1\CreateWriteStreamRequest;
use Google\Cloud\BigQuery\Storage\V1\FinalizeWriteStreamRequest;
use Google\Cloud\BigQuery\Storage\V1\FinalizeWriteStreamResponse;
use Google\Cloud\BigQuery\Storage\V1\FlushRowsRequest;
use Google\Cloud\BigQuery\Storage\V1\FlushRowsResponse;
use Google\Cloud\BigQuery\Storage\V1\GetWriteStreamRequest;
use Google\Cloud\BigQuery\Storage\V1\WriteStream;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: BigQuery Write API.
 *
 * The Write API can be used to write data to BigQuery.
 *
 * For supplementary information about the Write API, see:
 * https://cloud.google.com/bigquery/docs/write-api
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<BatchCommitWriteStreamsResponse> batchCommitWriteStreamsAsync(BatchCommitWriteStreamsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<WriteStream> createWriteStreamAsync(CreateWriteStreamRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<FinalizeWriteStreamResponse> finalizeWriteStreamAsync(FinalizeWriteStreamRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<FlushRowsResponse> flushRowsAsync(FlushRowsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<WriteStream> getWriteStreamAsync(GetWriteStreamRequest $request, array $optionalArgs = [])
 */
final class BigQueryWriteClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.bigquery.storage.v1.BigQueryWrite';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'bigquerystorage.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'bigquerystorage.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/bigquery',
        'https://www.googleapis.com/auth/bigquery.insertdata',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/big_query_write_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/big_query_write_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/big_query_write_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/big_query_write_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a table
     * resource.
     *
     * @param string $project
     * @param string $dataset
     * @param string $table
     *
     * @return string The formatted table resource.
     */
    public static function tableName(string $project, string $dataset, string $table): string
    {
        return self::getPathTemplate('table')->render([
            'project' => $project,
            'dataset' => $dataset,
            'table' => $table,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a write_stream
     * resource.
     *
     * @param string $project
     * @param string $dataset
     * @param string $table
     * @param string $stream
     *
     * @return string The formatted write_stream resource.
     */
    public static function writeStreamName(string $project, string $dataset, string $table, string $stream): string
    {
        return self::getPathTemplate('writeStream')->render([
            'project' => $project,
            'dataset' => $dataset,
            'table' => $table,
            'stream' => $stream,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - table: projects/{project}/datasets/{dataset}/tables/{table}
     * - writeStream: projects/{project}/datasets/{dataset}/tables/{table}/streams/{stream}
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
     *           as "<uri>:<port>". Default 'bigquerystorage.googleapis.com:443'.
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
     * Appends data to the given stream.
     *
     * If `offset` is specified, the `offset` is checked against the end of
     * stream. The server returns `OUT_OF_RANGE` in `AppendRowsResponse` if an
     * attempt is made to append to an offset beyond the current end of the stream
     * or `ALREADY_EXISTS` if user provides an `offset` that has already been
     * written to. User can retry with adjusted offset within the same RPC
     * connection. If `offset` is not specified, append happens at the end of the
     * stream.
     *
     * The response contains an optional offset at which the append
     * happened.  No offset information will be returned for appends to a
     * default stream.
     *
     * Responses are received in the same order in which requests are sent.
     * There will be one response for each successful inserted request.  Responses
     * may optionally embed error information if the originating AppendRequest was
     * not successfully processed.
     *
     * The specifics of when successfully appended data is made visible to the
     * table are governed by the type of stream:
     *
     * * For COMMITTED streams (which includes the default stream), data is
     * visible immediately upon successful append.
     *
     * * For BUFFERED streams, data is made visible via a subsequent `FlushRows`
     * rpc which advances a cursor to a newer offset in the stream.
     *
     * * For PENDING streams, data is not made visible until the stream itself is
     * finalized (via the `FinalizeWriteStream` rpc), and the stream is explicitly
     * committed via the `BatchCommitWriteStreams` rpc.
     *
     * @example samples/V1/BigQueryWriteClient/append_rows.php
     *
     * @param array $callOptions {
     *     Optional.
     *
     *     @type int $timeoutMillis
     *           Timeout to use for this call.
     * }
     *
     * @return BidiStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function appendRows(array $callOptions = []): BidiStream
    {
        return $this->startApiCall('AppendRows', null, $callOptions);
    }

    /**
     * Atomically commits a group of `PENDING` streams that belong to the same
     * `parent` table.
     *
     * Streams must be finalized before commit and cannot be committed multiple
     * times. Once a stream is committed, data in the stream becomes available
     * for read operations.
     *
     * The async variant is {@see BigQueryWriteClient::batchCommitWriteStreamsAsync()}
     * .
     *
     * @example samples/V1/BigQueryWriteClient/batch_commit_write_streams.php
     *
     * @param BatchCommitWriteStreamsRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return BatchCommitWriteStreamsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchCommitWriteStreams(
        BatchCommitWriteStreamsRequest $request,
        array $callOptions = []
    ): BatchCommitWriteStreamsResponse {
        return $this->startApiCall('BatchCommitWriteStreams', $request, $callOptions)->wait();
    }

    /**
     * Creates a write stream to the given table.
     * Additionally, every table has a special stream named '_default'
     * to which data can be written. This stream doesn't need to be created using
     * CreateWriteStream. It is a stream that can be used simultaneously by any
     * number of clients. Data written to this stream is considered committed as
     * soon as an acknowledgement is received.
     *
     * The async variant is {@see BigQueryWriteClient::createWriteStreamAsync()} .
     *
     * @example samples/V1/BigQueryWriteClient/create_write_stream.php
     *
     * @param CreateWriteStreamRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return WriteStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createWriteStream(CreateWriteStreamRequest $request, array $callOptions = []): WriteStream
    {
        return $this->startApiCall('CreateWriteStream', $request, $callOptions)->wait();
    }

    /**
     * Finalize a write stream so that no new data can be appended to the
     * stream. Finalize is not supported on the '_default' stream.
     *
     * The async variant is {@see BigQueryWriteClient::finalizeWriteStreamAsync()} .
     *
     * @example samples/V1/BigQueryWriteClient/finalize_write_stream.php
     *
     * @param FinalizeWriteStreamRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FinalizeWriteStreamResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function finalizeWriteStream(
        FinalizeWriteStreamRequest $request,
        array $callOptions = []
    ): FinalizeWriteStreamResponse {
        return $this->startApiCall('FinalizeWriteStream', $request, $callOptions)->wait();
    }

    /**
     * Flushes rows to a BUFFERED stream.
     *
     * If users are appending rows to BUFFERED stream, flush operation is
     * required in order for the rows to become available for reading. A
     * Flush operation flushes up to any previously flushed offset in a BUFFERED
     * stream, to the offset specified in the request.
     *
     * Flush is not supported on the _default stream, since it is not BUFFERED.
     *
     * The async variant is {@see BigQueryWriteClient::flushRowsAsync()} .
     *
     * @example samples/V1/BigQueryWriteClient/flush_rows.php
     *
     * @param FlushRowsRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return FlushRowsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function flushRows(FlushRowsRequest $request, array $callOptions = []): FlushRowsResponse
    {
        return $this->startApiCall('FlushRows', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a write stream.
     *
     * The async variant is {@see BigQueryWriteClient::getWriteStreamAsync()} .
     *
     * @example samples/V1/BigQueryWriteClient/get_write_stream.php
     *
     * @param GetWriteStreamRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return WriteStream
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getWriteStream(GetWriteStreamRequest $request, array $callOptions = []): WriteStream
    {
        return $this->startApiCall('GetWriteStream', $request, $callOptions)->wait();
    }
}
