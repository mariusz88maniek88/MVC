<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-16
 * Time: 15:30
 */
namespace AppBundle\MainControllers;


class ViewHeader {

	public function __construct() {

		require_once DIR_PATH . '../View/header.php';

	}

}