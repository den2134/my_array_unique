<?php

function my_array_unique($arr){
    if(!is_array($arr)) {
        echo "ERROR! - this is no array value.";
        return false;
    }

    $arr_temp = [];

     foreach($arr as $k => $val){
         if(isset($arr_temp[$val])) {
             continue;
         }
         $arr_temp[$val] = $k;
     }
    return array_flip($arr_temp);
}