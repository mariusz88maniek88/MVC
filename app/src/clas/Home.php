<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-19
 * Time: 09:53
 */

namespace MVC\clas;


class Home {

	public function __construct() {

		require_once DIR_PATH . '/web/home.html.twig';

	}

}

$home = new Home();