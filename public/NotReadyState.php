<?php

class NotReadyState extends BuildState
{
    function save()
    {
        return "Build is not ready";
    }
}