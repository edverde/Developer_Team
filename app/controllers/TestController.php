<?php

class TestController extends ApplicationController
{
	public function indexAction()
	{
		// echo "quiero morir";
		// exit();
		$this->view->message = "hello from test::index";
		
	}
	
	public function checkAction()
	{
		echo "hello from test::check";
	}

	public function soparAction()
	{
		// echo "quiero morir";
		// exit();
		$this->view->message = "hello from test::index";
		
	}
	public function vistaAction()
	{
		// echo "quiero morir";
		// exit();
		$this->view->message = "hello from test::index";

		return ['msj' => 'hola'];
		
	}
}
