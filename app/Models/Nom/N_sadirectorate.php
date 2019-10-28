<?php
/*
		File:	App\Models\Nom\N_sadirectorate.php
		 Ver:	1.00.003
 Purpose:	SA Directorate Model
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Models\Nom;

use Illuminate\Database\Eloquent\Model;
use App\Models\General\Snumber;

class N_sadirectorate extends Model
{
    protected $table = 'n_sa_directorates';
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

    public function scopeInactive($query)
    {
      return $query->where('is_active', 'N');
    }

}
