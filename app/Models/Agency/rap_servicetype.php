<?php

namespace App\Models\Agency;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agency\recruitmentagencyprototype;

class rap_servicetype extends Model
{
    protected $table = 'rap_servicetype';

    protected $guarded = [];

    public $timestamps = false;

    public function recruitmentagencyprototype()
    {
        return $this->belongsTo(recruitmentagencyprototype::class, 'RPSRVCTYPRCRTMNTGNCYPRTOTYPEID', 'recruitmentagencyprototype_id');
    }

}
