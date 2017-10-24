<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller;

use Narmafzam\ArchiveBundle\Form\Common\Type\Generic\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
    protected $dataClass;
    protected $formTypeClass;
    protected $handler;

    /**
     * Controller constructor.
     * @param $dataClass
     * @param $formTypeClass
     * @param $handler
     */
    public function __construct($dataClass, $formTypeClass, $handler)
    {
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
     * @return $this|\Symfony\Component\Form\FormInterface
     */
    protected function getAddForm()
    {
        $form = $this->createForm($this->getFormTypeClass())
            ->add('add', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-default',
                    'label' => 'add'
                ),
            ));

        return $form;
    }

    /**
     * @return $this|\Symfony\Component\Form\FormInterface
     */
    protected function getUpdateForm()
    {
        $form = $this->createForm($this->getFormTypeClass())
            ->add('update', SubmitType::class, array(
                'attr' => array(
                    'class' => 'btn btn-default',
                    'label' => 'update',
                ),
            ));

        return $form;
    }

}