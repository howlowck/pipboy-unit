<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PipboyDisplayTest extends PHPUnit_Framework_TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testDisplaySimple()
    {
        $user = new \Pipboy\User();
        $user->health = 100;
        $display = new \Pipboy\Displays\HealthStatus($user);
        $this->assertEquals('You look so good!', $display->getText());
    }
}
