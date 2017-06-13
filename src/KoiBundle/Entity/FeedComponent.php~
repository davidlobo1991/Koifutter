<?php

namespace KoiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FeedComponent
 *
 * @ORM\Table(name="feed_components")
 * @ORM\Entity(repositoryClass="KoiBundle\Repository\FeedComponentRepository")
 */
class FeedComponent
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Feed", inversedBy="components", cascade={"persist"})
     * @ORM\JoinColumn(name="id_feed", referencedColumnName="id", onDelete="CASCADE")
     */
    private $idFeed;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Component", inversedBy="feed", cascade={"persist"})
     * @ORM\JoinColumn(name="id_component", referencedColumnName="id", onDelete="CASCADE")
     */

    private $idComponent;


	/**
     * Set idFeed
     *
     * @param integer $idFeed
     *
     * @return FeedComponent
     */
    public function setIdFeed($idFeed)
    {
        $this->idFeed = $idFeed;

        return $this;
    }

    /**
     * Get idFeed
     *
     * @return int
     */
    public function getIdFeed()
    {
        return $this->idFeed;
    }

    /**
     * Set idComponent
     *
     * @param integer $idComponent
     *
     * @return FeedComponent
     */
    public function setIdComponent($idComponent)
    {
        $this->idComponent = $idComponent;

        return $this;
    }

    /**
     * Get idComponent
     *
     * @return int
     */
    public function getIdComponent()
    {
        return $this->idComponent;
    }
}
