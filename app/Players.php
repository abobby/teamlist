<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable = [
        'team_id', 'firstName', 'lastName', 'email', 'profileimage',
    ];


    protected $hidden = [
        
    ];
    
}
