<?php
/**
 * TaggedApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Stackflows\Clients\Stackflows
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stackflows REST API
 *
 * Pagination query params are as follows: page[size]=10&page[number]=1
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Stackflows\Clients\Stackflows\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Stackflows\Clients\Stackflows\ApiException;
use Stackflows\Clients\Stackflows\Configuration;
use Stackflows\Clients\Stackflows\HeaderSelector;
use Stackflows\Clients\Stackflows\ObjectSerializer;

/**
 * TaggedApi Class Doc Comment
 *
 * @category Class
 * @package  Stackflows\Clients\Stackflows
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaggedApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation postTaggedBusinessModelsStart
     *
     * Starts Business Process Models by Tag
     *
     * @param  \Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest $postTaggedBusinessModelsStartRequest postTaggedBusinessModelsStartRequest (required)
     * @param  string $contentType  (optional)
     * @param  string $accept  (optional)
     *
     * @throws \Stackflows\Clients\Stackflows\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[]
     */
    public function postTaggedBusinessModelsStart($postTaggedBusinessModelsStartRequest, $contentType = null, $accept = null)
    {
        list($response) = $this->postTaggedBusinessModelsStartWithHttpInfo($postTaggedBusinessModelsStartRequest, $contentType, $accept);
        return $response;
    }

    /**
     * Operation postTaggedBusinessModelsStartWithHttpInfo
     *
     * Starts Business Process Models by Tag
     *
     * @param  \Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest $postTaggedBusinessModelsStartRequest (required)
     * @param  string $contentType  (optional)
     * @param  string $accept  (optional)
     *
     * @throws \Stackflows\Clients\Stackflows\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[], HTTP status code, HTTP response headers (array of strings)
     */
    public function postTaggedBusinessModelsStartWithHttpInfo($postTaggedBusinessModelsStartRequest, $contentType = null, $accept = null)
    {
        $request = $this->postTaggedBusinessModelsStartRequest($postTaggedBusinessModelsStartRequest, $contentType, $accept);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postTaggedBusinessModelsStartAsync
     *
     * Starts Business Process Models by Tag
     *
     * @param  \Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest $postTaggedBusinessModelsStartRequest (required)
     * @param  string $contentType  (optional)
     * @param  string $accept  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaggedBusinessModelsStartAsync($postTaggedBusinessModelsStartRequest, $contentType = null, $accept = null)
    {
        return $this->postTaggedBusinessModelsStartAsyncWithHttpInfo($postTaggedBusinessModelsStartRequest, $contentType, $accept)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postTaggedBusinessModelsStartAsyncWithHttpInfo
     *
     * Starts Business Process Models by Tag
     *
     * @param  \Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest $postTaggedBusinessModelsStartRequest (required)
     * @param  string $contentType  (optional)
     * @param  string $accept  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postTaggedBusinessModelsStartAsyncWithHttpInfo($postTaggedBusinessModelsStartRequest, $contentType = null, $accept = null)
    {
        $returnType = '\Stackflows\Clients\Stackflows\Model\BusinessBaseModelResource[]';
        $request = $this->postTaggedBusinessModelsStartRequest($postTaggedBusinessModelsStartRequest, $contentType, $accept);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postTaggedBusinessModelsStart'
     *
     * @param  \Stackflows\Clients\Stackflows\Model\PostTaggedBusinessModelsStartRequest $postTaggedBusinessModelsStartRequest (required)
     * @param  string $contentType  (optional)
     * @param  string $accept  (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function postTaggedBusinessModelsStartRequest($postTaggedBusinessModelsStartRequest, $contentType = null, $accept = null)
    {
        // verify the required parameter 'postTaggedBusinessModelsStartRequest' is set
        if ($postTaggedBusinessModelsStartRequest === null || (is_array($postTaggedBusinessModelsStartRequest) && count($postTaggedBusinessModelsStartRequest) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $postTaggedBusinessModelsStartRequest when calling postTaggedBusinessModelsStart'
            );
        }

        $resourcePath = '/api/v2/tagged/business-models';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($contentType !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($contentType);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($postTaggedBusinessModelsStartRequest)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($postTaggedBusinessModelsStartRequest));
            } else {
                $httpBody = $postTaggedBusinessModelsStartRequest;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
