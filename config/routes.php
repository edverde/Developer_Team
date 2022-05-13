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
	// '/vista' => 'tasca#vista',
	// '/eliminar' => 'eliminar#eliminar',
	// '/mostrar' => 'mostrar#mostrar'
	'/test' => 'test#index',
	'/kk' => 'error#kk',
	'/tascat' => 'test#index',
	'/vista' => 'test#vista',
	'/nova' => 'crear#crear',
	'/mod' => 'mod#mod',
	'/eliminar' => 'eliminar#eliminar',
	'/mostrar' => 'mostrar#mostrar'

	
);
