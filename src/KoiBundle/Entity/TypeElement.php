<?php

namespace KoiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeElement
 *
 * @ORM\Table(name="type_elements")
 * @ORM\Entity(repositoryClass="KoiBundle\Repository\TypeElementRepository")
 */
class TypeElement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_type", type="string", length=50)
     */
    private $nameType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameType
     *
     * @param string $nameType
     *
     * @return TypeElement
     */
    public function setNameType($nameType)
    {
        $this->nameType = $nameType;

        return $this;
    }

    /**
     * Get nameType
     *
     * @return string
     */
    public function getNameType()
    {
        return $this->nameType;
    }

    public function __toString()
    {
        return strval($this->getNameType());
    }
}
