<?php

class Projects_Controller extends Base_Controller {
	public $layout = 'layouts.default';
	public function action_index()
	{
		$this->layout->title = 'Projects';
		$this->layout->nav_active = 'projects';
		$this->layout->nest('content', 'projects.projects');
	}
}
