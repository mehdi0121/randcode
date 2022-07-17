<?php

namespace Mehdi0121\Randcode\helper;


trait RandFather
{
    public $serialPatern="xxxx-xxxx-xxxx-xxxx";
    public $count=1;

    public function Gen($len=3,$islower=true,$isnum=true,$isuper=true,$cha=false)
    {
        $num=$isnum?"0123456789":'';
        $lower=$islower?"abcdefghijklmnopqrstuvwxyz":'';
        $uper=$isuper?"ABCDEFGHIJKLMNOPQRSTUVWXYZ":'';
        $cha=$cha?"!@#$%^&*()-=<>?":'';
        $list=$num.$lower.$uper.$cha;
        $countlist=strlen($list);
        $code="";
        for($i=0;$i<$len;$i++){
            $code.=$list[rand(0,$countlist-1)];
        }

       return str_shuffle($code);
    }

    protected function Pattern($patern,$islower=true,$isnum=true,$isuper=true,$cha=false)
    {
     $code=[];
     foreach(explode('-',$patern) as $paternpart){

        $Part_split_list=[];
        foreach (str_split($paternpart) as  $partsplit) {
            if($partsplit=="x"){
                $Part_split_list[]=$this->Gen(1,0,1,0,0);
            }
            elseif($partsplit=="y"){
                $Part_split_list[]=$this->Gen(1,0,0,1,0);
            }
            else{
                $Part_split_list[]=$this->Gen(1,1,1,1,1);
            }
        }
        $code[]=implode("",$Part_split_list);
     }
     return implode('-',$code);

    }

    protected function CHECKCOUNTWITHPattern($patern,$islower=true,$isnum=true,$isuper=true,$char=false)
    {
        if($this->count>1){
            $list=[];
            for ($i=0; $i < $this->count ; $i++) {
               $list[]=$this->Pattern($patern,$islower,$isnum,$isuper,$char);
            }
            return collect($list);
        }
        return $this->Pattern($patern,$islower,$isnum,$isuper,$char);
    }

    protected function CHECKCOUNTWITHGEN($len=8,$islower=true,$isnum=true,$isuper=true,$char=false)
    {
        if($this->count>1){
            $list=[];
            for ($i=0; $i < $this->count ; $i++) {
               $list[]=$this->Gen($len,$islower,$isnum,$isuper,$char);
            }
            return collect($list);
        }
        return $this->Gen($len,$islower,$isnum,$isuper,$char);
    }
}
