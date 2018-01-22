<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        // Doctrine
        $em = $this->getDoctrine()->getManager();

        // Map
        $specie = $em->getRepository('AppBundle:Map')
            ->findBy(['name' => $session->get('specie')], array(), null, 0);


        return $this->render('default/index.html.twig', [
            'map' => $map,
        ]);
    }
}
