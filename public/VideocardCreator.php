<?php
namespace test;
use test\ComponentCreator as Creator;


class VideocardCreator extends Creator
{

    public function create(): Videocard
    {
        return new Videocard();
    }
}
