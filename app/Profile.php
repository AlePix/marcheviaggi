<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Use_;
use Illuminate\Foundation\Auth\User;

class Profile extends Model
{
    protected $guarded =[];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
