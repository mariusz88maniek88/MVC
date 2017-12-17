<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-15
 * Time: 13:05
 */

namespace AppBundle\Kontrolery;


use AppBundle\model\Model;


class Gallery extends Model {

	public function __construct() {

		echo 'Jestem konstruktorem klasy: ' . __CLASS__;

	}

}

$gallery = new Gallery();