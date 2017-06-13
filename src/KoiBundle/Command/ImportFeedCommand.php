<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 18.01.2017
 * Time: 14:02
 */

namespace KoiBundle\Command;

use KoiBundle\Entity\Component;
use KoiBundle\Entity\FeedComponent;
use KoiBundle\Entity\FeedSeason;
use KoiBundle\Entity\FeedElement;
use PHPExcel_IOFactory;
use KoiBundle\Entity\Distributor;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use KoiBundle\Entity\Feed;
use Exception;

class ImportFeedCommand extends ContainerAwareCommand

{
	protected function configure()
	{
		$this
			->setName('koi:import-feed')
			->setDescription('Import Excel document in database');
	}

	/**
	 * @param InputInterface $input
	 * @param OutputInterface $output
	 *
	 */
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		try {
			$fileName = '../file.xls';
			$objPHPExcel = PHPExcel_IOFactory::load($fileName);

			$select = $this->deleteAll();

			$i = 2;
			$oldIdDistributor = 0;

			while ($objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $i)->getValue() != "") {
				$idDistributor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(0, $i)->getValue();
				$nameDistributor = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(1, $i)->getValue();
				$nameImage = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(2, $i)->getValue();
				$idFeed = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(3, $i)->getValue();
				$nameFeed = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(4, $i)->getValue();
				$colorantFeed = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(29, $i)->getValue();
				$pelletMin = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(30, $i)->getValue();
				$pelletMax = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(31, $i)->getValue();
				$waterTemperatur = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(33, $i)->getValue();

				if($idDistributor != $oldIdDistributor) {
					$newDistributor = new Distributor();
					$newDistributor->setId($idDistributor);
					$newDistributor->setNameDistributor($nameDistributor);
					$newDistributor->setNameImage($nameImage);
					$select->persist($newDistributor);
					$select->flush();
				}

				$oldIdDistributor = $idDistributor;
				$distributorObj = $select->getRepository('KoiBundle:Distributor')->findOneById($idDistributor);

				$newFeed = new Feed();
				$newFeed->setId($idFeed);
				$newFeed->setNameFeed($nameFeed);
				$newFeed->setColorant($colorantFeed);
				$newFeed->setPelletSizeMin($pelletMin);
				$newFeed->setPelletSizeMax($pelletMax);
				$newFeed->setIdDistributor($distributorObj);
				$newFeed->setWaterTemperature($waterTemperatur);
				$select->persist($newFeed);
				$select->flush();
				$feedObj = $select->getRepository('KoiBundle:Feed')->findOneById($idFeed);

				$idElement = 1;

				// Import all elements (of cell 5 to cell 28)
				for($e = 5; $e <= 28; $e++) {
					$elementObj = $select->getRepository('KoiBundle:Element')->findOneById($idElement);
					$idElement++;
					$newFeedElement = new FeedElement();
					$element = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow($e, $i)->getValue();

					if ($element != "") {
						$newFeedElement->setIdElement($elementObj);
						$newFeedElement->setIdFeed($feedObj);
						$newFeedElement->setAmount($element);
						$select->persist($newFeedElement);
						$select->flush();
					}
				}

				// Import seasons of the year

				$seasons = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(32, $i)->getValue();

				if ($seasons != "") {
					$seasonsArray = explode(", ", $seasons);

					foreach ($seasonsArray as $seasonsArrayActive) {
						$idSeason = 0;
						switch ($seasonsArrayActive) {
							case "Frühling":
								$idSeason = 1;
								break;
							case "Sommer":
								$idSeason = 2;
								break;
							case "Herbst":
								$idSeason = 3;
								break;
							case "Winter":
								$idSeason = 4;
								break;
						}

						$seasonObj = $select->getRepository('KoiBundle:Season')->findOneByIdSeason($idSeason);
						$select = $this->getContainer()->get('doctrine')->getManager();

						$newFeedSeason = new FeedSeason();
						$newFeedSeason->setIdFeed($feedObj);
						$newFeedSeason->setIdSeason($seasonObj);
						$select->persist($newFeedSeason);
						$select->flush();
					}
				}

				// Import Components

				$components = $objPHPExcel->getActiveSheet()->getCellByColumnAndRow(34, $i)->getValue();

				if ($components != "") {
					$componentsArray = explode(", ", $components);

					foreach ($componentsArray as $componentArrayActive) {
						$repeat = false;
						$newComponent = new Component();
						$idOldComponent = new Component();

						$nowComponent = $select->getRepository('KoiBundle:Component')->findAll();

						foreach ($nowComponent as $nowComponentActive) {
							if ($nowComponentActive->getNameComponent() == $componentArrayActive) {
								$repeat = true;
								$idOldComponent = $nowComponentActive;
								break;
							}
						}

						if ($repeat == false) {
							$newComponent->setNameComponent($componentArrayActive);
							$select->persist($newComponent);
							$select->flush();
						}

						if ($repeat == true) {
							$newFeedComponent = new FeedComponent();
							$newFeedComponent->setIdFeed($feedObj);
							$newFeedComponent->setIdComponent($idOldComponent);
						} else {
							$newFeedComponent = new FeedComponent();
							$newFeedComponent->setIdFeed($feedObj);
							$newFeedComponent->setIdComponent($newComponent);
						}

						$select->persist($newFeedComponent);
						$select->flush();
					}
				}

				$i++;
			}

			$output->writeln('Did import!');
		}

		catch(Exception $e) {
			$logger = $this->getContainer()->get('logger');
			$logger->error($e);
		}
	}

	/**
	 * @return object
	 */
	protected function deleteAll()
	{
		$select = $this->getContainer()->get('doctrine')->getManager();

		$repositoryFeed = $select->getRepository('KoiBundle:Feed');
		$feed = $repositoryFeed->findAll();

		$repositoryFeedComponents = $select->getRepository('KoiBundle:FeedComponent');
		$feedComponents = $repositoryFeedComponents->findAll();

		$repositoryFeedElements = $select->getRepository('KoiBundle:FeedElement');
		$feedElements = $repositoryFeedElements->findAll();

		$repositoryFeedSeasons = $select->getRepository('KoiBundle:FeedSeason');
		$feedSeasons = $repositoryFeedSeasons->findAll();

		$repositoryDistributors = $select->getRepository('KoiBundle:Distributor');
		$feedDistributors = $repositoryDistributors->findAll();


		foreach ($feedComponents as $feedComponentActive) {
			$select->remove($feedComponentActive);
		}

		foreach ($feedElements as $feedElementActive) {
			$select->remove($feedElementActive);
		}

		foreach ($feedSeasons as $feedSeasonActive) {
			$select->remove($feedSeasonActive);
		}

		foreach ($feed as $feedActive) {
			$select->remove($feedActive);
		}

		foreach ($feedDistributors as $feedDistributorActive) {
			$select->remove($feedDistributorActive);
		}


		$select->flush();
		return $select;
	}
}