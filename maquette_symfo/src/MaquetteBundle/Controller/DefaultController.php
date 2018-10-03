<?php

namespace MaquetteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Maquette/Default/index.html.twig');
    }

    public function PricingAction()
    {
        return $this->render('@Maquette/Default/Pricing.html.twig');
    }

    public function AboutAction()
    {
        return $this->render('@Maquette/Default/About.html.twig');
    }
}
