<?php

namespace Narmafzam\ArchiveBundle\Controller\Front;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('@NarmafzamArchive/home.html.twig');
    }
}