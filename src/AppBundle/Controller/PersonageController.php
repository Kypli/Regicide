<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Personage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Personage controller.
 *
 * @Route("personage")
 */
class PersonageController extends Controller
{
    /**
     * Lists all personage entities.
     *
     * @Route("/", name="personage_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $personages = $em->getRepository('AppBundle:Personage')->findAll();

        return $this->render('personage/index.html.twig', array(
            'personages' => $personages,
        ));
    }

    /**
     * Creates a new personage entity.
     *
     * @Route("/new", name="personage_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $personage = new Personage();
        $form = $this->createForm('AppBundle\Form\PersonageType', $personage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personage);
            $em->flush();

            return $this->redirectToRoute('personage_show', array('id' => $personage->getId()));
        }

        return $this->render('personage/new.html.twig', array(
            'personage' => $personage,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a personage entity.
     *
     * @Route("/{id}", name="personage_show")
     * @Method("GET")
     */
    public function showAction(Personage $personage)
    {
        $deleteForm = $this->createDeleteForm($personage);

        return $this->render('personage/show.html.twig', array(
            'personage' => $personage,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing personage entity.
     *
     * @Route("/{id}/edit", name="personage_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Personage $personage)
    {
        $deleteForm = $this->createDeleteForm($personage);
        $editForm = $this->createForm('AppBundle\Form\PersonageType', $personage);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('personage_edit', array('id' => $personage->getId()));
        }

        return $this->render('personage/edit.html.twig', array(
            'personage' => $personage,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a personage entity.
     *
     * @Route("/{id}", name="personage_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Personage $personage)
    {
        $form = $this->createDeleteForm($personage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($personage);
            $em->flush();
        }

        return $this->redirectToRoute('personage_index');
    }

    /**
     * Creates a form to delete a personage entity.
     *
     * @param Personage $personage The personage entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Personage $personage)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personage_delete', array('id' => $personage->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
