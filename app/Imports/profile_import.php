<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;

class profile_import implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $key=>$value){
            if($key>0){
                DB::table('profiles')->insert([
                    'name'=>$value[0],
                    'phone'=>$value[1],
                    'email'=>$value[2],
                    'email_verified_at'=>$value[3],
                    'address'=>$value[4],
                    'image'=>$value[5]
                ]);
            }
        }
    }
}
