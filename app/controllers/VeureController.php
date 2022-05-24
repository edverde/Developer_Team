<?php
require_once ROOT_PATH . '/app/models/ddbb.php';
class VeureController extends ApplicationController{
    
    public function veureAction()
	{
		// echo "quiero morir";
		// exit();
		$this->view->message = "hello from test::index";
		
	}
	public function veureTascaAction(){
		echo 'estic aqui';
		die();
		$model = new Model_ddbb();
		$model->modificarTasca($_POST['tasca'],$_POST['nom'],$_POST['inici'],$_POST['final'],$_POST['estat'], $_POST['id']);
		
		
		header("Location: /web/veure"); 
	}
}