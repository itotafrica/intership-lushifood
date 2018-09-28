<?php
	class Info_resto extends CI_Controller{

		public function __construct (){

			parent::__construct();

			$this->load->database();
		}

		public function index(){

			$this->i_resto();
		}

		public function i_resto(){

			$this->load->model("info_resto_dao", "info_dao");
			$data["info_resto"] = $this->info_dao->info_resto();
			$this->load->view("vue_resto", $data);
		}

	

	}
?>
