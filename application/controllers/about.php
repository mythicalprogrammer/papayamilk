<?php

class About_Controller extends Base_Controller {
	public $layout = 'layouts.default';
	public function action_index()
	{
		$this->layout->title = 'About';
		$this->layout->nav_active = 'about';
		$this->layout->nest('content', 'about.about');
	}
}
