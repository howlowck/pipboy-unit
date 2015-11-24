<?php namespace Pipboy\Contracts;
abstract class AbstractItem
{
    protected $uid;
    protected $name;

    public function getUid() {
        return $this->uid;
    }

    public function getName() {
        return $this->name;
    }
}