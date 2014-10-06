<?php

namespace Annonces\VoituresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function accueilAction()
    {
        return $this->render('AnnoncesVoituresBundle:Accueil:accueil.html.twig');
    }
}
