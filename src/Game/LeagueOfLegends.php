<?php namespace RiotGames\Game;

use RiotGames\Game\LeagueOfLegends\Game;

class LeagueOfLegends extends Game {

    public function getMethods()
    {
        $FQN = get_class($this);

        return array(
            'champion' => $FQN . '\\Champion',
            'game' => $FQN . '\\Game',
            'league' => $FQN . '\\League',
            'lolstaticdata' => $FQN . '\\LolStaticData',
            'lolstatus' => $FQN . '\\LolStatus',
            'match' => $FQN . '\\Match',
            'matchhistory' => $FQN . '\\MatchHistory',
            'stats' => $FQN . '\\Stats',
            'summoner' => $FQN . '\\Summoner',
            'team' => $FQN . '\\Team'
        );
    }

    public function __get($key)
    {
        $methods = $this->getMethods();

        if (!isset($methods[$key])) {
            throw new \Exception("Method {$key} could not be found");
        }

        return new $methods[$key]($this->riot);
    }

} 