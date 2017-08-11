<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        $winter = [
            'winter.jpg',
            'summer.jpg',
            'abstract.jpg',
        ];

        $summer = [
            'summer.jpg',
            'abstract.jpg',
            'winter.jpg',
        ];

        $abstract = [
            'abstract.jpg',
            'winter.jpg',
            'abstract.jpg',
        ];

        $images = array_merge($winter, $summer, $abstract);

        shuffle($images);

        $randomisedImages = array_slice($images, 0, 8);

        return $this->render('home/index.html.twig', [
            'randomised_images' => $randomisedImages,
            'abstract'          => array_slice($abstract,0, 2),
            'summer'            => array_slice($summer,0, 2),
            'winter'            => array_slice($winter,0, 2),
        ]);
    }
}