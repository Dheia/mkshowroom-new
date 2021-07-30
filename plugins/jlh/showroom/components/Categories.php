<?php namespace Jlh\Showroom\Components;
use Cms\Classes\ComponentBase;
use Jlh\Showroom\Models\Category;

class Categories extends ComponentBase
{
	public function componentDetails() {
		return [
			'name' => 'Showroom Categories',
			'description' => 'Showroom Categories'
		];
	}

	public function defineProperties() {
		return [
			'results' => [
				'title' => 'Number of categories to display',
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
		$this->categories = $this->loadCategories();
	}
	
	protected function loadCategories(){

		$query = Category::where('is_active','=','1')->get();

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

	public $categories;

}