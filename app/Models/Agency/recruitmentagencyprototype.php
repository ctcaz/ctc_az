<?php

namespace App\Models\Agency;

use Illuminate\Database\Eloquent\Model;


class recruitmentagencyprototype extends Model

{
    protected $table = 'recruitmentagencyprototype';

    protected $guarded = [];

    public $timestamps = false;

    public function rap_territorialscope()
    {
        //return $this->morphOne(person::class, 'personable');
        return $this->hasOne(rap_territorialscope::class);
    }

    public function rap_servicetype()
    {
        //return $this->morphOne(person::class, 'personable');
        return $this->hasOne(rap_servicetype::class);
    }

    public function baserepresentative()
    {
        return $this->belongsToMany('App\Models\General\baserepresentative', 'rap_baserepresentative', 'recruitmentagencyprototype_id', 'representatives_id');
    }

    public function office()
    {
        return $this->belongsToMany('App\Models\General\office', 'rap_office', 'recruitmentagencyprototype_id', 'offices_id');
    }

}
