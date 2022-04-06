<?php

abstract class CPU
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  mixed  $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
    private $core_clock_speed;
    private $cores;
    private $threads;

    /**
     * @return mixed
     */
    public function getCoreClockSpeed()
    {
        return $this->core_clock_speed;
    }

    /**
     * @param  mixed  $core_clock_speed
     */
    public function setCoreClockSpeed($core_clock_speed): void
    {
        $this->core_clock_speed = $core_clock_speed;
    }

    /**
     * @return mixed
     */
    public function getCores()
    {
        return $this->cores;
    }

    /**
     * @param  mixed  $cores
     */
    public function setCores($cores): void
    {
        $this->cores = $cores;
    }

    /**
     * @return mixed
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * @param  mixed  $threads
     */
    public function setThreads($threads): void
    {
        $this->threads = $threads;
    }
}
