<?php

namespace App\Controller;

use App\Classes\Checking;
use App\Classes\InstanceUser;
use App\Classes\Sanitizing;
use App\Classes\Hash;
use App\Classes\Token;
use App\Entity\Products;
use App\Entity\Users;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ShopController extends Controller
{

    /**
     * @Route("/shop", name="shop")
     */
    public function index(SessionInterface $session, Request $request)
    {

        $products = new Products();

        $em = $this->getDoctrine();

        $em_product = $em->getRepository(Products::class)->findAll();

        return $this->render('shop/index.html.twig', [
            'products' => $em_product
        ]);
    }

    /**
     * @Route("/shop/login", name="login")
     */
    public function login(SessionInterface $session, Request $request)
    {

        if($request->request->get('login')) {

            $sanitizing_form = new Sanitizing();

            $user = new Users();

            $data_form = $sanitizing_form->sanitizeVariables($request->request);
            
            $hash_obj = new Hash();

            $em = $this->getDoctrine();

            $user = $em->getRepository(Users::class)->checkUsername($data_form->username);

            $checking_user = new Checking($hash_obj);

            if($checking_user->checkingUser('sha-512', $user->getPassword(), [$data_form->password, $user->getSalt()]))
            {
                $session->start();
                $session->set('user_name', $data_form->username);
            }
        }

        return $this->render('shop/login.html.twig');
    }

    /**
     * @Route("/shop/register", name="register")
     */
    public function register(SessionInterface $session, Request $request, ValidatorInterface $validator)
    {
        $data_user = array();

        if($session->get('user_id')) {
            return $this->redirectToRoute('shop');
        }
        else {

            if($request->request->get('register')) {

                $em = $this->getDoctrine();

                $users = new Users();

                $sanitizing = new Sanitizing();
                $data_form = $sanitizing->sanitizeVariables($request->request);

                $token = new Token();

                $salt = $token->createToken(20);
                $activate_token = $token->createToken(12);
                $password_token = 'none';
                $data_form->salt = $salt;
                $data_form->activate_account = $activate_token;
                $data_form->password_token = $password_token;

                $instanceUser = new InstanceUser($users);

                $users = $instanceUser->proscessUser($data_form);
                $errors = $validator->validate($users);

                if(empty($errors)) {
                    $em_user = $em->getManager();
                    $em_user->persist($users);

                    $em_user->flush();
                    return $this->redirectToRoute('login');
                }

            }
        }

        return $this->render('shop/register.html.twig',[
            'user' => $data_user,
            'errors' => $errors
        ]);
    }
}
