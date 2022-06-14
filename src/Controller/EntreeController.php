<?php

namespace App\Controller;

use App\Entity\Entree;
use App\Form\EntreeType;
use App\Entity\Produit;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping\OneToMany;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class EntreeController extends AbstractController
{
    #[Route('/Entree/liste', name: 'entree_liste')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        // creates a task object and initializes some data for this example
        $e = new Entree();

        $form = $this->createForm(EntreeType::class, $e, array('action' => $this->generateUrl('entree_add')));
        $data['form'] = $form->createView();

        $data['entrees'] = $entityManager->getRepository(Entree::class)->findAll();

        return $this->render('entree/entree.html.twig', $data);
    }

    #[Route('/Entree/get/{id}', name: 'entree_get')]
    public function getProduit($id): Response
    {
        return $this->render('entree/entree.html.twig');
    }

    //function add -> Ajout de produit
    #[Route('/Entree/add', name: 'entree_add')]
    public function add(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();

        $e = new Entree();
        $form = $this->createForm(EntreeType::class, $e);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $e = $form->getData();
            // recuperation de l'id du User 
            $e->setUser($this->getUser());

            $entityManager->persist($e);
            $entityManager->flush();
            // Mise a jour du produit 
            $p = $entityManager->getRepository(Produit::class)->find($e->getProduit()->getId());
            $Stock = $p->getQtStock() + $e->getQteE();
            $p->setQtStock($Stock);
            $entityManager->flush();
        }

        return $this->redirectToRoute('entree_liste');
    }
}
