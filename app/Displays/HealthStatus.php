<?php namespace Pipboy\Displays;

use Pipboy\Contracts\DisplayInterface;
use Pipboy\User;

class HealthStatus implements DisplayInterface
{
    protected $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    protected function getHealth()
    {
        return (int) $this->user->getHealth();
    }

    public function getText()
    {
        $health = $this->getHealth();

        /**
         * TODO: Exercise 1 Extra Credit
         */

        if ( $health < 100 and $health > 90 ) {
            return 'Uh oh... you might want to rest a little.';
        }

//        if ( $health <= 90 and $health > 30 ) {
//            return $this->getColaAdvice();
//        }

        /**
         * TODO: Exercise 1 Part A and B
         */

        return 'You look so good!';
    }

//    protected function getColaAdvice(){
//        if ( ! $this->user->hasCola()) {
//            return 'You should find some Nuka Cola';
//        }
//        $cola = $this->user->getFirstCola();
//        $productName = $cola->getName();
//        $healing = $cola->getHealingPower();
//        return "You should drink your $productName, and heal $healing points.";
//    }
}