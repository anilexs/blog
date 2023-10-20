<?php

// src/Controller/SecurityController.php
namespace App\Controller\SecurityController;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityController extends AbstractController
{
    public function someAction(Security $security): Response
    {
        // logout the user in on the current firewall
        $response = $security->logout();

        return $this->render('home/home.html.twig');
    }
}