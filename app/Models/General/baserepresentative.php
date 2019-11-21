<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class baserepresentative extends Model
{
    protected $table = 'baserepresentative';

    protected $guarded = [];

    public $timestamps = false;

    public function recruitmentagencyprototype()
    {
        return $this->belongsToMany('App\Models\Agency\recruitmentagencyprototype', 'rap_baserepresentative', 'representatives_id', 'recruitmentagencyprototype_id');
    }
}
