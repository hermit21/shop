<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-03-09
 * Time: 17:38
 */

namespace App\Classes;


class Checking
{
    protected $hash_obj;

    public function __construct(Hash $hash_obj)
    {
        $this->hash_obj = $hash_obj;
    }

    public function checkingUser(String $type, $password_hashed, $data = array())
    {
        $hash_password = $this->hash_obj->makeHash($type, $data);

        if($hash_password === $password_hashed)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}