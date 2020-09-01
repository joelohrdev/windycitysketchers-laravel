<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name', 'nickname', 'avatar', 'facebook', 'instagram', 'twitter', 'website',
    ];
}
