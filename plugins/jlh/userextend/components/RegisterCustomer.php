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

class RegisterCustomer extends ComponentBase
{
	public function componentDetails() {
		return [
			'name' => 'Register Customer',
			'description' => 'Register customer form'
		];
	}

	public function onRun() 
	{

	}

	public function onSubmit() {

		// validation
		$data = post();

		$rules = [
			'name' => 'required',
			'surname' => 'required',
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required:create|between:8,255',
			'password_confirmation' => 'required_with:password|between:8,255',
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

			$user = new User();
			$user->name = Input::get('name');
			$user->surname = Input::get('surname');
			$user->email = Input::get('email');
			$user->phone = Input::get('phone');
			$user->password = Input::get('password');
			$user->password_confirmation = Input::get('password_confirmation');
			$user->store_id = Input::get('store_id');
			$user->store_name = Input::get('store_name');
			if (Input::get('is_activated') == 1) {
				$user->is_activated = true;
			} else {
				$user->is_activated = false;
			}

			$user->save();

			// set user as customer
			$group = UserGroup::where('id',2)->first();
			$user->groups()->add($group);

			// mail send
			$data = Input::all();
			
			// $to = $output;
			$name = $user->name.' '.$user->surname;

			// email to 
			// Mail::send('backend::mail.contact-submission', $data, function ($message) use ($to, $name) {
				// $message->to(explode(',',$to));
			// });

			// email to user
			$toConfirm = $user->email;
			$nameConfirm = $user->name.' '.$user->surname;
			// Mail::send('backend::mail.contact-confirmation', $data, function ($message) use ($toConfirm, $nameConfirm) {
				// $message->to($toConfirm);
			// });

			// redirect
			// return Redirect::to('thank-you')->with('message', 'Success');

			// $group = UserGroup::where('code', 'contacts')->first();

			// $user->groups()->add($group);

			// redirect
			return Redirect::to('manage-customers')->with('message', 'Success');

		}

	}

}


