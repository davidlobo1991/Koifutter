<?php

namespace KoiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Distributor
 *
 * @ORM\Table(name="distributors")
 * @ORM\Entity(repositoryClass="KoiBundle\Repository\DistributorRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Distributor
{
	const SERVER_PATH_TO_IMAGE_FOLDER = '../web/images/content/';

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
     *
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name_distributor", type="string", length=255)
     */
    private $nameDistributor;

    /**
     * @var string
     *
     * @ORM\Column(name="name_image", type="string", length=255, nullable = true)
     */
    private $nameImage;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="updateDate", type="datetime")
	 */
	private $updated;

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
     * Set nameDistributor
     *
     * @param string $nameDistributor
     *
     * @return Distributor
     */
    public function setNameDistributor($nameDistributor)
    {
        $this->nameDistributor = $nameDistributor;

        return $this;
    }

    /**
     * Get nameDistributor
     *
     * @return string
     */
    public function getNameDistributor()
    {
        return $this->nameDistributor;
    }

    /**
     * Set nameImage
     *
     * @param string $nameImage
     *
     * @return Distributor
     */
    public function setNameImage($nameImage)
    {
        $this->nameImage = $nameImage;

        return $this;
    }

    /**
     * Get nameImage
     *
     * @return string
     */
    public function getNameImage()
    {
        return $this->nameImage;
    }


//    public function __toString()
//    {
//        return strval($this->getId());
//    }


    public function __toString()
    {
        return strval($this->getNameDistributor());
    }


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Distributor
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

	/**
	 * Unmapped property to handle file uploads
	 */
	private $file;

	/**
	 * Sets file.
	 *
	 * @param UploadedFile $file
	 */
	public function setFile(UploadedFile $file = null)
	{
		$this->file = $file;
	}

	/**
	 * Get file.
	 *
	 * @return UploadedFile
	 */
	public function getFile()
	{
		return $this->file;
	}

	/**
	 * Manages the copying of the file to the relevant place on the server
	 * @ORM\PrePersist()
	 * @ORM\PreUpdate()
	 */
	public function upload()
	{
		if (null === $this->getFile()) {
			return;
		}
		$this->getFile()->move(
			self::SERVER_PATH_TO_IMAGE_FOLDER,
			$this->getFile()->getClientOriginalName()
		);
		$this->nameImage = $this->getFile()->getClientOriginalName();
		$this->setFile(null);
	}

	/**
	 * Lifecycle callback to upload the file to the server
	 */
	public function lifecycleFileUpload()
	{
		$this->upload();
	}

	/**
	 * Updates the hash value to force the preUpdate and postUpdate events to fire
	 */
	public function refreshUpdated()
	{
		$this->setUpdated(new \DateTime());
	}


    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Distributor
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
