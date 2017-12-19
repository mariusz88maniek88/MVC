<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2017-12-19
 * Time: 09:18
 */

namespace MVC\clas;

use MVC\model\Model;

class User extends Model{

	public function __construct() {

		require_once DIR_PATH . '/web/user.html.twig';

		$this->showUserName();

	}

	private function showUserName() {

		parent::__construct($this->db);

		$query = "SELECT * FROM mvc";

		$stmt = $this->db->query($query);
			foreach($stmt as $row) {

				echo 'Imię: ' . $row['name'] . '<br>' ;
				echo 'Email: ' . $row['email'] . '<br>';

			}

		}
}

$user = new User();