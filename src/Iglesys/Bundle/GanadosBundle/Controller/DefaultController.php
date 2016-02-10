<?php

namespace Iglesys\Bundle\GanadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $key = $request->request->get('key',0);
        return $this->render('IglesysGanadosBundle:Default:index.html.php');
    }

    public function showAction(Request $request)
    {
        $key = $request->request->get('key',0);
        return $this->render('IglesysGanadosBundle:Default:index.html.php');
    }

    public function updateAction(Request $request)
    {
        $key = $request->request->get('key',0);
        return $this->render('IglesysGanadosBundle:Default:index.html.php');
    }

    public function deleteAction(Request $request)
    {
        $key = $request->request->get('key',0);
        return $this->render('IglesysGanadosBundle:Default:index.html.php');
    }
}
