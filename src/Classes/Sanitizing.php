<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-03-08
 * Time: 18:46
 */

namespace App\Classes;


class Sanitizing
{
    /**
     * @param $data_form
     * @return \stdClass
     */
    public function sanitizeVariables($data_form)
    {
        $result = new \stdClass();

        foreach ($data_form as $key => $element) {
            $result->$key = htmlspecialchars($element, ENT_QUOTES, 'utf-8');
        }
        return $result;
    }
}