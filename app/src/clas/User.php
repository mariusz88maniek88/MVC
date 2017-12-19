<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-19
 * Time: 09:18
 */

namespace MVC\clas;


class User {

	public function __construct() {

		require_once DIR_PATH . '/web/user.html.twig';

	}

}

$user = new User();