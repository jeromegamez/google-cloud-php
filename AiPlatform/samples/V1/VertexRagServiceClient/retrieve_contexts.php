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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START aiplatform_v1_generated_VertexRagService_RetrieveContexts_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\AIPlatform\V1\Client\VertexRagServiceClient;
use Google\Cloud\AIPlatform\V1\RagQuery;
use Google\Cloud\AIPlatform\V1\RetrieveContextsRequest;
use Google\Cloud\AIPlatform\V1\RetrieveContextsResponse;

/**
 * Retrieves relevant contexts for a query.
 *
 * @param string $formattedParent The resource name of the Location from which to retrieve
 *                                RagContexts. The users must have permission to make a call in the project.
 *                                Format:
 *                                `projects/{project}/locations/{location}`. Please see
 *                                {@see VertexRagServiceClient::locationName()} for help formatting this field.
 */
function retrieve_contexts_sample(string $formattedParent): void
{
    // Create a client.
    $vertexRagServiceClient = new VertexRagServiceClient();

    // Prepare the request message.
    $query = new RagQuery();
    $request = (new RetrieveContextsRequest())
        ->setParent($formattedParent)
        ->setQuery($query);

    // Call the API and handle any network failures.
    try {
        /** @var RetrieveContextsResponse $response */
        $response = $vertexRagServiceClient->retrieveContexts($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = VertexRagServiceClient::locationName('[PROJECT]', '[LOCATION]');

    retrieve_contexts_sample($formattedParent);
}
// [END aiplatform_v1_generated_VertexRagService_RetrieveContexts_sync]
