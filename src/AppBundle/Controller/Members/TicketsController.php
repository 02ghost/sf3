<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace AppBundle\Controller\Members;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TicketsController extends Controller
{
    public function listTicketsAction(Request $request): Response
    {
        $tickets = $this->get('repositories.ticket')->findAll();

        return $this->render('@App/Members/Tickets/list_tickets.html.twig', ['tickets' => $tickets]);
    }

    public function proposePriceTicketAction(Request $request, $name): Response
    {

    }
}
