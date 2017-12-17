<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-17
 * Time: 10:08
 */

namespace AppBundle\MainControllers;


use AppBundle\MainControllers\ViewHeaderFooter;


class View extends ViewHeaderFooter {

	public function __construct() {

		parent::getHeader();

		$index = new Router();

		parent::getFooter();

	}

}