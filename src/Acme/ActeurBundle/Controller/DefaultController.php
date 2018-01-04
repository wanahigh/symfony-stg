<?php

namespace Acme\ActeurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeActeurBundle:Default:index.html.twig');
    }
}
