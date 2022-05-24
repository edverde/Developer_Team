<?php
require_once ROOT_PATH . '/app/models/ddbb.php';
class BuscarController extends ApplicationController
{
	public function buscarAction()
	{
		// echo "quiero morir";
		// exit();
		$this->view->message = "hello from test::index";
		
	}
	public function buscarTascaAction(){
		
		$model = new Model_ddbb();
		$model->ImprimirTasca($_POST['tasca']);
		
		
		header("Location: /web/mostrar");
	}


	
}