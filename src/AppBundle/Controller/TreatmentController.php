<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Treatment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Treatment controller.
 *
 * @Route("treatment")
 */
class TreatmentController extends Controller
{
    /**
     * Lists all treatment entities.
     *
     * @Route("/", name="treatment_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $treatments = $em->getRepository('AppBundle:Treatment')->findAll();

        return $this->render('treatment/index.html.twig', array(
            'treatments' => $treatments,
        ));
    }

    /**
     * Creates a new treatment entity.
     *
     * @Route("/new", name="treatment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $treatment = new Treatment();
        $form = $this->createForm('AppBundle\Form\TreatmentType', $treatment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($treatment);
            $em->flush();

            return $this->redirectToRoute('treatment_show', array('id' => $treatment->getId()));
        }

        return $this->render('treatment/new.html.twig', array(
            'treatment' => $treatment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a treatment entity.
     *
     * @Route("/{id}", name="treatment_show")
     * @Method("GET")
     */
    public function showAction(Treatment $treatment)
    {
        $deleteForm = $this->createDeleteForm($treatment);

        return $this->render('treatment/show.html.twig', array(
            'treatment' => $treatment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing treatment entity.
     *
     * @Route("/{id}/edit", name="treatment_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Treatment $treatment)
    {
        $deleteForm = $this->createDeleteForm($treatment);
        $editForm = $this->createForm('AppBundle\Form\TreatmentType', $treatment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('treatment_edit', array('id' => $treatment->getId()));
        }

        return $this->render('treatment/edit.html.twig', array(
            'treatment' => $treatment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a treatment entity.
     *
     * @Route("/{id}", name="treatment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Treatment $treatment)
    {
        $form = $this->createDeleteForm($treatment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($treatment);
            $em->flush();
        }

        return $this->redirectToRoute('treatment_index');
    }

    /**
     * Creates a form to delete a treatment entity.
     *
     * @param Treatment $treatment The treatment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Treatment $treatment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('treatment_delete', array('id' => $treatment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
