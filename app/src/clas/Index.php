<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-19
 * Time: 10:05
 */

namespace MVC\clas;

use MVC\clas\Home;


class Index extends Home{

	public function __construct() {

		parent::__construct();

	}

}

$index = new Index();