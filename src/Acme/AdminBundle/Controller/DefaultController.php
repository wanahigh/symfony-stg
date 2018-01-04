<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\Exception\AccessDeniedException;
class DefaultController extends Controller
{
    public function indexAction()
    {




        return $this->render('index.html.twig');



        // Ici l'utilisateur a les droits suffisant,

        // on le laisse entrer dans le backoffice

    }

}

