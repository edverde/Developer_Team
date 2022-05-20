<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array(
	// '/test' => 'test#index',
	
	// '/' => 'tasca#index',
	// '/nova' => 'tasca#crear',
	// '/mod' => 'tasca#mod',
	// '/vista' => 'tasca#index',
	// '/eliminar' => 'eliminar#eliminar',
	// '/mostrar' => 'mostrar#mostrar'
	'/' => 'test#vista',
	// '/kk' => 'error#kk',
	// '/tascat' => 'test#index',s
	'/index' => 'test#vista',
	'/nova' => 'crear#crear',
	'/mod' => 'mod#mod',
	'/mostrar' => 'buscar#buscar',
	'/creant' => 'crear#crearTasca',
	'/modotest' => 'crear#test',
	'/eliminar' => 'crear#borrarTasca'
	// '/modificacio' => ''
	// '/eliminar' => 'eliminar#eliminar',
	// '/mostrar' => 'mostrar#mostrar'
	

	
);

