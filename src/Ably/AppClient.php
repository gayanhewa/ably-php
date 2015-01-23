<?php

namespace Ably;

use Ably\Contracts\GenericInterface;
use SebastianBergmann\Exporter\Exception;

class AppClient extends abstractClient implements GenericInterface
{

    /**
     *  Create an app
     *
     * @param $params
     * @return \GuzzleHttp\Message\FutureResponse|\GuzzleHttp\Message\ResponseInterface|\GuzzleHttp\Ring\Future\FutureInterface|mixed|null
     */
    public function createApp($params)
    {
        $response = $this->client->post($this->getEndpoint('apps'), [ 'body' => $params ]);
        return $response;
    }

}