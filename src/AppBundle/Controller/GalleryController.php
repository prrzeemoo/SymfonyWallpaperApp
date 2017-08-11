<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function indexAction()
    {
        return $this->render('gallery/index.html.twig', [
            'images' => [
                'image_1.jpg',
                'image_2.jpg',
                'image_1.jpg',
                'image_2.jpg',
                'image_1.jpg',
                'image_2.jpg',
                'image_1.jpg',
                'image_2.jpg',
                'image_1.jpg',
            ]
        ]);
    }
}
