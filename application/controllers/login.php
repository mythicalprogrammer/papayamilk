<?php

class Login_Controller extends Base_Controller {
	public $layout = 'layouts.default';
	public function action_index()
	{
		$this->layout->title = 'PapayaMilk: Login';
		$this->layout->nav_active = 'login';
		$this->layout->nest('content', 'login.login');
	}
}
