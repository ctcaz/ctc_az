<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
       'Активна' => 'Y'
     ];

     //accessor for IS_ACTIVE
     public function getActiveAttribute($attribute)
     {
       return $this->activeOptions()[$attribute];
     }

     public function activeOptions()
     {
       return [
         'Y' => 'Активен',
         'N' => 'Деактивиран',
       ];
     }


    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function HasAnyRoles($roles)
    {
        if($this->roles()->whereIn('name', $roles)->first()){
          return true;
        }

        return false;
    }

    public function HasRole($role)
    {
        if($this->roles()->where('name', $role)->first()){
          return true;
        }

        return false;
    }

    public function IsActive()
    {
  
        if($this->active == 'Активен'){
          return true;
        }

        return false;
    }

}
