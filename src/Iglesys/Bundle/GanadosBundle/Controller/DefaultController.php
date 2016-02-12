<?php

namespace Iglesys\Bundle\GanadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class DefaultController extends Controller
{
    public function getSerialize($object){
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        return $serializer->serialize($object, 'json');
    }

    public function indexAction()
    {
        //$key = $request->query->get('key',0);

        $vvaList = $this->getDoctrine()
            ->getRepository('IglesysGanadosBundle:Persona')
            ->findAll();

        $response = new JsonResponse();
        $response->setContent($this->getSerialize($vvaList));
        return $response;
    }

    public function createAction($q)
    {
        //$key = $request->query->get('key',0);
        echo "consulta:" . $q;
        $valorVariable = $this->getDoctrine()
            ->getRepository('IglesysGeneralBundle:ValorVariable')
            ->findAll();

        if (!$valorVariable) {
            throw $this->createNotFoundException('No se encuentra el registro solicitado.');
        }

        $response = new JsonResponse();
        $response->setContent($this->getSerialize($valorVariable));
        return $response;
    }

    public function showAction($id)
    {
        //$key = $request->query->get('key',0);
        echo "id:" . $id;
        $valorVariable = $this->getDoctrine()
            ->getRepository('IglesysGeneralBundle:ValorVariable')
            ->find($id);

        if (!$valorVariable) {
            throw $this->createNotFoundException('No se encuentra el registro solicitado.');
        }

        $response = new JsonResponse();
        $response->setContent($this->getSerialize($valorVariable));
        return $response;
    }

    public function updateAction($id)
    {
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
        $response->setContent($this->getSerialize($valorVariable));
        return $response;
    }

    public function deleteAction($id)
    {
        //$key = $request->query->get('key',0);
        $valorVariable = $this->getDoctrine()
            ->getRepository('IglesysGeneralBundle:ValorVariable')
            ->find($id);

        if (!$valorVariable) {
            throw $this->createNotFoundException('No se encuentra el registro solicitado.');
        }

        $response = new JsonResponse();
        $response->setContent($this->getSerialize($valorVariable));
        return $response;
    }
}
