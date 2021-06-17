<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ONE extends Model
{
    public $timestamps = false;
    public $fillable=
    [
        "name",
        "surname",
        "login",
        "password",
    ];

    public $hidden=
    [
        "password",
        "api_token",
    ];
}
