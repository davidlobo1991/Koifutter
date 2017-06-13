<?php

namespace KoiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use KoiBundle\Services\Elements;
use KoiBundle\Services\Seasons;
use Symfony\Component\HttpFoundation\Session\Session;

class SearchController extends Controller
{
    /**
     * Search feed like parameter. Select with %LIKE% (see more in the FeedRepository:getSearch())
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function searchAction(Request $request)
    {
//        $session = new Session();
//        $session->clear();

        $select = $this->getDoctrine()->getManager();
        $search = $request->query->get("txt-search");
        $feed = $select->getRepository('KoiBundle:Feed')->getSearch($search);
        $elementsService = new Elements($select);
        $seasonsService = new Seasons($select);
		$requestNumPerPage = $request->query->get('num_feed');

		$requestNumPerPage == null ? $numPerPage = 5 : $numPerPage = $requestNumPerPage;

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $feed,
            $request->query->getInt('page', 1),
			$numPerPage
        );

        return $this->render('KoiBundle:sites:index.html.twig',
            array(
                'feed' => $pagination,
                'elements' => $elementsService->getElements(),
                'feedAll' => $feed,
				'num_per_page' => $numPerPage,
				'feed_elements' => $elementsService->getFeedElements(),
                'seasons' => $seasonsService->getSeasons(),
                'feed_seasons' => $seasonsService->getFeedSeasons()
            ));
    }
}

