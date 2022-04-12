<?php


abstract class Component
{
    public $name;
}

class CPU extends Component {
    public $cores;
    public $threds;
}

class Videocard extends Component
{
    public $memory_size;
}

abstract class ComponentCreator
{
    abstract public function create();
}

class VideocardCreator extends ComponentCreator
{
    public function create()
    {
        return new Videocard();
    }
}

class CPUCreator extends ComponentCreator
{
    public function create()
    {
        return new CPU();
    }
}


$videocard_creator = new VideocardCreator();
$videocard = $videocard_creator->create();
$videocard->name = 'RTX 3060 Ti';
$videocard->size = 12;
echo '<pre>' . var_export($videocard, true) . '</pre>';

$cpu_creator = new CPUCreator();
$cpu = $cpu_creator->create();
$cpu->name = 'RTX 3060 Ti';
$cpu->cores = 6;
$cpu->threds = 12;
echo '<pre>' . var_export($cpu, true) . '</pre>';
