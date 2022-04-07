<?php

abstract class BuildState
{
    /**
     * @var Build $build
    */
    private $build;

    public function __construct($build)
    {
        $this->build = $build;
    }

    abstract function save();

    function getBuild() {
        return $this->build;
    }
}