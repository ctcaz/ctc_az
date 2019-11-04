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

}
