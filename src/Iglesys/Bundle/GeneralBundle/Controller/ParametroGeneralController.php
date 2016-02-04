<?php

namespace Iglesys\Bundle\GeneralBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Iglesys\Bundle\GeneralBundle\Entity\ParametroGeneral;
use Iglesys\Bundle\GeneralBundle\Form\ParametroGeneralType;

/**
 * ParametroGeneral controller.
 *
 */
class ParametroGeneralController extends Controller
{

    /**
     * Lists all ParametroGeneral entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IglesysGeneralBundle:ParametroGeneral')->findAll();

        return $this->render('IglesysGeneralBundle:ParametroGeneral:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ParametroGeneral entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ParametroGeneral();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('parametrogeneral_show', array('id' => $entity->getId())));
        }

        return $this->render('IglesysGeneralBundle:ParametroGeneral:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ParametroGeneral entity.
     *
     * @param ParametroGeneral $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ParametroGeneral $entity)
    {
        $form = $this->createForm(new ParametroGeneralType(), $entity, array(
            'action' => $this->generateUrl('parametrogeneral_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ParametroGeneral entity.
     *
     */
    public function newAction()
    {
        $entity = new ParametroGeneral();
        $form   = $this->createCreateForm($entity);

        return $this->render('IglesysGeneralBundle:ParametroGeneral:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ParametroGeneral entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IglesysGeneralBundle:ParametroGeneral')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ParametroGeneral entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IglesysGeneralBundle:ParametroGeneral:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ParametroGeneral entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IglesysGeneralBundle:ParametroGeneral')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ParametroGeneral entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IglesysGeneralBundle:ParametroGeneral:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ParametroGeneral entity.
    *
    * @param ParametroGeneral $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ParametroGeneral $entity)
    {
        $form = $this->createForm(new ParametroGeneralType(), $entity, array(
            'action' => $this->generateUrl('parametrogeneral_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ParametroGeneral entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IglesysGeneralBundle:ParametroGeneral')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ParametroGeneral entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('parametrogeneral_edit', array('id' => $id)));
        }

        return $this->render('IglesysGeneralBundle:ParametroGeneral:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ParametroGeneral entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IglesysGeneralBundle:ParametroGeneral')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ParametroGeneral entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('parametrogeneral'));
    }

    /**
     * Creates a form to delete a ParametroGeneral entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parametrogeneral_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
