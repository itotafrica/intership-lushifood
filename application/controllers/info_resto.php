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
			$idresto = 1;
			$idresto = 1;
			$config['upload_path'] = 'assets/uploads';
			$config['allowed_types'] = 'jpg|JPG|PNG|png';
			$config['max_size'] = '500';
			$config['max_width'] = '1024';
			$config['max_height'] = '768';

			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload()){

				$error = array('error' => $this->upload->display_errors() );
				$this->load->view('vue_items_info', $error);
			}
			else{

				$nom = $this->input->post('nom');
				$description = $this->input->post('description');
				$pu = $this->input->post('pu');
				
				$chemin = $this->upload->data();
				$data = array('upload_data' => $this->upload->data());
				foreach($chemin as $key => $value){
					if($key==='file_name'){
						$file='./assets/uploads/'.$value;
					}
				}

			}

			$data['get_items'] = $this->info_resto_dao->get_items($nom, $description, $pu, $idcot, $idresto, $image);
			$this->load->view('vue_items_info', $data);
		}

		public function page(){
			
			$this->load->view('vue_items');
		}

		public function update_items(){

			
		}
	}
?>
