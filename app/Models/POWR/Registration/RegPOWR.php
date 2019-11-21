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
use App\Models\General\person;
use App\Models\General\legalentity;
use App\Models\Agency\recruitmentagencyprototype;
use App\Models\Agency\rap_territorialscope;

class RegPOWR extends Model
{
    protected $table = 'registrationrequest';

    protected $guarded = [];

    public $timestamps = false;
    public function person()
    {
        //return $this->morphOne(person::class, 'personable');
        return $this->belongsTo(person::class, 'REGISTRATIONREQUESTAPPLICANTID', 'applicant_id');
    }

    public function scopeAgency($agency)
    {
      return $agency->where('state', 'Получено ID ПОВР');
    }

    public function getPerson()
    {
      $name = '';
      if ($this->applicant_id > 0) {
        $person = person::find($this->applicant_id);
        $name = $person->familyname;
      }
      return $name;
    }

    public function getCompanyName()
    {
      $name = '';
      if ($this->recruitmentagency_id > 0) {
        $agency = recruitmentagencyprototype::find($this->recruitmentagency_id);
        if ($agency->legalentity_id > 0) {
          $entity = legalentity::find($agency->legalentity_id);
          if ($entity->id > 0) {
            $name = $entity->name;
          }
        }
      }
      return $name;
    }

    public function getCompanyUIC()
    {
      $uic = '';
      if ($this->recruitmentagency_id > 0) {
        $agency = recruitmentagencyprototype::find($this->recruitmentagency_id);
        if ($agency->legalentity_id > 0) {
          $entity = legalentity::find($agency->legalentity_id);
          if ($entity->id > 0) {
            $uic = $entity->uic;
          }
        }
      }
      return $uic;
    }
}
