<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-19
 * Time: 09:57
 */

namespace MVC\clas;


class About {

	public function __construct() {

		require_once DIR_PATH . '/web/about.html.twig';

	}

}

$about = new About();