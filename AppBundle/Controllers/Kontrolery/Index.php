<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-15
 * Time: 12:57
 */
namespace AppBundle\Kontrolery;


use AppBundle\model\Model;


class Index extends Model {

	public function __construct() {

		parent::__construct() . '<br>';

		require_once DIR_PATH . '../View/main.php';

	}

}

$index = new Index();

