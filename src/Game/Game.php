<?php namespace RiotGames\Game; 

use RiotGames\RiotApi;

abstract class Game {

    /**
     * @var RiotApi
     */
    protected $riot;

    /**
     * @param RiotApi $riot
     */
    public function __construct(RiotApi $riot)
    {
        $this->riot = $riot;
    }

    abstract function getMethods();

} 