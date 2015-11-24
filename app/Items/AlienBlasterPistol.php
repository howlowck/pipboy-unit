<?php namespace Pipboy\Items;

use Pipboy\Contracts\AbstractWeapon;
use Pipboy\Support\EfficiencyCalculator;
use Pipboy\Support\HitRandomizer;

class AlienBlasterPistol extends AbstractWeapon
{
    protected $uid = "weapon-001";
    protected $name = "Alien Blaster Pistol";
    protected $efficiency;
    protected $hitRandomizer;

    function constructor(EfficiencyCalculator $efficiencyCalculator, HitRandomizer $hitRandomizer) {
        $this->efficiency = $efficiencyCalculator;
        $this->hitRandomizer = $hitRandomizer;
    }

    public function getKillingPower() {
        return 30;
    }

    public function getDamage() {
        if ($this->hitRandomizer->hit()) {
            return $this->getMissed();
        }
        return $this->efficiency->getMultiplier() * $this->getKillingPower();
    }

    protected function getMissed() {
        return 0;
    }
}