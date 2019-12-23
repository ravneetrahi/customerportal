<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function convertSuitCrmObject($case,$type)
    {
        if($type=='case'){
            $caseArray  = array();
            $i=0;
            foreach($case['name_value_list'] as $key=>$name_value){
                $name               = $name_value['name'];
                $caseArray[$name]   = $name_value['value'];
            }
            return $caseArray;
        }else{
             $relationArray  = array();
                if(count($case['relationship_list'])>0){
                        foreach($case['relationship_list'] as $k=>$relation){
                        $relationData  = current($relation);
                        
                        if(isset($relationData['records'])){
                            foreach($relationData['records'] as $key=>$record){
                                foreach($record as $data){
                                        $name                        = $data['name'];
                                        $relationArray[$key][$name]   =  $data['value'];
                                }
                            }
                        }
                    }
                }
                
                return $relationArray;
            }
        }
}
