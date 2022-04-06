<?php

class IntelFactory implements IComponentFactory
{
    public function createCPU()
    {
        return new IntelCPU();
    }
}