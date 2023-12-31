<?php

namespace App\Controller;

use App\Entity\Proveedor;
use App\Form\ProveedorType;
use App\Repository\ProveedorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class ProveedorController extends AbstractController
{
    /**
     * @Route("/proveedor", name="app_proveedor")
     */
    public function index(ProveedorRepository $proveedorRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $pagination = $paginator->paginate(
            $proveedorRepository->findAll(), // Obtén todos los proveedores
            $request->query->getInt('page', 1), // Página solicitada, por defecto página 1
            10 // Número de elementos por página
        );

        $this->get('twig')->addGlobal('pagination', $pagination);
    
        return $this->render('proveedor/index.html.twig');
    }

    public function new(Request $request, ProveedorRepository $proveedorRepository): Response
    {

        $proveedor = new Proveedor();
        $proveedor->setEstaActivo(true);
        $proveedor->setFechaInsercion(new \DateTime());
        $proveedor->setFechaUltimaModificacion(new \DateTime());
        $form = $this->createForm(ProveedorType::class, $proveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proveedorRepository->add($proveedor);
            return $this->redirectToRoute('app_proveedor_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('proveedor/new.html.twig', [
            'proveedor' => $proveedor,
            'form' => $form->createView(),
        ]);
    }

    public function edit(Request $request, $id, ProveedorRepository $proveedorRepository): Response
    {
        $proveedor = $proveedorRepository->find($id);
    
        if (!$proveedor) {
            throw $this->createNotFoundException('Proveedor no encontrado');
        }
    
        $form = $this->createForm(ProveedorType::class, $proveedor, ['editar_registro' => true]);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $proveedor->setFechaUltimaModificacion(new \DateTime());
            $proveedorRepository->add($proveedor);
            return $this->redirectToRoute('app_proveedor_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('proveedor/edit.html.twig', [
            'proveedor' => $proveedor,
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request,  $id, ProveedorRepository $proveedorRepository): Response
    {

        $proveedor = $proveedorRepository->find($id);
    
        if (!$proveedor) {
            throw $this->createNotFoundException('Proveedor no encontrado');
        }

        if ($this->isCsrfTokenValid('delete'.$proveedor->getId(), $request->request->get('_token'))) {
            $proveedorRepository->remove($proveedor);
        }

        return $this->redirectToRoute('app_proveedor_index', [], Response::HTTP_SEE_OTHER);
        
    }
    

}
