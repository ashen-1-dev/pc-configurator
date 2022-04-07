<?php

class Build
{

    /**
     * @var BuildState $build_state
     */
    private $build_state;
    private $components;

    public function __construct()
    {
        $this->components = [];
        $this->setState(new NotReadyState($this));
    }

    public function setState($build_state) {
        $this->build_state = $build_state;
    }

    public function isCompatible() {
        $main_components = ['cpu', 'videocard', 'motherboard'];
        foreach ($this->components as $component) {
            if (($key = array_search($component->type, $main_components)) !== false) {
                unset($main_components[$key]);
            }
        }
        return !count($main_components) > 0;
    }
    public function changeState() {
        if($this->isCompatible())
            $this->setState(new ReadyState($this));
        else
        $this->setState(new NotReadyState($this));
    }

    public function save() {
        $this->changeState();
        return $this->build_state->save();
    }

    public function add($component) {
        array_push($this->components, $component);
    }

}