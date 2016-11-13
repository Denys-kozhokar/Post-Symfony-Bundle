<?php

namespace Denis\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DenisMyBundle:Default:index.html.twig');
    }
}
