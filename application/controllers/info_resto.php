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

			$this->load->model("info_resto_dao", "info_dao");

			$id = $this->input->get('id');

			$data["info_resto"] = $this->info_dao->info_resto($id);
			
			$this->load->view("vue_resto", $data);
		}
		
		public function add_items(){

			$this->load->model("info_resto_dao", "info_dao");
			
			$nom = $this->input->get('nom');
			$description = $this->input->get('description');
			$pu = $this->input->get('pu');

			$data['items'] = $this->info_dao->set_items($nom, $description, $pu);
			
			$this->load->view("vue_items", $data);
		}
	}
?>
