<?php

class Drama_Info_Controller extends Base_Controller {
	public $layout = 'layouts.default';
	public function action_index()
	{
		$this->layout->title = 'PapayaMilk: Login';
		$this->layout->nav_active = 'drama_info';
		$this->layout->nest('content', 'drama_info.drama_info');
	}
}
