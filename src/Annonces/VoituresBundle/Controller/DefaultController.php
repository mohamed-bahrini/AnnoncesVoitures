<?php

namespace Annonces\VoituresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AnnoncesVoituresBundle:Default:index.html.twig', array('name' => $name));
    }
}
