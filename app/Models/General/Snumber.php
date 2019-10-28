<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Snumber extends Model
{
      /**
       * @var string
       */
      protected $table = 's_numbers';

      /**
       * @var array
       */
      protected $fillable = ['table_name', 'description', 'last_number'];

      /**
       * Indicates if the model should be timestamped.
       *
       * @var bool
       */
      public $timestamps = false;

      /**
      * @param $table_name
      */
      public static function getLastNumber($table_name)
      {
          $snum = Snumber::updateOrCreate(['table_name' => $table_name]);
          $snum->increment('last_number');
          return $snum->last_number;
      }

}
