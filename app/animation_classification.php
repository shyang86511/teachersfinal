<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class animation_classification extends Model
{
    //
        protected $fillable = [
			'name'
    ];
        

    use SoftDeletes;
    protected $dates = ['deleted_at'];
}

