<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProjectRepository;
use App\Repository\UserRepository;

class HomeController extends AbstractController
{
    /**
     *@Route("/", name="home_index")
     */
     public function index(ProjectRepository $projectRepository, UserRepository $userRepository)
     {
        $user = $userRepository->findOneBy(['email' => 'noel@an.com']);
        return $this->render('blog/index.html.twig', ['projects' => $projectRepository->findAll(),
                                                      'user' => $user,
                                                     ]);
     }

     /**
      *@Route("/admin", name="admin_index")
      */ 
     public function adminIndex()
     {
        return $this->render('blog/admin.html.twig');
     }
}