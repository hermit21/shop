<?php

namespace App\Controller;

use App\Classes\Errors;
use App\Classes\Hash;
use App\Entity\Products;
use App\Model\ProductModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller
{
    /**
     * @Route("/products/{name}", name="products")
     */
    public function productAction(SessionInterface $session, String $name, Request $request)
    {
        $em = $this->getDoctrine();

        $products = new Products();

        $products = $em->getRepository(Products::class)->findOneBy([
            'name' => $name
        ]);
        $productModel = new ProductModel($products);


        if(empty($session->get('user_name')))
        {
            return $this->redirectToRoute('login');
        }
        else
        {
            //check if customer clicked button buy now
            if($request->request->get('buy_now'))
            {
                $hash_obj = new Hash();

                $token_transaction = $hash_obj->createToken(10);

                $hash_token = $hash_obj->makeHash('sha-256',[0 => $token_transaction]);
            }
        }

        return $this->render('',[
            'productModel' => $productModel
        ]);
    }


}
