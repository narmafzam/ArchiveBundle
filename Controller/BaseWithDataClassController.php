<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller;

use Narmafzam\ArchiveBundle\Form\Common\Type\Generic\SubmitType;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\HandlerInterface;
use Symfony\Component\Routing\RouterInterface;

class BaseWithDataClassController extends BaseController
{
    protected $dataClass;
    protected $formTypeClass;
    protected $handler;

    /**
     * Controller constructor.
     * @param string           $dataClass
     * @param string           $formTypeClass
     * @param HandlerInterface $handler
     * @param RouterInterface  $router
     */
    public function __construct($dataClass, $formTypeClass, HandlerInterface $handler, RouterInterface $router)
    {
        parent::__construct($router);

        $this->dataClass = $dataClass;
        $this->formTypeClass = $formTypeClass;
        $this->handler = $handler;
    }

    /**
     * @return string FQCN for the injected Entity
     */
    protected function getDataClass()
    {
        return $this->dataClass;
    }

    /**
     * @return string FQCN for the injected FormType
     */
    protected function getFormTypeClass()
    {
        return $this->formTypeClass;
    }

    /**
     * A wrapper for that of Doctrine with the same name
     *
     * @param null $name
     * @return \Doctrine\Common\Persistence\ObjectManager|object
     */
    protected function getManager($name = null)
    {
        return $this->getDoctrine()->getManager();
    }

    /**
     * A wrapper class for that of Doctrine with the same name
     *
     * @param string $entityName The name of the entity
     * @return \Doctrine\ORM\EntityRepository The repository class.
     */
    protected function getRepository($entityName)
    {
        $this->getManager()->getRepository($entityName);
    }

    /**
     * @param string $formTypeClass
     *
     * @return $this|\Symfony\Component\Form\FormInterface
     */
    protected function getAddForm($formTypeClass)
    {
        $form = $this->createForm($formTypeClass)
            ->add('add', SubmitType::class, array(
                'label' => 'archive.form.label.add',
                'attr' => array(
                    'class' => 'btn btn-primary btn-lg',
                ),
            ));

        return $form;
    }

    /**
     * @param string $formTypeClass
     * @param string $entity
     *
     * @return $this|\Symfony\Component\Form\FormInterface
     */
    protected function getUpdateForm($formTypeClass, $entity)
    {
        $form = $this->createForm($formTypeClass, $entity)
            ->add('update', SubmitType::class, array(
                'label' => 'archive.form.label.update',
                'attr' => array(
                    'class' => 'btn btn-primary btn-lg',
                ),
            ));

        return $form;
    }

}