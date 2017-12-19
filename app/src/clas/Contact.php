<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-19
 * Time: 09:57
 */

namespace MVC\clas;

use MVC\model\Model;

class Contact {

	public function __construct() {

		require_once DIR_PATH . '/web/contact.html.twig';

	}

}

$contact = new Contact();