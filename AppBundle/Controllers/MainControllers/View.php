<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-17
 * Time: 10:08
 */

namespace AppBundle\MainControllers;


use AppBundle\MainControllers\ViewHeader;


class View extends ViewHeader{

	public function __construct() {

		parent::__construct();

		$index = new Router();

	}

}