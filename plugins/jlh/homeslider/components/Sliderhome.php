<?php namespace Jlh\Homeslider\Components;
use Cms\Classes\ComponentBase;
use Jlh\Homeslider\Models\Homeslider;

class Sliderhome extends ComponentBase
{
	public function componentDetails() {
		return [
			'name' => 'Home page Slider',
			'description' => 'Carousel of images for home page'
		];
	}

	public function defineProperties() {
		return [
			'results' => [
				'title' => 'Number of images to display',
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
		$this->carouselhomes = $this->loadHomecarousel();
	}
	
	protected function loadHomecarousel(){

		$query = Homeslider::where('is_active','=','1')->get();

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

	public $carouselhomes;

}