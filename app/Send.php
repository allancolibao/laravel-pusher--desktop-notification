<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    public $table = 'sends';

    public $fillable = ['name','username','team','subteam','subject','message' ];
}
