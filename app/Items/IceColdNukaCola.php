<?php namespace Pipboy\Items;

use Pipboy\Contracts\AbstractItem;

class IceColdNukaCola extends AbstractItem
{
    protected $uid = "cola-002";
    protected $name = "Ice Cold Nuka Cola";

    public function getHealingPower() {
        return 20;
    }
}