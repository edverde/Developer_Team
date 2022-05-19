
<?php
require_once ROOT_PATH . '/app/models/ddbb.php';
class CrearController extends ApplicationController
{
	public function crearAction()
	{
		// echo "quiero morir";
		// exit();
		$this->view->message = "hello from test::index";
		
	}
	public function testAction()
	{
		echo "quiero morir";
		exit();
		$this->view->message = "hello from test::index";
		
	}
	

	public function crearTascaAction(){
		
			$model = new Model_ddbb();
			$model->novaTasca($POST["nom_tasca"], $POST["nom"], $POST["data_inici"], $POST["data_final"]);
			

		
		
		//header("Location: /web/index");
	}
	
	
}