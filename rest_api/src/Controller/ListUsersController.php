<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ListUsersController extends AbstractController
{
    /**
     * @Route("/users", name="app_list_users", methods={"GET"})
     */
    public function index(): JsonResponse
    {

    }
}
