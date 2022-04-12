<?php

class AMDFactory implements IComponentFactory
{
    public function createCPU()
    {
        return new AMDCPU();
    }

    public function createGPU()
    {
        return new AMDGPU();
    }
}