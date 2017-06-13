<?php

namespace KoiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="seasons")
 * @ORM\Entity(repositoryClass="KoiBundle\Repository\SeasonRepository")
 */
class Season
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_season", type="integer")
     * @ORM\Id
     */
    private $idSeason;

    /**
     * @var string
	 * @ORM\Column(name="name_season", type="string", length=10)
     */
    private $nameSeason;

	/**
	 * @ORM\OneToMany(targetEntity="FeedSeason", mappedBy="idSeason", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
	private $feed;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->idSeason;
    }

    /**
     * Set nameSeason
     *
     * @param string $nameSeason
     *
     * @return Season
     */
    public function setNameSeason($nameSeason)
    {
        $this->nameSeason = $nameSeason;

        return $this;
    }

    /**
     * Get nameSeason
     *
     * @return string
     */
    public function getNameSeason()
    {
        return $this->nameSeason;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Season
     */
    public function setIdSeason($id)
    {
        $this->idSeason = $id;

        return $this;
    }

    /**
     * Get idSeason
     *
     * @return integer
     */
    public function getIdSeason()
    {
        return $this->idSeason;
    }

	public function __toString()
	{
		return strval($this->getNameSeason());
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
     * @param \KoiBundle\Entity\FeedSeason $feed
     *
     * @return Season
     */
    public function addFeed(\KoiBundle\Entity\FeedSeason $feed)
    {
        $this->feed[] = $feed;

        return $this;
    }

    /**
     * Remove feed
     *
     * @param \KoiBundle\Entity\FeedSeason $feed
     */
    public function removeFeed(\KoiBundle\Entity\FeedSeason $feed)
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
