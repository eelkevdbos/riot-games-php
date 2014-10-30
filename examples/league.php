<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$league = RiotGames\RiotApi::game('LeagueOfLegends');

var_dump($league);