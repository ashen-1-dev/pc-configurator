<?php

class BuildProxy implements IBuild
{
    private $build;

    public function __construct()
    {
        $this->build = null;
    }

    public function add(Component $component)
    {
        if($this->build == null)
            $this->build = new Build();
        return $this->build->add($component);
    }

    public function remove(Component $component)
    {
        if($this->build == null)
            $this->build = new Build();
        return $this->build->remove($component);
    }

    public function show()
    {
        if($this->build == null)
            $this->build = new Build();
        return $this->build->show();
    }
}