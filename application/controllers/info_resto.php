<?php
	class Info_resto extends CI_Controller{

		public function __construct (){

			parent::__construct();

			$this->load->database();
			$this->load->model("info_resto_dao");
			$this->load->library('form_validation');
			
		}

		public function index(){

			$this->info();
		}

		public function info(){

			$id = $this->input->get('id');

			$data["info_resto"] = $this->info_resto_dao->info_resto($id);
			
			$this->load->view("vue_resto", $data);
		}
		
		public function add_items(){
			
			$nom = $this->input->post('nom');
			$description = $this->input->post('description');
			$pu = $this->input->post('pu');
		
			$data['get_items'] = $this->info_resto_dao->get_items($nom, $description, $pu);
			$this->load->view('vue_items_info', $data);
			

		}

		public function page(){
			
			$this->load->view('vue_items');
		}

	
	}
?>
