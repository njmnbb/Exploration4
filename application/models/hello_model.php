<?php
	class Hello_model extends CI_Model {

		public function getProfile($name) {

			return array("fullName" => "Nick Martini", "age" => 22);
		}
	}
?>