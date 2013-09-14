<?php
/**
* -------------------------------------------------------------------------
* class CkeditorController
* -------------------------------------------------------------------------
* Funciones de configuración y uso del plugin Ckeditor
*
* Permite configurar el plugin Ckeditor según las necesidades del usuario,
* las funciones se sueden instanciar.
*
* como llamar el controlador en routes.php
* Route::get('/', 'CkeditorController');
*
* @access public
*
* @date      2013-08-25
* @author    jdcorrales <email@dominio.com>
*
* @copyright <pendiente>
*
*/

class CkeditorController extends BaseController{

	public function __construct(){

	}

	/**
	* -------------------------------------------------------------------------
	* getIndex
	* -------------------------------------------------------------------------
	* Descripción breve (Qué hace? no como lo hace)
	*
	* Descripción extensa. (Qué hace? de forma detallada )Todas las líneas que
	* sean necesarias
	*
	* @date      2013-08-25
	* @author    jdcorrales <email@dominio.com>
	*
	* @access public
	*
	* @param  none 			// No recibe ningún parametro
	* @return array $config // Retorna la cinfiguración del plugin
	*
	*/
	public function getIndex(){

		$config = $this->configuracion();
		$data = array(
		              	'title' => 'Ckeditor',
		              	'ckeditorconfig' => $config
		              );
		return(View::make('ckeditor', $data));
	}

	/**
	* -------------------------------------------------------------------------
	* configuracion
	* -------------------------------------------------------------------------
	* Función de configuración del plugin Ckeditor
	*
	* Se pasan los datos de configuración a un array para que se pueda parsear
	* como json
	*
	* @date      2013-08-25
	* @author    jdcorrales <email@dominio.com>
	*
	* @access public
	*
	* @param  none         // Por el momento no recive parametros
	* @return array return // datos de configuración
	*
	*/
	public function configuracion(){

		$config = array(
			'toolbar' => array(
        		array('Source','-','Preview','NewPage','Templates','-','Save','Print','clipboard'),
            	array('Undo','Redo','Autosave'),
            	array('Cut','Copy','Paste','PasteText','PasteFromWord','SpellCheker','Scayt'),
				array('Find','Replace','-','SelectAll','RemoveFormat'),
				array('Link','Unlink','Anchor'),
				array('Image','Flash','Table','SpecialChar'),
				'/',
				array('Font'),
				array('FontSize'),
				array('Styles'),
				array('Format'),
				array('TextColor','BGColor'),
				array('Bold','Italic','Underline','Strike','Blockquote','-','Subscript','Superscript'),
				array('JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'),
				array('About'),
				'/',
				array('Maximize', 'ShowBlocks','tablecell'),
            ),
        );
	return (json_encode($config));
	}
}