<?php

namespace CidesBundle\Controller;

use CidesBundle\Entity\Tipoderecurso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tipoderecurso controller.
 *
 * @Route("tipoderecurso")
 */
class TipoderecursoController extends Controller
{
    /**
     * Lists all tipoderecurso entities.
     *
     * @Route("/", name="tipoderecurso_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipoderecursos = $em->getRepository('CidesBundle:Tipoderecurso')->findAll();

        return $this->render('tipoderecurso/index.html.twig', array(
            'tipoderecursos' => $tipoderecursos,
        ));
    }

    /**
     * Creates a new tipoderecurso entity.
     *
     * @Route("/new", name="tipoderecurso_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tipoderecurso = new Tipoderecurso();
        $form = $this->createForm('CidesBundle\Form\TipoderecursoType', $tipoderecurso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoderecurso);
            $em->flush();

            return $this->redirectToRoute('tipoderecurso_show', array('idTipoderecurso' => $tipoderecurso->getIdtipoderecurso()));
        }

        return $this->render('tipoderecurso/new.html.twig', array(
            'tipoderecurso' => $tipoderecurso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipoderecurso entity.
     *
     * @Route("/{idTipoderecurso}", name="tipoderecurso_show")
     * @Method("GET")
     */
    public function showAction(Tipoderecurso $tipoderecurso)
    {
        $deleteForm = $this->createDeleteForm($tipoderecurso);

        return $this->render('tipoderecurso/show.html.twig', array(
            'tipoderecurso' => $tipoderecurso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipoderecurso entity.
     *
     * @Route("/{idTipoderecurso}/edit", name="tipoderecurso_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tipoderecurso $tipoderecurso)
    {
        $deleteForm = $this->createDeleteForm($tipoderecurso);
        $editForm = $this->createForm('CidesBundle\Form\TipoderecursoType', $tipoderecurso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipoderecurso_edit', array('idTipoderecurso' => $tipoderecurso->getIdtipoderecurso()));
        }

        return $this->render('tipoderecurso/edit.html.twig', array(
            'tipoderecurso' => $tipoderecurso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tipoderecurso entity.
     *
     * @Route("/{idTipoderecurso}", name="tipoderecurso_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tipoderecurso $tipoderecurso)
    {
        $form = $this->createDeleteForm($tipoderecurso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoderecurso);
            $em->flush();
        }

        return $this->redirectToRoute('tipoderecurso_index');
    }

    /**
     * Creates a form to delete a tipoderecurso entity.
     *
     * @param Tipoderecurso $tipoderecurso The tipoderecurso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipoderecurso $tipoderecurso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoderecurso_delete', array('idTipoderecurso' => $tipoderecurso->getIdtipoderecurso())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
