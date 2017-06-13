<?php


namespace KoiBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class DistributorAdmin extends AbstractAdmin
{

	public function prePersist($image)
	{
		$this->manageFileUpload($image);
	}


	public function preUpdate($image)
	{
		$this->manageFileUpload($image);
	}

	private function manageFileUpload($image)
	{
		if ($image->getFile()) {
			$image->refreshUpdated();
		}
	}

	/**
	 * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
	 *
	 * @return void
	 */
	protected function configureShowFields(ShowMapper $showMapper)
	{
		$showMapper
			->add('nameDistributor')
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
			->add('nameDistributor')
			->add('file', 'file', array('label' => 'Image', 'data_class' => null))
			->add('nameImage', 'text', array('disabled' => true, 'required' => false))
			->end()
		;
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
			->add('nameDistributor')
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
			->add('nameDistributor')
		;
	}
}