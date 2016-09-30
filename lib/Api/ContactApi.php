<?php
/**
 * ContactApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendX API
 *
 * SendX is built on the simple tenet that users must have open access to their data. SendX API is the first step in that direction. To cite some examples:   - subscribe / unsubscribe a contact from a list   - Schedule campaign to a segment of users   - Trigger transactional emails   - Get / PUT / POST and DELETE operations on team, campaign, list, contact, report etc. and so on.  As companies grow big, custom use cases around email marketing also crop up. SendX API ensures that SendX platform is able to satisfy such unforeseen use cases. They may range from building custom reporting dashboard to tagging contacts with custom attributes or triggering emails based on recommendation algorithm.  We do our best to have all our URLs be [RESTful](http://en.wikipedia.org/wiki/Representational_state_transfer). Every endpoint (URL) may support one of four different http verbs. GET requests fetch information about an object, POST requests create objects, PUT requests update objects, and finally DELETE requests will delete objects.  Also all API calls besides:   - Subscribe / unsubscribe signup form required **api_key** to be passed as **header**   ### The Envelope Every response is contained by an envelope. That is, each response has a predictable set of keys with which you can expect to interact: ```json {     \"status\": \"200\",     \"message\": \"OK\",     \"data\"\": [        {          ...        },        .        .        .     ] } ```  #### Status The status key is used to communicate extra information about the response to the developer. If all goes well, you'll only ever see a code key with value 200. However, sometimes things go wrong, and in that case you might see a response like: ```json {     \"status\": \"404\" } ```  #### Data The data key is the meat of the response. It may be a list containing single object or multiple objects  #### Message This returns back human readable message. This is specially useful to make sense in case of error scenarios.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ContactApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://api.sendx.io/api/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return ContactApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation contactBulkPost
     *
     * Add a bulk of contacts in a request
     *
     * @param string $api_key  (required)
     * @param \Swagger\Client\Model\BulkContact $body All contacts which need to be added (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactBulkPost($api_key, $body)
    {
        list($response) = $this->contactBulkPostWithHttpInfo($api_key, $body);
        return $response;
    }

    /**
     * Operation contactBulkPostWithHttpInfo
     *
     * Add a bulk of contacts in a request
     *
     * @param string $api_key  (required)
     * @param \Swagger\Client\Model\BulkContact $body All contacts which need to be added (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactBulkPostWithHttpInfo($api_key, $body)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling contactBulkPost');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling contactBulkPost');
        }
        // parse inputs
        $resourcePath = "/contact/bulk";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/contact/bulk'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation contactContactIdCustomfieldPost
     *
     * Add Customfield data for a contact
     *
     * @param string $api_key  (required)
     * @param int $contact_id ID of contact that needs to be fetched (required)
     * @param \Swagger\Client\Model\ContactCustomfield $body Contact object that needs to be added (required)
     * @return \Swagger\Client\Model\InlineResponse2005
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactContactIdCustomfieldPost($api_key, $contact_id, $body)
    {
        list($response) = $this->contactContactIdCustomfieldPostWithHttpInfo($api_key, $contact_id, $body);
        return $response;
    }

    /**
     * Operation contactContactIdCustomfieldPostWithHttpInfo
     *
     * Add Customfield data for a contact
     *
     * @param string $api_key  (required)
     * @param int $contact_id ID of contact that needs to be fetched (required)
     * @param \Swagger\Client\Model\ContactCustomfield $body Contact object that needs to be added (required)
     * @return Array of \Swagger\Client\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactContactIdCustomfieldPostWithHttpInfo($api_key, $contact_id, $body)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling contactContactIdCustomfieldPost');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling contactContactIdCustomfieldPost');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling contactContactIdCustomfieldPost');
        }
        // parse inputs
        $resourcePath = "/contact/{contactId}/customfield";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "contactId" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2005',
                '/contact/{contactId}/customfield'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2005', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2005', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contactContactIdDelete
     *
     * Deletes a contact
     *
     * @param string $api_key  (required)
     * @param int $contact_id Contact ID to delete (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactContactIdDelete($api_key, $contact_id)
    {
        list($response) = $this->contactContactIdDeleteWithHttpInfo($api_key, $contact_id);
        return $response;
    }

    /**
     * Operation contactContactIdDeleteWithHttpInfo
     *
     * Deletes a contact
     *
     * @param string $api_key  (required)
     * @param int $contact_id Contact ID to delete (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactContactIdDeleteWithHttpInfo($api_key, $contact_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling contactContactIdDelete');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling contactContactIdDelete');
        }
        // parse inputs
        $resourcePath = "/contact/{contactId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "contactId" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/contact/{contactId}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation contactContactIdGet
     *
     * Find contact by ID
     *
     * @param string $api_key  (required)
     * @param int $contact_id ID of contact that needs to be fetched (required)
     * @return \Swagger\Client\Model\Contact
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactContactIdGet($api_key, $contact_id)
    {
        list($response) = $this->contactContactIdGetWithHttpInfo($api_key, $contact_id);
        return $response;
    }

    /**
     * Operation contactContactIdGetWithHttpInfo
     *
     * Find contact by ID
     *
     * @param string $api_key  (required)
     * @param int $contact_id ID of contact that needs to be fetched (required)
     * @return Array of \Swagger\Client\Model\Contact, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactContactIdGetWithHttpInfo($api_key, $contact_id)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling contactContactIdGet');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling contactContactIdGet');
        }
        // parse inputs
        $resourcePath = "/contact/{contactId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "contactId" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\Contact',
                '/contact/{contactId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\Contact', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\Contact', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contactContactIdPut
     *
     * Update a contact by ID
     *
     * @param string $api_key  (required)
     * @param int $contact_id ID of contact that needs to be updated (required)
     * @param \Swagger\Client\Model\ContactAddUpdate $body Contact object that needs to be added (required)
     * @return \Swagger\Client\Model\InlineResponse2004
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactContactIdPut($api_key, $contact_id, $body)
    {
        list($response) = $this->contactContactIdPutWithHttpInfo($api_key, $contact_id, $body);
        return $response;
    }

    /**
     * Operation contactContactIdPutWithHttpInfo
     *
     * Update a contact by ID
     *
     * @param string $api_key  (required)
     * @param int $contact_id ID of contact that needs to be updated (required)
     * @param \Swagger\Client\Model\ContactAddUpdate $body Contact object that needs to be added (required)
     * @return Array of \Swagger\Client\Model\InlineResponse2004, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactContactIdPutWithHttpInfo($api_key, $contact_id, $body)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling contactContactIdPut');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling contactContactIdPut');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling contactContactIdPut');
        }
        // parse inputs
        $resourcePath = "/contact/{contactId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // path params
        if ($contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "contactId" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2004',
                '/contact/{contactId}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2004', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2004', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contactGet
     *
     * Get information about all contacts
     *
     * @param string $api_key  (required)
     * @param int $limit Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10. (optional)
     * @param int $offset Offset from where we contacts should be retrieved. Default value is 0. (optional)
     * @return \Swagger\Client\Model\InlineResponse2003
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactGet($api_key, $limit = null, $offset = null)
    {
        list($response) = $this->contactGetWithHttpInfo($api_key, $limit, $offset);
        return $response;
    }

    /**
     * Operation contactGetWithHttpInfo
     *
     * Get information about all contacts
     *
     * @param string $api_key  (required)
     * @param int $limit Maximum number of contacts to be returned. Note that limit maximum value is 100 and default value is 10. (optional)
     * @param int $offset Offset from where we contacts should be retrieved. Default value is 0. (optional)
     * @return Array of \Swagger\Client\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactGetWithHttpInfo($api_key, $limit = null, $offset = null)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling contactGet');
        }
        // parse inputs
        $resourcePath = "/contact";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2003',
                '/contact'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2003', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2003', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation contactPost
     *
     * Add a new contact
     *
     * @param string $api_key  (required)
     * @param \Swagger\Client\Model\ContactAddUpdate $body Contact object that needs to be added (required)
     * @return \Swagger\Client\Model\InlineResponse2004
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactPost($api_key, $body)
    {
        list($response) = $this->contactPostWithHttpInfo($api_key, $body);
        return $response;
    }

    /**
     * Operation contactPostWithHttpInfo
     *
     * Add a new contact
     *
     * @param string $api_key  (required)
     * @param \Swagger\Client\Model\ContactAddUpdate $body Contact object that needs to be added (required)
     * @return Array of \Swagger\Client\Model\InlineResponse2004, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function contactPostWithHttpInfo($api_key, $body)
    {
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling contactPost');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling contactPost');
        }
        // parse inputs
        $resourcePath = "/contact";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($api_key !== null) {
            $headerParams['api_key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\InlineResponse2004',
                '/contact'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\InlineResponse2004', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse2004', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
