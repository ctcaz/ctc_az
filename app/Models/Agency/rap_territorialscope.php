<?php

namespace App\Models\Agency;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agency\recruitmentagencyprototype;

class rap_territorialscope extends Model
{
  protected $table = 'rap_territorialscope';

  protected $guarded = [];

  public $timestamps = false;

  public function recruitmentagencyprototype()
  {
      return $this->belongsTo(recruitmentagencyprototype::class, 'RPTRRTRLSCPRCRTMNTGNCYPRTTYPID', 'recruitmentagencyprototype_id');
  }

}
