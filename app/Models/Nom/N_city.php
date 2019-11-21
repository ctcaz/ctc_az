<?php

namespace App\Models\Nom;

use Illuminate\Database\Eloquent\Model;

class N_city extends Model
{
      public static function getCity()
    {
           // return $this->activeOptions()[$attribute];

            $tmp = \App\Models\Nom\N_city::selectRaw('CONCAT(muni_id,"<option value=\"",id,"\">", name,"</option>") as tst')
                    ->whereNull('parent_id')
        ->get();

        $aasd=json_decode($tmp, JSON_UNESCAPED_UNICODE);
        $bsd=[];

        foreach($aasd as $item){
        array_push($bsd,$item['tst']);
        }
        return $bsd;
      }


 public static function getCityWithParent()
    {
           // return $this->activeOptions()[$attribute];

            $tmp = \App\Models\Nom\N_city::selectRaw('CONCAT(parent_id,"<option value=\"",id,"\">", name,"</option>") as tst')
                    ->whereNotNull('parent_id')
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
