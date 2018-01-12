<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class animation_informations extends Model
{
    //
    protected $fillable = [
        'classification',
        'Original_author',
        'Manufacturer'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
