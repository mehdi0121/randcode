<?php
namespace Mehdi0121\Randcode;

use Mehdi0121\Randcode\helper\RandFather;
class RandServies
{
    use RandFather;

    /**
     * Giftcard function
     *
     * @return void
     */
    public function Giftcard()
    {
        return $this->CHECKCOUNTWITHPattern("xxx-xxx-xxx");
    }

    /**
     * SerialNumber function
     *
     * @param [type] $patern
     * @return void
     */
    public function SerialNumber($patern=null)
    {
        return $this->CHECKCOUNTWITHPattern($patern??$this->serialPatern);
    }

    /**
     * CustomPatern function
     *
     * @param [type] $patern
     * @param boolean $inlower
     * @param boolean $isnum
     * @param boolean $isuper
     * @param boolean $char
     * @return void
     */
    public function CustomPatern($patern,$inlower=true,$isnum=true,$isuper=true,$char=false)
    {
        return $this->CHECKCOUNTWITHPattern($patern,$inlower,$isnum,$isuper,$char);
    }

    /**
     * @method Strong
     *
     * @param integer $len
     * @return void
     */
    public function Strong($len=8)
    {
        return $this->CHECKCOUNTWITHGEN($len,1,1,1,1);
    }

    /**
     * Length function
     *
     * @param [type] $len
     * @param boolean $inlower
     * @param boolean $isnum
     * @param boolean $isuper
     * @param boolean $char
     * @return void
     */
    public function Length ($len,$inlower=true,$isnum=true,$isuper=true,$char=false)
    {
        return $this->CHECKCOUNTWITHGEN($len,$inlower,$isnum,$isuper,$char);
    }

    /**
     * Count function
     *
     * @param integer $len
     * @return void
     */
    public function Count(int $len)
    {
        # code...
        $this->count=$len;
        return $this;
    }

}
