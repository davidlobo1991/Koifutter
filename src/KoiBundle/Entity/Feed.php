<?php

namespace KoiBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\JoinColumn;
use Sonata\CoreBundle\Validator\ErrorElement;

/**
 * Feed
 *
 * @ORM\Table(name="feed")
 * @ORM\Entity(repositoryClass="KoiBundle\Repository\FeedRepository")
 */
class Feed
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
     * @ORM\Column(name="name_feed", type="string", length=50)
     */
    private $nameFeed;

    /**
     * @var integer
     *
     * @ORM\Column(name="water_temperature", type="integer", nullable = true)
     */
    private $waterTemperature;

    /**
     * @var float
     *
     * @ORM\Column(name="pellet_size_min", type="float", nullable = true)
     */
    private $pelletSizeMin;

    /**
     * @var float
     *
     * @ORM\Column(name="pellet_size_max", type="float", nullable = true)
     */
    private $pelletSizeMax;

    /**
     * @var string
     *
     * @ORM\Column(name="colorant", type="string", length= 30, nullable = true)
     */

    private $colorant;


    /**
     * @ORM\ManyToOne(targetEntity="Distributor")
     * @ORM\JoinColumn(name="id_distributor", referencedColumnName="id", nullable=true, onDelete="SET NULL")
     */
    private $idDistributor;


	/**
	 * @ORM\OneToMany(targetEntity="FeedComponent", mappedBy="idFeed", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
    private $components;

	/**
	 * @ORM\OneToMany(targetEntity="FeedSeason", mappedBy="idFeed", cascade={"persist", "remove"}, orphanRemoval=true)
	 * @Assert\Valid
	 */
    private $seasons;

	/**
	 * @ORM\OneToMany(targetEntity="FeedElement", mappedBy="idFeed", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
    private $elements;


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
     * Set nameFeed
     *
     * @param string $nameFeed
     *
     * @return feed
     */
    public function setNameFeed($nameFeed)
    {
        $this->nameFeed = $nameFeed;

        return $this;
    }

    /**
     * Get nameFeed
     *
     * @return string
     */
    public function getNameFeed()
    {
        return $this->nameFeed;
    }

    /**
     * Set waterTemperature
     *
     * @param integer $waterTemperature
     *
     * @return feed
     */
    public function setWaterTemperature($waterTemperature)
    {
        $this->waterTemperature = $waterTemperature;

        return $this;
    }

    /**
     * Get waterTemperature
     *
     * @return int
     */
    public function getWaterTemperature()
    {
        return $this->waterTemperature;
    }

    /**
     * Set idDistributor
     *
     * @param integer $idDistributor
     *
     * @return feed
     */
    public function setIdDistributor($idDistributor)
    {
        $this->idDistributor = $idDistributor;

        return $this;
    }

    /**
     * Get idDistributor
     *
     * @return int
     */
    public function getIdDistributor()
    {
        return $this->idDistributor;
    }

    /**
     * Set pelletSizeMin
     *
     * @param float $pelletSizeMin
     *
     * @return Feed
     */
    public function setPelletSizeMin($pelletSizeMin)
    {
        $this->pelletSizeMin = $pelletSizeMin;

        return $this;
    }

    /**
     * Get pelletSizeMin
     *
     * @return float
     */
    public function getPelletSizeMin()
    {
        return $this->pelletSizeMin;
    }

    /**
     * Set pelletSizeMax
     *
     * @param float $pelletSizeMax
     *
     * @return Feed
     */
    public function setPelletSizeMax($pelletSizeMax)
    {
        $this->pelletSizeMax = $pelletSizeMax;

        return $this;
    }

    /**
     * Get pelletSizeMax
     *
     * @return float
     */
    public function getPelletSizeMax()
    {
        return $this->pelletSizeMax;
    }

    /**
     * Set colorant
     *
     * @param string $colorant
     *
     * @return Feed
     */
    public function setColorant($colorant)
    {
        $this->colorant = $colorant;

        return $this;
    }

    /**
     * Get colorant
     *
     * @return string
     */
    public function getColorant()
    {
        return $this->colorant;
    }

    /**
     * Set seasons
     *
     * @param string $seasons
     *
     * @return Feed
     */
    public function setSeasons($seasons)
    {
        $this->seasons = $seasons;

        return $this;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Feed
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
		$this->components = new ArrayCollection();
		$this->seasons = new ArrayCollection();
		$this->elements = new ArrayCollection();
    }

    /**
     * Remove component
     *
     * @param \KoiBundle\Entity\FeedComponent $component
     */
    public function removeComponent(\KoiBundle\Entity\FeedComponent $component)
    {
        $this->components->removeElement($component);
    }

    /**
     * Get components
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * Add component
     *
     * @param \KoiBundle\Entity\FeedComponent $component
     *
     * @return Feed
     */
    public function addComponent(FeedComponent $component)
    {
    	$component->setIdFeed($this);

        $this->components[] = $component;
        return $this;
    }

    /**
     * Add season
     *
     * @param \KoiBundle\Entity\FeedSeason $season
     *
     * @return Feed
     */
    public function addSeason(FeedSeason $season)
    {
		$season->setIdFeed($this);
		$this->seasons[] = $season;

        return $this;
    }

    /**
     * Remove season
     *
     * @param \KoiBundle\Entity\FeedSeason $season
     */
    public function removeSeason(\KoiBundle\Entity\FeedSeason $season)
    {
        $this->seasons->removeElement($season);
    }

    /**
     * Get seasons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeasons()
    {
        return $this->seasons;
    }

    /**
     * Add element
     *
     * @param \KoiBundle\Entity\FeedElement $element
     *
     * @return Feed
     */
    public function addElement(\KoiBundle\Entity\FeedElement $element)
    {
    	$element->setIdFeed($this);
        $this->elements[] = $element;

        return $this;
    }

    /**
     * Remove element
     *
     * @param \KoiBundle\Entity\FeedElement $element
     */
    public function removeElement(\KoiBundle\Entity\FeedElement $element)
    {
        $this->elements->removeElement($element);
    }

    /**
     * Get elements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getElements()
    {
        return $this->elements;
    }
}
