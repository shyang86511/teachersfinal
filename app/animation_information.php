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
        'animation_classification_id',
        'Original_author',
        'Manufacturer',
        'url'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function animation_classification()
    {
        return $this->belongsTo('App\animation_classification');
    }
}
