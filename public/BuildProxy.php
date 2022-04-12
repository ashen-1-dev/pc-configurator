<?php

class BuildProxy implements IBuild
{
    private $build;
    private $buildCache;
    private bool $needReset;

    public function __construct()
    {
        $this->build = null;
        $this->needReset = false;
    }

    public function add(Component $component)
    {
        if($this->build == null)
            $this->build = new Build();
        $this->buildCache[] = $component;
        return $this->build->add($component);

    }

    public function remove(Component $component)
    {
        if($this->build == null)
            $this->build = new Build();
        $this->needReset = true;
        return $this->build->remove($component);
    }

    public function show()
    {
        if($this->build == null)
            $this->build = new Build();

        if(!$this->needReset) {
            echo 'Использовались данные с кэша';
            return $this->buildCache;
        }
        echo 'Использовались данные без кэша';
        return $this->build->show();
    }
}