<?php
/**
 * Created by PhpStorm.
 * User: Hermit
 * Date: 2018-03-10
 * Time: 17:53
 */

namespace App\Model;


use App\Classes\Errors;
use App\Entity\Products;

class ProductModel
{

    private $products;

    public function __construct(Products $products)
    {
        $this->products = $products;
    }

    public function checkProductsAmount()
    {
        $amount = $this->products->getAmount();

        if($amount == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}