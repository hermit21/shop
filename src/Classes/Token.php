<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-03-09
 * Time: 17:24
 */

namespace App\Classes;


class Token
{
    public function createToken(int $lenght)
    {
        $characters = 'qwertyuiop[]{}asdfghjkl:;~`1234567890-_+QWERTYUIOP\zxcvbnm<>,.?/!@#$%^&*()ASDFGHJKLZXCVBNM';
        $token = '';

        for($i=0; $i < $lenght; $i++) {
            $rand = rand(0, strlen($characters) - 1);
            $token.= substr($characters, $rand, 1);
        }
        return $token;
    }
}