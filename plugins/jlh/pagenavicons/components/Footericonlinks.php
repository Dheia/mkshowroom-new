<?php namespace Jlh\Pagenavicons\Components;
use Cms\Classes\ComponentBase;
use Jlh\Pagenavicons\Models\Pagenavicon;

class Footericonlinks extends ComponentBase
{
	public function componentDetails() {
		return [
			'name' => 'Footer icon links',
			'description' => 'Icon links on footer of page'
		];
	}

	public function defineProperties() {
		return [
			'results' => [
				'title' => 'Number of links to display',
				'description' => '# to display',
				'default' => 0,
				'validationPattern' => '^[0-9]+$',
				'validationMessage' => 'Please enter a number'
			],
			'sortOrder' => [
				'title' => 'Sort',
				'description' => 'Sort order',
				'type' => 'dropdown',
				'default' => 'sort_order asc'
			]
		];
	}

	public function getSortOrderOptions() 
	{
		return [
			'sort asc' => 'Sort (ascending)',
		];		
	}

	public function onRun()
	{
		$this->footericonlinks = $this->loadFooterIconLinks();
	}
	
	protected function loadFooterIconLinks(){

		$query = Pagenavicon::where('is_active','=','1')->get();

		if ($this->property('sortOrder') == 'sort asc')
		{
			$query = $query->sortBy('sort_order');
		}

		if ($this->property('results') > 0) 
		{
			$query = $query->take($this->property('results'));
		}
		return $query;
	}

	public $footericonlinks;

}