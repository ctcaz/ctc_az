<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use App\Models\RegReq\registrationrequest;

class person extends Model
{
    protected $table = 'person';

    protected $guarded = [];

    public $timestamps = false;

}
