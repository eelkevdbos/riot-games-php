<?php namespace RiotGames\Config; 

trait IsConfigurableTrait {

    protected $configuration;

    public function getOption($key, $defaultValue = null)
    {
        if (isset($this->configuration[$key])) {
            return $this->configuration[$key];
        }
        return $defaultValue;
    }

    public function setOption($key, $value)
    {
        $this->configuration[$key] = $value;
        return $this;
    }

    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

    public function getConfiguration()
    {
        return $this->configuration;
    }

} 