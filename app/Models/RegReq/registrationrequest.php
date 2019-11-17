<?php

namespace App\Models\RegReq;

use Illuminate\Database\Eloquent\Model;
use App\Models\General\person;
use App\Models\General\legalentity;
use App\Models\Agency\recruitmentagencyprototype;
use App\Models\Agency\rap_territorialscope;
use App\Models\RegReq\request_type;
use App\Models\Nom\N_company_type;

class registrationrequest extends Model
{
    protected $table = 'registrationrequest';

    protected $guarded = [];

    public $timestamps = false;

    public function person()
    {
        //return $this->morphOne(person::class, 'personable');
        return $this->belongsTo(person::class, 'REGISTRATIONREQUESTAPPLICANTID', 'applicant_id');
    }

    public function recruitmentagencyprototype()
    {
        //return $this->morphOne(person::class, 'personable');
        return $this->belongsTo(recruitmentagencyprototype::class, 'RGSTRTONREQUESTRCRTMNTAGENCYID', 'recruitmentagency_id');
    }


    public function scopeAgency($agency)
    {
      $type = request_type::where('request_type','LIKE','ЧТП')->get()->pluck('request_id');
      //dump($type);
      return $agency->whereIn('id', $type)->paginate(5);
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

    public function scopeFilter($query, $filters)
      {

        if( isset($filters->status) ){
          $query->where('status', '=', $filters->status);
        }

        if ( isset($filters->name) && trim($filters->input('name')) !== '' )
        {
          $legalentity = legalentity::query();
          $legalentity = $legalentity->where('name', 'LIKE', '%' . trim($filters->input('name')) . '%');
          $legalentity = $legalentity->get()->pluck('id');
          $agency = recruitmentagencyprototype::whereIn('legalentity_id', $legalentity)->get()->pluck('id');
          $query->whereIn('recruitmentagency_id', $agency)->get();
        }
        //dump($agency);

        return $query;

      }

    public function getCompanyName()
    {
      $name = '';
      if ($this->recruitmentagency_id > 0) {
        $agency = recruitmentagencyprototype::find($this->recruitmentagency_id);
        if ($agency->legalentity_id > 0) {
          $entity = legalentity::find($agency->legalentity_id);
          if ($entity->id > 0) {
            $type = N_company_type::find($entity->type_id);
            //dump($type->name);
            $name = $entity->name. ' ' .$type->name;
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
