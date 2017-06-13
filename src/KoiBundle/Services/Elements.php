<?php

namespace KoiBundle\Services;

/**
 * Class Elements
 * @package KoiBundle\Services
 */

class Elements
{
	private $elements;
	private $feed_elements;

	public function __construct($select){
		$repositoryElements = $select->getRepository('KoiBundle:Element');
		$elements = $repositoryElements->findAll();
		$repositoryFeedElements = $select->getRepository('KoiBundle:FeedElement');
		$feed_elements = $repositoryFeedElements->findAll();
		$this->elements = $elements;
		$this->feed_elements = $feed_elements;
	}

	/**
	 * @return mixed
	 */
	public function getElements()
	{
		return $this->elements;
	}

	/**
	 * @param mixed $elements
	 */
	public function setElements($elements)
	{
		$this->elements = $elements;
	}

	/**
	 * @return mixed
	 */
	public function getFeedElements()
	{
		return $this->feed_elements;
	}

	/**
	 * @param mixed $feed_elements
	 */
	public function setFeedElements($feed_elements)
	{
		$this->feed_elements = $feed_elements;
	}
}