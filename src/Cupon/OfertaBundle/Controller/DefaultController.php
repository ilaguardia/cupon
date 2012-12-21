<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function portadaAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $oferta = $em->getRepository('OfertaBundle:Oferta')->findOneBy(array(
            'ciudad' => 73,

            ));

// var_dump($oferta);
// die();

        return $this->render(
                'OfertaBundle:Default:portada.html.twig', array('oferta' => $oferta)
        );
    }
}

