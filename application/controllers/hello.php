<?php
	
	class Hello extends CI_Controller {

		public function __construct() {
			parent:: __construct();
			echo "This is the initialization<br>";
			$this->load->view('header');
		}

		public function index() {
			echo "This is the index function<br>";
			echo "This is what gets displayed when there are no other functions called";
		}

		public function one($name) {
			$this->load->model("hello_model");

			$profile = $this->hello_model->getProfile("Nick");

			$data = array("name" => $name);

			$data['profile'] = $profile;
			$this->load->view('one', $data);
		}

		public function two() {
			echo "This is the second function";
		}
	}
?>