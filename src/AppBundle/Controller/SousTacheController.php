<?php

namespace AppBundle\Controller;

use AppBundle\Entity\SousTache;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Soustache controller.
 *
 * @Route("soustache")
 */
class SousTacheController extends Controller
{
    /**
     * Lists all sousTache entities.
     *
     * @Route("/", name="soustache_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sousTaches = $em->getRepository('AppBundle:SousTache')->findAll();

        return $this->render('soustache/index.html.twig', array(
            'sousTaches' => $sousTaches,
        ));
    }

    /**
     * Creates a new sousTache entity.
     *
     * @Route("/new", name="soustache_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sousTache = new Soustache();
        $form = $this->createForm('AppBundle\Form\SousTacheType', $sousTache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sousTache);
            $em->flush($sousTache);
        $referer = $this->getRequest()->headers->get('referer');
        return $this->redirect($referer);
        }

        return $this->render('soustache/new.html.twig', array(
            'sousTache' => $sousTache,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sousTache entity.
     *
     * @Route("/{id}", name="soustache_show")
     * @Method("GET")
     */
    public function showAction(SousTache $sousTache)
    {
        $deleteForm = $this->createDeleteForm($sousTache);

        return $this->render('soustache/show.html.twig', array(
            'sousTache' => $sousTache,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sousTache entity.
     *
     * @Route("/{id}/edit", name="soustache_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SousTache $sousTache)
    {
        $deleteForm = $this->createDeleteForm($sousTache);
        $editForm = $this->createForm('AppBundle\Form\SousTacheType', $sousTache);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

         $referer = $this->getRequest()->headers->get('referer');
        return $this->redirect($referer);
        }

        return $this->render('soustache/edit.html.twig', array(
            'sousTache' => $sousTache,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sousTache entity.
     *
     * @Route("/{id}", name="soustache_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, SousTache $sousTache)
    {
        $form = $this->createDeleteForm($sousTache);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sousTache);
            $em->flush($sousTache);
        }

        return $this->redirectToRoute('soustache_index');
    }

    /**
     * Creates a form to delete a sousTache entity.
     *
     * @param SousTache $sousTache The sousTache entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(SousTache $sousTache)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('soustache_delete', array('id' => $sousTache->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Dellete with ajax
     *
     * @Route("/{id}/delete", name="delete_soustache")
     * @Method({"GET", "POST"})
     */
    public function removeAction(SousTache $sousTache)
    {
      
        $em = $this->getDoctrine()->getManager();
        $em->remove($sousTache);
        $em->flush();
        $referer = $this->getRequest()->headers->get('referer');
        return $this->redirect($referer);
    }
}
