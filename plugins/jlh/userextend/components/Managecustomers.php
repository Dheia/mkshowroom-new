<?php namespace Jlh\Userextend\Components;
use Cms\Classes\ComponentBase;
use ValidationException;
use Rainlab\User\Models\UserGroup;
use Rainlab\User\Models\User;
use Event;
use Auth;
use Redirect;

class Managecustomers extends ComponentBase
{
	public function componentDetails() {
		return [
			'name' => 'Manage Customers',
			'description' => 'Manage customer list'
		];
	}

	public function defineProperties() {
		return [
			'results' => [
				'title' => 'Number of customers to display',
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

	public function onDelete()
	{
		$delete = User::where('id',post('id'))->first()->delete();
		return Redirect::refresh();
	}

	public function onRun()
	{
		$this->managecustomers = $this->loadManageCustomers();

		$user = Auth::getUser();

		$active = User::where('store_id',$user->id)
		->where('is_activated',1)
		->whereHas('groups', function($q) {
			$q->where('user_group_id',2);
		})->count();

		$inactive = User::where('store_id',$user->id)
		->where('is_activated',0)
		->whereHas('groups', function($q) {
			$q->where('user_group_id',2);
		})->count();

		$total = User::where('store_id',$user->id)
		->whereHas('groups', function($q) {
			$q->where('user_group_id',2);
		})->count();

		$this->page['totalactive'] = $active;
		$this->page['totalinactive'] = $inactive;
		$this->page['total'] = $total;
	}
	
	protected function loadManageCustomers(){

		$user = Auth::getUser();
		$query = User::where('store_id',$user->id)
		->whereHas('groups', function($q) {
			$q->where('user_group_id',2);
		})->get();

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

	public $managecustomers;

}