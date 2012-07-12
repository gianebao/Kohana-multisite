<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Demo extends Controller {

	public function action_index()
	{
		$this->response->body(new View('demo'));
	}

} // End Welcome
