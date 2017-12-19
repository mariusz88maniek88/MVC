<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-19
 * Time: 09:41
 */

namespace MVC\View;

use MVC\controllers\Route;

class View extends Route{

	public function __construct() {

		$this->getHeader();

		parent::__construct();

		$this->getFooter();

	}

	public function getHeader() {

		require_once DIR_PATH . '/web/header.html.twig';

	}

	public function getFooter() {

		require_once DIR_PATH . '/web/footer.html.twig';

	}

}

