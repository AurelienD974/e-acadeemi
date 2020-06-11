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
    public function index_connect()
    {
        
        $repo = $this->getDoctrine()->getRepository(User::class);
        
        $user = $repo->findAll();
        return $this->render('site/index_connect.html.twig', [
            'controller_name' => 'SiteController',
            'user' => $user
        ]);
    }
     /**
     * @Route("/home", name="landingpage")
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
