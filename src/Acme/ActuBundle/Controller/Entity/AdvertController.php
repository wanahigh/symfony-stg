<?php

namespace Acme\ActuBundle\Controller\Entity;

use Acme\ActuBundle\Entity\Entity\Advert;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\ActuBundle\Form\Entity\CommentType;
use Acme\ActuBundle\Entity\Entity\Comment;
/**
 * Advert controller.
 *
 */
class AdvertController extends Controller
{
    /**
     * Lists all advert entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $listeadverts = $em->getRepository('AcmeActuBundle:Entity\Advert')->findAll();
        $adverts = $this->get('knp_paginator')->paginate(
            $listeadverts,
            /*PAGINATION*/
            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
            5/*nbre d'éléments par page*/
        );
        return $this->render('entity/advert/index.html.twig', array(
            'adverts' => $adverts,));
    }


    /**
     * Creates a new advert entity.
     *
     */
    public function newAction(Request $request)
    {
        $advert = new Advert();
        $form = $this->createForm('Acme\ActuBundle\Form\Entity\AdvertType', $advert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($advert);
            $em->flush();

            return $this->redirectToRoute('entity_advert_show', array('id' => $advert->getId()));
        }
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        return $this->render('entity/advert/new.html.twig', array(
            'advert' => $advert,
            'form' => $form->createView(),
        ));
    }


    /**
     * Finds and displays a advert entity.
     *
     */
    public function showAction(Advert $advert)
    {
        $deleteForm = $this->createDeleteForm($advert);

        return $this->render('entity/advert/show.html.twig', array(
            'advert' => $advert,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to edit an existing advert entity.
     *
     */
    public function editAction(Request $request, Advert $advert)
    {
        $deleteForm = $this->createDeleteForm($advert);
        $editForm = $this->createForm('Acme\ActuBundle\Form\Entity\AdvertType', $advert);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('entity_advert_edit', array('id' => $advert->getId()));
        }

        return $this->render('entity/advert/edit.html.twig', array(
            'advert' => $advert,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a advert entity.
     *
     */
    public function deleteAction(Request $request, Advert $advert)
    {
        $form = $this->createDeleteForm($advert);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($advert);
            $em->flush();
        }

        return $this->redirectToRoute('entity_advert_index');
    }

    /**
     * Creates a form to delete a advert entity.
     *
     * @param Advert $advert The advert entity
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Advert $advert)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entity_advert_delete', array('id' => $advert->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}