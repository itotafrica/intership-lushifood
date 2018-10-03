<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function chat()[]
	{
		$this->load->view('chat');
	}
	public function login(){
		$this->load->view('login');
	}
	public function sign_up(){
		$this->load->view('sign_up');
	}
	public function map(){
		$this->load->view('map');
	}
	
	public function home()
	{
		$this->load->view('head_home');

		$this->load->view('head_caroussel');
		$this->load->view('body_home');
		$this->load->view('footer');
		
	}

}
