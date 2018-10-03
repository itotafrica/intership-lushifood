<?php
	class Resto extends CI_Controller{

		public function __construct (){

			parent::__construct();

			$this->load->database();
			$this->load->model("Resto_dao");
			$this->load->helper(array('form', 'url'));
		}

/*===================================================================================================================*/
		public function index(){

			$this->info();
		}

/*======================================================================================================================*/
		public function info(){

			$id = $this->input->get('id');

			$data["info_resto"] = $this->resto_dao->info_resto($id);
			
			$this->load->view("vue_resto", $data);
		}
		
/*======================================================================================================================*/		
		public function add_items(){
			
			$config['upload_path']          = './assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 100;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('image')){

				$error = array('error' => $this->upload->display_errors() );
				$this->load->view('vue_items', $error);
			}
			else
			{
				$chemin = $this->upload->data();
				$data = array('upload_data' => $this->upload->data());
				foreach($chemin as $key => $value){
					if($key === 'file_name'){
						$path='./assets/uploads/'. $value;
					}
				}

				$nom =  $this->input->post('nom');
				$description =  $this->input->post('description');
				$pu = $this->input->post('pu');
				$id_categorie =$this->input->get('id_categorie');
				$id_resto = $this->input->get('id_resto');

				$data['upload_data'] = $this->upload->data(); 
				$this->resto_dao->set_items($nom, $description, $pu, $id_categorie, $id_resto, $path);
				$this->load->view('vue_items_info', $data);
			}
		
		}
/*=============================================================================================================*/

		public function page(){
			
			$this->load->view('vue_items');
		}

/*================================================================================================================*/
		public function info_items(){

			$id = $this->input->get('id');
			$data["info_items"] = $this->resto_dao->get_items($id);
			$this->load->view("vue_items_info", $data);

		}

/*===============================================================================================================*/		
		public function update_items(){

			/*En cours*/
		}
	}
?>
