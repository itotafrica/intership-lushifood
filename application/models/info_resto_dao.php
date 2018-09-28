<?php 
	class Info_resto_dao extends CI_Model{

		private $table = "restaurant";

		public function info_resto($id){

			$requete = $this->db->select(Array('nom','adresse','phone','mail'))
								->WHERE('id',(int)$id)
								->get($this->table)
								->result();
			return $requete;
		}

		public function set_items(){

			
		}
	}
?>
