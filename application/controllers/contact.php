<?php

class Contact_Controller extends Base_Controller {
	public $layout = 'layouts.default';
	public function action_index()
	{
		$this->layout->title = 'Contact';
		$this->layout->nest('content', 'contact.contact');
	}
}
