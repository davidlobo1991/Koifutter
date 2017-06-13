<?php

namespace KoiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use KoiBundle\Services\Elements;
use KoiBundle\Services\Seasons;

class SortingController extends Controller
{

    /**
     * Sorting controller. Two different sort method, first one, the attributes of the table feed with a select (order by),
     * and second on the elements (created public attributes in the objects feed with all the elements and his amount)
     *
     * @param Request $request
     * @throws \Exception
	 * @return \Symfony\Component\HttpFoundation\Response
     */

    public function sortingAction(Request $request) {
        $select = $this->getDoctrine()->getManager();

        $id_feed = $request->query->get("id_feed");
        $array_feed = json_decode($id_feed);

        $filter = $request->query->get("list-order");
        if ($filter == null) $filter = 'nameFeed-asc-col';

        $feed = $select->getRepository('KoiBundle:Feed')->getOrder($filter, $array_feed);

        $elementsService = new Elements($select);
        $seasonsService = new Seasons($select);
        $feed = $this->orderFeedwithCol($filter, $feed, $elementsService);
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
     * @param $filter
     * @param $feed
     * @param $elementsService
     * @return mixed
     */
    private function orderFeedwithCol($filter, $feed, $elementsService)
    {
        if (substr($filter, -3) != 'col') {
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

            $firstLine = strpos($filter, '-');
            $sortBy = substr($filter, 0, $firstLine);

            if (substr($filter, -3) == "asc") {
                uasort($feed, function ($a, $b) use ($sortBy) {
                    return $a->$sortBy - $b->$sortBy;
                });
                return $feed;
            } elseif (substr($filter, -3) == "des") {
                uasort($feed, function ($a, $b) use ($sortBy) {
                    return $b->$sortBy - $a->$sortBy;
                });
                return $feed;
            }
            return $feed;
        }
        return $feed;
    }
}
