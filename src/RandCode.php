<?php
namespace Mehdi0121\Randcode;

use Illuminate\Support\Facades\Facade;

class RandCode extends Facade
{

    public static function getFacadeAccessor(){

        return 'randcode';
    }
}
