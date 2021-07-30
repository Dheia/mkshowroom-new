<?php namespace Jlh\Userextend\Components;
use Cms\Classes\ComponentBase;
use ValidationException;
use Rainlab\User\Models\UserGroup;
use Rainlab\User\Models\User;
use Event;
use Auth;

class Accountinfo extends ComponentBase
{
	public function componentDetails() {
		return [
			'name' => 'Merchant account info',
			'description' => 'Merchant account info'
		];
	}

	public function defineProperties() {
		return [
			'results' => [
				'title' => 'Display merchant account info',
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
		$this->accountinfos = $this->loadAccountInfo();
	}	

	protected function loadAccountInfo()
	{
		$user = Auth::getUser();
		$query = User::where('id',$user->id)->get();

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

	public $accountinfos;

}