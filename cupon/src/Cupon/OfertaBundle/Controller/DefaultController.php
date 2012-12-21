<?php

namespace Cupon\OfertaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction($name)
    {
        return $this->render('OfertaBundle:Default:index.html.twig', array('name' => $name));
    }

    public function portadaAction($ciudad)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $em = $this->getDoctrine()->getEntityManager();
        $oferta = $em->find('OfertaBundle:Oferta', 1);

        // $oferta ya contiene toda la información de la oferta
        $precio = $oferta->getPrecio();
    }

}
