<?php
require_once ROOT_PATH . '/app/models/ddbb.php';
class ModController extends ApplicationController{

	public function modAction(){
		$this->view->message = "hello from test::index";
	}
	
	public function cambiarAction(){
		$model = new Model_ddbb();
		$model->modificarTasca($_POST['tasca'],$_POST['nom'],$_POST['inici'],$_POST['final'],$_POST['estat'], $_POST['id']);
		header("Location: /web/index");
	}
}