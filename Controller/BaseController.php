<?php
/**
 * This file is part of archive.
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/6
 */

namespace Narmafzam\ArchiveBundle\Controller;

use Narmafzam\ArchiveBundle\Entity\Interfaces\AttachableInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\AttachmentInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class BaseController extends Controller
{
    protected $dataClass;
    protected $formTypeClass;

    /**
     * Controller constructor.
     * @param $dataClass
     * @param $formTypeClass
     */
    public function __construct($dataClass, $formTypeClass)
    {
        $this->dataClass = $dataClass;
        $this->formTypeClass = $formTypeClass;
    }

    /**
     *
     * @return string FQCN for the injected Entity
     */
    public function getDataClass()
    {
        return $this->dataClass;
    }

    /**
     * @return string FQCN for the injected FormType
     */
    public function getFormTypeClass()
    {
        return $this->formTypeClass;
    }

    /**
     * A wrapper for that of Doctrine with the same name
     *
     * @param null $name
     * @return \Doctrine\Common\Persistence\ObjectManager|object
     */
    public function getManager($name = null)
    {
        return $this->getDoctrine()->getManager();
    }

    /**
     * A wrapper class for that of Doctrine with the same name
     *
     * @param string $entityName The name of the entity
     * @return \Doctrine\ORM\EntityRepository The repository class.
     */
    public function getRepository($entityName)
    {
        $this->getEntityManager()->getRepository($entityName);
    }

    protected function storeAttachments(AttachableInterface $contract)
    {
        foreach ($contract->getAttachments() as $attachment) {

            if (!$attachment instanceof AttachmentInterface) {

                throw new \Exception(
                    sprintf(
                        "AttachableInterface:getAttachments should return ArrayCollection of AttachmentInterface, %s given",
                        is_object($attachment) ? get_class($attachment) : gettype($attachment)
                    )
                );
            }

            $file = $attachment->getLocation();

            if (!$file instanceof UploadedFile) {

                throw new \Exception(
                    sprintf(
                        "AttachmentInterface:getLocation should return instance of UploadedFile, %s given",
                        is_object($file) ? get_class($file) : gettype($file)
                    )
                );
            }

            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $file->move(
                $this->getParameter('content_directory') . '/attachments',
                $fileName
            );

            $attachment->setTitle($file->getClientOriginalName());
            $attachment->setLocation($fileName);
        }

        return $contract;
    }
}