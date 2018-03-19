<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-03-16
 * Time: 11:24
 */

namespace App\Model;


use App\Classes\Errors;
use App\Entity\Orders;

class OrderModel
{
    private $order;

    public function __construct(Orders $order)
    {
        $this->order = $order;
    }

    public function setOrder($data_form)
    {
        $this->order->setProductId($data_form->productId);
        $this->order->setStatus($data_form->status);
        $this->order->setTokenTransaction($data_form->token_transaction);
        $this->order->setUserId($data_form->userId);

        return $this->order;
    }


}