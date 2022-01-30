<?php
namespace Mehdi0121\Randcode;

use Mehdi0121\Randcode\helper\RandFather;
class RandServies
{
    use RandFather;


    public function Giftcard($pat)
    {
        # code...
        return $this->Pattern("xxx-xxx-xxx");
    }

    public function SerialNumber()
    {
        if($this->count>1){
            $list=[];
                for ($i=0; $i < $this->count ; $i++) {
                    # code...
                   $list[]=$this->Pattern($this->serialPatern);
                }
            return collect($list);
        }
        return $this->Pattern($this->serialPatern);
    }


    public function count(int $len)
    {
        # code...
        $this->count=$len;
        return $this;
    }

    public function Pattern($patern,$inlower=true,$isnum=true,$isuper=true)
    {
      # code..
     $code=[];
     foreach(explode('-',$patern) as $xxx){
         $code[]=$this->Gen(strlen($xxx));
     }
     return implode('-',$code);

    }



}
