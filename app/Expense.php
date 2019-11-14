<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = ['title','sum','description','purse_id','user_id','category_id'];

    public function user(){

        return $this->BelongsTo('App\User');
    }

    public function purse(){

        return $this->BelongsTo('App\Purse');
    }

    public function category()
    {
        return $this->BelongsTo('App\Category');
    }
}
