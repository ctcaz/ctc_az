<?php
/*	File:	App\Models\General\Address.php
		 Ver:	1.00.003
 Purpose:	Address Model
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;
use App\Models\General\Snumber;

class Office extends Model
{
      /**
       * @var string
       */
      protected $table = 'office';

      /**
       * @var array
       */
      protected $fillable = ['id','address_id', 'contactperson_id', 'dtype', 'email', 'mainoffice', 'othercontactperson','phone'];

      /**
       * Indicates if the model should be timestamped.
       *
       * @var bool
       */
      public $timestamps = false;

      /**
      * @param $table_name
      */
			/*
      public static function getLastNumber($table_name)
      {
          $snum = Snumber::updateOrCreate(['table_name' => $table_name]);
          $snum->increment('last_number');
          return $snum->last_number;
      }
			*/

			/*
			public static function newAddress($address) {

				//addr = new Address;
				//$id = Snumber::getLastNumber(($addr)->getTable());
				//$address = ['id' => $id];
				//$naddr = Address::create($address);
				//turn $naddr->id;
			}
			*/
}
