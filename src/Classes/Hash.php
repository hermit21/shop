<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-03-09
 * Time: 17:25
 */

namespace App\Classes;


class Hash extends Token
{

    public function makeHash(String $type, $data = array())
    {
        return hash($type, $data[0].$data[1]);
    }
}