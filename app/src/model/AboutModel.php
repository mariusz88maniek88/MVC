<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-19
 * Time: 13:57
 */

namespace MVC\model;

use MVC\model\Model;

class AboutModel extends Model{

	public function __construct() {

		$this->getId();

	}

	private function getId() {

		parent::__construct($this->db);

		$query = "SELECT id FROM mvc";

		$stmt = $this->db->query($query);
		foreach($stmt as $row) {

			echo 'Id: ' . $row['id'] . '<br>' ;

		}
	}

}

