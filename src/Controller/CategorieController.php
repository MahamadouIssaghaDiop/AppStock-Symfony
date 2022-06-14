<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route('/Categorie/liste', name: 'categorie_liste')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        // creates a task object and initializes some data for this example
        $c = new Categorie();

        $form = $this->createForm(CategorieType::class, $c, array('action' => $this->generateUrl('categorie_add')));
        $data['form'] = $form->createView();

        $data['categories'] = $entityManager->getRepository(Categorie::class)->findAll();
        return $this->render('categorie/categorie.html.twig', $data);

    }

    #[Route('/Categorie/add', name: 'categorie_add')]
    public function add(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();

        //Ajout de Categorie dans les instances
        $c = new Categorie();
        $form = $this->createForm(CategorieType::class, $c);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $c = $form->getData();
            // recuperation de l'id du User 
            $c->setUser($this->getUser());

            $entityManager->persist($c);
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
            // ... perform some action, such as saving the task to the database

            //return $this->redirectToRoute('task_success');
        }

        //return new Response('Saved new categorie with id '.$p->getId());
        return $this->redirectToRoute('categorie_liste');
    }

    #[Route('/Categorie/edit/{id}', name: 'categorie_edit')]
    public function edit(ManagerRegistry $doctrine, $id): Response
    {
        $entityManager = $doctrine->getManager();

        //$entityManager = $this->getDoctrine()->getManager();
        $c = $entityManager->getRepository(Categorie::class)->find($id);

        $form = $this->createForm(CategorieType::class, $c, array('action' => $this->generateUrl('categorie_update', ['id' => $id])));
        $data['form'] = $form->createView();

        $data['categories'] = $entityManager->getRepository(Categorie::class)->findAll();
        return $this->render('categorie/categorie.html.twig', $data);
    }

    //function update -> Modification de categorie
    #[Route('/Categorie/update/{id}', name: 'categorie_update')]
    public function update(ManagerRegistry $doctrine, Request $request, $id): Response
    {
        $entityManager = $doctrine->getManager();

        //instanciation du categorie
        $c = new Categorie();
        $form = $this->createForm(CategorieType::class, $c);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $c = $form->getData();
            // recuperation de l'id du User 
            $c->setUser($this->getUser());
            $c->setId($id);

            $categorie = $entityManager->getRepository(Categorie::class)->find($id);
            $categorie->setNom($c->getNom());
            $entityManager->flush();


            return $this->redirectToRoute('categorie_liste');
        }
    }

    //function delete -> Suppression de categorie
    #[Route('/Categorie/delete/{id}', name: 'categorie_delete')]
    public function delete(ManagerRegistry $doctrine, $id): Response
    {
        $entityManager = $doctrine->getManager();

        $categorie = $entityManager->getRepository(Categorie::class)->find($id);
        if ($categorie != NULL) 
        {
            $entityManager->remove($categorie);
            $entityManager->flush();
        }
        return $this->redirectToRoute('categorie_liste');
        
    }
}
