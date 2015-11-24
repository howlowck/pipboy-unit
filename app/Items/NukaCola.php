<?php namespace Pipboy\Items;

use Pipboy\Contracts\AbstractItem;

class NukaCola extends AbstractItem
{
    protected $uid = "cola-001";
    protected $name = "Nuka Cola";

    public function getHealingPower() {
        return 10;
    }
}