<?php

namespace GitlabApi\Clients;

use GitlabApi\Query\AbstractQueryBuilder;
use GuzzleHttp\Client as GuzzleClient;

abstract class AbstractClient
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var GuzzleClient
     */
    private $client;

    /**
     * @param string $url
     * @param string $token
     */
    public function __construct($url, $token)
    {
        $this->token = $token;
        $this->client = new GuzzleClient([
            'base_url' => rtrim($url, '/') . '/'
        ]);
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return rtrim($this->getClient()->getConfig('base_url'), '/');
    }

    /**
     * @param  string $uri
     * @return string
     */
    public function getUrl($uri, AbstractQueryBuilder $queryBuilder = null)
    {
        return sprintf('%s/%s%s', $this->getBaseUrl(), ltrim($uri, '/'), $queryBuilder ? '?' . $queryBuilder : '');
    }

    /**
     * @return GuzzleClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param  string                     $uri
     * @param  AbstractQueryBuilder|null $queryBuilder
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function getRequest($uri, AbstractQueryBuilder $queryBuilder = null)
    {
        return $this->getClient()->get($this->getUrl($uri, $queryBuilder), [
            'headers' => $this->getHeaders()
        ]);
    }

    public function postRequest($uri, array $data = null)
    {
        return $this->getClient()->post($this->getUrl($uri), [
            'form_params' => $this->createBody($data),
            'headers' => $this->getHeaders()
        ]);
    }

    public function putRequest($uri, array $data = null)
    {
        return $this->getClient()->put($this->getUrl($uri), [
            'form_params' => $this->createBody($data),
            'headers' => $this->getHeaders()
        ]);
    }

    public function deleteRequest($uri)
    {
        return $this->getClient()->delete($this->getUrl($uri), [
            'headers' => $this->getHeaders()
        ]);
    }

    /**
     * @param  array|null $data
     * @return array
     */
    protected function createBody(array $data = null)
    {
        return $data ?: [];
    }

    protected function getHeaders()
    {
        return [
            'PRIVATE-TOKEN' => $this->token
        ];
    }
}
