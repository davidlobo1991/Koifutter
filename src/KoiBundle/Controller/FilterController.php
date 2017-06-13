<?php

namespace KoiBundle\Controller;

use KoiBundle\Services\Seasons;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use KoiBundle\Services\Elements;
use Symfony\Component\HttpFoundation\Session\Session;

class FilterController extends Controller
{
    /**
     * Filter controller. Two different filters, first one, the attributes of the table feed with a select, and second
     * one the elements (created public attributes in the objects feed with all the elements and his amount
     * Four different filters values ->
     *  . -min, -max for the elements
     *  . -min-col, -max-col for the attributes (columns) of the table feed
     *  . -check for the checkbox
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function filterAction(Request $request)
    {
//        $session = new Session();
//        $session->clear();

        $select = $this->getDoctrine()->getManager();
        $filter = $request->query->all();

        // First time filter with the attributes of the table
        $feed = $select->getRepository('KoiBundle:Feed')->getFilter($filter);

        $elementsService = new Elements($select);
        $seasonsService = new Seasons($select);

        $feed = $this->arrayFeedElements($feed, $elementsService);
        $feed = $this->arrayFeedSeasons($feed, $seasonsService);

        $size_feed_array = count($feed);
        $feed = $this->filterRestFeed($size_feed_array, $filter, $feed);
		$requestNumPerPage = $request->query->get('num_feed');

		$requestNumPerPage == null ? $numPerPage = 5 : $numPerPage = $requestNumPerPage;

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $feed, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
			$numPerPage/*limit per page*/
        );

        return $this->render('KoiBundle:sites:index.html.twig',
            array(
                'feed' => $pagination,
                'elements' => $elementsService->getElements(),
				'num_per_page' => $numPerPage,
                'feedAll' => $feed,
                'feed_elements' => $elementsService->getFeedElements(),
                'seasons' => $seasonsService->getSeasons(),
                'feed_seasons' => $seasonsService->getFeedSeasons()
            ));
    }

    /**
     * Now filter through the table elements and delete of the array of objects the feed that don´t pass the filter .
     * @param $size_feed_array
     * @param $filter
     * @param $feed
     */

    private function filterRestFeed($size_feed_array, $filter, $feed)
    {
        for ($i = 0; $i <= $size_feed_array - 1; $i++) {
            foreach ($filter as $name_filter => $value_filter) {
                $name_filter_rank = substr($name_filter, 0, -4);
                $name_filter_check = str_replace("_", " ", substr($name_filter, 0, -6));

                if ((substr($name_filter, -3) == 'min')
                    && !empty($value_filter)
                    && ($feed[$i]->$name_filter_rank < $value_filter)
                ) {
                    unset($feed[$i]);
                    break;
                }

                if ((substr($name_filter, -3) == 'max')
                    && !empty($value_filter)
                    && ($feed[$i]->$name_filter_rank > $value_filter)
                ) {
                    unset($feed[$i]);
                    break;
                }

                if ((substr($name_filter, -5) == 'check')
                    && !empty($value_filter)
                    && ($feed[$i]->$name_filter_check == 0)
                ) {
                    unset($feed[$i]);
                    break;
                }

                if(($name_filter == 'spring'
                    || $name_filter == 'summer'
                    || $name_filter == 'autumn'
                    || $name_filter == 'winter')
                    && ($feed[$i]->$value_filter == 0)
                ) {
                    unset($feed[$i]);
                    break;
                }
            }
        }
        return $feed;
    }

    /**
     * Add attributes elements with his amount in the received objects feed
     * @param $feed
     * @param $elementsService
     */
    private function arrayFeedElements($feed, $elementsService)
    {
        foreach ($feed as $feedActive) {
            foreach ($elementsService->getElements() as $elementActive) {
                $nameElement = $elementActive->getNameElement();
                $feedActive->$nameElement = 0;

                foreach ($elementsService->getFeedElements() as $feed_elementActive) {
                    if ($feed_elementActive->getIdElement()->getId() == $elementActive->getId()
                        && $feed_elementActive->getIdFeed()->getId() == $feedActive->getId()
                    ) {
                        $feedActive->$nameElement = $feed_elementActive->getAmount();
                    }
                }
            }
        }

        return $feed;
    }

    /**
     * @param $feed
     * @param $seasonsService
     */
    private function arrayFeedSeasons($feed, $seasonsService)
    {
        foreach ($feed as $feedActive) {
            foreach ($seasonsService->getSeasons() as $seasonActive) {
                $nameSeason = $seasonActive->getNameSeason();
                $feedActive->$nameSeason = 0;

                foreach ($seasonsService->getFeedSeasons() as $feed_seasonsActive) {
                    if ($feed_seasonsActive->getIdSeason()->getId() == $seasonActive->getId()
                        && $feed_seasonsActive->getIdFeed()->getId() == $feedActive->getId()
                    ) {
                        $feedActive->$nameSeason = 1;
                    }
                }
            }
        }
        return $feed;
    }
}