<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetailController extends Controller
{
    /**
     * @Route("/view", name="view")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $image = 'winter.jpg';

        return $this->render('detail/index.html.twig', [
            'image' => $image,
        ]);
    }
}