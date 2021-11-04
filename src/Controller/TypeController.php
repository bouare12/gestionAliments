<?php

namespace App\Controller;

use App\Repository\TypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeController extends AbstractController
{
    /**
     * @Route("/types", name="types")
     */
    public function index(TypeRepository $repository): Response
    {
        $types = $repository->findAll();

        return $this->render('type/types.html.twig', [
            'controller_name' => 'TypeController',
            'types' => $types
        ]);
    }
}
