<?php

namespace App\Models\RegReq;

use Illuminate\Database\Eloquent\Model;
use App\Models\General\person;

class registrationrequest extends Model
{
    protected $table = 'registrationrequest';

    protected $guarded = [];

    public $timestamps = false;

    public function person()
    {
        return $this->morphOne(person::class, 'personable');
    }

    public function scopeAgency($agency)
    {
      return $agency->where('status', 'Получено ID ЧТП');
    }

}
