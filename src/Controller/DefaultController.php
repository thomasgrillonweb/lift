<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'this is the default route',
            'status' => 200
        ], 200);
    }

    /**
     * @Route("/api/default", name="api_default")
     */
    public function apiDefault(): Response
    {
        return $this->json([
            'message' => 'this is the api default route',
            'status' => 200
        ], 200);
    }
}
