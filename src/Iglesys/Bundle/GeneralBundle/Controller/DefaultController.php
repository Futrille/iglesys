<?php

namespace Iglesys\Bundle\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller
{
    /**
     * @param $name
     * @return JsonResponse
     */
    public function indexAction($name)
    {

        return $this->render('IglesysGeneralBundle:Default:index.html.php', array('name' => $name));
//        $encoders = array(new XmlEncoder(), new JsonEncoder());
//        $normalizers = array(new ObjectNormalizer());
//
//        $serializer = new Serializer($normalizers, $encoders);
//
//
//        $em = $this->getDoctrine();
//        $dbValores = $em->getRepository("IglesysGeneralBundle:ValorVariable")->findAll();
//
//        $valores = array();
//        foreach ($dbValores  as $valor){
//            $valores[$valor->getId()] = array(
//                "id" => $valor->getId(),
//                "codigo" => $valor->getCodigo(),
//                "descripcion" => $valor->getDescripcion(),
//                "nombre" => $valor->getNombre(),
//                "valor" => $valor->getValor(),
//                "orden" => $valor->getOrden(),
//            );
//        }
//
//        $jsonContent = $serializer->serialize($dbValores, 'xml');
//
//// $jsonContent contains {"name":"foo","age":99,"sportsman":false}
//        $response = new Response();
//        $response->setContent($jsonContent);
//        $response->headers->set('Content-Type', 'application/xml');
//        return $response; // or return it in a Response
//
//        //return new JsonResponse($valores);


    }
}
