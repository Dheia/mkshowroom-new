<?php namespace Jlh\Homeslider;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
			'Jlh\Homeslider\Components\Sliderhome' => 'sliderhome',
		];
    }

    public function registerSettings()
    {
    }
}
