<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('messagerieModel');
	}
	
	public function index()
	{
		$this->load->view('geolocalisation');
	}

	public function link_detail()
	{
		$this->load->view('product-detail');
	}

	public function link_about()
	{
		$this->load->view('about');
	}
	public function link_login()
	{
		$this->load->view('login');
	}

	public function link_restau()
	{
		$this->load->view('restaurant-page');
	}

	public function chat()
	{
		$this->load->view('chat');
		//$dataMessage['message']="message";
		//$this->load->view('chat',$dataMessage);
	}

	public function message()
	{

		$message=$this->input->post('msg');
		$idclient=$this->input->post('idclient');
		$idresto=$this->input->post("idresto");
		$conversation=$this->messagerieModel->recupererConversation();
		foreach($conversation as $row)
		{
			$client=$row['id_client'];
			$resto=$row['id_rest'];
			$idconv=$row['id'];
			if(($idclient==$client) && ($idresto==$resto))
			{
				$data=array(
					"message"=>$message,
					"date_msg"=>date("y-m-d h:i:sa"),
					"id_conv"=>$idconv
				);
				$this->messagerieModel->insererMessage($data);
				$messageRecuperer=$this->messagerieModel->recupererMessage($idconv);
				$dataMessage['message']=$messageRecuperer;
				//$this->load->view('chat',$dataMessage);
				//var_dump($dataMessage);die;
			}
			else
			{
				$data["msg"]=$message;
				$data["id_client"]=$idclient;
				$data["id_rest"]=$idresto;
				$data["date_conv"]=date("y-m-d h:i:sa");
				$this->messagerieModel->insererConversation($data);
			}
		}
		//$this->load->view('restaurant-page');
	}
}

?>