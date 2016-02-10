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

    public function indexAction(Request $request)
    {
        $key = $request->query->get('key',0);

        $vvaList = $this->getDoctrine()
            ->getRepository('IglesysGeneralBundle:ValorVariable')
            ->findAll();

        $response = new JsonResponse();
        $response->setContent($this->getSerialize($vvaList));
        return $response;
    }

    public function showAction($id)
    {
        //$key = $request->query->get('key',0);
        //$id = $request->request->get('id',0);
        echo "ID:". $id;
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
