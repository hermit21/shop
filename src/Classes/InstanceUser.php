<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-03-10
 * Time: 16:17
 */

namespace App\Classes;


use App\Entity\Users;

class InstanceUser
{
    private $user;

    public function __construct(Users $user)
    {
        $this->user = $user;
    }

    public function proscessUser($data_form)
    {
        $this->user->setName($data_form->name);
        $this->user->setSurname($data_form->surname);
        $this->user->setCity($data_form->city);
        $this->user->setAddress($data_form->address);
        $this->user->setTelephonNumber($data_form->telephon_number);
        $this->user->setEmail($data_form->email);
        $this->user->setPassword($data_form->password);
        $this->user->setSalt($data_form->salt);
        $this->user->setCreaditCard('none');
        $this->user->setActivateAccount($data_form->activate_account);
        $this->user->setPasswordToken($data_form->password);

        return $this->user;

    }
}