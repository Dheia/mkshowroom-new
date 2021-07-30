<?php namespace Jlh\Showroom\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Showrooms extends Controller
{
	public $implement = [
		'Backend\Behaviors\ListController',
		'Backend\Behaviors\FormController',
		'Backend\Behaviors\ReorderController',
		'Backend\Behaviors\ImportExportController'
	];

	public $importExportConfig = 'config_import_export.yaml';
	public $listConfig = 'config_list.yaml';
	public $formConfig = 'config_form.yaml';
	public $reorderConfig = 'config_reorder.yaml';

	public function __construct()
	{
		parent::__construct();
		BackendMenu::setContext('Jlh.Showroom', 'main-menu-item', 'side-menu-item');
	}
}
