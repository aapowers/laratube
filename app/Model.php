<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Str;

/**
 * Override of the Model class so we can have a uuid as the primary key
 * Class Model
 * @package App
 */
class Model extends BaseModel
{
    // disallow auto-increment id so we can have a uuid instead
    public $incrementing = false;

    // allow mass assignment
    protected $guarded = [];

    /**
     * override the boot function so we can have a uuid as the primary key
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }
}
