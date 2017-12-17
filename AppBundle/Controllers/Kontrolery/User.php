<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-15
 * Time: 13:04
 */

namespace AppBundle\Kontrolery;

use AppBundle\MainControllers\Router;
use AppBundle\model\Model;


class User extends Model {

	public function __construct() {

		require_once DIR_PATH . '../View/user.php';

	}

}

$user = new User();