<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PagesController extends AbstractController
{ 
    #[Route('/index',name:'app_pages')]
    public function index ()
    {
        return $this->render('pages/index.html.twig',
[
    'controller_name'=>'PagesController',

]);


    }
#[Route('/About',name:'app_About')]
    public function About ()
    {
        return $this->render('pages\About.html.twig',
[
    'controller_name'=>'PagesController',

]);
    }
    #[Route('/Connection',name:'app_Connection')]
    public function Connection ()
    {
        return $this->render('pages\Connexion.html.twig',
[
    'controller_name'=>'PagesController',

]);
    }

#[Route('/Inscription',name:'app_Inscription')]
public function Inscription ()
{
    return $this->render('pages\Inscription.html.twig',
[
'controller_name'=>'PagesController',

]);
}
#[Route('/login',name:'app_login')]
public function login ()
{
    return $this->render('security\login.html.twig',
[
'controller_name'=>'PagesController',

]);
}
    }
