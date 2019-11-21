<?php
/*
		File:	App\Models\Nom\RegPOWR.php
		 Ver:	1.00.003
 Purpose:	Registration POWR Model
Author/s:	Christopher Georgiev
 Created:	2019-10-07
	Modify:	2019-10-26
*/

namespace App\Models\POWR\Registration;

use Illuminate\Database\Eloquent\Model;
use App\Models\General\Snumber;

class RegPOWR extends Model
{
    protected $table = 'registrationrequest';

    protected $guarded = [];

    public $timestamps = false;
}
