<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/afterlogin', name: 'app_afterlogin')]
    public function logedin(): Response
    {
        return $this->render('home/afterlogin.html.twig', [     
        ]);
    }

    #[Route('/afterloginAdmin', name: 'app_afterloginAdmin')]
    public function logedinAdmin(): Response
    {
        return $this->render('home/afterloginAdmin.html.twig', [     
        ]);
    }
    
}
