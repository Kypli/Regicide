<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Player;
use AppBundle\Service\Order\Move;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class OrderController
 *
 * @Route("order")
 * @package AppBundle\Controller
 */
class OrderController extends Controller
{

    /**
     * @Route("/move", name="order_move")
     */
    public function MoveAction(Request $request, Move $move)
    {
        // Doctrine
        $em = $this->getDoctrine()->getManager();

        // Player
        $player = $em->getRepository('AppBundle:Player')
            ->findOneBy(['firstName' => 'FNom_player1']);

        // Move
        if (!empty($request->query->get('go'))) {
            $move->moving($player, $request->query->get('go'));
            $this->getDoctrine()->getManager()->flush();
        }

        return $this->redirectToRoute('homepage');
    }

}
