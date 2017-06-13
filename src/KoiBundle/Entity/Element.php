<?php

namespace KoiBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Element
 *
 * @ORM\Table(name="elements")
 * @ORM\Entity(repositoryClass="KoiBundle\Repository\ElementRepository")
 */
class Element
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_element", type="string", length=50)
     */
    private $nameElement;

    /**
     * @var string
     *
     * @ORM\Column(name="scale_element", type="string", length=30)
     */
    private $scaleElement;

    /**
     * @ORM\ManyToOne(targetEntity="TypeElement")
     * @ORM\JoinColumn(name="id_type", referencedColumnName="id")
     */
    private $idType;

	/**
	 * @ORM\OneToMany(targetEntity="FeedElement", mappedBy="idElement", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
    private $feed;

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
     * Set nameElement
     *
     * @param string $nameElement
     *
     * @return Element
     */
    public function setNameElement($nameElement)
    {
        $this->nameElement = $nameElement;

        return $this;
    }

    /**
     * Get nameElement
     *
     * @return string
     */
    public function getNameElement()
    {
        return $this->nameElement;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return Element
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }

    /**
     * Get idType
     *
     * @return int
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Set scaleElement
     *
     * @param string $scaleElement
     *
     * @return Element
     */
    public function setScaleElement($scaleElement)
    {
        $this->scaleElement = $scaleElement;

        return $this;
    }

    /**
     * Get scaleElement
     *
     * @return string
     */
    public function getScaleElement()
    {
        return $this->scaleElement;
    }

//    public function __toString()
//    {
//        return $this->getId() . ',' . $this->getNameElement() . ',' . $this->getIdType();
//    }

	public function __toString()
	{
		return strval($this->getNameElement());
	}

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->feed = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add feed
     *
     * @param \KoiBundle\Entity\FeedElement $feed
     *
     * @return Element
     */
    public function addFeed(\KoiBundle\Entity\FeedElement $feed)
    {
        $this->feed[] = $feed;

        return $this;
    }

    /**
     * Remove feed
     *
     * @param \KoiBundle\Entity\FeedElement $feed
     */
    public function removeFeed(\KoiBundle\Entity\FeedElement $feed)
    {
        $this->feed->removeElement($feed);
    }

    /**
     * Get feed
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFeed()
    {
        return $this->feed;
    }
}
