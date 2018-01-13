<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class animation_information extends Model
{
    //
    protected $fillable = [
        'name',
        'classification',
        'Original_author',
        'Manufacturer'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function class()
    {
        return $this->belongsTo('App\animation_classification');
    }
}
