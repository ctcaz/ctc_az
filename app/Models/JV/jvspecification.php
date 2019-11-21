<?php

namespace App\Models\JV;

use Illuminate\Database\Eloquent\Model;
use App\Models\Nom\N_profession;

class jvspecification extends Model
{
    protected $table = 'jvspecification';

    protected $guarded = [];

    public $timestamps = false;

    public function N_profession()
    {
        //return $this->morphOne(person::class, 'personable');
        return $this->belongsTo(N_profession::class, 'JVSPCFCATIONPRFSSONSPECIALTYID', 'professionspecialty_id');
    }
}
