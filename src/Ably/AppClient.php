<?php

namespace Ably;

use Ably\Contracts\GenericInterface;

class AppClient extends abstractClient implements GenericInterface
{

    /**
     *  Create an app
     *
     * @param $params
     */
    public function createApp($params)
    {
         return $this->client->post($this->getEndpoint('/apps'), ['json'=> $params]);
//        $this->client->setHeader('Content-Type', 'application/json');

    }
}