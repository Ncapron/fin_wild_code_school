<?php

namespace TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TestBundle\Entity\Artiste;
use TestBundle\Form\ArtisteType;

/**
 * Artiste controller.
 *
 */
class ArtisteController extends Controller
{
    /**
     * Lists all Artiste entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $artistes = $em->getRepository('TestBundle:Artiste')->findAll();

        return $this->render('TestBundle:artiste:index.html.twig', array(
            'artistes' => $artistes,
        ));
    }

    /**
     * Creates a new Artiste entity.
     *
     */
    public function newAction(Request $request)
    {
        $artiste = new Artiste();
        $form = $this->createForm('TestBundle\Form\ArtisteType', $artiste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($artiste);
            $em->flush();

            return $this->redirectToRoute('artiste_show', array('id' => $artiste->getId()));
        }

        return $this->render('TestBundle:artiste:new.html.twig', array(
            'artiste' => $artiste,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Artiste entity.
     *
     */
    public function showAction(Artiste $artiste)
    {
        $deleteForm = $this->createDeleteForm($artiste);

        return $this->render('TestBundle:artiste:show.html.twig', array(
            'artiste' => $artiste,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Artiste entity.
     *
     */
    public function editAction(Request $request, Artiste $artiste)
    {
        $deleteForm = $this->createDeleteForm($artiste);
        $editForm = $this->createForm('TestBundle\Form\ArtisteType', $artiste);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($artiste);
            $em->flush();

            return $this->redirectToRoute('artiste_edit', array('id' => $artiste->getId()));
        }

        return $this->render('TestBundle:artiste:edit.html.twig', array(
            'artiste' => $artiste,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Artiste entity.
     *
     */
    public function deleteAction(Request $request, Artiste $artiste)
    {
        $form = $this->createDeleteForm($artiste);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($artiste);
            $em->flush();
        }

        return $this->redirectToRoute('artiste_index');
    }

    /**
     * Creates a form to delete a Artiste entity.
     *
     * @param Artiste $artiste The Artiste entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Artiste $artiste)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('artiste_delete', array('id' => $artiste->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
