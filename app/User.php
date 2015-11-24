<?php

namespace Pipboy;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Collection;
use Pipboy\Contracts\AbstractItem;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @var \Illuminate\Support\Collection
     */
    protected $items;

    public function addItem(AbstractItem $item) {
        if (is_null($this->items)) {
            $this->items = new Collection();
        }
        $this->items->push($item);
    }

    public function getHealth() {
        if (is_null($this->health)) {
            return 100;
        }
        return $this->health;
    }

    public function hasCola() {
        return !! $this->getFirstCola();
    }

    public function getFirstCola() {
        if (is_null($this->items)) return false;
        return $this->items->first(function ($i, AbstractItem $item) {
            return ! (strpos($item->getName(), 'Cola') === false);
        });
    }

    /**
     * @return bool
     */
    public function hasWeapon() {
        return !! $this->getFirstWeapon();
    }

    /**
     * @return \Pipboy\Contracts\AbstractWeapon
     */
    public function getFirstWeapon() {
        if (is_null($this->items)) return false;
        return $this->items->first(function ($i, AbstractItem $item) {
            return ! (strpos($item->getuid(), 'weapon') === false);
        });
    }
}
