<?php

namespace CidesBundle\Controller;

use CidesBundle\Entity\Resultado;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Resultado controller.
 *
 * @Route("resultado")
 */
class ResultadoController extends Controller
{
    /**
     * Lists all resultado entities.
     *
     * @Route("/", name="resultado_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $resultados = $em->getRepository('CidesBundle:Resultado')->findAll();

        return $this->render('resultado/index.html.twig', array(
            'resultados' => $resultados,
        ));
    }

    /**
     * Creates a new resultado entity.
     *
     * @Route("/new", name="resultado_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $resultado = new Resultado();
        $form = $this->createForm('CidesBundle\Form\ResultadoType', $resultado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($resultado);
            $em->flush();

            return $this->redirectToRoute('resultado_show', array('idResultado' => $resultado->getIdresultado()));
        }

        return $this->render('resultado/new.html.twig', array(
            'resultado' => $resultado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a resultado entity.
     *
     * @Route("/{idResultado}", name="resultado_show")
     * @Method("GET")
     */
    public function showAction(Resultado $resultado)
    {
        $deleteForm = $this->createDeleteForm($resultado);

        return $this->render('resultado/show.html.twig', array(
            'resultado' => $resultado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing resultado entity.
     *
     * @Route("/{idResultado}/edit", name="resultado_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Resultado $resultado)
    {
        $deleteForm = $this->createDeleteForm($resultado);
        $editForm = $this->createForm('CidesBundle\Form\ResultadoType', $resultado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('resultado_edit', array('idResultado' => $resultado->getIdresultado()));
        }

        return $this->render('resultado/edit.html.twig', array(
            'resultado' => $resultado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a resultado entity.
     *
     * @Route("/{idResultado}", name="resultado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Resultado $resultado)
    {
        $form = $this->createDeleteForm($resultado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($resultado);
            $em->flush();
        }

        return $this->redirectToRoute('resultado_index');
    }

    /**
     * Creates a form to delete a resultado entity.
     *
     * @param Resultado $resultado The resultado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Resultado $resultado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('resultado_delete', array('idResultado' => $resultado->getIdresultado())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
