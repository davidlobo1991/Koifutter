<?php

namespace KoiBundle\Services;

/**
 * Class Components
 * @package KoiBundle\Services
 */

class Components
{
	private $components;
	private $feed_components;

	public function __construct($select){
		$repositoryComponents = $select->getRepository('KoiBundle:Component');
		$components = $repositoryComponents->findAll();
		$repositoryFeedComponents = $select->getRepository('KoiBundle:FeedComponents');
		$feed_components = $repositoryFeedComponents->findAll();
		$this->elements = $components;
		$this->feed_elements = $feed_components;
	}

	/**
	 * @return mixed
	 */
	public function getComponents()
	{
		return $this->components;
	}

	/**
	 * @param mixed $components
	 */
	public function setComponents($components)
	{
		$this->elements = $components;
	}

	/**
	 * @return mixed
	 */
	public function getFeedComponents()
	{
		return $this->feed_components;
	}

	/**
	 * @param mixed $feed_components
	 */
	public function setFeedElements($feed_components)
	{
		$this->$feed_components = $feed_components;
	}
}