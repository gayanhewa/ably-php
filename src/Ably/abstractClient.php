<?php

namespace Ably;

use GuzzleHttp\Client;

abstract class abstractClient
{

    protected $endpoint;

    protected $method;

    protected $header;

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->endpoint = 'rest.ably.io';
    }

    /**
     * @param null $path
     * @return mixed
     */
    public function getEndpoint($path = null)
    {
        if (is_null($path)) {
            return $this->endpoint;
        }else{
            return $this->endpoint.$path;
        }
    }

    /**
     * @param mixed $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }


}