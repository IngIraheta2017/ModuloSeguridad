<?php

namespace CidesBundle\Controller;

use CidesBundle\Entity\Menuitem;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Menuitem controller.
 *
 * @Route("menuitem")
 */
class MenuitemController extends Controller
{
    /**
     * Lists all menuitem entities.
     *
     * @Route("/", name="menuitem_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $menuitems = $em->getRepository('CidesBundle:Menuitem')->findAll();

        return $this->render('menuitem/index.html.twig', array(
            'menuitems' => $menuitems,
        ));
    }

    /**
     * Creates a new menuitem entity.
     *
     * @Route("/new", name="menuitem_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $menuitem = new Menuitem();
        $form = $this->createForm('CidesBundle\Form\MenuitemType', $menuitem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($menuitem);
            $em->flush();

            return $this->redirectToRoute('menuitem_show', array('idMenuitem' => $menuitem->getIdmenuitem()));
        }

        return $this->render('menuitem/new.html.twig', array(
            'menuitem' => $menuitem,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a menuitem entity.
     *
     * @Route("/{idMenuitem}", name="menuitem_show")
     * @Method("GET")
     */
    public function showAction(Menuitem $menuitem)
    {
        $deleteForm = $this->createDeleteForm($menuitem);

        return $this->render('menuitem/show.html.twig', array(
            'menuitem' => $menuitem,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing menuitem entity.
     *
     * @Route("/{idMenuitem}/edit", name="menuitem_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Menuitem $menuitem)
    {
        $deleteForm = $this->createDeleteForm($menuitem);
        $editForm = $this->createForm('CidesBundle\Form\MenuitemType', $menuitem);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('menuitem_edit', array('idMenuitem' => $menuitem->getIdmenuitem()));
        }

        return $this->render('menuitem/edit.html.twig', array(
            'menuitem' => $menuitem,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a menuitem entity.
     *
     * @Route("/{idMenuitem}", name="menuitem_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Menuitem $menuitem)
    {
        $form = $this->createDeleteForm($menuitem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($menuitem);
            $em->flush();
        }

        return $this->redirectToRoute('menuitem_index');
    }

    /**
     * Creates a form to delete a menuitem entity.
     *
     * @param Menuitem $menuitem The menuitem entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Menuitem $menuitem)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('menuitem_delete', array('idMenuitem' => $menuitem->getIdmenuitem())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
