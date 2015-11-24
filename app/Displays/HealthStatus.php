<?php namespace Pipboy\Displays;

use Pipboy\Contracts\DisplayInterface;
use Pipboy\User;

class HealthStatus implements DisplayInterface
{
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
        return 'You look so good!';
    }
}