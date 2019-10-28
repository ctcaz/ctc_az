<?php

namespace App\Models\Nom;

use Illuminate\Database\Eloquent\Model;

class N_country extends Model
{
    //protected $attributes = [
    //  'Активна' => 'Y'
    //];

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
      return $query->where('is_active', 'Y')->orderBy('name');
    }

    public function scopeInactive($query)
    {
      return $query->where('is_active', 'N');
    }

}
