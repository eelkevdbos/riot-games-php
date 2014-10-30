<?php namespace RiotGames; 

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Message\RequestInterface;
use RiotGames\Config\IsConfigurableInterface;
use RiotGames\Config\IsConfigurableTrait;
use RiotGames\Request\HasRequestClientInterface;
use RiotGames\Request\HasRequestClientTrait;

class RiotApi implements HasRequestClientInterface, IsConfigurableInterface {

    use HasRequestClientTrait, IsConfigurableTrait;

    static $requestClient;
    static $requestClientResolver;

    const BASE_URL = 'https://{region}.api.pvp.net/';

    public function __construct(ClientInterface $client, $config = array())
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

    public static function game($game)
    {
        $gameFqn = 'RiotGames\\Game\\' . $game;

        if (!class_exists($gameFqn)) {
            new \Exception("Game {$game} could not be found");
        }

        return new $gameFqn(static::resolveRequestClient());
    }

    public static function resolveRequestClient()
    {
        if (is_null(static::$requestClient)) {
            static::$requestClient = call_user_func(static::$requestClientResolver);
        }
        return static::$requestClient;
    }

} 