<?php namespace Pipboy\Contracts;

abstract class AbstractWeapon extends AbstractItem
{
    abstract public function getDamage();
    abstract public function getKillingPower() ;
}