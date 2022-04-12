<?php

class IntelFactory implements IComponentFactory
{
    public function createCPU()
    {
        return new IntelCPU();
    }

    public function createGPU()
    {
        return new IntelGPU();
    }
}