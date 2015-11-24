<?php namespace Pipboy\Support;

class HitRandomizer
{
    function hit() {
        return !! rand(0,1);
    }
}