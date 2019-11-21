<?php

namespace App\Models\Agency;

use Illuminate\Database\Eloquent\Relations\Pivot;

class rap_office extends Pivot
{
    protected $table = 'rap_office';

    protected $guarded = [];

    public $timestamps = false;
}
