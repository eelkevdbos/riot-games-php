<?php namespace RiotGames\Game\LeagueOfLegends; 

use RiotGames\RiotApi;

class Method {

    /**
     * @var RiotApi
     */
    protected $riot;

    public function __construct(RiotApi $riot)
    {
        $this->riot = $riot;
    }

} 