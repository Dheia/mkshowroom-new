<?php namespace Jlh\Userextend\Components;
use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
use Rainlab\User\Models\UserGroup;
use Rainlab\User\Models\User;
use Event;

class UpdateCustomer extends ComponentBase
{
	public function componentDetails() {
		return [
			'name' => 'Update Customer',
			'description' => 'Update customer form'
		];
	}

	public function onRun() 
	{
		$this->currentusers = $this->loadCurrentUser();
	}

	protected function loadCurrentUser()
	{
		$query = User::where('id',$this->param('id'))->get();
		return $query;
	}

	public $currentusers;

	public function onSubmit() {

		// validation
		$data = post();

		$rules = [
			'name' => 'required',
			'surname' => 'required',
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:8',
			'password_confirmation' => 'required|same:password'
		];

		$messages = [
			'required.*' => 'Please enter your :attribute',
			'name.*' => 'Please enter your first name',
			'surname.*' => 'Please enter your last name',
			'username.*' => 'Please enter a username',
			'email.*' => 'Please enter your email',
			'password.*' => 'Please enter a password that has at least 8 characters',
			'password_confirmation.*' => 'Password does not match'
		];

		$validation = Validator::make($data, $rules, $messages);

		if ($validation->fails()) {
			throw new ValidationException($validation);
		} else {

			$user = User::where('id',$this->param('id'))->first();
			$user->name = Input::get('name');
			$user->surname = Input::get('surname');
			$user->email = Input::get('email');
			$user->phone = Input::get('phone');
			$user->password = Input::get('password');
			$user->password_confirmation = Input::get('password_confirmation');
			if (Input::get('is_activated') == 1) {
				$user->is_activated = true;
			} else {
				$user->is_activated = false;
			}

			$user->save();

			// mail send
			$data = Input::all();
			
			// redirect
			return Redirect::to('/manage-customers')->with('message', 'Success');

		}

	}

}


