<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    private $product_id;

    private $user_id;

    private $status;

    private $token_transaction;

    private $baskets_id;

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
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
    public function getBasketsId()
    {
        return $this->baskets_id;
    }

    /**
     * @param mixed $baskets_id
     */
    public function setBasketsId($baskets_id): void
    {
        $this->baskets_id = $baskets_id;
    }


}
