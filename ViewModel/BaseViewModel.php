<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel;

use function PHPSTORM_META\elementType;
use Symfony\Component\Routing\RouterInterface;

class BaseViewModel
{
    const FIELDS__SIMPLE_ORDERED = array(
        'id',
        'title',
        'subject',
        'createdAt',
        'updatedAt',
        'description',
        )
    ;

    /**
     * Displayed side-by-side with simple fields
     */
    const FIELDS__COLLECTION_SPECIAL_ORDERED = array(
        'attachments',
        )
    ;

    /**
     * Displayed down the page full width
     */
    const FIELDS__COLLECTION_ORDERED = array(
        'notes',
        'lines',
        )
    ;

    private $reflection;

    private $router;

    public function __construct(string $dataClass, RouterInterface $router)
    {
        $this->reflection = new \ReflectionClass($dataClass);
        $this->router = $router;
    }

    /**
     * @return \ReflectionClass
     */
    public function getReflection(): \ReflectionClass
    {
        return $this->reflection;
    }

    /**
     * @return RouterInterface
     */
    public function getRouter(): RouterInterface
    {
        return $this->router;
    }

    protected function getProperties()
    {
        return $this->getReflection()->getProperties();
    }

    protected function getFieldsSimpleSorted()
    {
        return self::FIELDS__SIMPLE_ORDERED;
    }

    protected function getFieldsCollectionSpecialSorted()
    {
        return self::FIELDS__COLLECTION_SPECIAL_ORDERED;
    }

    protected function getFieldsCollectionSorted()
    {
        return self::FIELDS__COLLECTION_ORDERED;
    }

    protected function getFieldsAllSorted()
    {
        return
            self::FIELDS__SIMPLE_ORDERED
            +
            self::FIELDS__COLLECTION_SPECIAL_ORDERED
            +
            self::FIELDS__COLLECTION_ORDERED
            ;
    }

    protected function sortFields(array $filter, array $fields)
    {
        return array_unique(array_merge(array_intersect($filter, $fields), $fields));
    }

    protected function getFields(array $filter = [])
    {
        $fields = array();

        if (empty($filter)) {

            foreach ($this->getProperties() as $property) {

                $fields[] = $property->getName();
            }
        } else {

            foreach ($this->getProperties() as $property) {

                $propertyName = $property->getName();

                if (in_array($propertyName, $filter)) {

                    $fields[] = $property->getName();
                }
            }

        }

        return $fields;
    }

    public function getFieldsAll()
    {
        $fields = $this->getFields($this->getFieldsAllSorted());

        return $this->sortFields($this->getFieldsAllSorted(), $fields);
    }

    public function getFieldsSimple()
    {
        $fields = $this->getFields($this->getFieldsSimpleSorted());

        return $this->sortFields($this->getFieldsSimpleSorted(), $fields);
    }

    public function getFieldsCollectionSpecial()
    {
        $fields = $this->getFields($this->getFieldsCollectionSpecialSorted());

        return $this->sortFields($this->getFieldsCollectionSpecialSorted(), $fields);
    }
    public function getFieldsCollection()
    {
        $fields = $this->getFields($this->getFieldsCollection());

        return $this->sortFields($this->getFieldsCollection(), $fields);
    }
}