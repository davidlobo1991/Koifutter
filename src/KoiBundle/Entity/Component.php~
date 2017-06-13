<?php

namespace KoiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Component
 *
 * @ORM\Table(name="components")
 * @ORM\Entity(repositoryClass="KoiBundle\Repository\ComponentsRepository")
 */
class Component
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
     * @ORM\Column(name="name_component", type="string", length=255, unique=true)
     */
    private $nameComponent;

	/**
	 * @ORM\OneToMany(targetEntity="FeedComponent", mappedBy="idComponent", cascade={"persist", "remove"}, orphanRemoval=true)
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
     * Set nameComponent
     *
     * @param string $nameComponent
     *
     * @return Component
     */
    public function setNameComponent($nameComponent)
    {
        $this->nameComponent = $nameComponent;

        return $this;
    }

    /**
     * Get nameComponent
     *
     * @return string
     */
    public function getNameComponent()
    {
        return $this->nameComponent;
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
     * @param \KoiBundle\Entity\FeedComponent $feed
     *
     * @return Component
     */
    public function addFeed(FeedComponent $feed)
    {
        $this->feed[] = $feed;

        return $this;
    }

    /**
     * Remove feed
     *
     * @param \KoiBundle\Entity\FeedComponent $feed
     */
    public function removeFeed(\KoiBundle\Entity\FeedComponent $feed)
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

	/**
	 * @return string
	 */
    public function __toString()
	{
		return strval($this->getNameComponent());
	}
}
