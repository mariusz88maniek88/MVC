<?php

namespace MVC\controllers;

class Route {

	public function __construct() {


		if(! isset($_GET['url'])) $_GET['url'] = 'Index';
		$this->request = $_GET['url'];

		$this->params = explode('/', $this->request);
		$this->controller = $this->params[0];
		if($this->controller == "index.php") $this->controller = "Index";
		$this->controller = ucfirst($this->controller);

		$dir = DIR_PATH . '\app\src\clas\\' ;

		if(file_exists($dir . $this->controller . '.php')) {

			require $dir . $this->controller . '.php';


		} else {

			echo 'Nie znaleziono szukanej strony';

		}


	}

}
