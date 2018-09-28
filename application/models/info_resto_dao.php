<?php 
	class Info_resto_dao extends CI_Model{

		public function info_resto(){

			$requete = $this->db->select(Array('nom'))->WHERE('id',int($i))->get($this->nom_table);
			return $requete;
		}

		public function info_items(){

			$requete = $this->db->query("SELECT * FROM items");
			return $requete;
		}
		
	}
?>
