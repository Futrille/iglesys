<?php

namespace Iglesys\Bundle\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use Iglesys\Bundle\GeneralBundle\IglesysGeneralBundle as Util;

class ValorVariableController extends Controller
{
    private $util = null;

    public function indexAction()
    {
        $util = new Util();
        //$key = $request->query->get('key',0);
        $vvaList = $this->getDoctrine()
            ->getRepository('IglesysGeneralBundle:ValorVariable')
            ->findAll();

        $response = new JsonResponse();
        $response->setContent($util->getSerialize($vvaList));
        return $response;
    }
}
