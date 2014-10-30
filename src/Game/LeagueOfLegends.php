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
            'lol-static-data' => $FQN . '\\LolStaticData',
            'lol-status' => $FQN . '\\LolStatus',
            'match' => $FQN . '\\Match',
            'matchhistory' => $FQN . '\\MatchHistory',
            'stats' => $FQN . '\\Stats',
            'summoner' => $FQN . '\\Summoner',
            'team' => $FQN . '\\Team'
        );
    }

} 