<?php

namespace App\Controller;

use App\Repository\ProveedorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProveedorController extends AbstractController
{
    /**
     * @Route("/proveedor", name="app_proveedor")
     */
    public function index(ProveedorRepository $proveedorRepository): Response
    {
        return $this->render('proveedor/index.html.twig', [
            'proveedors' => $proveedorRepository->findAll(),
        ]);
    }
}
