<?php
 if(!function_exists('ts')){
     function ts($code,$lang=null){   
         $lang= $lang?$lang:(session('localLang')?session('localLang'):'zh');
         $code= preg_replace('/[^0-9a-zA-z.-_ ]/', '', $code);
         $trans=trans($code,[],'',$lang);  
         if(empty($trans)||$trans==$code){
            $trans= ucwords(preg_replace('/([0-9a-zA-z-_ ]*[.])*/', '', $code));  
         } 
         return $trans;
     }
 }