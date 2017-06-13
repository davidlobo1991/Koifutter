<?php

namespace KoiBundle\Services;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * Class JSONService
 * @package KoiBundle\Services
 */

class JSONService
{
	private $serializer;

	/**
	 * @return Serializer
	 */
	public function getSerializer()
	{
		return $this->serializer;
	}

	/**
	 * @param Serializer $serializer
	 */
	public function setSerializer($serializer)
	{
		$this->serializer = $serializer;
	}

	public function __construct(){
		$encoders = array(new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
		$this->serializer = new Serializer($normalizers, $encoders);
	}
}