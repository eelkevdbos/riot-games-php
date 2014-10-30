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
    public function __constuct(RiotApi $riot)
    {
        $this->riot = $riot;
    }

    public function __get($key)
    {
        $methods = $this->getMethods();

        if (!isset($methods[$key])) {
            throw new Exception("Method {$key} could not be found");
        }

        return new $methods[$key]($this->riot);
    }

    abstract function getMethods();

} 