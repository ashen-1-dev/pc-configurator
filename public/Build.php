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
        if($key = array_search($component, $this->components));
            unset($this->components[$key]);

    }

    public function show()
    {
        return $this->components;
    }
}