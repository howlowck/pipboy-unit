<?php namespace Pipboy\Displays;

use Pipboy\Contracts\DisplayInterface;
use Pipboy\User;

class CombatStatus implements DisplayInterface
{
    protected $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getText()
    {
        if (! $this->user->hasWeapon()) {
            return 'You better run!';
        }

        $weapon = $this->user->getFirstWeapon();

        /**
         * For Exercise 2
         */

    }
}