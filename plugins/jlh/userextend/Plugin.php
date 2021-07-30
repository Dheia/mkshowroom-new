<?php namespace Jlh\Userextend;

use System\Classes\PluginBase;
use Rainlab\User\Controllers\Users as UsersController;
use Rainlab\User\Models\User as UserModel;
use Rainlab\User\Models\UserGroup;
use Event;

class Plugin extends PluginBase
{
	public function registerComponents()
	{
		return [
			'Jlh\Userextend\Components\Registermerchant' => 'registermerchant',
			'Jlh\Userextend\Components\Registercustomer' => 'registercustomer',
			'Jlh\Userextend\Components\Managecustomers' => 'managecustomers',
			'Jlh\Userextend\Components\Updatecustomer' => 'updatecustomer',
			'Jlh\Userextend\Components\Accountinfo' => 'accountinfo'
		];
	}

	public function registerSettings()
	{
	}

	public function boot() {

		UserModel::extend(function($model){

			$model->addFillable ([
				'store_name',
				'owner_first_name',
				'owner_last_name',
				'additional_info',
				'phone',
				'address1',
				'address2',
				'city',
				'zip',
				'country',
				'state',
				'store_id',
				'website',
				'jbtid',
				'additional_info',
				'email_group'
			]);

			$model->implement = [
				'RainLab.Location.Behaviors.LocationModel'
			];

		});

		UsersController::extendFormFields(function($form, $model, $context) {
			$form->addTabFields([
				'store_name' => [
					'label' => 'Store Name',
					'type' => 'text',
					'tab' => 'Store Info'   
				],
				'owner_first_name' => [
					'label' => 'Owner First Name',
					'type' => 'text',
					'span' => 'left',
					'tab' => 'Store Info'   
				],
				'owner_last_name' => [
					'label' => 'Owner Last Name',
					'type' => 'text',
					'span' => 'right',
					'tab' => 'Store Info'   
				],
				'additional_info' => [
					'label' => 'Additional Info',
					'type' => 'textarea',
					'tab' => 'Store Info'   
				],		
				'phone' => [
					'label' => 'Phone',
					'type' => 'text',
					'tab' => 'Store Info'   
				],
				'address1' => [
					'label' => 'Address1',
					'type' => 'text',
					'span' => 'left',
					'tab' => 'Store Info'   
				],
				'address2' => [
					'label' => 'Address2',
					'type' => 'text',
					'span' => 'right',
					'tab' => 'Store Info'   
				],
				'city' => [
					'label' => 'City',
					'type' => 'text',
					'span' => 'left',
					'tab' => 'Store Info'   
				],
				'zip' => [
					'label' => 'Zip',
					'type' => 'text',
					'span' => 'right',
					'tab' => 'Store Info'   
				],	
				'country' => [
					'label' => 'Country',
					'type' => 'dropdown',
					'span' => 'left',
					'placeholder' => 'Please select',
					'tab' => 'Store Info'
				],
				'state' => [
					'label' => 'State',
					'type' => 'dropdown',
					'span' => 'right',
					'dependsOn' => 'country',
					'placeholder' => 'Please select',
					'tab' => 'Store Info'
				],
				'website' => [
					'label' => 'Website',
					'type' => 'text',
					'span' => 'left',
					'tab' => 'Store Info'   
				],	
				'jbtid' => [
					'label' => 'JBT ID',
					'type' => 'text',
					'span' => 'right',
					'tab' => 'Store Info'   
				],
				'email_group' => [
					'label' => 'Add to the MK Email Group',
					'type' => 'switch',
					'span' => 'left',
					'on' => 'Yes',
					'off' => 'No',		
					'tab' => 'Store Info'
				]
			]);
		});

		UsersController::extendListColumns(function($list, $model) {

			if (!$model instanceof UserModel) {
				return;
			}

			$list->addColumns([
				'id' => [
					'label' => 'ID'
				],
				'store_name' => [
					'label' => 'Store'
				],
				'username' => [
					'label' => 'Username'
				],
				'is_activated' => [
					'label' => 'Active',
					'type' => 'switch'
				],
				'user_group_id' => [
					'label' => 'Group',
					'relation' => 'groups',
					'select' => 'name'
				]
			]);

		});
	}
}
