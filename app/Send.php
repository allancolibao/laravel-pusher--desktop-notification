<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    public $table = 'sends';

    public $fillable = [
        'name',
        'username',
        'email',
        'team',
        'subteam',
        'subject',
        'eacode',
        'area_name',
        'type',
        'user_message', 
        'file_count', 
    ];
}
