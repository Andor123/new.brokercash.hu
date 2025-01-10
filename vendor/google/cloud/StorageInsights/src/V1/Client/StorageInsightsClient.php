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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/storageinsights/v1/storageinsights.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\StorageInsights\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\StorageInsights\V1\CreateReportConfigRequest;
use Google\Cloud\StorageInsights\V1\DeleteReportConfigRequest;
use Google\Cloud\StorageInsights\V1\GetReportConfigRequest;
use Google\Cloud\StorageInsights\V1\GetReportDetailRequest;
use Google\Cloud\StorageInsights\V1\ListReportConfigsRequest;
use Google\Cloud\StorageInsights\V1\ListReportDetailsRequest;
use Google\Cloud\StorageInsights\V1\ReportConfig;
use Google\Cloud\StorageInsights\V1\ReportDetail;
use Google\Cloud\StorageInsights\V1\UpdateReportConfigRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service describing handlers for resources
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createReportConfigAsync(CreateReportConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteReportConfigAsync(DeleteReportConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getReportConfigAsync(GetReportConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getReportDetailAsync(GetReportDetailRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listReportConfigsAsync(ListReportConfigsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listReportDetailsAsync(ListReportDetailsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateReportConfigAsync(UpdateReportConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
final class StorageInsightsClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.storageinsights.v1.StorageInsights';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'storageinsights.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'storageinsights.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/storage_insights_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/storage_insights_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/storage_insights_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/storage_insights_rest_client_config.php',
                ],
            ],
        ];
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
     * report_config resource.
     *
     * @param string $project
     * @param string $location
     * @param string $reportConfig
     *
     * @return string The formatted report_config resource.
     */
    public static function reportConfigName(string $project, string $location, string $reportConfig): string
    {
        return self::getPathTemplate('reportConfig')->render([
            'project' => $project,
            'location' => $location,
            'report_config' => $reportConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * report_detail resource.
     *
     * @param string $project
     * @param string $location
     * @param string $reportConfig
     * @param string $reportDetail
     *
     * @return string The formatted report_detail resource.
     */
    public static function reportDetailName(
        string $project,
        string $location,
        string $reportConfig,
        string $reportDetail
    ): string {
        return self::getPathTemplate('reportDetail')->render([
            'project' => $project,
            'location' => $location,
            'report_config' => $reportConfig,
            'report_detail' => $reportDetail,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - location: projects/{project}/locations/{location}
     * - reportConfig: projects/{project}/locations/{location}/reportConfigs/{report_config}
     * - reportDetail: projects/{project}/locations/{location}/reportConfigs/{report_config}/reportDetails/{report_detail}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
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
     *           as "<uri>:<port>". Default 'storageinsights.googleapis.com:443'.
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
     * Creates a new ReportConfig in a given project and location.
     *
     * The async variant is {@see StorageInsightsClient::createReportConfigAsync()} .
     *
     * @example samples/V1/StorageInsightsClient/create_report_config.php
     *
     * @param CreateReportConfigRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ReportConfig
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createReportConfig(CreateReportConfigRequest $request, array $callOptions = []): ReportConfig
    {
        return $this->startApiCall('CreateReportConfig', $request, $callOptions)->wait();
    }

    /**
     * Deletes a single ReportConfig.
     *
     * The async variant is {@see StorageInsightsClient::deleteReportConfigAsync()} .
     *
     * @example samples/V1/StorageInsightsClient/delete_report_config.php
     *
     * @param DeleteReportConfigRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
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
    public function deleteReportConfig(DeleteReportConfigRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteReportConfig', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single ReportConfig.
     *
     * The async variant is {@see StorageInsightsClient::getReportConfigAsync()} .
     *
     * @example samples/V1/StorageInsightsClient/get_report_config.php
     *
     * @param GetReportConfigRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ReportConfig
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getReportConfig(GetReportConfigRequest $request, array $callOptions = []): ReportConfig
    {
        return $this->startApiCall('GetReportConfig', $request, $callOptions)->wait();
    }

    /**
     * Gets details of a single ReportDetail.
     *
     * The async variant is {@see StorageInsightsClient::getReportDetailAsync()} .
     *
     * @example samples/V1/StorageInsightsClient/get_report_detail.php
     *
     * @param GetReportDetailRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ReportDetail
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getReportDetail(GetReportDetailRequest $request, array $callOptions = []): ReportDetail
    {
        return $this->startApiCall('GetReportDetail', $request, $callOptions)->wait();
    }

    /**
     * Lists ReportConfigs in a given project and location.
     *
     * The async variant is {@see StorageInsightsClient::listReportConfigsAsync()} .
     *
     * @example samples/V1/StorageInsightsClient/list_report_configs.php
     *
     * @param ListReportConfigsRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function listReportConfigs(ListReportConfigsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListReportConfigs', $request, $callOptions);
    }

    /**
     * Lists ReportDetails in a given project and location.
     *
     * The async variant is {@see StorageInsightsClient::listReportDetailsAsync()} .
     *
     * @example samples/V1/StorageInsightsClient/list_report_details.php
     *
     * @param ListReportDetailsRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function listReportDetails(ListReportDetailsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListReportDetails', $request, $callOptions);
    }

    /**
     * Updates the parameters of a single ReportConfig.
     *
     * The async variant is {@see StorageInsightsClient::updateReportConfigAsync()} .
     *
     * @example samples/V1/StorageInsightsClient/update_report_config.php
     *
     * @param UpdateReportConfigRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return ReportConfig
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateReportConfig(UpdateReportConfigRequest $request, array $callOptions = []): ReportConfig
    {
        return $this->startApiCall('UpdateReportConfig', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see StorageInsightsClient::getLocationAsync()} .
     *
     * @example samples/V1/StorageInsightsClient/get_location.php
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
     * The async variant is {@see StorageInsightsClient::listLocationsAsync()} .
     *
     * @example samples/V1/StorageInsightsClient/list_locations.php
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
}
