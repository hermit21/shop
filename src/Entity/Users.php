<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Asserts;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="String", length=15)
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your name cannot contain a number"
     * )
     */
    private $name;

    /**
     * @ORM\Column(type="String", length=15)
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your surname cannot contain a number"
     * )
     */
    private $surname;

    /**
     * @ORM\Column(type="String", length=15)
     * @Assert\NotBlank()
     * @Assert\Regex(
     *     pattern="/\d/",
     *     match=false,
     *     message="Your city cannot contain a number"
     * )
     */
    private $city;

    /**
     * @ORM\Column(type="String", length=15)
     * @Assert\NotBlank()
     */
    private $address;

    /**
     * @ORM\Column(type="String", length=15)
     * @Assert\NotBlank()
     */
    private $telephon_number;

    /**
     * @ORM\Column(type="string", length=45, unique=true)
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=128)
     * @Assert\NotBlank()
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $creadit_card;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $activate_account;
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $salt;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password_token;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getTelephonNumber()
    {
        return $this->telephon_number;
    }

    /**
     * @param mixed $telephon_number
     */
    public function setTelephonNumber($telephon_number): void
    {
        $this->telephon_number = $telephon_number;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCreaditCard()
    {
        return $this->creadit_card;
    }

    /**
     * @param mixed $creadit_card
     */
    public function setCreaditCard($creadit_card): void
    {
        $this->creadit_card = $creadit_card;
    }

    /**
     * @return mixed
     */
    public function getActivateAccount()
    {
        return $this->activate_account;
    }

    /**
     * @param mixed $activate_account
     */
    public function setActivateAccount($activate_account): void
    {
        $this->activate_account = $activate_account;
    }

    /**
     * @return mixed
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @param mixed $salt
     */
    public function setSalt($salt): void
    {
        $this->salt = $salt;
    }

    /**
     * @return mixed
     */
    public function getPasswordToken()
    {
        return $this->password_token;
    }

    /**
     * @param mixed $password_token
     */
    public function setPasswordToken($password_token): void
    {
        $this->password_token = $password_token;
    }


}
