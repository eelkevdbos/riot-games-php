<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

//injection of the request client
RiotGames\RiotApi::setRequestClientResolver(function() {

   return new GuzzleHttp\Client(array(
       'base_url' => RiotGames\RiotApi::BASE_URL
   ));

});

$league = RiotGames\RiotApi::game('LeagueOfLegends');

//list of champions
$champions = $league->champion->all();

//specific champion
$champion = $league->champion->findById(123);

//more to come