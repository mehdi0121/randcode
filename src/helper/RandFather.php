<?php

namespace Mehdi0121\Randcode\helper;


class RandFather
{
    public $serialPatern="xxxx-xxxx-xxxx-xxxx";
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

    public function Giftcard($pat)
    {
        # code...
        return $this->Gen("xxx-xxx-xxx",false);
    }

    public function SerialNumber()
    {
        return $this->Gen($this->serialPatern);
    }


    public function Pattern($patern)
    {
      # code..
     $code=[];
     foreach(explode('-',$patern) as $xxx){
         $code[]=$this->Gen(strlen($xxx));
     }
     return implode('-',$code);

    }









}
