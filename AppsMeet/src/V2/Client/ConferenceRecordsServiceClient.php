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
 * https://github.com/googleapis/googleapis/blob/master/google/apps/meet/v2/service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Apps\Meet\V2\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Apps\Meet\V2\ConferenceRecord;
use Google\Apps\Meet\V2\GetConferenceRecordRequest;
use Google\Apps\Meet\V2\GetParticipantRequest;
use Google\Apps\Meet\V2\GetParticipantSessionRequest;
use Google\Apps\Meet\V2\GetRecordingRequest;
use Google\Apps\Meet\V2\GetTranscriptEntryRequest;
use Google\Apps\Meet\V2\GetTranscriptRequest;
use Google\Apps\Meet\V2\ListConferenceRecordsRequest;
use Google\Apps\Meet\V2\ListParticipantSessionsRequest;
use Google\Apps\Meet\V2\ListParticipantsRequest;
use Google\Apps\Meet\V2\ListRecordingsRequest;
use Google\Apps\Meet\V2\ListTranscriptEntriesRequest;
use Google\Apps\Meet\V2\ListTranscriptsRequest;
use Google\Apps\Meet\V2\Participant;
use Google\Apps\Meet\V2\ParticipantSession;
use Google\Apps\Meet\V2\Recording;
use Google\Apps\Meet\V2\Transcript;
use Google\Apps\Meet\V2\TranscriptEntry;
use Google\Auth\FetchAuthTokenInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: REST API for services dealing with conference records.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<ConferenceRecord> getConferenceRecordAsync(GetConferenceRecordRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Participant> getParticipantAsync(GetParticipantRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<ParticipantSession> getParticipantSessionAsync(GetParticipantSessionRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Recording> getRecordingAsync(GetRecordingRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Transcript> getTranscriptAsync(GetTranscriptRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<TranscriptEntry> getTranscriptEntryAsync(GetTranscriptEntryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listConferenceRecordsAsync(ListConferenceRecordsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listParticipantSessionsAsync(ListParticipantSessionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listParticipantsAsync(ListParticipantsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listRecordingsAsync(ListRecordingsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listTranscriptEntriesAsync(ListTranscriptEntriesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listTranscriptsAsync(ListTranscriptsRequest $request, array $optionalArgs = [])
 */
final class ConferenceRecordsServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.apps.meet.v2.ConferenceRecordsService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'meet.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'meet.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/meetings.space.created',
        'https://www.googleapis.com/auth/meetings.space.readonly',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/conference_records_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/conference_records_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/conference_records_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ . '/../resources/conference_records_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * conference_record resource.
     *
     * @param string $conferenceRecord
     *
     * @return string The formatted conference_record resource.
     */
    public static function conferenceRecordName(string $conferenceRecord): string
    {
        return self::getPathTemplate('conferenceRecord')->render([
            'conference_record' => $conferenceRecord,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a participant
     * resource.
     *
     * @param string $conferenceRecord
     * @param string $participant
     *
     * @return string The formatted participant resource.
     */
    public static function participantName(string $conferenceRecord, string $participant): string
    {
        return self::getPathTemplate('participant')->render([
            'conference_record' => $conferenceRecord,
            'participant' => $participant,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * participant_session resource.
     *
     * @param string $conferenceRecord
     * @param string $participant
     * @param string $participantSession
     *
     * @return string The formatted participant_session resource.
     */
    public static function participantSessionName(
        string $conferenceRecord,
        string $participant,
        string $participantSession
    ): string {
        return self::getPathTemplate('participantSession')->render([
            'conference_record' => $conferenceRecord,
            'participant' => $participant,
            'participant_session' => $participantSession,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a recording
     * resource.
     *
     * @param string $conferenceRecord
     * @param string $recording
     *
     * @return string The formatted recording resource.
     */
    public static function recordingName(string $conferenceRecord, string $recording): string
    {
        return self::getPathTemplate('recording')->render([
            'conference_record' => $conferenceRecord,
            'recording' => $recording,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a transcript
     * resource.
     *
     * @param string $conferenceRecord
     * @param string $transcript
     *
     * @return string The formatted transcript resource.
     */
    public static function transcriptName(string $conferenceRecord, string $transcript): string
    {
        return self::getPathTemplate('transcript')->render([
            'conference_record' => $conferenceRecord,
            'transcript' => $transcript,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * transcript_entry resource.
     *
     * @param string $conferenceRecord
     * @param string $transcript
     * @param string $entry
     *
     * @return string The formatted transcript_entry resource.
     */
    public static function transcriptEntryName(string $conferenceRecord, string $transcript, string $entry): string
    {
        return self::getPathTemplate('transcriptEntry')->render([
            'conference_record' => $conferenceRecord,
            'transcript' => $transcript,
            'entry' => $entry,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - conferenceRecord: conferenceRecords/{conference_record}
     * - participant: conferenceRecords/{conference_record}/participants/{participant}
     * - participantSession: conferenceRecords/{conference_record}/participants/{participant}/participantSessions/{participant_session}
     * - recording: conferenceRecords/{conference_record}/recordings/{recording}
     * - transcript: conferenceRecords/{conference_record}/transcripts/{transcript}
     * - transcriptEntry: conferenceRecords/{conference_record}/transcripts/{transcript}/entries/{entry}
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
     *           as "<uri>:<port>". Default 'meet.googleapis.com:443'.
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
     * Gets a conference record by conference ID.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::getConferenceRecordAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/get_conference_record.php
     *
     * @param GetConferenceRecordRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ConferenceRecord
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getConferenceRecord(GetConferenceRecordRequest $request, array $callOptions = []): ConferenceRecord
    {
        return $this->startApiCall('GetConferenceRecord', $request, $callOptions)->wait();
    }

    /**
     * Gets a participant by participant ID.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::getParticipantAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/get_participant.php
     *
     * @param GetParticipantRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Participant
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getParticipant(GetParticipantRequest $request, array $callOptions = []): Participant
    {
        return $this->startApiCall('GetParticipant', $request, $callOptions)->wait();
    }

    /**
     * Gets a participant session by participant session ID.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::getParticipantSessionAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/get_participant_session.php
     *
     * @param GetParticipantSessionRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ParticipantSession
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getParticipantSession(
        GetParticipantSessionRequest $request,
        array $callOptions = []
    ): ParticipantSession {
        return $this->startApiCall('GetParticipantSession', $request, $callOptions)->wait();
    }

    /**
     * Gets a recording by recording ID.
     *
     * The async variant is {@see ConferenceRecordsServiceClient::getRecordingAsync()}
     * .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/get_recording.php
     *
     * @param GetRecordingRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Recording
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getRecording(GetRecordingRequest $request, array $callOptions = []): Recording
    {
        return $this->startApiCall('GetRecording', $request, $callOptions)->wait();
    }

    /**
     * Gets a transcript by transcript ID.
     *
     * The async variant is {@see ConferenceRecordsServiceClient::getTranscriptAsync()}
     * .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/get_transcript.php
     *
     * @param GetTranscriptRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Transcript
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTranscript(GetTranscriptRequest $request, array $callOptions = []): Transcript
    {
        return $this->startApiCall('GetTranscript', $request, $callOptions)->wait();
    }

    /**
     * Gets a `TranscriptEntry` resource by entry ID.
     *
     * Note: The transcript entries returned by the Google Meet API might not
     * match the transcription found in the Google Docs transcript file. This can
     * occur when the Google Docs transcript file is modified after generation.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::getTranscriptEntryAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/get_transcript_entry.php
     *
     * @param GetTranscriptEntryRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TranscriptEntry
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getTranscriptEntry(GetTranscriptEntryRequest $request, array $callOptions = []): TranscriptEntry
    {
        return $this->startApiCall('GetTranscriptEntry', $request, $callOptions)->wait();
    }

    /**
     * Lists the conference records. By default, ordered by start time and in
     * descending order.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::listConferenceRecordsAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/list_conference_records.php
     *
     * @param ListConferenceRecordsRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
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
    public function listConferenceRecords(
        ListConferenceRecordsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListConferenceRecords', $request, $callOptions);
    }

    /**
     * Lists the participant sessions of a participant in a conference record. By
     * default, ordered by join time and in descending order. This API supports
     * `fields` as standard parameters like every other API. However, when the
     * `fields` request parameter is omitted this API defaults to
     * `'participantsessions/*, next_page_token'`.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::listParticipantSessionsAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/list_participant_sessions.php
     *
     * @param ListParticipantSessionsRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
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
    public function listParticipantSessions(
        ListParticipantSessionsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListParticipantSessions', $request, $callOptions);
    }

    /**
     * Lists the participants in a conference record. By default, ordered by join
     * time and in descending order. This API supports `fields` as standard
     * parameters like every other API. However, when the `fields` request
     * parameter is omitted, this API defaults to `'participants/*,
     * next_page_token'`.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::listParticipantsAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/list_participants.php
     *
     * @param ListParticipantsRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
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
    public function listParticipants(ListParticipantsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListParticipants', $request, $callOptions);
    }

    /**
     * Lists the recording resources from the conference record. By default,
     * ordered by start time and in ascending order.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::listRecordingsAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/list_recordings.php
     *
     * @param ListRecordingsRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function listRecordings(ListRecordingsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListRecordings', $request, $callOptions);
    }

    /**
     * Lists the structured transcript entries per transcript. By default, ordered
     * by start time and in ascending order.
     *
     * Note: The transcript entries returned by the Google Meet API might not
     * match the transcription found in the Google Docs transcript file. This can
     * occur when the Google Docs transcript file is modified after generation.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::listTranscriptEntriesAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/list_transcript_entries.php
     *
     * @param ListTranscriptEntriesRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
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
    public function listTranscriptEntries(
        ListTranscriptEntriesRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListTranscriptEntries', $request, $callOptions);
    }

    /**
     * Lists the set of transcripts from the conference record. By default,
     * ordered by start time and in ascending order.
     *
     * The async variant is
     * {@see ConferenceRecordsServiceClient::listTranscriptsAsync()} .
     *
     * @example samples/V2/ConferenceRecordsServiceClient/list_transcripts.php
     *
     * @param ListTranscriptsRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function listTranscripts(ListTranscriptsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListTranscripts', $request, $callOptions);
    }
}
