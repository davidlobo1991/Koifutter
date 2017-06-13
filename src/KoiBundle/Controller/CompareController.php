<?php

namespace KoiBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use KoiBundle\Services\Elements;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CompareController extends Controller
{
    /**
     * Compare the checked feed. Ajax Request with form (ids to compare)
     *
     * @param Request $request
     * @return int|JsonResponse
     * @throws \Exception
     */

    public function compareAction(Request $request) {
        $select = $this->getDoctrine()->getManager();
        $response = new JsonResponse();

        if ($request->isXmlHttpRequest()) {
//			$encoder = new JsonEncoder();
//			$normalizer = new ObjectNormalizer();
//			$normalizer->setCircularReferenceHandler(function ($object) {
//				return $object->getTest();
//			});
//			$serializer = new Serializer(array($normalizer), array($encoder));
//			$encoders = array(new XMLEncoder(), new JsonEncoder());
//			$normalizers = new ObjectNormalizer();
//			$normalizers->setCircularReferenceHandler(function ($object) {
//				return "29";
//			});
//			$serializer = new Serializer(array($normalizers), $encoders);
            $session = new Session();

            $checked = [];

            foreach($session as $name => $id) {
                if (substr($name, 0,8) === '_idfeed_') {
                    array_push($checked, $id);
                }
            }

            $repositoryFeed = $select->getRepository('KoiBundle:Feed');
            $feed = $repositoryFeed->getFeedToCompare($checked);

            $elementsService = new Elements($select);
//            $feedSerializer = $serializer->serialize($feed, 'json');

            $response->setStatusCode(200);
            $response->setData(array(
                'response' => 'success',
                'overlay' => $this->renderView('KoiBundle:sites/utils:overlay.html.twig',
                    array(
                        'feed' => $feed,
                        'elements' => $elementsService->getElements(),
                        'feed_elements' => $elementsService->getFeedElements())
                    ),
                'feed' => $feed
            ));

            return $response;
        }

        return 0;
    }

    /**
     * @param Request $request
     * @return int|JsonResponse
     * @throws \Exception
     */

    public function checkboxAction(Request $request)
    {
        if($request->isXmlHttpRequest())
        {
            $response = new JsonResponse();
            $id_feed = $request->request->all();
            $session = new Session();
            $numAct = $session->get("num");

            foreach($id_feed as $id => $value) {
                if ($value == 'on') {
                    $numAct++;
                    $session->set('_idfeed_'.$id, $id);
                    $session->set("num", $numAct);

                }
                elseif ($value == 'off') {
                    $numAct--;
                    $session->remove('_idfeed_'.$id);
                    $session->set("num", $numAct);
				}
            }

            $response->setStatusCode(200);
            $response->setData(array(
                'numAct' => $numAct,
                'response' => 'success',
            ));

            return $response;
        }

        return 0;
    }
}
