<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('panier');
	}
	public function pagedetailplat(){
		$this->load->view('product-detail');
	}
	public function pageabout(){
		$this->load->view('about');
	}
	public function pagelogin(){
		$this->load->view('login');
	}
	public function pagerestau(){
		$this->load->view('restaurant-page');
	}
}
