<?php

namespace Iglesys\Bundle\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Iglesys\Bundle\GeneralBundle\Entity;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DefaultController extends Controller
{
    /**
     * @param $name
     * @return JsonResponse
     */
    public function indexAction($name)
    {
        //return $this->render('IglesysGeneralBundle:Default:index.html.twig', array('name' => $name));

        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);

        $pmt = new Entity\ParametroGeneral();
        $pmt->setId(234);
        $pmt->setCodigo("codigo");
        $pmt->setDescripcion("Descripcion del paamt");
        $pmt->setValor("Valor del pmt");

        $respuesta = array($pmt);

        $jsonContent = $serializer->serialize($pmt, 'json');

// $jsonContent contains {"name":"foo","age":99,"sportsman":false}
//        echo $jsonContent;
        
        $response = new Response(json_encode($jsonContent));
        $response->headers->set('Content-Type', 'application/json');

        //return new JsonResponse($jsonContent, 401);
        return $response;
    }
}
