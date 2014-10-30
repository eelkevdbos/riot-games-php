<?php namespace RiotGames\Request;

use GuzzleHttp\ClientInterface;

trait HasRequestClientTrait {

    /**
     * @var ClientInterface
     */
    protected $requestClient;

    /**
     * @param ClientInterface $client
     * @return $this
     */
    public function setRequestClient(ClientInterface $client)
    {
        $this->requestClient = $client;
        return $this;
    }

    /**
     * @return ClientInterface
     */
    public function getRequestClient()
    {
        return $this->requestClient;
    }

} 