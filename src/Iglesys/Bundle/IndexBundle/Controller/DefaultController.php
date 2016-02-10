<?php

namespace Iglesys\Bundle\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IglesysIndexBundle:Default:index.html.php');
    }
}
