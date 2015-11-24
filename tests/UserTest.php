<?php

class UserTest extends PHPUnit_Framework_TestCase
{
    public function testUserSuccessfullyGetFirstColaIfExists() {
        $user = new \Pipboy\User();
        $user->health = 80;
        $user->addItem(new \Pipboy\Items\NukaCola());
        $user->addItem(new \Pipboy\Items\IceColdNukaCola());
        $this->assertTrue($user->hasCola());
    }
}