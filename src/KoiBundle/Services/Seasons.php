<?php

namespace KoiBundle\Services;

/**
 * Class Seasons
 * @package KoiBundle\Services
 */

class Seasons
{
	private $seasons;
	private $feed_seasons;

	public function __construct($select){
		$repositoryElements = $select->getRepository('KoiBundle:Season');
		$seasons = $repositoryElements->findAll();
		$repositoryFeedElements = $select->getRepository('KoiBundle:FeedSeason');
		$feed_seasons = $repositoryFeedElements->findAll();
		$this->seasons = $seasons;
		$this->feed_seasons = $feed_seasons;
	}

	/**
	 * @return mixed
	 */
	public function getSeasons()
	{
		return $this->seasons;
	}

	/**
	 * @param mixed $seasons
	 */
	public function setSeasons($seasons)
	{
		$this->elements = $seasons;
	}

	/**
	 * @return mixed
	 */
	public function getFeedSeasons()
	{
		return $this->feed_seasons;
	}

	/**
	 * @param mixed $feed_seasons
	 */
	public function setFeedSeasons($feed_seasons)
	{
		$this->feed_elements = $feed_seasons;
	}
}