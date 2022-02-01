<?php

namespace Mehdi0121\Randcode\helper;


trait RandFather
{


    public $serialPatern="xxxx-xxxx-xxxx-xxxx";
    public $count=1;


    public function Gen($len=3,$inlower=true,$isnum=true,$isuper=true,$cha=false)
    {
        $num=$isnum?"0123456789":'';
        $lower=$inlower?"abcdefghijklmnopqrstuvwxyz":'';
        $uper=$isuper?"ABCDEFGHIJKLMNOPQRSTUVWXYZ":'';
        $cha=$cha?"!@#$%^&*()-=<>?":'';
        $list=$num.$lower.$uper.$cha;
        $countlist=strlen($list);
        $code="";
        for($i=0;$i<$len;$i++){
            $code.=$list[rand(0,$countlist-1)];
        }
        return str_shuffle($code);;
    }

    protected function Pattern($patern,$inlower=true,$isnum=true,$isuper=true,$cha=false)
    {
     $code=[];
     foreach(explode('-',$patern) as $xxx){
         if(stripos($xxx,"1",true)){
            $code[]=$this->Gen(strlen($xxx),0,1,0,0);
         }elseif (stripos($xxx,"y",true)){
            $code[]=$this->Gen(strlen($xxx),0,0,1,0);
         }else{
            $code[]=$this->Gen(strlen($xxx),$inlower,$isnum,$isuper,$cha);
         }

     }
     return implode('-',$code);

    }

    protected function CHECKCOUNTWITHPattern($patern,$inlower=true,$isnum=true,$isuper=true,$char=false)
    {
        if($this->count>1){
            $list=[];
            for ($i=0; $i < $this->count ; $i++) {
               $list[]=$this->Pattern($patern,$inlower,$isnum,$isuper,$char);
            }
            return collect($list);
        }
        return $this->Pattern($patern,$inlower,$isnum,$isuper,$char);
    }

    protected function CHECKCOUNTWITHGEN($len=8,$inlower=true,$isnum=true,$isuper=true,$char=false)
    {
        if($this->count>1){
            $list=[];
            for ($i=0; $i < $this->count ; $i++) {
               $list[]=$this->Gen($len,$inlower,$isnum,$isuper,$char);
            }
            return collect($list);
        }
        return $this->Gen($len,$inlower,$isnum,$isuper,$char);
    }
}
