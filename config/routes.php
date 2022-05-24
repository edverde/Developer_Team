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

	
	
	'/' => 'test#vista',
	'/index' => 'test#vista',
	'/nova' => 'crear#crear',
	'/mod' => 'mod#mod',
	'/mostrar' => 'buscar#buscar',
	'/creant' => 'crear#crearTasca',
	'/modotest' => 'crear#test',
	'/eliminar' => 'crear#borrarTasca',
	'/buscador' => 'buscar#buscarTasca',
	'/modificacio'=>'mod#cambiar',
	'/veure' => 'veure#veure',
	// '/veure' => 'buscar#veureTasca'
	// '/veure'=>'buscar#veureTasca'
		// '/modificacio' => ''
	// '/eliminar' => 'eliminar#eliminar',
	// '/mostrar' => 'mostrar#mostrar'
	

	
);

