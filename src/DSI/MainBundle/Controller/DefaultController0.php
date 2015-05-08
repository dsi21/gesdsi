<?php

namespace DSI\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DSIMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
