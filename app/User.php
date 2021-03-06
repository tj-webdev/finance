<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;



    public function purses(){

        return $this->hasMany('App\Purse');
    }

    public function expenses(){

        return $this->hasMany('App\Expense');
    }

    public function incomes(){

        return $this->hasMany('App\Income');
    }

    public function categories(){

        return $this->hasMany('App\Category');
    }


    public function debts(){

        return $this->hasMany('App\Debt');
    }





    protected $fillable = [
        'name', 'email', 'password',
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
}
