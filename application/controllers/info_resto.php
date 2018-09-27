<?php
	class Info_resto extends CI_Controller{

		public function __construct (){

			parent::__construct();

			$this->load->database();
		}

		public function index(){

			$this->info();
		}

		public function info(){

			$this->load->model("info_resto_dao", "inf_dao");
			$data["info_resto"] = $this->info_resto_dao->info_resto();
			$this->load->view("vue_resto", $data);
		}
	}
?>
