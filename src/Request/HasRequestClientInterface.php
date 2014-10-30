<?php namespace RiotGames\Request; 

use GuzzleHttp\ClientInterface;

interface HasRequestClientInterface {

    public function setRequestClient(ClientInterface $client);

    public function getRequestClient();

} 