
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
		echo "estic aqui";
		die();
		$this->view->message = "hello from test::index";
		
	}
	

	public function crearTascaAction(){
		
		
			$model = new Model_ddbb();
			$model->novaTasca($_POST["nom_tasca"], $_POST["nom"], $_POST["data_inici"], $_POST["data_final"], $_POST["estat"]);
			

		
		
		header("Location: /web/index");
	}
	// public function mostrarTascas(){
	// 	$model = new Model_ddbb();
	// 	$model->ImprimirTasques();
	// }

	public function borrarTascaAction(){
		
		$model = new Model_ddbb();

		
		$model->eliminarTasca($_POST['id']);
		
		header("Location: /web/index");
	}
	
	
}