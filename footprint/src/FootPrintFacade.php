<?php
/**
 * Created by PhpStorm.
 * User: chai
 * Date: 2019/2/9
 * Time: 10:17 AM
 */

namespace Cjc\FootPrint;


use Illuminate\Support\Facades\Facade;

class FootPrintFacade extends  Facade
{
protected static function getFacadeAccessor()
{
    return  'footprint';
}
//    protected static function getFacadeAccessor()
//    {
//        return 'packagetest';
//    }
}