<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping\OneToMany;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ProduitController extends AbstractController
{
    //function index -> Lister les produits depuis la BD
    #[Route('/Produit/liste', name: 'produit_liste')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        // creates a task object and initializes some data for this example
        $p = new Produit();

        $form = $this->createForm(ProduitType::class, $p, array('action' => $this->generateUrl('produit_add')));
        $data['form'] = $form->createView();

        $data['produits'] = $entityManager->getRepository(Produit::class)->findAll();
        return $this->render('produit/produit.html.twig', $data);
    }

    //function add -> Ajout de produit
    #[Route('/Produit/add', name: 'produit_add')]
    public function add(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();

        //Ajout de produit dans les instances
        $p = new Produit();
        $form = $this->createForm(ProduitType::class, $p);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $p = $form->getData();
            // recuperation de l'id du User 
            $p->setUser($this->getUser());

            $entityManager->persist($p);
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
            // ... perform some action, such as saving the task to the database

            //return $this->redirectToRoute('task_success');
        }

        //return new Response('Saved new product with id '.$p->getId());

        //return $this->redirectToRoute('produit/liste.html.twig');
        return $this->redirectToRoute('produit_liste');
    }

    #[Route('/Produit/edit/{id}', name: 'produit_edit')]
    public function edit(ManagerRegistry $doctrine, $id): Response
    {
        $entityManager = $doctrine->getManager();

        //$entityManager = $this->getDoctrine()->getManager();
        $p = $entityManager->getRepository(Produit::class)->find($id);

        $form = $this->createForm(ProduitType::class, $p, array('action' => $this->generateUrl('produit_update', ['id' => $id])));
        $data['form'] = $form->createView();

        $data['produits'] = $entityManager->getRepository(Produit::class)->findAll();
        return $this->render('produit/produit.html.twig', $data);
    }

    //function update -> Modification de produit
    #[Route('/Produit/update/{id}', name: 'produit_update')]
    public function update(ManagerRegistry $doctrine, Request $request, $id): Response
    {
        $entityManager = $doctrine->getManager();

        //instanciation du produit
        $p = new Produit();
        $form = $this->createForm(ProduitType::class, $p);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $p = $form->getData();
            // recuperation de l'id du User 
            $p->setUser($this->getUser());
            $p->setId($id);

            $produit = $entityManager->getRepository(Produit::class)->find($id);
            $produit->setLibelle($p->getLibelle());
            $produit->setQtStock($p->getQtStock());
            $produit->setCategorie($p->getCategorie());
            $entityManager->flush();


            return $this->redirectToRoute('produit_liste');
        }
    }

    //function delete -> Suppression de produit
    #[Route('/Produit/delete/{id}', name: 'produit_delete')]
    public function delete(ManagerRegistry $doctrine, $id): Response
    {
        $entityManager = $doctrine->getManager();

        $produit = $entityManager->getRepository(Produit::class)->find($id);
        if ($produit != NULL) 
        {
            $entityManager->remove($produit);
            $entityManager->flush();
        }
        return $this->redirectToRoute('produit_liste');
        
    }
}
