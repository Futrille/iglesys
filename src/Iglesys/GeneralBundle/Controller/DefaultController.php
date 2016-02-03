<?php

namespace Iglesys\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IglesysGeneralBundle:Default:index.html.twig', array('name' => $name));
    }
}
