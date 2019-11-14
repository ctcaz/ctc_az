<?php

namespace App\Models\Agency;

use Illuminate\Database\Eloquent\Relations\Pivot;

class rap_baserepresentative extends Pivot
{
    protected $table = 'rap_baserepresentative';

    protected $guarded = [];

    public $timestamps = false;

}
