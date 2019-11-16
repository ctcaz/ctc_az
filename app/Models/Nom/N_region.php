<?php

namespace App\Models\Nom;

use Illuminate\Database\Eloquent\Model;

class N_region extends Model
{
    
    public static function getRegions()
    {
           // return $this->activeOptions()[$attribute];

	    $tmp = \App\Models\Nom\N_region::selectRaw('CONCAT("<option value=\"",id,"\">", name,"</option>") as tst')
		   // ->where('region_id', '=', $region)
        ->get();

        $aasd=json_decode($tmp, JSON_UNESCAPED_UNICODE);
        $bsd=[];

        foreach($aasd as $item){
        array_push($bsd,$item['tst']);
        }
        return $bsd;
    }


//
}
