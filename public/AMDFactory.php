<?php

class AMDFactory implements IComponentFactory
{
    public function createCPU()
    {
        return new AMDCPU();
    }
}