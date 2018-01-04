<?php

namespace Acme\ActuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeActuBundle:Default:index.html.twig');
    }
}
