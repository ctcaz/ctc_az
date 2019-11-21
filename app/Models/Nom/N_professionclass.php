<?php
/*
		File:	App\Models\Nom\N_professionclass.php
		 Ver:	1.00.003
 Purpose:	Profession class Model
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Models\Nom;

use Illuminate\Database\Eloquent\Model;
use App\Models\General\Snumber;

class N_professionclass extends Model
{
    protected $table = 'n_profession_classes';

    //accessor for IS_ACTIVE
    public function getIsactiveAttribute($attribute)
    {
      return $this->activeOptions()[$attribute];
    }

    public function activeOptions()
    {
      return [
        'Y' => 'Активна',
        'N' => 'Неактивна',
      ];
    }

    //public $timestamps = false;
    const CREATED_AT = 'created_on';
    const UPDATED_AT = 'updated_on';

    protected $guarded = [];

    public function scopeActive($query)
    {
      return $query->where('is_active', 'Y');
    }

    public function scopeLvl1($query)
    {
      return $query->where('lvl', 1);
    }

    public function scopeLvl2($query)
    {
      return $query->where('lvl', 2);
    }

    public function scopeLvl3($query)
    {
      return $query->where('lvl', 3);
    }

    public function scopeInactive($query)
    {
      return $query->where('is_active', 'N');
    }


}
