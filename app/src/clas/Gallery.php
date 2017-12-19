<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-19
 * Time: 09:56
 */

namespace MVC\clas;

use MVC\model\Model;

class Gallery {

	public function __construct() {

		require_once DIR_PATH . '/web/gallery.html.twig';

	}

}

$gallery = new Gallery();