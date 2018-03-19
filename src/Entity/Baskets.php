<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BasketsRepository")
 */
class Baskets
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    private $user_id;

    private $product_id;

    private $token_transaction;

    private $status_payment;

    private $order_date;

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
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id): void
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getTokenTransaction()
    {
        return $this->token_transaction;
    }

    /**
     * @param mixed $token_transaction
     */
    public function setTokenTransaction($token_transaction): void
    {
        $this->token_transaction = $token_transaction;
    }

    /**
     * @return mixed
     */
    public function getStatusPayment()
    {
        return $this->status_payment;
    }

    /**
     * @param mixed $status_payment
     */
    public function setStatusPayment($status_payment): void
    {
        $this->status_payment = $status_payment;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * @param mixed $order_date
     */
    public function setOrderDate($order_date): void
    {
        $this->order_date = $order_date;
    }

}
