<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    //#[Route('/login', name: 'login')]
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        // return $this->render('login/Connexion.html.twig', [
        //     'controller_name' => 'LoginController',
        // ]);
        return $this->redirectToRoute( route:'app_login');
    }

    #[Route('/logins', name: 'logins')]
    //#[Route('/', name: 'index')]
    public function login(): Response
    {
        return $this->render('login/Connexion.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    #[Route('/logon', name: 'logon')]
    //#[Route('/', name: 'index')]
    public function logon(): Response
    {
        return $this->redirectToRoute( route:'accueil');
    }

    #[Route('/403', name: 'accessDenied')]
    //#[Route('/', name: 'index')]
    public function accessDenied(): Response
    {
        return $this->render('403/403.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
