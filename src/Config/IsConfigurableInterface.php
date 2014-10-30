<?php namespace RiotGames\Config;

interface IsConfigurableInterface {

    public function setOption($key, $value);

    public function getOption($key);

    public function setConfiguration($config);

    public function getConfiguration();

} 