<?php
/**
* -------------------------------------------------------------------------
* class HomeController
* -------------------------------------------------------------------------
* Descripción breve (Qué hace? no como lo hace)
*
* Descripción extensa. (Qué hace? de forma detallada )Todas las líneas que
* sean necesarias
*
* como llamar el controlador en routes.php
* Route::get('/', 'HomeController');
*
* @date      2013-08-24
* @author    Juan David Corrales Saldarriaga <email@dominio.com>
*
* @copyright información sobre derechos
*
*/

class HomeController extends BaseController{

	public function __construct(){

	}

	public function getIndex(){
		return View::make('hello');
	}

}
