<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class zzz extends Model
{
    use SoftDeletes;

    protected $fillable =
        [
            'name',
            'phone',
            'email',
            'email_verified_at',
            'address',
            'image'
        ];
    }
