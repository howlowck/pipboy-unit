<?php

use Mockery as m;

class PipboyHealthDisplayTest extends PHPUnit_Framework_TestCase
{
//    public function tearDown()
//    {
//        parent::tearDown();
//        m::close();
//    }

    public function testDisplaySimple()
    {
        $user = new \Pipboy\User();
        $display = new \Pipboy\Displays\HealthStatus($user);
        $this->assertEquals('You look so good!', $display->getText());
    }

//    public function testDisplayRestAdviceWhenHealthLow()
//    {
//        $user = new \Pipboy\User();
//        $user->health = 95;
//        $display = new \Pipboy\Displays\HealthStatus($user);
//        $this->assertStringEndsWith('rest a little.', $display->getText());
//    }


    public function xtestDisplayFindMedsBelow30Health() // <-- Don't forget to remove the x to enable the test
    {
        /**
         * TODO: Exercise 1 part A
         */
    }

    public function xtestDisplayDeadMessageAtZeroHealth() // <-- Don't forget to remove the x to enable the test
    {
        /**
         * TODO: Exercise 1 part B
         */
    }

    /**
     * TODO: Exercise 1 Extra Credit
     */
    public function xtestRangeExceptionThrownWithNegativeHealth() // <-- Don't forget to remove the x to enable the test
    {

    }

/** ===============================================
 *                   Part 2
 * ============================================= */


//    public function testNukaColaAdviceWhenIn3090Range()
//    {
//        $user = new \Pipboy\User();
//        $user->addItem(new \Pipboy\Items\NukaCola());
//        $user->health = 50;
//        $display = new \Pipboy\Displays\HealthStatus($user);
//        $this->assertEquals('You should drink your Nuka Cola, and heal 10 points.', $display->getText());
//    }
//
//    public function testNukaColaAdviceWhenIn3090RangeMockUser()
//    {
//        $user = m::mock('\Pipboy\User');
//        $item = m::mock('\Pipboy\Contracts\AbstractItem');
//
//        $user->shouldReceive('getHealth')->andReturn(50);
//        $user->shouldReceive('hasCola')->andReturn(true);
//        $user->shouldReceive('getFirstCola')->once()->andReturn($item);
//        $item->shouldReceive('getName')->once()->andReturn('Ice Cold Nuka Cola');
//        $item->shouldReceive('getHealingPower')->once()->andReturn(20);
//
//        $display = new \Pipboy\Displays\HealthStatus($user);
//        $this->assertEquals('You should drink your Ice Cold Nuka Cola, and heal 20 points.', $display->getText());
//    }
}
