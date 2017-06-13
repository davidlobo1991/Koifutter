<?php

namespace KoiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opinion
 *
 * @ORM\Table(name="opinions")
 * @ORM\Entity(repositoryClass="KoiBundle\Repository\OpinionRepository")
 */
class Opinion
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="commentar", type="string", length=255)
     */
    private $commentar;

    /**
     * @var int
     *
     * @ORM\Column(name="valuation", type="smallint")
     */
    private $valuation;

    /**
     * @ORM\ManyToOne(targetEntity="Feed", inversedBy="opinions")
     * @ORM\JoinColumn(name="id_feed", referencedColumnName="id")
     */
    private $idFeed;


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
     * Set name
     *
     * @param string $name
     *
     * @return Opinion
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Opinion
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set commentar
     *
     * @param string $commentar
     *
     * @return Opinion
     */
    public function setCommentar($commentar)
    {
        $this->commentar = $commentar;

        return $this;
    }

    /**
     * Get commentar
     *
     * @return string
     */
    public function getCommentar()
    {
        return $this->commentar;
    }

    /**
     * Set valuation
     *
     * @param integer $valuation
     *
     * @return Opinion
     */
    public function setValuation($valuation)
    {
        $this->valuation = $valuation;

        return $this;
    }

    /**
     * Get valuation
     *
     * @return int
     */
    public function getValuation()
    {
        return $this->valuation;
    }

    /**
     * Set idFeed
     *
     * @param integer $idFeed
     *
     * @return Opinion
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
}
