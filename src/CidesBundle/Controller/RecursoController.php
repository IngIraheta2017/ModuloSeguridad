<?php

namespace CidesBundle\Controller;

use CidesBundle\Entity\Recurso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Recurso controller.
 *
 * @Route("recurso")
 */
class RecursoController extends Controller
{
    /**
     * Lists all recurso entities.
     *
     * @Route("/", name="recurso_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $recursos = $em->getRepository('CidesBundle:Recurso')->findAll();

        return $this->render('recurso/index.html.twig', array(
            'recursos' => $recursos,
        ));
    }

    /**
     * Creates a new recurso entity.
     *
     * @Route("/new", name="recurso_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $recurso = new Recurso();
        $form = $this->createForm('CidesBundle\Form\RecursoType', $recurso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recurso);
            $em->flush();

            return $this->redirectToRoute('recurso_show', array('idRecurso' => $recurso->getIdrecurso()));
        }

        return $this->render('recurso/new.html.twig', array(
            'recurso' => $recurso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a recurso entity.
     *
     * @Route("/{idRecurso}", name="recurso_show")
     * @Method("GET")
     */
    public function showAction(Recurso $recurso)
    {
        $deleteForm = $this->createDeleteForm($recurso);

        return $this->render('recurso/show.html.twig', array(
            'recurso' => $recurso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing recurso entity.
     *
     * @Route("/{idRecurso}/edit", name="recurso_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Recurso $recurso)
    {
        $deleteForm = $this->createDeleteForm($recurso);
        $editForm = $this->createForm('CidesBundle\Form\RecursoType', $recurso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('recurso_edit', array('idRecurso' => $recurso->getIdrecurso()));
        }

        return $this->render('recurso/edit.html.twig', array(
            'recurso' => $recurso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a recurso entity.
     *
     * @Route("/{idRecurso}", name="recurso_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Recurso $recurso)
    {
        $form = $this->createDeleteForm($recurso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($recurso);
            $em->flush();
        }

        return $this->redirectToRoute('recurso_index');
    }

    /**
     * Creates a form to delete a recurso entity.
     *
     * @param Recurso $recurso The recurso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Recurso $recurso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recurso_delete', array('idRecurso' => $recurso->getIdrecurso())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
