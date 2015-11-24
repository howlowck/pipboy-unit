<?php namespace Pipboy\Support;

class EfficiencyCalculator
{
    protected $userLevel;
    protected $enemyLevel;

    function constructor ($userLevel = 1, $enemyLevel = 1) {
        $this->userLevel = (int) $userLevel;
        $this->enemyLevel = (int) $enemyLevel;
    }

    public function getMultiplier() {
        if ($this->userLevel === $this->enemyLevel) {
            return 1;
        }

        if ($this->userLevel > $this->enemyLevel) {
            return 1.5;
        }

        return 0.5;
    }
}