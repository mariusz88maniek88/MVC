<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-16
 * Time: 12:26
 */

namespace AppBundle\model;



class Model {

	protected $db;
	const DB_HOST = 'localhost';
	const DB_NAME = 'mvc';
	const DB_USER = 'mariusz888';
	const DB_PASS = 'mariusz888';

	public function __construct($db=NULL) {

		if(is_object($db)) {

			$this->db = $db;

		} else {

			$dsn = "mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME;

			try {

				$this->db = new \PDO($dsn, self::DB_USER, self::DB_PASS);

			}
			catch (\Exception $e) {

				die($e->getMessage());

			}

		}

	}


}