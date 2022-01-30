<?php

namespace Mehdi0121\Randcode\helper;


trait RandFather
{


    public $serialPatern="xxxx-xxxx-xxxx-xxxx";
    public $count=1;
    public function Gen($len=3,$inlower=true,$isnum=true,$isuper=true)
    {
        # code...
        $num=$isnum?"0123456789":'';
        $lower=$inlower?"abcdefghijklmnopqrstuvwxyz":'';
        $uper=$isuper?"ABCDEFGHIJKLMNOPQRSTUVWXYZ":'';
        $list=$num.$lower.$uper;
        $countlist=strlen($list);
        $code="";
        for($i=0;$i<$len;$i++){
            $code.=$list[rand(0,$countlist-1)];
        }
        return $code;
    }






}
