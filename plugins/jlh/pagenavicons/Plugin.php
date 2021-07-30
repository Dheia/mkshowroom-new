<?php namespace Jlh\PageNavIcons;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function registerComponents()
	{
		return [
			'Jlh\Pagenavicons\Components\Footericonlinks' => 'footericonlinks'
		];
	}

	public function registerSettings()
	{
	}
}
