<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-15
 * Time: 13:07
 */
namespace AppBundle\MainControllers;

use AppBundle\MainControllers\ViewHeader;

class Router {

	public function __construct() {

		$this->request = $_GET['src'];
		$this->params = explode('/', $this->request);
		$this->controller = $this->params[0];
		if($this->controller == "index.php") $this->controller = "Index";
		$this->controller = ucfirst($this->controller);

		$dir = DIR_PATH . '\AppBundle\Controllers\Kontrolery\\' ;

		if(file_exists($dir . $this->controller . '.php')) {

			require $dir . $this->controller . '.php';


		} else {

			echo 'Nie znaleziono szukanej strony';

		}


	}


}