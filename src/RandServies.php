<?php
namespace Mehdi0121\Randcode;

use Mehdi0121\Randcode\helper\RandFather;
class RandServies
{
    use RandFather;


    /**
     * @method  SerialNumber()
     *
     * @return array|string
     */
    public function SerialNumber()
    {
        return $this->CHECKCOUNTWITHPattern($this->serialPatern,0,1,1,0);
    }


    /**
     * @method Giftcard()
     *
     * @return array|string
     */
    public function Giftcard()
    {
        return $this->CHECKCOUNTWITHPattern("111-yyy-111",0,1,1,0);
    }

    /**
     * @method  CustomPatern()
     *
     * @param integer $patern
     * @param boolean $inlower
     * @param boolean $isnum
     * @param boolean $isuper
     * @param boolean $char
     * @return array|string
     */
    public function CustomPatern($patern,$inlower=true,$isnum=true,$isuper=true,$char=false)
    {
        return $this->CHECKCOUNTWITHPattern($patern,$inlower,$isnum,$isuper,$char);
    }

    /**
     * @method Strong()
     *
     * @param integer $len
     * @return array|string
     */
    public function Strong($len=8)
    {
        return $this->CHECKCOUNTWITHGEN($len,1,1,1,1);
    }

    /**
     * @method  Length()
     *
     * @param integer $len
     * @param boolean $inlower
     * @param boolean $isnum
     * @param boolean $isuper
     * @param boolean $char
     * @return array|string
     */
    public function Length ($len,$inlower=true,$isnum=true,$isuper=true,$char=false)
    {
        return $this->CHECKCOUNTWITHGEN($len,$inlower,$isnum,$isuper,$char);
    }

    /**
     * Count function
     *
     * @param integer $len
     * @return @this
     */
    public function Count(int $len)
    {
        $this->count=$len;
        return $this;
    }

}
