<?php
/*	File:	App\Models\General\Snumber.php
		 Ver:	1.00.003
 Purpose:	S_Numbers Model
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use DB;

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
          //$snum->last_number = DB::table($table_name)->max(id)+1;
          return $snum->last_number;
      }

}
