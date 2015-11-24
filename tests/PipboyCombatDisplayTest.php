<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PipboyCombatDisplayTest extends PHPUnit_Framework_TestCase
{

    public function testDisplaySimple()
    {
        $user = new \Pipboy\User();
        $display = new \Pipboy\Displays\CombatStatus($user);
        $this->assertEquals('You better run!', $display->getText());
    }

    public function xtestDisplayDamageIfHitEnemy() // <-- Don't forget to remove the x to enable the test
    {
        /**
         * Exercise 2 Part B
         */
    }

    public function xtestDisplayMessageIfMissed() // <-- Don't forget to remove the x to enable the test
    {
        /**
         * Exercise 2 Part B
         */
    }

}
