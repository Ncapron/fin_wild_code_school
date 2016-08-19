<?php

namespace TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use TestBundle\Entity\Commercant;
use TestBundle\Form\CommercantType;

/**
 * Commercant controller.
 *
 */
class CommercantController extends Controller
{
    /**
     * Lists all Commercant entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commercants = $em->getRepository('TestBundle:Commercant')->findAll();

        return $this->render('TestBundle:commercant:index.html.twig', array(
            'commercants' => $commercants,
        ));
    }

    /**
     * Creates a new Commercant entity.
     *
     */
    public function newAction(Request $request)
    {
        $commercant = new Commercant();
        $form = $this->createForm('TestBundle\Form\CommercantType', $commercant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commercant);
            $em->flush();

            return $this->redirectToRoute('commercant_show', array('id' => $commercant->getId()));
        }

        return $this->render('TestBundle:commercant:new.html.twig', array(
            'commercant' => $commercant,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Commercant entity.
     *
     */
    public function showAction(Commercant $commercant)
    {
        $deleteForm = $this->createDeleteForm($commercant);

        return $this->render('TestBundle:commercant:show.html.twig', array(
            'commercant' => $commercant,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Commercant entity.
     *
     */
    public function editAction(Request $request, Commercant $commercant)
    {
        $deleteForm = $this->createDeleteForm($commercant);
        $editForm = $this->createForm('TestBundle\Form\CommercantType', $commercant);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commercant);
            $em->flush();

            return $this->redirectToRoute('commercant_edit', array('id' => $commercant->getId()));
        }

        return $this->render('TestBundle:commercant:edit.html.twig', array(
            'commercant' => $commercant,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Commercant entity.
     *
     */
    public function deleteAction(Request $request, Commercant $commercant)
    {
        $form = $this->createDeleteForm($commercant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commercant);
            $em->flush();
        }

        return $this->redirectToRoute('commercant_index');
    }

    /**
     * Creates a form to delete a Commercant entity.
     *
     * @param Commercant $commercant The Commercant entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commercant $commercant)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commercant_delete', array('id' => $commercant->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
