<?php namespace Jlh\Showroom;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Jlh\Showroom\Components\Categories' => 'categories'
    	];
    }

    public function registerSettings()
    {
    }
}
