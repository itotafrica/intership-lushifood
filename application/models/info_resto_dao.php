<?php 
	class Info_resto_dao extends CI_Model{

		public function info_resto(){

			$requete = $this->db->query("SELECT * FROM restaurant");
			return $requete;
		}

		public function info_items(){

			$requete = $this->db->query("SELECT * FROM items");
			return $requete;
		}

		public function categorisation(){
			
			$requete = $this->db->query("SELECT * FROM categorieitem");
			return $requete;
		}
			
	}
?>
