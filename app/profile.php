<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class profile extends Model
{
    use SoftDeletes;

    protected $fillable =
        [
            'name',
            'phone',
            'email',
            'email_verified_at',
            'address',
            'image',
            'custom_id'
        ];
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->custom_id = IdGenerator::generate(['table' => 'profiles','field'=>'custom_id','length' => 10, 'prefix' =>'Comp-']);
        });
    }
}
