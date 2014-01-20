<?php

namespace Hammond\ChurchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$em = $this->get('doctrine')->getManager();

		$churches = $em->getRepository('HammondChurchBundle:Church')->findAll();

        return $this->render('HammondChurchBundle:Default:index.html.twig', array("churches" => $churches));
    }
}
