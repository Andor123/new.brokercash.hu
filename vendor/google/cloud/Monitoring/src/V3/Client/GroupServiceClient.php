<?php
/*
 * Copyright 2023 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/monitoring/v3/group_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Monitoring\V3\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Monitoring\V3\CreateGroupRequest;
use Google\Cloud\Monitoring\V3\DeleteGroupRequest;
use Google\Cloud\Monitoring\V3\GetGroupRequest;
use Google\Cloud\Monitoring\V3\Group;
use Google\Cloud\Monitoring\V3\ListGroupMembersRequest;
use Google\Cloud\Monitoring\V3\ListGroupsRequest;
use Google\Cloud\Monitoring\V3\UpdateGroupRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: The Group API lets you inspect and manage your
 * [groups](#google.monitoring.v3.Group).
 *
 * A group is a named filter that is used to identify
 * a collection of monitored resources. Groups are typically used to
 * mirror the physical and/or logical topology of the environment.
 * Because group membership is computed dynamically, monitored
 * resources that are started in the future are automatically placed
 * in matching groups. By using a group to name monitored resources in,
 * for example, an alert policy, the target of that alert policy is
 * updated automatically as monitored resources are added and removed
 * from the infrastructure.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface createGroupAsync(CreateGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteGroupAsync(DeleteGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getGroupAsync(GetGroupRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listGroupMembersAsync(ListGroupMembersRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listGroupsAsync(ListGroupsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateGroupAsync(UpdateGroupRequest $request, array $optionalArgs = [])
 */
final class GroupServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.monitoring.v3.GroupService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'monitoring.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'monitoring.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/monitoring',
        'https://www.googleapis.com/auth/monitoring.read',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/group_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/group_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/group_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/group_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a folder_group
     * resource.
     *
     * @param string $folder
     * @param string $group
     *
     * @return string The formatted folder_group resource.
     */
    public static function folderGroupName(string $folder, string $group): string
    {
        return self::getPathTemplate('folderGroup')->render([
            'folder' => $folder,
            'group' => $group,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a group
     * resource.
     *
     * @param string $project
     * @param string $group
     *
     * @return string The formatted group resource.
     */
    public static function groupName(string $project, string $group): string
    {
        return self::getPathTemplate('group')->render([
            'project' => $project,
            'group' => $group,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * organization_group resource.
     *
     * @param string $organization
     * @param string $group
     *
     * @return string The formatted organization_group resource.
     */
    public static function organizationGroupName(string $organization, string $group): string
    {
        return self::getPathTemplate('organizationGroup')->render([
            'organization' => $organization,
            'group' => $group,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_group resource.
     *
     * @param string $project
     * @param string $group
     *
     * @return string The formatted project_group resource.
     */
    public static function projectGroupName(string $project, string $group): string
    {
        return self::getPathTemplate('projectGroup')->render([
            'project' => $project,
            'group' => $group,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - folderGroup: folders/{folder}/groups/{group}
     * - group: projects/{project}/groups/{group}
     * - organizationGroup: organizations/{organization}/groups/{group}
     * - projectGroup: projects/{project}/groups/{group}
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
     *           as "<uri>:<port>". Default 'monitoring.googleapis.com:443'.
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
     * Creates a new group.
     *
     * The async variant is {@see GroupServiceClient::createGroupAsync()} .
     *
     * @example samples/V3/GroupServiceClient/create_group.php
     *
     * @param CreateGroupRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Group
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createGroup(CreateGroupRequest $request, array $callOptions = []): Group
    {
        return $this->startApiCall('CreateGroup', $request, $callOptions)->wait();
    }

    /**
     * Deletes an existing group.
     *
     * The async variant is {@see GroupServiceClient::deleteGroupAsync()} .
     *
     * @example samples/V3/GroupServiceClient/delete_group.php
     *
     * @param DeleteGroupRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
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
    public function deleteGroup(DeleteGroupRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteGroup', $request, $callOptions)->wait();
    }

    /**
     * Gets a single group.
     *
     * The async variant is {@see GroupServiceClient::getGroupAsync()} .
     *
     * @example samples/V3/GroupServiceClient/get_group.php
     *
     * @param GetGroupRequest $request     A request to house fields associated with the call.
     * @param array           $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Group
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getGroup(GetGroupRequest $request, array $callOptions = []): Group
    {
        return $this->startApiCall('GetGroup', $request, $callOptions)->wait();
    }

    /**
     * Lists the monitored resources that are members of a group.
     *
     * The async variant is {@see GroupServiceClient::listGroupMembersAsync()} .
     *
     * @example samples/V3/GroupServiceClient/list_group_members.php
     *
     * @param ListGroupMembersRequest $request     A request to house fields associated with the call.
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
    public function listGroupMembers(ListGroupMembersRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListGroupMembers', $request, $callOptions);
    }

    /**
     * Lists the existing groups.
     *
     * The async variant is {@see GroupServiceClient::listGroupsAsync()} .
     *
     * @example samples/V3/GroupServiceClient/list_groups.php
     *
     * @param ListGroupsRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
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
    public function listGroups(ListGroupsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListGroups', $request, $callOptions);
    }

    /**
     * Updates an existing group.
     * You can change any group attributes except `name`.
     *
     * The async variant is {@see GroupServiceClient::updateGroupAsync()} .
     *
     * @example samples/V3/GroupServiceClient/update_group.php
     *
     * @param UpdateGroupRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Group
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateGroup(UpdateGroupRequest $request, array $callOptions = []): Group
    {
        return $this->startApiCall('UpdateGroup', $request, $callOptions)->wait();
    }
}