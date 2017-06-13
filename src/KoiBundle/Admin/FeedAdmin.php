<?php


namespace KoiBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Validator\ErrorElement;

class FeedAdmin extends AbstractAdmin
{
	/**
	 * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
	 *
	 * @return void
	 */
	protected function configureShowFields(ShowMapper $showMapper)
	{
		$showMapper
			->add('nameFeed')
			->add('waterTemperature')
			->add('pelletSizeMin')
			->add('pelletSizeMax')
			->add('colorant')
		;
	}

	/**
	 * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
	 *
	 * @return void
	 */
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->with('General')
			->add('nameFeed')
			->add('waterTemperature')
			->add('pelletSizeMin')
			->add('pelletSizeMax')
			->add('colorant')
			->add('idDistributor', 'sonata_type_model_list', array('label' => 'Distributor', 'required' => true))
			//		if(!$this->isCurrentRoute('create')) {  Only in case of update
			->add('elements', 'sonata_type_collection', array(
				'label' => 'Elements',
				'by_reference' => false,
				'required' => false,

			),
				array(
					'edit' => 'inline',
					'inline' => 'table',
					'sortable' => 'position'
					))
			->add('components', 'sonata_type_collection', array(
				'label' => 'Components',
				'by_reference' => false,
				'required' => false,
			),
				array(
					'edit' => 'inline',
					'inline' => 'table',
					'sortable' => 'position',
				))
			->add('seasons', 'sonata_type_collection', array(
				'label' => 'Seasons',
				'by_reference' => false,
				'required' => false,
			),
				array(
					'edit' => 'inline',
					'inline' => 'table',
					'sortable' => 'position',
				))
			->end();
	}

	/**
	 * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
	 *
	 * @return void
	 */
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier('id')
			->add('nameFeed')
			->add('_action', 'actions', array(
				'actions' => array(
					'show' => array(),
					'edit' => array(),
					'delete' => array(),
				)
			))
		;
	}

	/**
	 * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
	 *
	 * @return void
	 */
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add('nameFeed')
		;
	}


	/**
	 * @param ErrorElement $errorElement
	 * @param mixed $object
	 * @return bool
	 */
	public function validate(ErrorElement $errorElement, $object)
	{
		$oobb = null;
		$finalSeasons  = array();
		$finalComponents = array();
		$finalElements = array();

		foreach ($object->getSeasons() as $season) {
			if (!$season->getIdSeason()) $errorElement->addViolation("Season not selected");

			if (!in_array($season, $finalSeasons)) {
				$finalSeasons[] = $season;
			}

			else {
				$errorElement->addViolation("One season is repeated, please change it!");
				return false;
			}
		}

		foreach ($object->getComponents() as $component) {
			if (!$component->getIdComponent()) $errorElement->addViolation("Component not selected");

			if (!in_array($component, $finalComponents)) {
				$finalComponents[] = $component;
			}

			else {
				$errorElement->addViolation("One component is repeated, please change it!");
				return false;
			}
		}

		foreach ($object->getElements() as $element) {
			if (!$element->getIdElement()) $errorElement->addViolation("Element not selected");

			if (!in_array($element, $finalElements)) {
				$finalElements[] = $element;
			}

			else {
				$errorElement->addViolation("One element is repeated, please change it!");
				return false;
			}
		}

		return true;
	}
}