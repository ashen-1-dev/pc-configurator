<?php

class Build implements IBuild
{

    private $components;

    public function __construct()
    {
        $this->components = [];
    }

    public function add(Component $component)
    {
        array_push($this->components, $component);
    }

    public function remove(Component $component)
    {
        if(in_array($component, $this->components));
            array_diff($this->components, [$component]);

    }

    public function show()
    {
        return $this->components;
    }
}