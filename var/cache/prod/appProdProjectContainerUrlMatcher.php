<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // koi_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'koi_homepage');
            }

            return array (  '_controller' => 'KoiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'koi_homepage',);
        }

        // _details
        if (0 === strpos($pathinfo, '/details') && preg_match('#^/details/(?P<id_feed>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_details')), array (  '_controller' => 'KoiBundle\\Controller\\DetailsController::detailsAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            // _compare
            if ($pathinfo === '/compare') {
                return array (  '_controller' => 'KoiBundle\\Controller\\CompareController::compareAction',  '_route' => '_compare',);
            }

            // _session_checkbox
            if ($pathinfo === '/checkbox') {
                return array (  '_controller' => 'KoiBundle\\Controller\\CompareController::checkboxAction',  '_route' => '_session_checkbox',);
            }

        }

        // _search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'KoiBundle\\Controller\\SearchController::searchAction',  '_route' => '_search',);
        }

        // _filter
        if ($pathinfo === '/filter') {
            return array (  '_controller' => 'KoiBundle\\Controller\\FilterController::filterAction',  '_route' => '_filter',);
        }

        // _sorting
        if ($pathinfo === '/sorting') {
            return array (  '_controller' => 'KoiBundle\\Controller\\SortingController::sortingAction',  '_route' => '_sorting',);
        }

        // _paginate
        if ($pathinfo === '/paginate') {
            return array (  '_controller' => 'KoiBundle\\Controller\\DefaultController::paginateAction',  '_route' => '_paginate',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/koi')) {
                if (0 === strpos($pathinfo, '/admin/koi/feed')) {
                    // admin_koi_feed_list
                    if ($pathinfo === '/admin/koi/feed/list') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedAdminController::listAction',  '_sonata_admin' => 'feed.service',  '_sonata_name' => 'admin_koi_feed_list',  '_route' => 'admin_koi_feed_list',);
                    }

                    // admin_koi_feed_create
                    if ($pathinfo === '/admin/koi/feed/create') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedAdminController::createAction',  '_sonata_admin' => 'feed.service',  '_sonata_name' => 'admin_koi_feed_create',  '_route' => 'admin_koi_feed_create',);
                    }

                    // admin_koi_feed_batch
                    if ($pathinfo === '/admin/koi/feed/batch') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedAdminController::batchAction',  '_sonata_admin' => 'feed.service',  '_sonata_name' => 'admin_koi_feed_batch',  '_route' => 'admin_koi_feed_batch',);
                    }

                    // admin_koi_feed_edit
                    if (preg_match('#^/admin/koi/feed/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feed_edit')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedAdminController::editAction',  '_sonata_admin' => 'feed.service',  '_sonata_name' => 'admin_koi_feed_edit',));
                    }

                    // admin_koi_feed_delete
                    if (preg_match('#^/admin/koi/feed/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feed_delete')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedAdminController::deleteAction',  '_sonata_admin' => 'feed.service',  '_sonata_name' => 'admin_koi_feed_delete',));
                    }

                    // admin_koi_feed_show
                    if (preg_match('#^/admin/koi/feed/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feed_show')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedAdminController::showAction',  '_sonata_admin' => 'feed.service',  '_sonata_name' => 'admin_koi_feed_show',));
                    }

                    // admin_koi_feed_export
                    if ($pathinfo === '/admin/koi/feed/export') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedAdminController::exportAction',  '_sonata_admin' => 'feed.service',  '_sonata_name' => 'admin_koi_feed_export',  '_route' => 'admin_koi_feed_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/koi/element')) {
                    // admin_koi_element_create
                    if ($pathinfo === '/admin/koi/element/create') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ElementAdminController::createAction',  '_sonata_admin' => 'element.service',  '_sonata_name' => 'admin_koi_element_create',  '_route' => 'admin_koi_element_create',);
                    }

                    // admin_koi_element_batch
                    if ($pathinfo === '/admin/koi/element/batch') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ElementAdminController::batchAction',  '_sonata_admin' => 'element.service',  '_sonata_name' => 'admin_koi_element_batch',  '_route' => 'admin_koi_element_batch',);
                    }

                    // admin_koi_element_edit
                    if (preg_match('#^/admin/koi/element/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_element_edit')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ElementAdminController::editAction',  '_sonata_admin' => 'element.service',  '_sonata_name' => 'admin_koi_element_edit',));
                    }

                    // admin_koi_element_show
                    if (preg_match('#^/admin/koi/element/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_element_show')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ElementAdminController::showAction',  '_sonata_admin' => 'element.service',  '_sonata_name' => 'admin_koi_element_show',));
                    }

                    // admin_koi_element_export
                    if ($pathinfo === '/admin/koi/element/export') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ElementAdminController::exportAction',  '_sonata_admin' => 'element.service',  '_sonata_name' => 'admin_koi_element_export',  '_route' => 'admin_koi_element_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/koi/component')) {
                    // admin_koi_component_list
                    if ($pathinfo === '/admin/koi/component/list') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ComponentAdminController::listAction',  '_sonata_admin' => 'component.service',  '_sonata_name' => 'admin_koi_component_list',  '_route' => 'admin_koi_component_list',);
                    }

                    // admin_koi_component_create
                    if ($pathinfo === '/admin/koi/component/create') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ComponentAdminController::createAction',  '_sonata_admin' => 'component.service',  '_sonata_name' => 'admin_koi_component_create',  '_route' => 'admin_koi_component_create',);
                    }

                    // admin_koi_component_batch
                    if ($pathinfo === '/admin/koi/component/batch') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ComponentAdminController::batchAction',  '_sonata_admin' => 'component.service',  '_sonata_name' => 'admin_koi_component_batch',  '_route' => 'admin_koi_component_batch',);
                    }

                    // admin_koi_component_edit
                    if (preg_match('#^/admin/koi/component/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_component_edit')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ComponentAdminController::editAction',  '_sonata_admin' => 'component.service',  '_sonata_name' => 'admin_koi_component_edit',));
                    }

                    // admin_koi_component_delete
                    if (preg_match('#^/admin/koi/component/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_component_delete')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ComponentAdminController::deleteAction',  '_sonata_admin' => 'component.service',  '_sonata_name' => 'admin_koi_component_delete',));
                    }

                    // admin_koi_component_show
                    if (preg_match('#^/admin/koi/component/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_component_show')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ComponentAdminController::showAction',  '_sonata_admin' => 'component.service',  '_sonata_name' => 'admin_koi_component_show',));
                    }

                    // admin_koi_component_export
                    if ($pathinfo === '/admin/koi/component/export') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\ComponentAdminController::exportAction',  '_sonata_admin' => 'component.service',  '_sonata_name' => 'admin_koi_component_export',  '_route' => 'admin_koi_component_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/koi/season')) {
                    // admin_koi_season_list
                    if ($pathinfo === '/admin/koi/season/list') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\SeasonAdminController::listAction',  '_sonata_admin' => 'season.service',  '_sonata_name' => 'admin_koi_season_list',  '_route' => 'admin_koi_season_list',);
                    }

                    // admin_koi_season_create
                    if ($pathinfo === '/admin/koi/season/create') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\SeasonAdminController::createAction',  '_sonata_admin' => 'season.service',  '_sonata_name' => 'admin_koi_season_create',  '_route' => 'admin_koi_season_create',);
                    }

                    // admin_koi_season_batch
                    if ($pathinfo === '/admin/koi/season/batch') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\SeasonAdminController::batchAction',  '_sonata_admin' => 'season.service',  '_sonata_name' => 'admin_koi_season_batch',  '_route' => 'admin_koi_season_batch',);
                    }

                    // admin_koi_season_edit
                    if (preg_match('#^/admin/koi/season/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_season_edit')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\SeasonAdminController::editAction',  '_sonata_admin' => 'season.service',  '_sonata_name' => 'admin_koi_season_edit',));
                    }

                    // admin_koi_season_delete
                    if (preg_match('#^/admin/koi/season/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_season_delete')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\SeasonAdminController::deleteAction',  '_sonata_admin' => 'season.service',  '_sonata_name' => 'admin_koi_season_delete',));
                    }

                    // admin_koi_season_show
                    if (preg_match('#^/admin/koi/season/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_season_show')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\SeasonAdminController::showAction',  '_sonata_admin' => 'season.service',  '_sonata_name' => 'admin_koi_season_show',));
                    }

                    // admin_koi_season_export
                    if ($pathinfo === '/admin/koi/season/export') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\SeasonAdminController::exportAction',  '_sonata_admin' => 'season.service',  '_sonata_name' => 'admin_koi_season_export',  '_route' => 'admin_koi_season_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/koi/distributor')) {
                    // admin_koi_distributor_list
                    if ($pathinfo === '/admin/koi/distributor/list') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\DistributorAdminController::listAction',  '_sonata_admin' => 'distributor.service',  '_sonata_name' => 'admin_koi_distributor_list',  '_route' => 'admin_koi_distributor_list',);
                    }

                    // admin_koi_distributor_create
                    if ($pathinfo === '/admin/koi/distributor/create') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\DistributorAdminController::createAction',  '_sonata_admin' => 'distributor.service',  '_sonata_name' => 'admin_koi_distributor_create',  '_route' => 'admin_koi_distributor_create',);
                    }

                    // admin_koi_distributor_batch
                    if ($pathinfo === '/admin/koi/distributor/batch') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\DistributorAdminController::batchAction',  '_sonata_admin' => 'distributor.service',  '_sonata_name' => 'admin_koi_distributor_batch',  '_route' => 'admin_koi_distributor_batch',);
                    }

                    // admin_koi_distributor_edit
                    if (preg_match('#^/admin/koi/distributor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_distributor_edit')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\DistributorAdminController::editAction',  '_sonata_admin' => 'distributor.service',  '_sonata_name' => 'admin_koi_distributor_edit',));
                    }

                    // admin_koi_distributor_delete
                    if (preg_match('#^/admin/koi/distributor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_distributor_delete')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\DistributorAdminController::deleteAction',  '_sonata_admin' => 'distributor.service',  '_sonata_name' => 'admin_koi_distributor_delete',));
                    }

                    // admin_koi_distributor_show
                    if (preg_match('#^/admin/koi/distributor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_distributor_show')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\DistributorAdminController::showAction',  '_sonata_admin' => 'distributor.service',  '_sonata_name' => 'admin_koi_distributor_show',));
                    }

                    // admin_koi_distributor_export
                    if ($pathinfo === '/admin/koi/distributor/export') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\DistributorAdminController::exportAction',  '_sonata_admin' => 'distributor.service',  '_sonata_name' => 'admin_koi_distributor_export',  '_route' => 'admin_koi_distributor_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/koi/typeelement')) {
                    // admin_koi_typeelement_list
                    if ($pathinfo === '/admin/koi/typeelement/list') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\TypeElementAdminController::listAction',  '_sonata_admin' => 'type.element.service',  '_sonata_name' => 'admin_koi_typeelement_list',  '_route' => 'admin_koi_typeelement_list',);
                    }

                    // admin_koi_typeelement_batch
                    if ($pathinfo === '/admin/koi/typeelement/batch') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\TypeElementAdminController::batchAction',  '_sonata_admin' => 'type.element.service',  '_sonata_name' => 'admin_koi_typeelement_batch',  '_route' => 'admin_koi_typeelement_batch',);
                    }

                    // admin_koi_typeelement_edit
                    if (preg_match('#^/admin/koi/typeelement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_typeelement_edit')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\TypeElementAdminController::editAction',  '_sonata_admin' => 'type.element.service',  '_sonata_name' => 'admin_koi_typeelement_edit',));
                    }

                    // admin_koi_typeelement_show
                    if (preg_match('#^/admin/koi/typeelement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_typeelement_show')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\TypeElementAdminController::showAction',  '_sonata_admin' => 'type.element.service',  '_sonata_name' => 'admin_koi_typeelement_show',));
                    }

                    // admin_koi_typeelement_export
                    if ($pathinfo === '/admin/koi/typeelement/export') {
                        return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\TypeElementAdminController::exportAction',  '_sonata_admin' => 'type.element.service',  '_sonata_name' => 'admin_koi_typeelement_export',  '_route' => 'admin_koi_typeelement_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/koi/feed')) {
                    if (0 === strpos($pathinfo, '/admin/koi/feedelement')) {
                        // admin_koi_feedelement_list
                        if ($pathinfo === '/admin/koi/feedelement/list') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedElementAdminController::listAction',  '_sonata_admin' => 'feed.element.service',  '_sonata_name' => 'admin_koi_feedelement_list',  '_route' => 'admin_koi_feedelement_list',);
                        }

                        // admin_koi_feedelement_create
                        if ($pathinfo === '/admin/koi/feedelement/create') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedElementAdminController::createAction',  '_sonata_admin' => 'feed.element.service',  '_sonata_name' => 'admin_koi_feedelement_create',  '_route' => 'admin_koi_feedelement_create',);
                        }

                        // admin_koi_feedelement_batch
                        if ($pathinfo === '/admin/koi/feedelement/batch') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedElementAdminController::batchAction',  '_sonata_admin' => 'feed.element.service',  '_sonata_name' => 'admin_koi_feedelement_batch',  '_route' => 'admin_koi_feedelement_batch',);
                        }

                        // admin_koi_feedelement_edit
                        if (preg_match('#^/admin/koi/feedelement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feedelement_edit')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedElementAdminController::editAction',  '_sonata_admin' => 'feed.element.service',  '_sonata_name' => 'admin_koi_feedelement_edit',));
                        }

                        // admin_koi_feedelement_delete
                        if (preg_match('#^/admin/koi/feedelement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feedelement_delete')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedElementAdminController::deleteAction',  '_sonata_admin' => 'feed.element.service',  '_sonata_name' => 'admin_koi_feedelement_delete',));
                        }

                        // admin_koi_feedelement_show
                        if (preg_match('#^/admin/koi/feedelement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feedelement_show')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedElementAdminController::showAction',  '_sonata_admin' => 'feed.element.service',  '_sonata_name' => 'admin_koi_feedelement_show',));
                        }

                        // admin_koi_feedelement_export
                        if ($pathinfo === '/admin/koi/feedelement/export') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedElementAdminController::exportAction',  '_sonata_admin' => 'feed.element.service',  '_sonata_name' => 'admin_koi_feedelement_export',  '_route' => 'admin_koi_feedelement_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/koi/feedcomponent')) {
                        // admin_koi_feedcomponent_list
                        if ($pathinfo === '/admin/koi/feedcomponent/list') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedComponentAdminController::listAction',  '_sonata_admin' => 'feed.component.service',  '_sonata_name' => 'admin_koi_feedcomponent_list',  '_route' => 'admin_koi_feedcomponent_list',);
                        }

                        // admin_koi_feedcomponent_create
                        if ($pathinfo === '/admin/koi/feedcomponent/create') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedComponentAdminController::createAction',  '_sonata_admin' => 'feed.component.service',  '_sonata_name' => 'admin_koi_feedcomponent_create',  '_route' => 'admin_koi_feedcomponent_create',);
                        }

                        // admin_koi_feedcomponent_batch
                        if ($pathinfo === '/admin/koi/feedcomponent/batch') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedComponentAdminController::batchAction',  '_sonata_admin' => 'feed.component.service',  '_sonata_name' => 'admin_koi_feedcomponent_batch',  '_route' => 'admin_koi_feedcomponent_batch',);
                        }

                        // admin_koi_feedcomponent_edit
                        if (preg_match('#^/admin/koi/feedcomponent/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feedcomponent_edit')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedComponentAdminController::editAction',  '_sonata_admin' => 'feed.component.service',  '_sonata_name' => 'admin_koi_feedcomponent_edit',));
                        }

                        // admin_koi_feedcomponent_delete
                        if (preg_match('#^/admin/koi/feedcomponent/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feedcomponent_delete')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedComponentAdminController::deleteAction',  '_sonata_admin' => 'feed.component.service',  '_sonata_name' => 'admin_koi_feedcomponent_delete',));
                        }

                        // admin_koi_feedcomponent_show
                        if (preg_match('#^/admin/koi/feedcomponent/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feedcomponent_show')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedComponentAdminController::showAction',  '_sonata_admin' => 'feed.component.service',  '_sonata_name' => 'admin_koi_feedcomponent_show',));
                        }

                        // admin_koi_feedcomponent_export
                        if ($pathinfo === '/admin/koi/feedcomponent/export') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedComponentAdminController::exportAction',  '_sonata_admin' => 'feed.component.service',  '_sonata_name' => 'admin_koi_feedcomponent_export',  '_route' => 'admin_koi_feedcomponent_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/koi/feedseason')) {
                        // admin_koi_feedseason_list
                        if ($pathinfo === '/admin/koi/feedseason/list') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedSeasonAdminController::listAction',  '_sonata_admin' => 'feed.season.service',  '_sonata_name' => 'admin_koi_feedseason_list',  '_route' => 'admin_koi_feedseason_list',);
                        }

                        // admin_koi_feedseason_create
                        if ($pathinfo === '/admin/koi/feedseason/create') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedSeasonAdminController::createAction',  '_sonata_admin' => 'feed.season.service',  '_sonata_name' => 'admin_koi_feedseason_create',  '_route' => 'admin_koi_feedseason_create',);
                        }

                        // admin_koi_feedseason_batch
                        if ($pathinfo === '/admin/koi/feedseason/batch') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedSeasonAdminController::batchAction',  '_sonata_admin' => 'feed.season.service',  '_sonata_name' => 'admin_koi_feedseason_batch',  '_route' => 'admin_koi_feedseason_batch',);
                        }

                        // admin_koi_feedseason_edit
                        if (preg_match('#^/admin/koi/feedseason/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feedseason_edit')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedSeasonAdminController::editAction',  '_sonata_admin' => 'feed.season.service',  '_sonata_name' => 'admin_koi_feedseason_edit',));
                        }

                        // admin_koi_feedseason_delete
                        if (preg_match('#^/admin/koi/feedseason/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feedseason_delete')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedSeasonAdminController::deleteAction',  '_sonata_admin' => 'feed.season.service',  '_sonata_name' => 'admin_koi_feedseason_delete',));
                        }

                        // admin_koi_feedseason_show
                        if (preg_match('#^/admin/koi/feedseason/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_koi_feedseason_show')), array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedSeasonAdminController::showAction',  '_sonata_admin' => 'feed.season.service',  '_sonata_name' => 'admin_koi_feedseason_show',));
                        }

                        // admin_koi_feedseason_export
                        if ($pathinfo === '/admin/koi/feedseason/export') {
                            return array (  '_controller' => 'KoiBundle\\Controller\\Admin\\FeedSeasonAdminController::exportAction',  '_sonata_admin' => 'feed.season.service',  '_sonata_name' => 'admin_koi_feedseason_export',  '_route' => 'admin_koi_feedseason_export',);
                        }

                    }

                }

            }

            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
