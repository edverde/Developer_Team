<?php
require_once ROOT_PATH . '/app/models/ddbb.php';
class VeureController extends ApplicationController{
    
    public function veureAction()
	{
		// echo "quiero morir";
		// exit();
		$this->view->message = "hello from test::index";
		
	}
	
}