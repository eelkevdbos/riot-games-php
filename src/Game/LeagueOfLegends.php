<?php namespace RiotGames\Game;

use RiotGames\RiotApi;

class LeagueOfLegends {

    /**
     * @var RiotApi
     */
    protected $riot;

    public function __construct(RiotApi $riot)
    {
        $this->riot = $riot;
    }

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

    public function __get($key)
    {
        $methods = $this->getMethods();

        if (!isset($methods[$key])) {
            throw new Exception("Method {$key} could not be found");
        }

        return new $methods[$key]($this->riot);
    }
} 