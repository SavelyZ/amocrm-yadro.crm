<?php
/**
 * NoteApi
 * PHP version 5
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * INTROVERT API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Introvert\Api;

use \Introvert\ApiClient;
use \Introvert\ApiException;
use \Introvert\Configuration;
use \Introvert\ObjectSerializer;

/**
 * NoteApi Class Doc Comment
 *
 * @category Class
 * @package  Introvert
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteApi
{
    /**
     * API Client
     *
     * @var \Introvert\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Introvert\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Introvert\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://test.api.yadrocrm.ru/tmp');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Introvert\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Introvert\ApiClient $apiClient set the API client
     *
     * @return NoteApi
     */
    public function setApiClient(\Introvert\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation create
     *
     * ?????????????? ????????????????????
     *
     * @param \Introvert\Model\Note[] | array $body ???????????? ???????????????? ?????????????????????? ???????????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function create($body = null)
    {
        list($response) = $this->createWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createWithHttpInfo
     *
     * ?????????????? ????????????????????
     *
     * @param \Introvert\Model\Note[] | array $body ???????????? ???????????????? ?????????????????????? ???????????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/crm/note/create";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/note/create'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createCall
     *
     * ?????????????? ????????????????????-????????????
     *
     * @param \Introvert\Model\NoteCall | array $body ???????????? ???????????????????????? ????????????????????-???????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function createCall($body = null)
    {
        list($response) = $this->createCallWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createCallWithHttpInfo
     *
     * ?????????????? ????????????????????-????????????
     *
     * @param \Introvert\Model\NoteCall | array $body ???????????? ???????????????????????? ????????????????????-???????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCallWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/crm/note/createCall";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/note/createCall'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAll
     *
     * ???????????????????? ???????????? ????????????????????
     *
     * @param int[] $element_id id ????????????????, ?? ???????????????? ?????????????????? ???????????????????? (optional)
     * @param int $element_type ?????? ????????????????, 2 (lead), 1 (contact), 3 (company). ???? ?????????????????? 2 (lead) (optional, default to 2)
     * @param string $ifmodif ???????????? ???? ???????? ??????????????????. timestamp ?????? ???????????? ?? ?????????????? &#39;D, j M Y H:i:s&#39; (optional)
     * @param string $note_type  (optional)
     * @param int[] $id id ???????????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getAll($element_id = null, $element_type = null, $ifmodif = null, $note_type = null, $id = null)
    {
        list($response) = $this->getAllWithHttpInfo($element_id, $element_type, $ifmodif, $note_type, $id);
        return $response;
    }

    /**
     * Operation getAllWithHttpInfo
     *
     * ???????????????????? ???????????? ????????????????????
     *
     * @param int[] $element_id id ????????????????, ?? ???????????????? ?????????????????? ???????????????????? (optional)
     * @param int $element_type ?????? ????????????????, 2 (lead), 1 (contact), 3 (company). ???? ?????????????????? 2 (lead) (optional, default to 2)
     * @param string $ifmodif ???????????? ???? ???????? ??????????????????. timestamp ?????? ???????????? ?? ?????????????? &#39;D, j M Y H:i:s&#39; (optional)
     * @param string $note_type  (optional)
     * @param int[] $id id ???????????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllWithHttpInfo($element_id = null, $element_type = null, $ifmodif = null, $note_type = null, $id = null)
    {
        // parse inputs
        $resourcePath = "/crm/note/list";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($element_id !== null) {
            $queryParams['element_id'] = $element_id; //$this->apiClient->getSerializer()->serializeCollection($element_id, 'multi', true);
        }

        // query params
        if ($element_type !== null) {
            $queryParams['element_type'] = $this->apiClient->getSerializer()->toQueryValue($element_type);
        }

        // query params
        if ($ifmodif !== null) {
            $queryParams['ifmodif'] = $this->apiClient->getSerializer()->toQueryValue($ifmodif);
        }

        // query params
        if ($note_type !== null) {
            $queryParams['note_type'] = $this->apiClient->getSerializer()->toQueryValue($note_type);
        }

        // query params
        if ($id !== null) {
            $queryParams['id'] = $id; //$this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/note/list'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getById
     *
     * ???????????????????? ???????????????????? ???? id
     *
     * @param int $id id ???????????????????? (required)
     * @param int $element_type 2 (lead), 1 (contact). ???? ?????????????????? 2 (lead) (optional, default to 2)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function getById($id, $element_type = null)
    {
        list($response) = $this->getByIdWithHttpInfo($id, $element_type);
        return $response;
    }

    /**
     * Operation getByIdWithHttpInfo
     *
     * ???????????????????? ???????????????????? ???? id
     *
     * @param int $id id ???????????????????? (required)
     * @param int $element_type 2 (lead), 1 (contact). ???? ?????????????????? 2 (lead) (optional, default to 2)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function getByIdWithHttpInfo($id, $element_type = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getById');
        }
        // parse inputs
        $resourcePath = "/crm/note/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($element_type !== null) {
            $queryParams['element_type'] = $this->apiClient->getSerializer()->toQueryValue($element_type);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/note/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation update
     *
     * ?????????????????? ????????????????????
     *
     * @param \Introvert\Model\Note[] | array $body ???????????? ???????????????? ?????????????????????? ???????????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return object | array
     */
    public function update($body = null)
    {
        list($response) = $this->updateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation updateWithHttpInfo
     *
     * ?????????????????? ????????????????????
     *
     * @param \Introvert\Model\Note[] | array $body ???????????? ???????????????? ?????????????????????? ???????????????????? (optional)
     * @throws \Introvert\ApiException on non-2xx response
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/crm/note/update";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

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
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'object',
                '/crm/note/update'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
