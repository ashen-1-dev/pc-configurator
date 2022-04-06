<?php

use Illuminate\Support\Collection;

/**
 * @property Collection $components
*/
interface IBuild
{
    public function add(Component $component);
    public function remove(Component $component);
    public function show();

}