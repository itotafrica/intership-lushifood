<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurant extends CI_Models{

	public function __construct(){
	
	parent :: __construct();
	
		$this->db->set("nom", $nom);

	}
	private function afficher_info_restau(){

		$query = $this->db->query("SELECT * FROM cotation_restau");

		foreach($query->$result() as $row){

			echo $row->id_cot_restau;
			echo $row->id_restau;
			echo $row->id_item;
			echo $row->nb_etoile;
			echo $row->id_client;
		}
			
		)
}

}