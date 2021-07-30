<?php namespace Jlh\Userextend\Components;
use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use ValidationException;
use Rainlab\User\Models\UserGroup;
use Rainlab\User\Models\User;
use Rainlab\Location\Models\State;


class RegisterMerchant extends ComponentBase
{
	public function componentDetails() {
		return [
			'name' => 'Register Merchant',
			'description' => 'Register merchant form'
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
			'state_id' => 'required',
			'password' => 'required:create|between:8,255',
			'password_confirmation' => 'required_with:password|between:8,255',
			'country_id' => 'required',
			'phone' => 'required',
			'address1' => 'required',
			'city' => 'required',
			'zip' => 'required',
			'store_name' => 'required'
		];

		$messages = [
			'required.*' => 'Please enter your :attribute',
			'name.*' => 'Please enter your first name',
			'surname.*' => 'Please enter your last name',
			'username.*' => 'Please enter a username',
			'email.*' => 'Please enter your email',
			'password.*' => 'Please enter a password that has at least 8 characters',
			'password_confirmation.required' => 'Confirm password is required',
			'password_confirmation.same' => 'Password does not match',
			'store_name.*' => 'Please enter your store name',
			'address1.*' => 'Please enter your address',
			'city.*' => 'Please enter your city',
			'zip.*' => 'Please enter your zip code',
			'country_id.*' => 'Please select your country',
			'state_id.*' => 'Please select your state',
			'phone.*' => 'Please enter your phone'
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
			$user->additional_info = Input::get('additional_info');
			$user->password = Input::get('password');
			$user->password_confirmation = Input::get('password_confirmation');
			$user->store_name = Input::get('store_name');
			$user->address1 = Input::get('address1');
			$user->address2 = Input::get('address2');
			$user->city = Input::get('city');
			$user->zip = Input::get('zip');
			$user->country_id = Input::get('country_id');
			$user->state_id = Input::get('state_id');
			$user->username = Input::get('username');
			$user->email_group = Input::get('email_group');
			$user->owner_first_name = Input::get('owner_first_name');
			$user->owner_last_name = Input::get('owner_last_name');
			$user->website = Input::get('website');
			$user->jbtid = Input::get('jbtid');
			
			$user->save();

			// set user as merchant
			$group = UserGroup::where('id',1)->first();
			$user->groups()->add($group);

			// set store_id = user id
			$user->store_id = $user->id;
			$user->save();

			/*
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
			$user->save();
			*/


			// redirect
			return Redirect::to('thank-you')->with('message', 'Success');

		}

	}

}


