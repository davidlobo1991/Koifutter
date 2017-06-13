<?php

namespace KoiBundle\Controller;

use KoiBundle\Services\Seasons;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use KoiBundle\Services\Elements;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * Select all feed, elements and feed_elements (relational table)
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $select = $this->getDoctrine()->getManager();
        $repositoryFeed = $select->getRepository('KoiBundle:Feed');
        $feed = $repositoryFeed->findBy(array(), array('nameFeed' => 'ASC'));
        $elementsService = new Elements($select);
        $seasonsService = new Seasons($select);
        $requestNumPerPage = $request->query->get('num_feed');

		$requestNumPerPage == null ? $numPerPage = 5 : $numPerPage = $requestNumPerPage;

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $feed,
            $request->query->getInt('page', 1),
			$numPerPage
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
}
