<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class animation_classification extends Model
{
    //
        protected $fillable = [
			'id',
			'name'
    ];
        

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}

