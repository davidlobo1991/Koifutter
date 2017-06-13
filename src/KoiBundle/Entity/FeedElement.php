<?php

namespace KoiBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * FeedElement
 *
 * @ORM\Table(name="feed_elements")
 * @ORM\Entity(repositoryClass="KoiBundle\Repository\FeedElementRepository")
 */
class FeedElement
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Feed", inversedBy="elements")
     * @ORM\JoinColumn(name="id_feed", referencedColumnName="id",  onDelete="CASCADE")
     */
    private $idFeed;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Element", inversedBy="feed")
	 * @ORM\JoinColumn(name="id_element", referencedColumnName="id", onDelete="CASCADE")
     */
    private $idElement;


    /**
     * @ORM\Column(type="float")
     */
    private $amount;

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return FeedElement
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set idFeed
     *
     * @param \KoiBundle\Entity\Feed $idFeed
     *
     * @return FeedElement
     */
    public function setIdFeed(\KoiBundle\Entity\Feed $idFeed)
    {
        $this->idFeed = $idFeed;

        return $this;
    }

    /**
     * Get idFeed
     *
     * @return \KoiBundle\Entity\Feed
     */
    public function getIdFeed()
    {
        return $this->idFeed;
    }

    /**
     * Set idElement
     *
     * @param \KoiBundle\Entity\Element $idElement
     *
     * @return FeedElement
     */
    public function setIdElement(\KoiBundle\Entity\Element $idElement)
    {
        $this->idElement = $idElement;

        return $this;
    }

    /**
     * Get idElement
     *
     * @return \KoiBundle\Entity\Element
     */
    public function getIdElement()
    {
        return $this->idElement;
    }


}
