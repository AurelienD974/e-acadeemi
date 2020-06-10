<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
class SiteController extends AbstractController
{
    /**
     * @Route("/", name="site")
     */
    public function index()
    {
  
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/logout", name="logout_site")
     */
    public function logout()
    {
        return $this->render('site/logout.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }
}
