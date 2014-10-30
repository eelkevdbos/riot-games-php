<?php namespace RiotGames; 

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Message\RequestInterface;
use RiotGames\Config\IsConfigurableInterface;
use RiotGames\Config\IsConfigurableTrait;
use RiotGames\Request\HasRequestClientInterface;
use RiotGames\Request\HasRequestClientTrait;

class RiotApi implements HasRequestClientInterface, IsConfigurableInterface {

    use HasRequestClientTrait, IsConfigurableTrait;

    protected $game;

    public function __construct(ClientInterface $client, $config)
    {
        $this->setRequestClient($client);
        $this->setConfiguration($config);
    }

    public function createRequest($method, $url = null, $options = array())
    {
        return $this->getRequestClient()->createRequest($method, $url, $options);
    }

    public function sendRequest(RequestInterface $request)
    {
        return $this->getRequestClient()->send($request);
    }

} 