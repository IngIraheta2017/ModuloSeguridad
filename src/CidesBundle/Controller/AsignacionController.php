<?php

namespace CidesBundle\Controller;

use CidesBundle\Entity\Asignacion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Asignacion controller.
 *
 * @Route("asignacion")
 */
class AsignacionController extends Controller
{
    /**
     * Lists all asignacion entities.
     *
     * @Route("/", name="asignacion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $asignacions = $em->getRepository('CidesBundle:Asignacion')->findAll();

        return $this->render('asignacion/index.html.twig', array(
            'asignacions' => $asignacions,
        ));
    }

    /**
     * Creates a new asignacion entity.
     *
     * @Route("/new", name="asignacion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $asignacion = new Asignacion();
        $form = $this->createForm('CidesBundle\Form\AsignacionType', $asignacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($asignacion);
            $em->flush();

            return $this->redirectToRoute('asignacion_show', array('idAsignacion' => $asignacion->getIdasignacion()));
        }

        return $this->render('asignacion/new.html.twig', array(
            'asignacion' => $asignacion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a asignacion entity.
     *
     * @Route("/{idAsignacion}", name="asignacion_show")
     * @Method("GET")
     */
    public function showAction(Asignacion $asignacion)
    {
        $deleteForm = $this->createDeleteForm($asignacion);

        return $this->render('asignacion/show.html.twig', array(
            'asignacion' => $asignacion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing asignacion entity.
     *
     * @Route("/{idAsignacion}/edit", name="asignacion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Asignacion $asignacion)
    {
        $deleteForm = $this->createDeleteForm($asignacion);
        $editForm = $this->createForm('CidesBundle\Form\AsignacionType', $asignacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('asignacion_edit', array('idAsignacion' => $asignacion->getIdasignacion()));
        }

        return $this->render('asignacion/edit.html.twig', array(
            'asignacion' => $asignacion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a asignacion entity.
     *
     * @Route("/{idAsignacion}", name="asignacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Asignacion $asignacion)
    {
        $form = $this->createDeleteForm($asignacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($asignacion);
            $em->flush();
        }

        return $this->redirectToRoute('asignacion_index');
    }

    /**
     * Creates a form to delete a asignacion entity.
     *
     * @param Asignacion $asignacion The asignacion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Asignacion $asignacion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('asignacion_delete', array('idAsignacion' => $asignacion->getIdasignacion())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
