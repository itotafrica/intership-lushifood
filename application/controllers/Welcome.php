<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->load->view('index');
	}

	public function link_detail(){
		$this->load->view('product-detail');
	}

	public function link_about(){
		$this->load->view('about');
	}

	public function link_login(){
		$this->load->view('login');
	}
	
	public function link_restau(){
		$this->load->view('restaurant-page');
	}
	
	public function chat(){
		$this->load->view('chat');
	}

	public function message(){
		$this->load->model('messagerieModel');
		$message=$this->input->post('msg');
		$idclient=$this->input->post('idclient');
		$idresto=$this->input->post("idresto");
		//var_dump($message);die;
		$data["msg"]=$message;
		$data["id_client"]=$idclient;
		$data["id_rest"]=$idresto;
		$data["date_conv"]=date("y-m-d h:i:sa");
		$this->messagerieModel->insererConversation($data);
		$this->load->view('restaurant-page');
	}
}

?>