<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-16
 * Time: 15:30
 */
namespace AppBundle\MainControllers;


class ViewHeaderFooter {

	public function getHeader() {

		require_once DIR_PATH . '../View/header.php';

	}

	public function getFooter() {

		require_once DIR_PATH . '../View/footer.php';

	}

}