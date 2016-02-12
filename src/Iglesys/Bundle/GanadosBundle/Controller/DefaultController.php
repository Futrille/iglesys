<?php

namespace Iglesys\Bundle\GanadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Iglesys\Bundle\GeneralBundle\IglesysGeneralBundle as Util;

class DefaultController extends Controller
{
    private $util = null;

    public function indexAction()
    {
        $util = new Util();
        //$key = $request->query->get('key',0);
        $vvaList = $this->getDoctrine()
            ->getRepository('IglesysGanadosBundle:Persona')
            ->findAll();

        $response = new JsonResponse();
        $response->setContent($util->getSerialize($vvaList));
        return $response;
    }

    public function createAction($q)
    {
        $util = new Util();
        //$key = $request->query->get('key',0);
        echo "consulta:" . $q;
        $valorVariable = $this->getDoctrine()
            ->getRepository('IglesysGeneralBundle:ValorVariable')
            ->findAll();

        if (!$valorVariable) {
            throw $this->createNotFoundException('No se encuentra el registro solicitado.');
        }

        $response = new JsonResponse();
        $response->setContent($util->getSerialize($valorVariable));
        return $response;
    }

    public function showAction($id)
    {
        $util = new Util();
        //$key = $request->query->get('key',0);
        echo "id:" . $id;
        $valorVariable = $this->getDoctrine()
            ->getRepository('IglesysGeneralBundle:ValorVariable')
            ->find($id);

        if (!$valorVariable) {
            throw $this->createNotFoundException('No se encuentra el registro solicitado.');
        }

        $response = new JsonResponse();
        $response->setContent($util->getSerialize($valorVariable));
        return $response;
    }

    public function updateAction($id)
    {
        $util = new Util();
        //$key = $request->query->get('key',0);
        $request = Request::createFromGlobals();
        echo $request->getContent() . "*";
        //$variable = parse_str(file_get_contents('php://input', false , null, -1 , $_SERVER['CONTENT_LENGTH'] ), $_PUT);
        //print_r($_SERVER);
        $valorVariable = $this->getDoctrine()
            ->getRepository('IglesysGeneralBundle:ValorVariable')
            ->find($id);

        if (!$valorVariable) {
            throw $this->createNotFoundException('No se encuentra el registro solicitado.');
        }

        $response = new JsonResponse();
        $response->setContent($util->getSerialize($valorVariable));
        return $response;
    }

    public function deleteAction($id)
    {
        $util = new Util();
        //$key = $request->query->get('key',0);
        $valorVariable = $this->getDoctrine()
            ->getRepository('IglesysGeneralBundle:ValorVariable')
            ->find($id);

        if (!$valorVariable) {
            throw $this->createNotFoundException('No se encuentra el registro solicitado.');
        }

        $response = new JsonResponse();
        $response->setContent($util->getSerialize($valorVariable));
        return $response;
    }
}
