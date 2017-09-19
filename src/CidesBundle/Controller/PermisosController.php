<?php

namespace CidesBundle\Controller;

use CidesBundle\Entity\Permisos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Permiso controller.
 *
 * @Route("permisos")
 */
class PermisosController extends Controller
{
    /**
     * Lists all permiso entities.
     *
     * @Route("/", name="permisos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $permisos = $em->getRepository('CidesBundle:Permisos')->findAll();

        return $this->render('permisos/index.html.twig', array(
            'permisos' => $permisos,
        ));
    }

    /**
     * Creates a new permiso entity.
     *
     * @Route("/new", name="permisos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $permiso = new Permiso();
        $form = $this->createForm('CidesBundle\Form\PermisosType', $permiso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($permiso);
            $em->flush();

            return $this->redirectToRoute('permisos_show', array('idPermisos' => $permiso->getIdpermisos()));
        }

        return $this->render('permisos/new.html.twig', array(
            'permiso' => $permiso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a permiso entity.
     *
     * @Route("/{idPermisos}", name="permisos_show")
     * @Method("GET")
     */
    public function showAction(Permisos $permiso)
    {
        $deleteForm = $this->createDeleteForm($permiso);

        return $this->render('permisos/show.html.twig', array(
            'permiso' => $permiso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing permiso entity.
     *
     * @Route("/{idPermisos}/edit", name="permisos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Permisos $permiso)
    {
        $deleteForm = $this->createDeleteForm($permiso);
        $editForm = $this->createForm('CidesBundle\Form\PermisosType', $permiso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('permisos_edit', array('idPermisos' => $permiso->getIdpermisos()));
        }

        return $this->render('permisos/edit.html.twig', array(
            'permiso' => $permiso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a permiso entity.
     *
     * @Route("/{idPermisos}", name="permisos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Permisos $permiso)
    {
        $form = $this->createDeleteForm($permiso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($permiso);
            $em->flush();
        }

        return $this->redirectToRoute('permisos_index');
    }

    /**
     * Creates a form to delete a permiso entity.
     *
     * @param Permisos $permiso The permiso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Permisos $permiso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('permisos_delete', array('idPermisos' => $permiso->getIdpermisos())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
