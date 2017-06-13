<?php

namespace KoiBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DetailsController extends Controller
{

    /**
     * Select feed and elements of one specified feed
     * @param $id_feed
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function detailsAction($id_feed)
    {
        $select = $this->getDoctrine()->getManager();

        $repositoryFeed = $select->getRepository('KoiBundle:Feed');
        $feed = $repositoryFeed->findOneById($id_feed);

        $repositoryElements = $select->getRepository('KoiBundle:Element');
        $elements = $repositoryElements->findAll();

        $repositoryFeedElements = $select->getRepository('KoiBundle:FeedElement');
        $feed_elements = $repositoryFeedElements->getByFeed($id_feed);

        $repositorySeasons = $select->getRepository('KoiBundle:Season');
        $seasons = $repositorySeasons->findAll();

        $repositoryFeedSeasons = $select->getRepository('KoiBundle:FeedSeason');
        $feed_seasons = $repositoryFeedSeasons->getByFeed($id_feed);

        $repositoryComponents = $select->getRepository('KoiBundle:Component');
        $components = $repositoryComponents->findAll();

        $repositoryFeedComponents = $select->getRepository('KoiBundle:FeedComponent');
        $feed_components = $repositoryFeedComponents->getByFeed($id_feed);



        return $this->render('KoiBundle:sites:details.html.twig',
            array(
                'feed' => $feed,
                'elements' => $elements,
                'feed_elements' => $feed_elements,
                'seasons' => $seasons,
                'feed_seasons' => $feed_seasons,
                'components' => $components,
                'feed_components' => $feed_components
            ));
    }
}